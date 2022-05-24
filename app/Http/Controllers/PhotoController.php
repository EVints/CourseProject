<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PhotoGallery;

class PhotoController extends Controller
{

    public function index()
    {
        $array = PhotoGallery::all()->reverse();
        return view('gallery', [
            "photo_gallery" => $array
        ]);
    }



    public function photoAdd(Request $request)
    {



        if(!$_FILES['photo_add']['name']) {
            return redirect('/gallery');
        }

     $gallery = new PhotoGallery();


        $fileTmpPath = $_FILES['photo_add']['tmp_name'];
        $fileName = $_FILES['photo_add']['name'];
        $fileNameCmps = explode(".", $fileName);
        $fileExtension = strtolower(end($fileNameCmps));

        $newFileName = md5(time() . $fileName) . '.' . $fileExtension;

        $uploadFileDir = 'images/gallery/';
        $dest_path = $uploadFileDir . $newFileName;
        // $allowedfileExtensions = array('jpg', 'jpeg', 'gif', 'png');

            move_uploaded_file($fileTmpPath, $dest_path);
            $gallery->photo = $dest_path;     
        

        
        $gallery->save();

        return redirect('/gallery');
    }
    
}
