<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\LogoutController;

//Para consumir API_REST
use Illuminate\Support\Facades\Http;


Route::controller(PageController::class)->group(function(){
    Route::get('/',            'home')->name('home');
    Route::get('/aboutus',            'aboutus')->name('aboutus');
    Route::get('/price',            'price')->name('price');
    Route::get('/articles',            'articles')->name('articles');
    Route::get('/contact',            'contact')->name('contact');  
    
});

//Ruta para detalle del post (articulo)
Route::get('article/{post:slug}', [Pagecontroller::class, 'article'])->name('article');

//Ruta para vista capacitacion
Route::get('/capacitacion', function () {
    return view('capacitacion');
})->name('capacitacion');

// Ruta para vista consultas
Route::get('/consulta', function () {

    $response = Http::get('https://www.datos.gov.co/resource/p6dx-8zbt.json');
    $data   =   $response->json();
    dd($data);

   // return view('consulta');
})->name('consulta');

/* Logout Controller */
Route::get('/logout', 'App\Http\Controllers\LogoutController@logout')->name('logout');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
