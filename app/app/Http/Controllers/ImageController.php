<?php

use Illuminate\Http\Request;
use App\Image;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class ImageController extends Controllers
{
    public function upload(Request $request)
    {
        $images = $request->images;
        $filenames = array();
        if (isset($images))
        {
            //$counter = 1;
            foreach($images as $image)
            {
                $filename = $image->store('files');
                $filenames[] = $filename;
                //$file = new Image;
                //$file->order_id = $order->id;
                //$file->filename = $filename;
                //$file->save();
                //$counter++;
            }
        }

        return $filenames;
    }
}
