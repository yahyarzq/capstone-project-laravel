<?php

use App\Http\Controllers\ExcelController;
use App\Imports\UsulanImport;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;

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
// Route::get('/excel', function () {
//     $path = 'C:/laragon/www/capstone-project-laravel/usulan.xlsx';
//     $arr = Excel::toCollection(new UsulanImport, $path);
//     return view('excel',[
//         'data'=> $arr
//     ]);
// });
Route::get('/excel', function () {
    return view('excel');
});
Route::post('/excel/store',[ExcelController::class,'store']);
