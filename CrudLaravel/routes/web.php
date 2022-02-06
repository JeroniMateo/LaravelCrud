<?php

use App\Http\Controllers\ContactosController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});


Route::resource('contactos', ContactosController::class)->middleware(['auth']);
Route::get('/404', function(){
    return view('errors.404');
});

Route::get('/403', function(){
    return view('errors.403');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
