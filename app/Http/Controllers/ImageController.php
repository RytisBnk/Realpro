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
            $timeOfDay = gettimeofday();
            $identifier = date("Y-m-d") . '_' . $timeOfDay['usec'];
            if ($request->session()->has('identifiers')) {
                $request->session()->push('identifiers', $identifier);
            } 
            else {
                $indentifiers = array();
                $identifiers[] = $identifier;
                session(['identifiers' => $identifiers]);
            }
            
            foreach ($images as $file) 
            {
                $extension = $file->getClientOriginalExtension();
                $filename = "temp_" . $identifier . '_' . $counter . '.' . $extension;
                $fullpath = $file->storeAs($this->storagePath, $filename);
                $counter++;

                $dbEntry = new Image;
                $dbEntry->filename = $fullpath;
                $dbEntry->save();
            }
        }

        return 'Successful upload';
    }

    public function retrieve($filename)
    {
        $path = storage_path('app/files/' . $filename);

        return InterventionImage::make($path)->response();
    }
}
