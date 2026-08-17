<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>รายการบทความ - Hathaiphat</title>

    <!-- Google Fonts & Bootstrap CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Prompt:wght@300;400;500;600;700&family=Sarabun:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        :root {
            --primary-pink: #ff758f;
            --primary-hover: #ff4d6d;
            --bg-gradient: linear-gradient(135deg, #fff0f3 0%, #ffccd5 100%);
            --card-bg: rgba(255, 255, 255, 0.98);
            --text-main: #4a3e43;
            --text-muted: #a38f97;
            --border-color: #ffe5ec;
            --input-bg: #fffafb;
        }

        body {
            font-family: 'Prompt', 'Inter', 'Sarabun', sans-serif;
            background: var(--bg-gradient);
            min-height: 100vh;
            margin: 0;
            padding: 40px 20px;
            box-sizing: border-box;
        }

        .container {
            max-width: 1100px;
            margin: auto;
            background: var(--card-bg);
            backdrop-filter: blur(12px);
            padding: 40px;
            border-radius: 24px;
            box-shadow: 0 15px 35px -5px rgba(255, 117, 143, 0.12), 0 5px 15px rgba(0, 0, 0, 0.02);
            border: 2px solid rgba(255, 255, 255, 0.8);
        }

        .top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            flex-wrap: wrap;
            gap: 16px;
        }

        .title-area {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .title-icon {
            font-size: 2rem;
            background: #ffe5ec;
            padding: 12px;
            border-radius: 16px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            box-shadow: inset 0 2px 4px rgba(255, 255, 255, 0.8);
        }

        h1 {
            margin: 0;
            color: var(--text-main);
            font-size: 1.65rem;
            font-weight: 700;
            letter-spacing: -0.3px;
        }

        .subtitle {
            color: var(--text-muted);
            font-size: 0.9rem;
            margin-top: 4px;
        }

        .add-button {
            background: var(--primary-pink);
            color: white;
            padding: 12px 24px;
            text-decoration: none;
            border-radius: 14px;
            font-weight: 600;
            font-size: 0.95rem;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            box-shadow: 0 6px 16px -2px rgba(255, 117, 143, 0.35);
            transition: all 0.25s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .add-button:hover {
            background: var(--primary-hover);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 10px 20px -2px rgba(255, 77, 109, 0.4);
        }

        /* แจ้งเตือน Success */
        .custom-alert {
            background: #f0fdf4;
            border: 1.5px solid #bbf7d0;
            color: #166534;
            border-radius: 14px;
            padding: 14px 20px;
            margin-bottom: 25px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-size: 0.95rem;
            font-weight: 500;
        }

        /* ฟอร์มแก้ไขบทความ */
        .edit-card {
            background: #ffffff;
            border: 2px solid #fde68a;
            border-radius: 18px;
            padding: 28px;
            margin-bottom: 30px;
            box-shadow: 0 10px 25px rgba(245, 158, 11, 0.08);
        }

        .edit-card h2 {
            margin-top: 0;
            margin-bottom: 20px;
            color: #d97706;
            font-size: 1.25rem;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .edit-card input, .edit-card textarea {
            border-radius: 12px;
            border: 1px solid #fed7aa;
            background-color: #fffdfb;
            padding: 10px 14px;
        }

        .edit-card input:focus, .edit-card textarea:focus {
            border-color: #f59e0b;
            box-shadow: 0 0 0 3.5px rgba(245, 158, 11, 0.15);
            background-color: #ffffff;
        }

        /* การจัดแต่งตาราง */
        .table-responsive {
            width: 100%;
            overflow-x: auto;
            border-radius: 18px;
            border: 1px solid #ffe5ec;
            background: white;
            box-shadow: 0 4px 15px rgba(255, 117, 143, 0.04);
        }

        table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            text-align: left;
            margin-bottom: 0 !important;
        }

        th {
            background: #fff0f3 !important;
            color: #8c6b78;
            padding: 18px 16px;
            font-weight: 600;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            border-bottom: 2px solid #ffe5ec !important;
        }

        td {
            padding: 18px 16px;
            border-bottom: 1px solid var(--border-color);
            color: var(--text-main);
            font-size: 0.95rem;
            vertical-align: middle;
            transition: background 0.2s ease;
        }

        tbody tr:last-child td {
            border-bottom: none;
        }

        tbody tr:hover td {
            background-color: #fffafb;
        }

        .blog-id {
            color: #b59ea6;
            font-weight: 600;
            font-family: 'Inter', sans-serif;
            font-size: 0.85rem;
            background: #fff0f3;
            padding: 4px 8px;
            border-radius: 6px;
        }

        .blog-title {
            font-weight: 600;
            color: var(--text-main);
            display: block;
            margin-bottom: 2px;
        }

        .blog-content {
            color: #7d6b73;
            line-height: 1.5;
            font-size: 0.9rem;
        }

        /* ปุ่มกดสถานะ (Pill Badge) */
        .status-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.2s ease;
            white-space: nowrap;
        }
        .status-btn.published {
            background-color: #e6f4ea;
            color: #1e7e34;
            border: 1px solid #ceebd5;
        }
        .status-btn.published:hover {
            background-color: #d4edda;
            color: #155724;
            transform: scale(1.03);
        }
        .status-btn.draft {
            background-color: #fff3cd;
            color: #856404;
            border: 1px solid #ffe8a1;
        }
        .status-btn.draft:hover {
            background-color: #ffeba8;
            color: #533f03;
            transform: scale(1.03);
        }

        /* ปุ่มแก้ไข */
        .edit-button {
            display: inline-flex;
            align-items: center;
            gap: 4px;
            background-color: #eef2ff;
            color: #4f46e5;
            border: 1px solid #c7d2fe;
            text-decoration: none;
            padding: 6px 14px;
            border-radius: 10px;
            font-size: 0.85rem;
            font-weight: 600;
            transition: all 0.2s ease;
        }

        .edit-button:hover {
            background-color: #4f46e5;
            color: white;
            border-color: #4f46e5;
            transform: translateY(-1px);
            box-shadow: 0 4px 10px rgba(79, 70, 229, 0.2);
        }

        /* ปุ่มลบ */
        .delete-button {
            display: inline-flex;
            align-items: center;
            gap: 4px;
            background-color: #fff0f2;
            color: #ff4d6d;
            border: 1px solid #ffe5ec;
            text-decoration: none;
            padding: 6px 14px;
            border-radius: 10px;
            font-size: 0.85rem;
            font-weight: 600;
            transition: all 0.2s ease;
        }

        .delete-button:hover {
            background-color: #ff4d6d;
            color: white;
            border-color: #ff4d6d;
            transform: translateY(-1px);
            box-shadow: 0 4px 10px rgba(255, 77, 109, 0.25);
        }

        .back-home {
            display: inline-flex;
            align-items: center;
            margin-top: 30px;
            color: var(--text-muted);
            text-decoration: none;
            font-size: 0.95rem;
            font-weight: 500;
            transition: color 0.2s ease;
        }

        .back-home:hover {
            color: var(--primary-pink);
        }
    </style>
</head>

<body>

<div class="container">

    <div class="top">
        <div class="title-area">
            <span class="title-icon">📝</span>
            <div>
                <h1>รายการบทความทั้งหมด</h1>
                <div class="subtitle">จัดการ แก้ไข ลบ และเพิ่มข้อมูลบทความของคุณ</div>
            </div>
        </div>

        <a href="{{ route('create') }}" class="add-button">
            <span>+</span> เขียนบทความใหม่
        </a>
    </div>

    <!-- แสดง Flash Message แจ้งเตือนเมื่อทำรายการสำเร็จ -->
    @if(session('success'))
        <div class="custom-alert">
            <span>🎉 {{ session('success') }}</span>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" style="font-size: 0.8rem;"></button>
        </div>
    @endif

    <!-- ฟอร์มแก้ไขบทความ (จะแสดงเมื่อกดปุ่มแก้ไขและส่ง $blog มา) -->
    @if(isset($blog))
        <div class="edit-card">
            <h2>✏️ แก้ไขบทความ (#{{ sprintf('%03d', $blog->id) }})</h2>
            <form action="{{ route('update', $blog->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3 text-start">
                    <label class="form-label fw-bold" style="color: #92400e;">ชื่อบทความ</label>
                    <input type="text" name="title" value="{{ old('title', $blog->title) }}" class="form-control" required>
                </div>

                <div class="mb-3 text-start">
                    <label class="form-label fw-bold" style="color: #92400e;">เนื้อหาบทความ</label>
                    <textarea name="content" class="form-control" rows="4" required>{{ old('content', $blog->content) }}</textarea>
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-warning text-white fw-bold px-4" style="background-color: #f59e0b; border: none; border-radius: 10px;">ปรับปรุงข้อมูล</button>
                    <a href="{{ route('blogs') }}" class="btn btn-light text-secondary fw-semibold px-4" style="border-radius: 10px; border: 1px solid #e5e7eb;">ยกเลิก</a>
                </div>
            </form>
        </div>
    @endif

    <!-- ตารางแสดงรายการบทความ -->
    <div class="table-responsive">
        <table class="table text-center align-middle m-0">
            <thead>
                <tr>
                    <th scope="col" style="width: 80px;">ID</th>
                    <th scope="col" style="width: 220px;">ชื่อบทความ</th>
                    <th scope="col">เนื้อหาบทความ</th>
                    <th scope="col" style="width: 110px;">สถานะ</th>
                    <th scope="col" style="width: 110px;">แก้ไข</th>
                    <th scope="col" style="width: 100px;">ลบ</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($blogs as $item)
                    <tr>
                        <td class="text-center"><span class="blog-id">#{{ sprintf('%03d', $item->id) }}</span></td>
                        <td class="text-start">
                            <span class="blog-title">{{ $item->title }}</span>
                        </td>
                        <td class="text-start">
                            <span class="blog-content">{{ \Illuminate\Support\Str::limit($item->content, 90) }}</span>
                        </td>
                        
                        <!-- คอลัมน์สถานะ -->
                        <td class="text-center">
                            <a href="{{ route('change', $item->id) }}" class="status-btn {{ $item->status ? 'published' : 'draft' }}">
                                {{ $item->status ? '● เผยแพร่' : '○ ฉบับร่าง' }}
                            </a>
                        </td>

                        <!-- คอลัมน์แก้ไขบทความ -->
                        <td class="text-center">
                            <a href="{{ route('edit', $item->id) }}" class="edit-button">
                                ✏️ แก้ไข
                            </a>
                        </td>

                        <!-- คอลัมน์ลบบทความ -->
                        <td class="text-center">
                            <a 
                                href="{{ route('delete', $item->id) }}" 
                                class="delete-button" 
                                onclick="return confirm('คุณต้องการลบบทความนี้หรือไม่?')"
                            >
                                🗑️ ลบ
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center py-5 text-muted">
                            <div style="font-size: 2rem;" class="mb-2">🌸</div>
                            ยังไม่มีข้อมูลบทความในขณะนี้
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div style="text-align: center;">
        <a href="{{ route('abouts') }}" class="back-home">
            &larr; ดูผู้พัฒนาระบบ
        </a>
    </div>

</div>

<!-- Bootstrap JS (สำหรับกดปิด Alert) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>