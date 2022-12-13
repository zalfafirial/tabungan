<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TabunganController;

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


Route::get('/', [TabunganController::class, 'index'])->name('index');
Route::post('/store', [TabunganController::class, 'store'])->name('store');
Route::get('/indexEditTabungan/{id}', [TabunganController::class, 'indexEditTabungan'])->name('indexEditTabungan');
Route::post('/updateTabungan/{id}', [TabunganController::class, 'updateTabungan'])->name('updateTabungan');
Route::post('/deleteTabungan/{id}', [TabunganController::class, 'deleteTabungan'])->name('deleteTabungan');

