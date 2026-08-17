<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\DB;


use App\Http\Controllers\BookController;

Route::get('/books', [BookController::class, 'index'])
    ->name('books.index');

Route::get('/books/create', [BookController::class, 'create'])
    ->name('books.create');
    
Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/form', function () {
    return view('form');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/blogs', function () {
    $blogs = [
        [
            'title' => 'บทความที่ 1',
            'content' => 'เนื้อหาบทความที่ 1',
            'status' =>true
        ],
        [
            'title' => 'บทความที่ 2',
            'content' => 'เนื้อหาบทความที่ 2',
            'status' =>true
        ],
        [
            'title' => 'บทความที่ 3',
            'content' => 'เนื้อหาบทความที่ 3',
            'status' =>false
        ]
    ];
    return view('blogs',compact('blogs'));
})->name('blogs');

Route::get('/abouts', function () {
    $name = 'Hathaiphat Phakdeekaew';
    $date = '6 กรกฎาคม 2026';

    return view('abouts',compact('name','date'));
})->name('abouts');

Route::get('/student/{id}', function ($id) {
    return view('student', ['id' => $id]);
})->name('student.profile');

Route::fallback(function () {
    return 'ไม่พบหน้าเว็บ';
});

Route::get('/abouts', [AdminController::class, 'abouts'])->name('abouts');
Route::get('/blogs', [AdminController::class, 'blogs'])->name('blogs');
Route::get('/create', [AdminController::class, 'create'])->name('create');
Route::get('/form', [AdminController::class, 'form'])->name('form');
Route::post('/insert', [AdminController::class, 'insert']);

Route::get('/test-db', function () {
    try {
        DB::connection()->getPdo();
        return "เชื่อมต่อฐานข้อมูลสำเร็จ! Database name: " . DB::connection()->getDatabaseName();
    } catch (\Exception $e) {
        return "ไม่สามารถเชื่อมต่อฐานข้อมูลได้: " . $e->getMessage();
    }
});

Route::get('/delete/{id}', [AdminController::class, 'delete'])->name('delete');