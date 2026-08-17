<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>รายการหนังสือ - Book Store</title>

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
        }

        body {
            font-family: 'Inter', 'Sarabun', sans-serif;
            background: var(--bg-gradient);
            min-height: 100vh;
            margin: 0;
            padding: 40px 20px;
            box-sizing: border-box;
        }

        .container {
            max-width: 1000px;
            margin: auto;
            background: var(--card-bg);
            backdrop-filter: blur(10px);
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 25px -5px rgba(255, 117, 143, 0.05), 0 8px 10px -6px rgba(255, 117, 143, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.6);
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
            font-size: 0.875rem;
            margin-top: 4px;
        }

        .btn {
            background: var(--primary);
            color: white;
            padding: 12px 24px;
            text-decoration: none;
            border-radius: 10px;
            font-weight: 600;
            font-size: 0.95rem;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            box-shadow: 0 4px 6px -1px rgba(255, 117, 143, 0.2);
            transition: all 0.2s ease;
        }

        .btn:hover {
            background: var(--primary-hover);
            transform: translateY(-1px);
            box-shadow: 0 10px 15px -3px rgba(255, 117, 143, 0.3);
        }

        .table-responsive {
            width: 100%;
            overflow-x: auto;
            border-radius: 12px;
            border: 1px solid #ffe5ec;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
            background: white;
        }

        th {
            background: #fff0f3;
            color: #8c6b78;
            padding: 16px;
            font-weight: 600;
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
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

        .book-id {
            color: var(--text-muted);
            font-weight: 500;
        }

        .book-title {
            font-weight: 600;
            color: var(--text-main);
        }

        .book-author {
            color: #7d6b73;
        }

        .badge {
            display: inline-flex;
            align-items: center;
            padding: 4px 10px;
            border-radius: 9999px;
            font-size: 0.75rem;
            font-weight: 600;
        }

        .badge-programming {
            background-color: #ffdeeb;
            color: #c91866;
        }

        .badge-web {
            background-color: #fce7f3;
            color: #db2777;
        }

        .badge-database {
            background-color: #ffe5ec;
            color: #ff4d6d;
        }

        .badge-other {
            background-color: #fff0f3;
            color: #be185d;
        }

        .price {
            font-weight: 700;
            color: var(--primary);
        }
    </style>
</head>

<body>

<div class="container">

    <div class="top">
        <div class="title-area">
            <span class="title-icon">📚</span>
            <div>
                <h1>รายการหนังสือทั้งหมด</h1>
                <div class="subtitle">แสดงรายชื่อหนังสือและหมวดหมู่ในระบบของคุณ</div>
            </div>
        </div>

        <a href="{{ route('books.create') }}" class="btn">
            <span>+</span> เพิ่มหนังสือใหม่
        </a>
    </div>

    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th style="width: 80px;">รหัส</th>
                    <th>ชื่อหนังสือ</th>
                    <th>ผู้แต่ง</th>
                    <th>หมวดหมู่</th>
                    <th style="text-align: right;">ราคา</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($books as $book)
                <tr>
                    <td><span class="book-id">#{{ sprintf('%03d', $book['id']) }}</span></td>
                    <td>
                        <span class="book-title">{{ $book['title'] }}</span>
                    </td>
                    <td>
                        <span class="book-author">{{ $book['author'] }}</span>
                    </td>
                    <td>
                        @php
                            $badgeClass = 'badge-other';
                            if ($book['category'] === 'Programming') {
                                $badgeClass = 'badge-programming';
                            } elseif ($book['category'] === 'Web Development') {
                                $badgeClass = 'badge-web';
                            } elseif ($book['category'] === 'Database') {
                                $badgeClass = 'badge-database';
                            }
                        @endphp
                        <span class="badge {{ $badgeClass }}">
                            {{ $book['category'] }}
                        </span>
                    </td>
                    <td style="text-align: right;">
                        <span class="price">{{ number_format($book['price'], 2) }}</span> <span style="font-size: 0.85rem; color: var(--text-muted);">บาท</span>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

</body>
</html>