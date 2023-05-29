<?php

//pangggil controller

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontedController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//bikin routing untuk dashboard

Route::get('/dashboard', [DashboardController::class, 'index']);
//bikin routing untuk produk

Route::get('/produk', [ProdukController::class, 'index']);
// bikin routing frontend
Route::get('/Fronted', [FrontedController::class, 'index']);
// bikin routing untuk produk pake kontroler
Route::get('/produk', [ProdukController::class, 'index'])->name('produk');