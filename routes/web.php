<?php

use App\Http\Controllers\AssingmentController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\DemoTestController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\WhateverController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */

Route::get( '/', function () {
    return view( 'welcome' );
} );

// Normal Route
Route::get( "/hello", [HelloController::class, 'hello'] );


// Route::get( '/books', [BookController::class, 'Books'] );
// Route::get( '/books/{id}', [BookController::class, 'getBooks'] );
// Route::get( '/books/{id}/{field}', [BookController::class, 'getBookField'] );
Route::get("/test/{name}/{age}", [TestController::class, 'TestAction']);


// route group
Route::controller( BookController::class )->group( function () {
    Route::get( '/books', 'books' );
    Route::get( '/books/{id}', 'getBooks' );
    Route::get( '/books/{id}/{field}', 'getBookField' );

    Route::post('/books', 'createBook');
} );

Route::post("/demo", [DemoController::class, 'DemoAction']);

Route::post("/test", [TestController::class, 'TestActions']);
// Route::post('/name', [DemoTestController::class, 'store']);
// Route::get("/test/{name}", [TestController::class, 'TestAction']);

Route::resource('orders', WhateverController::class);

// assingment ostad requirement
 Route::post('/username', [AssingmentController::class, 'user']);
 Route::post('/username', [AssingmentController::class, 'userAgent']);

// assingment route 

// Route::get('/DemoFunction', [AssingmentController::class, 'DemoFunction']);
// Route::get('/DemoFunction/{name}/{age}', [AssingmentController::class, 'DemoFunction']);
// Route::post('/DemoFunction', [AssingmentController::class, 'DemoFunction']);

// Assingment Route Description

Route::post('/name', [AssingmentController::class, 'postUserName']);
Route::post('/name', [AssingmentController::class, 'postHeader']);