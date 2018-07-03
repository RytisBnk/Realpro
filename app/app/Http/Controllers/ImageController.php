<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Image;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class ImageController extends Controller
{
    public function upload(Request $request)
    {
        $images = $request->images;
        if (isset($images))
        {
            //$counter = 1;
                $filename = $images->store('files');
                $filenames = $filename;
                //$file = new Image;
                //$file->order_id = $order->id;
                //$file->filename = $filename;
                //$file->save();
                //$counter++;
            }

        return 'Successful upload';
    }
}
