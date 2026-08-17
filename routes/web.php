<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\DB;

// หน้าแรกและหน้าทั่วไป
Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/student/{id}', function ($id) {
    return view('student', ['id' => $id]);
})->name('student.profile');

// การจัดการ Books
Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::get('/books/create', [BookController::class, 'create'])->name('books.create');

// การจัดการ Blogs & Admin
Route::get('/abouts', [AdminController::class, 'abouts'])->name('abouts');
Route::get('/blogs', [AdminController::class, 'blogs'])->name('blogs');
Route::get('/create', [AdminController::class, 'create'])->name('create');
Route::post('/insert', [AdminController::class, 'insert'])->name('insert');
Route::get('/change/{id}', [AdminController::class, 'change'])->name('change');
Route::get('/edit/{id}', [AdminController::class, 'edit'])->name('edit');
Route::match(['post', 'put'], '/update/{id}', [AdminController::class, 'update'])->name('update');
Route::get('/delete/{id}', [AdminController::class, 'delete'])->name('delete');

// ทดสอบเชื่อมต่อฐานข้อมูล
Route::get('/test-db', function () {
    try {
        DB::connection()->getPdo();
        return "เชื่อมต่อฐานข้อมูลสำเร็จ! Database name: " . DB::connection()->getDatabaseName();
    } catch (\Exception $e) {
        return "ไม่สามารถเชื่อมต่อฐานข้อมูลได้: " . $e->getMessage();
    }
});

// Fallback Route (ต้องอยู่ล่างสุดเสมอ)
Route::fallback(function () {
    return 'ไม่พบหน้าเว็บ';
});