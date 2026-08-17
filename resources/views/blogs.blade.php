<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>รายการบทความ - Hathaiphat</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Sarabun:wght@300;400;500;600;700&family=Prompt:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary: #ff758f;
            --primary-hover: #ff4d6d;
            --bg-gradient: linear-gradient(135deg, #fff0f3 0%, #ffccd5 100%);
            --card-bg: rgba(255, 255, 255, 0.96);
            --text-main: #4a3e43;
            --text-muted: #a38f97;
            --border-color: #ffe5ec;
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
            backdrop-filter: blur(10px);
            padding: 40px;
            border-radius: 24px;
            box-shadow: 0 10px 25px -5px rgba(255, 117, 143, 0.05), 0 8px 10px -6px rgba(255, 117, 143, 0.05);
            border: 2px solid rgba(255, 255, 255, 0.6);
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
            gap: 12px;
        }

        .title-icon {
            font-size: 2rem;
            background: #ffe5ec;
            padding: 10px;
            border-radius: 12px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        h1 {
            margin: 0;
            color: var(--text-main);
            font-size: 1.6rem;
            font-weight: 700;
        }

        .subtitle {
            color: var(--text-muted);
            font-size: 0.9rem;
            margin-top: 4px;
        }

        .add-button {
            background: var(--primary);
            color: white;
            padding: 12px 24px;
            text-decoration: none;
            border-radius: 12px;
            font-weight: 600;
            font-size: 0.95rem;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            box-shadow: 0 4px 6px -1px rgba(255, 117, 143, 0.2);
            transition: all 0.2s ease;
        }

        .add-button:hover {
            background: var(--primary-hover);
            transform: translateY(-1px);
            box-shadow: 0 10px 15px -3px rgba(255, 117, 143, 0.3);
        }

        .table-responsive {
            width: 100%;
            overflow-x: auto;
            border-radius: 16px;
            border: 1px solid #ffe5ec;
            background: white;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }

        th {
            background: #fff0f3;
            color: #8c6b78;
            padding: 16px;
            font-weight: 600;
            font-size: 0.95rem;
            border-bottom: 1px solid #ffe5ec;
        }

        td {
            padding: 16px;
            border-bottom: 1px solid var(--border-color);
            color: var(--text-main);
            font-size: 0.95rem;
        }

        tr:last-child td {
            border-bottom: none;
        }

        tr:hover td {
            background: #fff8f9;
        }

        .blog-id {
            color: var(--text-muted);
            font-weight: 500;
        }

        .blog-title {
            font-weight: 600;
            color: var(--text-main);
        }

        .blog-content {
            color: #7d6b73;
            line-height: 1.6;
        }

        .delete-button {
            display: inline-flex;
            align-items: center;
            background-color: #fff0f2;
            color: #ff4d6d;
            border: 1.5px solid #ffe5ec;
            text-decoration: none;
            padding: 6px 14px;
            border-radius: 8px;
            font-size: 0.85rem;
            font-weight: 600;
            transition: all 0.2s ease;
        }

        .delete-button:hover {
            background-color: #ff4d6d;
            color: white;
            border-color: #ff4d6d;
            transform: translateY(-1px);
        }

        .empty {
            text-align: center;
            padding: 40px;
            color: var(--text-muted);
            font-weight: 500;
        }

        .back-home {
            display: inline-flex;
            align-items: center;
            margin-top: 25px;
            color: var(--text-muted);
            text-decoration: none;
            font-size: 0.95rem;
            font-weight: 500;
            transition: all 0.2s ease;
        }

        .back-home:hover {
            color: var(--primary);
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
                <div class="subtitle">จัดการ ลบ และเพิ่มข้อมูลบทความของคุณ</div>
            </div>
        </div>

        <a href="/create" class="add-button">
            <span>+</span> เขียนบทความใหม่
        </a>
    </div>

    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th style="width: 80px;">ID</th>
                    <th style="width: 250px;">ชื่อบทความ</th>
                    <th>เนื้อหาบทความ</th>
                    <th style="width: 100px; text-align: center;">จัดการ</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($blogs as $blog)
                    <tr>
                        <td><span class="blog-id">#{{ sprintf('%03d', $blog->id) }}</span></td>
                        <td>
                            <span class="blog-title">{{ $blog->title }}</span>
                        </td>
                        <td>
                            <span class="blog-content">{{ \Illuminate\Support\Str::limit($blog->content, 100) }}</span>
                        </td>
                        <td style="text-align: center;">
                            <a
                                href="/delete/{{ $blog->id }}"
                                class="delete-button"
                                onclick="return confirm('คุณต้องการลบบทความนี้หรือไม่?')"
                            >
                                ลบ
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="empty">
                            ยังไม่มีข้อมูลบทความในขณะนี้ 🌸
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div style="text-align: center;">
        <a href="/abouts" class="back-home">
            &larr; ดูผู้พัฒนาระบบ
        </a>
    </div>

</div>

</body>
</html>