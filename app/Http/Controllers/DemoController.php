<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    function DemoAction(Request $request):bool{
        // return $request->header("auth-token");

        // $photo = $request->file('photo');
        // $photo->move(public_path('upload'),$photo->getClientOriginalName());
        // return $photo;

        // $size = filesize($photo);
        // $type = filetype($photo);
        // $OrginalName = $photo->getClientOriginalName();
        // $extension = $photo->extension();
        // return [$size, $type, $OrginalName, $extension, ];

        // return $request->ip();
        $photoFile =$request->file('photo');

        return true;

       
    }
}
