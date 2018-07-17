<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UploadSubmissionRequest;
use App\Image;
use Intervention\Image\Facades\Image as InterventionImage;
use Auth;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class ImageController extends Controller
{
    private $storagePath = 'files';

    public function upload(UploadSubmissionRequest $request)
    {
        $images = $request->images;
        if (isset($images))
        {
            $counter = 1;
            foreach ($images as $file)
            {
                $extension = $file->getClientOriginalExtension();
                $filename = Auth::id() . '_' . $counter . '.' . $extension;
                $fullpath = $file->storeAs($this->storagePath, $filename);
                $counter++;

                $dbEntry = new Image;
                $dbEntry->user_id = Auth::id();
                $dbEntry->filename = $fullpath;
                $dbEntry->save();
            }
        }

        return 'Successful upload';
    }

    public function retrieve($filename = "2_1.jpg")
    {
        $path = storage_path('app/files/' . $filename);

        return InterventionImage::make($path)->response();
    }
}
