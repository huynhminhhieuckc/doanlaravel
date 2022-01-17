<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;
use App\Http\Controllers\Admin\NhanvienController;
use App\Http\Controllers\Admin\SanPhamController;

Route::group(['prefix' => '/'], function () {
    Route::get('login', [Admin\LoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('login', [Admin\LoginController::class, 'login'])->name('admin.login.post');
    Route::get('logout', [Admin\LoginController::class, 'logout'])->name('admin.logout');
    Route::group(['middleware' => ['auth:admin']], function () {
        Route::get('/', function () {
            return view('admin.dashboard.index');
        })->name('admin.dashboard');
        Route::prefix('/nhanvien')->group(function () {
            Route::get('/', [NhanvienController::class, 'index'])->name('admin.nhanvien');
            Route::get('/create', [NhanvienController::class, 'create'])->name('admin.nhanvien.add');
            Route::post('/create', [NhanvienController::class, 'store'])->name('admin.nhanvien.store');
            Route::get('/update/{id}', [NhanvienController::class, 'edit'])->name('admin.nhanvien.edit');
            Route::put('/update/{id}', [NhanvienController::class, 'update'])->name('admin.nhanvien.update');
            Route::get('/delete/{id}', [NhanvienController::class, 'destroy'])->name('admin.nhanvien.delete');
        });
        Route::prefix('/sanpham')->group(function () {
            Route::get('/', [SanphamController::class, 'index'])->name('admin.sanpham');
            Route::get('/create', [SanphamController::class, 'create'])->name('admin.sanpham.add');
            Route::post('/create', [SanphamController::class, 'store'])->name('admin.sanpham.store');
            Route::get('/update/{id}', [SanphamController::class, 'edit'])->name('admin.sanpham.edit');
            Route::put('/update/{id}', [SanphamController::class, 'update'])->name('admin.sanpham.update');
            Route::get('/delete/{id}', [SanphamController::class, 'destroy'])->name('admin.sanpham.delete');
        });
    });
});
