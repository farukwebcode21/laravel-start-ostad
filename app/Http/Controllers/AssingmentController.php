<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class AssingmentController extends Controller
{
    
    //WORKING WITH SIMPLE REQUEST  

    // function DemoFunction():string{
    //     return 'This is my first controller action';
    // }

    //  REQUEST URL PARAMETER
    
    function postUserName(Request $request):string{
        $name = $request->input('name');
        return $name;
        
    }
    function postHeader(Request $request):string{
        $userAgent = $request->header('name');
        return $userAgent;
      
    }

    function getPage(Request $request){
        $page = $request->query()
    }

    //  REQUEST JSON BODY

    // function DemoFunction(Request $request):string{
    //     $name = $request->input('name');
    //     $age = $request->input('age');
    //     return "Name is = {$name}, age is ={$age}";
    // }

    // REQUEST HEADER

    // function DemoFunction(Request $request):string{
    //     $name = $request->header('name');
    //     $age = $request->header('age');
    //     return "Name is header ={$name}, age is ={$age}";
    // }

    // HEADER BODY & QUERY PROPERTIRES

   
}
