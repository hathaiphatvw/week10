<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขบทความ - {{ $blog->title }}</title>
    
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
            --input-bg: #fffafb;
            --input-focus-border: #ffb3c1;
        }

        body {
            font-family: 'Prompt', 'Inter', 'Sarabun', sans-serif;
            background: var(--bg-gradient);
            min-height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            box-sizing: border-box;
        }

        .container {
            width: 100%;
            max-width: 650px;
            background: var(--card-bg);
            backdrop-filter: blur(10px);
            padding: 40px;
            border-radius: 24px;
            box-shadow: 0 10px 25px -5px rgba(255, 117, 143, 0.05), 0 8px 10px -6px rgba(255, 117, 143, 0.05);
            border: 2px solid rgba(255, 255, 255, 0.6);
        }

        .header {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 30px;
        }

        .header-icon {
            font-size: 2rem;
            background: #ffe5ec;
            padding: 10px;
            border-radius: 12px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        h1 {
            color: var(--text-main);
            font-size: 1.6rem;
            font-weight: 700;
            margin: 0;
        }

        .subtitle {
            color: var(--text-muted);
            font-size: 0.9rem;
            margin-top: 4px;
        }

        .form-group {
            margin-bottom: 24px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            font-size: 0.95rem;
            color: #5c4b51;
        }

        input,
        textarea {
            width: 100%;
            padding: 12px 16px;
            border: 1px solid var(--border-color);
            background-color: var(--input-bg);
            border-radius: 12px;
            font-size: 0.95rem;
            color: var(--text-main);
            transition: all 0.2s ease;
            box-sizing: border-box;
            font-family: inherit;
        }

        textarea {
            min-height: 180px;
            resize: vertical;
            line-height: 1.6;
        }

        input:focus,
        textarea:focus {
            outline: none;
            border-color: var(--input-focus-border);
            background-color: #ffffff;
            box-shadow: 0 0 0 4px rgba(255, 117, 143, 0.15);
        }

        input::placeholder,
        textarea::placeholder {
            color: #c9b3bd;
        }

        .error {
            color: #ff4d6d;
            font-size: 0.85rem;
            margin-top: 6px;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 4px;
        }

        .error::before {
            content: '⚠️';
            font-size: 0.9rem;
        }

        .button-group {
            display: flex;
            gap: 12px;
            margin-top: 35px;
        }

        .btn {
            flex: 1;
            padding: 12px 24px;
            border-radius: 12px;
            font-size: 0.95rem;
            font-weight: 600;
            border: none;
            cursor: pointer;
            transition: all 0.2s ease;
            text-align: center;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-family: inherit;
        }

        .btn-save {
            background: var(--primary);
            color: white;
            box-shadow: 0 4px 6px -1px rgba(255, 117, 143, 0.2);
        }

        .btn-save:hover {
            background: var(--primary-hover);
            transform: translateY(-1px);
            box-shadow: 0 10px 15px -3px rgba(255, 117, 143, 0.3);
        }

        .btn-back {
            background: #fff0f3;
            color: #be185d;
            border: 1px solid #ffe5ec;
        }

        .btn-back:hover {
            background: #ffe5ec;
            color: #ff4d6d;
            transform: translateY(-1px);
        }
    </style>
</head>
<body>

<div class="container">
    <div class="header">
        <span class="header-icon">✍️</span>
        <div>
            <h1>แก้ไขบทความ</h1>
            <div class="subtitle">ปรับปรุงข้อมูลและเนื้อหาบทความของคุณ (#{{ sprintf('%03d', $blog->id) }})</div>
        </div>
    </div>

    <form action="{{ route('update', $blog->id) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- ชื่อบทความ -->
        <div class="form-group">
            <label for="title">ชื่อบทความ</label>
            <input
                type="text"
                id="title"
                name="title"
                value="{{ old('title', $blog->title) }}"
                placeholder="กรอกชื่อบทความหรือหัวข้อหลัก"
            >
            @error('title')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <!-- เนื้อหา -->
        <div class="form-group">
            <label for="content">เนื้อหาบทความ</label>
            <textarea
                id="content"
                name="content"
                placeholder="แบ่งปันข้อมูล รายละเอียด หรือเนื้อหาของคุณที่นี่..."
            >{{ old('content', $blog->content) }}</textarea>
            @error('content')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <!-- ปุ่มควบคุม -->
        <div class="button-group">
            <a href="{{ route('blogs') }}" class="btn btn-back">
                ยกเลิก
            </a>
            <button type="submit" class="btn btn-save">
                อัปเดตบทความ
            </button>
        </div>
    </form>
</div>

</body>
</html>