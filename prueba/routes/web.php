<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request; // se una para solicitudes y requerimiento

/**Route::get('/', [PageController::class,'home'])->name('home');

Route::get('blog',[PageController::class,'blog'])->name('blog');;

Route::get('blog/{slug}', function ($slug) { //todo lo que escriban se renderiza en pantalla
    return $slug;
});
*/

Route::get('buscar', function ( Request $request) { //para realizar un requerimiento envisriamos un json /buscar?query=hola
    return $request -> all();
});
Route::controller(PageController::class)->group (function(){

    Route::get('/','home')->name('home');

Route::get('blog','blog')->name('blog');

Route::get('poster','poster')->name('poster');

});
