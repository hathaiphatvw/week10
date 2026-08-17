<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เกี่ยวกับเรา - Hathaiphat</title>
    
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
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            box-sizing: border-box;
        }

        .container {
            width: 100%;
            max-width: 500px;
            background: var(--card-bg);
            backdrop-filter: blur(10px);
            padding: 40px;
            border-radius: 24px;
            box-shadow: 0 10px 25px -5px rgba(255, 117, 143, 0.08), 0 8px 10px -6px rgba(255, 117, 143, 0.08);
            border: 2px solid rgba(255, 255, 255, 0.6);
            text-align: center;
        }

        .avatar-placeholder {
            width: 100px;
            height: 100px;
            background: linear-gradient(135deg, #ff758f, #ffccd5);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.2rem;
            font-weight: 700;
            color: white;
            margin: 0 auto 1.5rem;
            box-shadow: 0 8px 20px rgba(255, 117, 143, 0.25);
            border: 4px solid #fff;
        }

        h1 {
            color: var(--text-main);
            font-size: 1.8rem;
            font-weight: 700;
            margin: 0 0 0.5rem;
        }

        .subtitle {
            color: var(--text-muted);
            font-size: 0.9rem;
            margin-bottom: 2rem;
        }

        .info-card {
            background: #fff9fb;
            border: 1px solid var(--border-color);
            border-radius: 16px;
            padding: 16px 20px;
            margin-bottom: 12px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: all 0.25s ease;
        }

        .info-card:hover {
            transform: scale(1.02);
            border-color: var(--primary);
            background: #fff0f3;
        }

        .info-label {
            color: var(--text-muted);
            font-size: 0.9rem;
            font-weight: 500;
        }

        .info-value {
            color: var(--text-main);
            font-size: 0.95rem;
            font-weight: 600;
        }

        .btn-back {
            display: block;
            margin-top: 2rem;
            background: var(--primary);
            color: white;
            padding: 12px 24px;
            text-decoration: none;
            border-radius: 12px;
            font-weight: 600;
            font-size: 0.95rem;
            box-shadow: 0 4px 10px rgba(255, 117, 143, 0.2);
            transition: all 0.2s ease;
        }

        .btn-back:hover {
            background: var(--primary-hover);
            transform: translateY(-1px);
            box-shadow: 0 8px 15px rgba(255, 117, 143, 0.3);
        }
    </style>
</head>
<body>

<div class="container">
    <div class="avatar-placeholder">🌸</div>
    <h1>เกี่ยวกับฉัน</h1>
    <div class="subtitle">ข้อมูลผู้พัฒนาระบบ</div>

    <div class="info-card">
        <span class="info-label">ชื่อ-นามสกุล</span>
        <span class="info-value">{{ $name }}</span>
    </div>

    <div class="info-card">
        <span class="info-label">วันที่อัปเดต</span>
        <span class="info-value">{{ $date }}</span>
    </div>

    <a href="/blog" class="btn-back">
        กลับหน้าบทความ
    </a>
</div>

</body>
</html>