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
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' =>[
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'This job smells like your moms farts after she ate two bowls of chili and drank a glass of milk being mildly lactose intolerant. But we pay well. Enough that you will barely be scraping by but we give pizza every 6 months to show that we at least pretend to care. We are a family. Mostly disfunctional but a family none the less and we will rub you the wrong wat on purpose because we can. Apply within. Good day'
            ],            
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'This job smells like your moms farts after she ate two bowls of chili and drank a glass of milk being mildly lactose intolerant. But we pay well. Enough that you will barely be scraping by but we give pizza every 6 months to show that we at least pretend to care. We are a family. Mostly disfunctional but a family none the less and we will rub you the wrong wat on purpose because we can. Apply within. Good day'
            ]
            
        
            ]
    ]);
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