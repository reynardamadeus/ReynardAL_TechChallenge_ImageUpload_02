<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImagesController;


Route::controller(ImagesController::class)->group(function (){
    Route::get('/', 'show')->name('show');
    Route::get('/create', 'create')->name('create');
    Route::post('/store-image', 'store')->name('store');
    Route::delete('/delete/{id}', 'delete')->name('delete');
});

