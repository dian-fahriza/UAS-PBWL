<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/categories', [App\Http\Controllers\CategoryController::class, 'index']);
Route::get('/categories/create', [App\Http\Controllers\CategoryController::class, 'create']);
Route::post('/categories', [App\Http\Controllers\CategoryController::class, 'store']);
Route::get('/categories/edit/{id}', [App\Http\Controllers\CategoryController::class, 'edit']);
Route::patch('/categories/{id}', [App\Http\Controllers\CategoryController::class, 'update']);
Route::delete('/categories/{id}', [App\Http\Controllers\CategoryController::class, 'destroy']);

Route::get('/transaksi', [App\Http\Controllers\TransaksiController::class, 'index']);
Route::get('/transaksi/create', [App\Http\Controllers\TransaksiController::class, 'create']);
Route::post('/transaksi', [App\Http\Controllers\TransaksiController::class, 'store']);
Route::get('/transaksi/edit/{id}', [App\Http\Controllers\TransaksiController::class, 'edit']);
Route::patch('/transaksi/{id}', [App\Http\Controllers\TransaksiController::class, 'update']);
Route::delete('/transaksi/{id}', [App\Http\Controllers\TransaksiController::class, 'destroy']);


// routes/web.php

use App\Http\Controllers\LaporanPengeluaranController;

Route::get('/laporan_pengeluaran', [LaporanPengeluaranController::class, 'index']);
Route::get('/laporan_pengeluaran/create', [LaporanPengeluaranController::class, 'create']);
Route::post('/laporan_pengeluaran', [LaporanPengeluaranController::class, 'store']);
Route::get('/laporan_pengeluaran/edit/{id}', [LaporanPengeluaranController::class, 'edit']);
Route::patch('/laporan_pengeluaran/{id}', [LaporanPengeluaranController::class, 'update']);
Route::delete('/laporan_pengeluaran/{id}', [LaporanPengeluaranController::class, 'destroy']);
