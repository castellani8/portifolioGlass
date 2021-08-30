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

Route::get('/', [\App\Http\Controllers\SiteController::class, 'index'])->name('index');
Route::get('/quemSomos', [\App\Http\Controllers\SiteController::class, 'quemSomos'])->name('quemSomos');
Route::get('/faleConosco', [\App\Http\Controllers\SiteController::class, 'faleConosco'])->name('faleConosco');
Route::get('/projetos', [\App\Http\Controllers\SiteController::class, 'projetos'])->name('projetos');

Route::get('/login', [App\Http\Controllers\HomeController::class, 'index'])->name('login');

Route::group(['middleware' => 'auth'], function() {

});

Auth::routes();

