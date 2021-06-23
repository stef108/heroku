<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormPageController;

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

Route::get('/500', function () {
    return abort(500);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/formPage', function () {
    return view('/form_pages/create');
})->middleware(['auth'])->name('formPage');

Route::resource('form_pages', \App\Http\Controllers\FormPageController::class)->middleware(['auth']);

require __DIR__.'/auth.php';
