<?php

use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('welcome');
});

/*
Route displays the uri youtubepro.test/hello
response allows html and php to exist together
->header shows content type as text/plain 

Route::get('/hello', function() {
    return response('<h1>Hello World</h1>')
        ->header('Content-Type', 'text/plain');
});


Working with a wildcard {id} is the wildcard.
->Where is constraining what is allowed in the id

Route::get('/posts/{id}', function($id){
    return response('Post ' . $id);
})->where('id', '[0-9]+');


Request is a html class that needed imported.
You can return queries directly with the $request id

Route::get('/search', function(Request $request)  {
    return $request->name . ' ' . $request->city;
});*/