<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsulanController;
use App\Http\Controllers\UsulansipdController;
use App\Models\Usulansipd;
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

// Redirect from / to /dashboard
Route::get('/', function (){
    return redirect('/dashboard');
});
Route::get('/home', function (){
    return redirect('/dashboard');
});


Route::get('/login',[LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class,'authenticate']);
Route::post('/logout',[LoginController::class,'logout']);

// Route::resource('/dashboard/import-usulan',UsulansipdController::class )->middleware('auth');
// Route::get('/dashboard/import-usulan',[UsulansipdController::class,'index'])->middleware('auth');
Route::post('/dashboard/import-usulan',[UsulansipdController::class,'import']);


Route::get('/dashboard', [UsulanController::class,'index'])->middleware('auth');
Route::get('/dashboard/usulan',[UsulanController::class,'usulan'])->middleware('auth');
Route::get('/dashboard/history-usulan',[UsulanController::class,'history'])->middleware('auth');

// Route::post('/usulan',[UsulanController::class,'store']);
Route::resource('/usulan',UsulanController::class);
