<?php

namespace App\Http\Controllers;

use Dotenv\Util\Str;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class TestController extends Controller
{
    function TestAction(Request $request):string{
        // $name = $request->name;
        // $age =$request->age;
        // return "Name is {$name}, age is = {$age}";
        return "Welcome api route";

    }

    
    function TestActions(Request $request){
        $name = $request->input('name');
        $age = $request->input('age');
        return "Name is {$name}, age is = {$age}";
    }
}
