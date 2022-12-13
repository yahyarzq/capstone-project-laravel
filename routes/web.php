<?php

use App\Http\Controllers\UsulanController;
use App\Http\Controllers\UsulansipdController;
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

Route::get('/dashboard', function () {
    return view('dashboard/index');
});
Route::resource('/dashboard/import-usulan',UsulansipdController::class );

Route::post('/dashboard/import-usulan',[UsulanController::class,'import']);
Route::get('/dashboard/usulan-fisik',[UsulanController::class,'groupByFisik']);
Route::get('/dashboard/usulan-non-fisik',[UsulanController::class,'groupByNonFisik']);
Route::get('/dashboard/history-usulan',[UsulanController::class,'history']);
