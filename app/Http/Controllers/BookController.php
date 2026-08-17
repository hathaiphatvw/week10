<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = [
            [
                'id' => 1,
                'title' => 'Laravel เบื้องต้น',
                'author' => 'สมชาย ใจดี',
                'price' => 250,
                'category' => 'Programming'
            ],
            [
                'id' => 2,
                'title' => 'การพัฒนาเว็บไซต์',
                'author' => 'สมหญิง รักเรียน',
                'price' => 320,
                'category' => 'Web Development'
            ],
            [
                'id' => 3,
                'title' => 'PHP และ MySQL',
                'author' => 'วิชัย นักพัฒนา',
                'price' => 280,
                'category' => 'Programming'
            ],
        ];

        return view('books.index', compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }
}