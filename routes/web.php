<?php

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

Route::prefix('customer')->group(function (){
    Route::get('index', function (){
        return view('modules.customer.index');
    });
    Route::get('create', function (){

    })->name('create');
    Route::post('store', function (){

    })->name('store');
    Route::get('{id}/show', function (){

    })->name('show');
    Route::get('{id}/edit', function (){

    })->name('edit');
    Route::patch('{id}/update', function (){

    })->name('updete');
    Route::delete('{id}', function (){

    })->name('delete');

});

