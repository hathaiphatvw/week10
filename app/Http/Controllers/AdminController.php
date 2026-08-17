<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    // แสดงรายการบทความทั้งหมด
    public function blogs()
    {
        $blogs = DB::table('blogs')->get();

        return view('blogs', compact('blogs'));
    }

    // แสดงหน้า About
    public function abouts()
    {
        $name = 'Hathaiphat Pakdeekaew';
        $date = '6 กรกฎาคม 2026';

        return view('abouts', compact('name', 'date'));
    }

    // แสดงฟอร์มเพิ่มบทความ
    public function create()
    {
        return view('form');
    }
    

    // บันทึกบทความใหม่
    public function insert(Request $request)
    {
        $request->validate([
            'title' => 'required|min:3',
            'content' => 'required',
        ], [
            'title.required' => 'กรุณากรอกชื่อบทความ',
            'title.min' => 'ชื่อบทความต้องไม่ต่ำกว่า 3 ตัวอักษร',
            'content.required' => 'กรุณากรอกเนื้อหาบทความ',
        ]);

        $data = [
            'title' => $request->title,
            'content' => $request->content,
            'status' => 1,
        ];

        DB::table('blogs')->insert($data);

        return redirect('/blogs');
    }

    // ลบบทความตาม ID
    public function delete($id)
    {
       function delete($id)
{
    DB::table("blogs")->where('id', $id)->delete();
    return redirect('/blog');
}
    }
}

