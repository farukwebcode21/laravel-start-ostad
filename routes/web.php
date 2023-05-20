<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\DemoController;
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
// Route::get("/test/{name}", [TestController::class, 'TestAction']);

Route::resource('orders', WhateverController::class);
