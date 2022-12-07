<?php

use App\Http\Controllers\UsulanController;
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
    return view('dashboard');
});
Route::get('/import-usulan', function () {
    return view('import_usulan');
});
Route::post('/import-usulan',[UsulanController::class,'import']);
Route::get('/usulan-fisik',[UsulanController::class,'groupByFisik']);
Route::get('/usulan-non-fisik',[UsulanController::class,'groupByNonFisik']);
Route::get('/history-usulan',[UsulanController::class,'history']);
