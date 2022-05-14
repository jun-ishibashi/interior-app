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

Route::name('post.')
    ->group(function() {
        Route::get('/', 'App\Http\Controllers\PostController@index')->name('index');
        Route::get('/post/{id}', 'App\Http\Controllers\PostController@show')->name('show');
        
    });
    
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
