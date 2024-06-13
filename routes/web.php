<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\DepartemenController;

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
    return view('homepage');
});

Route::get('main',[LayoutController::class,'index'])->middleware('auth');
Route::get('home',[LayoutController::class,'index'])->middleware('auth');

Route::controller(LoginController::class)->group(function(){
    Route::get('login','index')->name('login');
    Route::post('login/proses', 'proses');
    Route::get('logout','logout');
});

Route::group(['middleware' => ['auth']], function(){
    Route::group(['middleware' => ['cekUserLogin:1']],function(){
        Route::get('karyawan', [KaryawanController::class,'index'])->name('karyawan');
        Route::get('karyawan/create', [KaryawanController::class,'create']);
        Route::post('karyawan/store', [KaryawanController::class,'store']);
        Route::get('karyawan/{id}/edit', [KaryawanController::class,'edit'])->name('editkaryawan');
        Route::put('karyawan/{id}', [KaryawanController::class,'update']);
        Route::delete('karyawan/{id}', [KaryawanController::class,'destroy'])->name('karyawan.destroy');

        Route::get('departemen', [DepartemenController::class,'index'])->name('departemen');
        Route::get('departemen/create', [DepartemenController::class,'create']);
        Route::post('departemen/store', [DepartemenController::class,'store']);
        Route::get('departemen/{id}/edit', [DepartemenController::class,'edit'])->name('editdepartemen');
        Route::put('departemen/{id}', [DepartemenController::class,'update']);
        Route::delete('departemen/{id}', [DepartemenController::class,'destroy'])->name('departemen.destroy');
    });
});
