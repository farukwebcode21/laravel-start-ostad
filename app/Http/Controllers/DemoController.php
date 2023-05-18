<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    function DemoAction(Request $request){
        // return $request->header("auth-token");
        $myFile = $request->file('photo');
        $size = filesize($myFile);
        return $size;
       
    }
}
