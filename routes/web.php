<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\HelloController;
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

// route group
Route::controller( BookController::class )->group( function () {
    Route::get( '/books', 'books' );
    Route::get( '/books/{id}', 'getBooks' );
    Route::get( '/books/{id}/{field}', 'getBookField' );

    Route::post('/books', 'createBook');
} );

Route::get("/demo", [DemoController::class, 'DemoAction']);
