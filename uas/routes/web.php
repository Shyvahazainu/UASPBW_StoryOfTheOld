<?php

use Illuminate\Support\Facades\Route;
use \app\Http\Controllers\WebController
;


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

Route::get('/web', function () {
    return view('index');
});

Route::get('/foreign', function () {
    return view('foreign');
});

Route::get('/lokal', function () {
    return view('lokal');
});

Route::get('/tampilcerita', [WebController::class, 'readdata']);
Route::get('/tambahcerita', [WebController::class, 'input']);
Route::post('/foreign/store', [WebController::class, 'store']);
Route::get('/foreign/update', [WebController::class, 'update']);
Route::get('/foreign/hapus/{judul}', [WebController::class, 'hapus']);

