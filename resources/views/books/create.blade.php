<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มหนังสือใหม่ - Book Store</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Sarabun:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
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
            font-family: 'Inter', 'Sarabun', sans-serif;
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
            max-width: 600px;
            background: var(--card-bg);
            backdrop-filter: blur(10px);
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 25px -5px rgba(255, 117, 143, 0.05), 0 8px 10px -6px rgba(255, 117, 143, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.6);
            transition: transform 0.3s ease;
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
            font-size: 1.5rem;
            font-weight: 700;
            margin: 0;
        }

        .subtitle {
            color: var(--text-muted);
            font-size: 0.875rem;
            margin-top: 4px;
        }

        .form-group {
            margin-bottom: 24px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            font-size: 0.9rem;
            color: #5c4b51;
        }

        input,
        select {
            width: 100%;
            padding: 12px 16px;
            border: 1px solid var(--border-color);
            background-color: var(--input-bg);
            border-radius: 10px;
            font-size: 0.95rem;
            color: var(--text-main);
            transition: all 0.2s ease;
            box-sizing: border-box;
            font-family: inherit;
        }

        input:focus,
        select:focus {
            outline: none;
            border-color: var(--input-focus-border);
            background-color: #ffffff;
            box-shadow: 0 0 0 4px rgba(255, 117, 143, 0.15);
        }

        input::placeholder {
            color: #c9b3bd;
        }

        .buttons {
            display: flex;
            gap: 12px;
            margin-top: 35px;
        }

        .btn {
            flex: 1;
            padding: 12px 24px;
            border-radius: 10px;
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
        <span class="header-icon">📚</span>
        <div>
            <h1>เพิ่มข้อมูลหนังสือ</h1>
            <div class="subtitle">กรอกข้อมูลหนังสือด้านล่างเพื่อเพิ่มเข้าระบบ</div>
        </div>
    </div>

    <form>
        <div class="form-group">
            <label for="title">ชื่อหนังสือ</label>
            <input
                type="text"
                id="title"
                name="title"
                placeholder="เช่น Laravel เบื้องต้นสำหรับผู้เริ่มต้น"
                required
            >
        </div>

        <div class="form-group">
            <label for="author">ผู้แต่ง</label>
            <input
                type="text"
                id="author"
                name="author"
                placeholder="ระบุชื่อผู้แต่งหรือนักเขียน"
                required
            >
        </div>

        <div class="form-group">
            <label for="category">หมวดหมู่</label>
            <select id="category" name="category" required>
                <option value="">-- เลือกหมวดหมู่ --</option>
                <option value="Programming">Programming</option>
                <option value="Web Development">Web Development</option>
                <option value="Database">Database</option>
                <option value="Other">อื่น ๆ</option>
            </select>
        </div>

        <div class="form-group">
            <label for="price">ราคา (บาท)</label>
            <input
                type="number"
                id="price"
                name="price"
                placeholder="ระบุราคาสินค้า"
                min="0"
                step="0.01"
                required
            >
        </div>

        <div class="buttons">
            <a href="{{ route('books.index') }}" class="btn btn-back">
                ย้อนกลับ
            </a>
            <button type="submit" class="btn btn-save">
                บันทึกข้อมูล
            </button>
        </div>
    </form>
</div>

</body>
</html>