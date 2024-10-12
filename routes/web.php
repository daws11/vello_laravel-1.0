<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserServiceController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuizResponseController;

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('kebijakan-privasi', function () 
{
    return view('privacy');
})->name('kebijakan-privasi');

Route::post('/submit-quiz', [QuizResponseController::class, 'store'])->name('submit.quiz');

Route::get('/services', [ServiceController::class, 'showQuiz'])->name('services');


//blog route

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');


Route::prefix('blog/admin')->name('admin.')->group(function () {
    Route::get('/index', [BlogController::class, 'adminIndex'])->name('index'); // Daftar blog di admin
    Route::get('/create', [BlogController::class, 'create'])->name('create'); // Form tambah blog
    Route::post('/store', [BlogController::class, 'store'])->name('store'); // Simpan blog baru
    Route::get('/edit/{blog}', [BlogController::class, 'edit'])->name('edit'); // Form edit blog
    Route::put('/update/{blog}', [BlogController::class, 'update'])->name('update'); // Update blog
    Route::delete('/delete/{blog}', [BlogController::class, 'destroy'])->name('destroy'); // Hapus blog
});


