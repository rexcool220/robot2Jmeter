<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class UploadController extends Controller
{
    public function uploadFile()
    {
        return view('uploadFile');
    }
    public function processFile(Request $request)
    {
        $file = Input::file('uploadFile');
        $extension = $file->getClientOriginalExtension();
        $file_name = strval(time()).str_random(5).'.'.$extension;

        $destination_path = public_path().'/upload/';

        if (Input::hasFile('uploadFile')) {
            $upload_success = $file->move($destination_path, $file_name);
            $result = "pass";
        } else {
            $result = "false";
        }
        chdir('C:\launchJmeter');
        exec("C:\\launchJmeter\\lauchJmeter.exe");
        return $result;
    }

}
