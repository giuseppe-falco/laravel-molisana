<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/laravel', function () {
    return view('welcome');
});

// route home
Route::get('/', function () {
        
    $data = config('pasta');

    $paste = [];
    
    foreach($data as $key => $prodotto){
        $prodotto["id"] = $key;
        $paste[$prodotto["tipo"]][] = $prodotto;
    }
    return view('home', $paste);
})->name('home');

// route prodotti
Route::get('/prodotti', function () {

    $data = config('pasta');

    $paste = [];
    
    foreach($data as $key => $prodotto){
        $prodotto["id"] = $key;
        $paste[$prodotto["tipo"]][] = $prodotto;
    }

    return view('prodotti', ["paste" => $paste]);
})->name('prodotti');

// route news
Route::get('/news', function () {
    return view('news');
})->name('news');

// route prodotto singolo
Route::get('/prodotti/show/{id}', function ($id) {

    $prodotto = config("pasta.$id");
    
    if ($prodotto == null){
        abort(404);
    };

    $length = count(config("pasta"));


    return view('productsingle', [
        "data" => $prodotto, 
        "id" => $id,
        "length" => $length,
    ]);
})->name('prodotto-singolo')->where('id', '[0-9]+');

// route redirect
Route::get('/prodotti/show/all', function () {
    return redirect('/prodotti');
});