<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserServiceController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('kebijakan-privasi', function () 
{
    return view('privacy');
})->name('kebijakan-privasi');



//service route
Route::get('/services', function () {
    return view('services');
})->name('services');
Route::get('/services', [ServiceController::class, 'index'])->name('services');
Route::get('/service-data/{serviceId}', [ServiceController::class, 'getServiceData'])->name('service.data');
Route::post('/save-user-data', [UserServiceController::class, 'saveUserData']);
Route::get('/service/detail', [ServiceController::class, 'detail'])->name('service.detail');
Route::get('/service/customer-form', [ServiceController::class, 'loadCustomerForm']);

//blog route
// Rute untuk halaman frontend blog
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

// Rute untuk halaman admin blog (CRUD)
Route::prefix('blog/admin')->name('admin.')->group(function () {
    Route::get('/index', [BlogController::class, 'adminIndex'])->name('index'); // Daftar blog di admin
    Route::get('/create', [BlogController::class, 'create'])->name('create'); // Form tambah blog
    Route::post('/store', [BlogController::class, 'store'])->name('store'); // Simpan blog baru
    Route::get('/edit/{blog}', [BlogController::class, 'edit'])->name('edit'); // Form edit blog
    Route::put('/update/{blog}', [BlogController::class, 'update'])->name('update'); // Update blog
    Route::delete('/delete/{blog}', [BlogController::class, 'destroy'])->name('destroy'); // Hapus blog
});


