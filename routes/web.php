<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\StorageController;
use App\Http\Controllers\RequestController;

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


Route::get('/hello', [HelloController::class, 'index']);
Route::get('/configtest', [ConfigController::class, 'index']);
Route::get('/storagetest', [StorageController::class, 'index']);
Route::get('/storagetest/{msg}', [StorageController::class, 'other']);

Route::get('/requesttest', [RequestController::class, 'index']);