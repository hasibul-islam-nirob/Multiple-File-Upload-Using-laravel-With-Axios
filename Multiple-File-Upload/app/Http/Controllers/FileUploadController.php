<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    function onUpload(Request $req){
        $req->file('myFileKey')->store('myFiles');
    }
}
