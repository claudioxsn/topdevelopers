<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\web\DeveloperController;
use App\Http\Controllers\web\UserController;
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


Route::post('/user', [UserController::class, 'store'])->name('user.store')->middleware('auth');
Route::get('/user', [UserController::class, 'index'])->name('user.index')->middleware('auth');
Route::get('/user/create', [UserController::class, 'create'])->name('user.create')->middleware('auth');
Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit')->middleware('auth');
Route::get('/user/delete/{id}', [UserController::class, 'delete'])->name('user.delete')->middleware('auth');
Route::put('/user/update', [UserController::class, 'update'])->name('user.update')->middleware('auth');
Route::get('meusdados', [UserController::class, 'meusDados'])->name('user.meusdados')->middleware('auth');


Route::get('/developers', [DeveloperController::class, 'index'])->name('developers.index')->middleware('auth');
Route::get('/developers/search', [DeveloperController::class, 'getDevelopers'])->name('developers.search')->middleware('auth');


Route::get('logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::get('/', [LoginController::class, 'showLoginForm'])->name('showLoginForm');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/migrate', function () {
    Artisan::call('migrate'); 
});
Route::get('/seed', function () {
    Artisan::call('db:seed --class=UserSeed');
});
