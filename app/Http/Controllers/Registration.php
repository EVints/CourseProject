<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\Registration as RegistrationRequests;

class Registration extends Controller
{
    //
    public function index()
    {
        return view('reg_form.registration');
    }

    public function registration(RegistrationRequests $request)
    {

        $user = new User();

        $user->name = $request->request->get('name');
        $user->email = $request->request->get('email');
        $user->password = User::hashPassword($request->request->get('password'));
        $user->sex = $request->request->get('sex');



        //select user Avatar. Default or not

        $fileTmpPath = $_FILES['user_avatar']['tmp_name'];
        $fileName = $_FILES['user_avatar']['name'];
        $fileNameCmps = explode(".", $fileName);
        $fileExtension = strtolower(end($fileNameCmps));

        $newFileName = md5(time() . $fileName) . '.' . $fileExtension;

        $uploadFileDir = 'images/avatars/';
        $dest_path = $uploadFileDir . $newFileName;
        $allowedfileExtensions = array('jpg', 'jpeg', 'gif', 'png');

        if (isset($_FILES['user_avatar']) && in_array($fileExtension, $allowedfileExtensions)) {
            move_uploaded_file($fileTmpPath, $dest_path);

            $user->user_avatar = $dest_path;     //Set user Avatar
        } else {

            // Set Default Avatar

            if ($request->request->get('sex') == "M") {
                $user->user_avatar = "images/default/ava_m.jpeg";
            } elseif ($request->request->get('sex') == "F") {
                $user->user_avatar = "images/default/ava_f.jpeg";
            } else {
                $user->user_avatar = "images/default/ava_nn.jpeg";
            }
        }

        $user->user_birthday = $request->request->get('user_birthday');

        $user->save();

        return redirect('/login');
    }
}
