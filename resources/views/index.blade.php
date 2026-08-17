@extends('layout')

@section('title', 'หน้าแรกของเว็บไซต์')

@section('content')
    <div style="text-align: center; padding: 2rem 1rem;">
        <h1 style="font-size: 2.5rem; margin-bottom: 1.5rem; background: linear-gradient(135deg, var(--primary-hover), #6366f1); -webkit-background-clip: text; -webkit-text-fill-color: transparent; font-weight: 700;">
            ยินดีต้อนรับสู่เว็บไซต์ของฉัน 🌸
        </h1>
        <p style="max-width: 650px; margin: 0 auto 2rem; font-size: 1.1rem; color: var(--text-muted); line-height: 1.8;">
            สวัสดีค่ะ! ยินดีต้อนรับเข้าสู่พอร์ตโฟลิโอและเว็บไซต์บทความของ **หทัยภัทร ภักดีแก้ว** 
            นักศึกษาคณะบริหารธุรกิจ สาขาระบบสารสนเทศ 
        </p>
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
            <a href="/student/68152310265-1" class="btn btn-primary">ดูประวัตินักศึกษา</a>
            <a href="{{ route('abouts') }}" class="btn btn-secondary">ทำความรู้จักกัน</a>
        </div>
    </div>
@endsection

