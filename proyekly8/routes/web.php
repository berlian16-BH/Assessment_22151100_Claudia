<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatabarangController;

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
    return view('tambahDatabarang');
});

Route::get('/databarang', [DatabarangController::class, 'index'])->name('databarang');
Route::get('/tambahDatabarang', [DatabarangController::class, 'tambahDatabarang'])->name('tambahDatabarang');
Route::post('/insertdata', [DatabarangController::class, 'insertdata'])->name('insertdata');
Route::get('/editdatabarang/{id}', [DatabarangController::class, 'editdatabarang'])->name('editdatabarang');
Route::post('/updatedatabarang/{id}', [DatabarangController::class, 'updatedatabarang'])->name('updatedatabarang');
Route::post('/deletedatabarang/{id}', [DatabarangController::class, 'deletedatabarang'])->name('deletedatabarang');
