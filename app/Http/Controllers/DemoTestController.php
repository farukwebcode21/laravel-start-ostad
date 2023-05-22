<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoTestController extends Controller
{
    function store(Request $request):string{
        $name = $request->input('name');
        return $name;
    }
}
