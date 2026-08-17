<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ประวัตินักศึกษา - Hathaiphat</title>
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <header>
        <div class="nav-container">
            <a href="/" class="logo">✨ Hathaiphat</a>
            <nav>
                <a href="/">หน้าแรก</a>
                <a href="/about">เกี่ยวกับเรา</a>
                <a href="/blog">บทความทั้งหมด</a>
                <a href="/student/68152310265-1" class="active">ประวัตินักศึกษา</a>
            </nav>
        </div>
    </header>

    <main class="container" style="max-width: 600px;">
        <div class="student-card">
            <div class="avatar-placeholder">HP</div>
            
            <h2 style="text-align: center; margin-bottom: 2rem; font-size: 1.8rem; background: linear-gradient(135deg, #ff859a, #4f46e5); -webkit-background-clip: text; -webkit-text-fill-color: transparent; display: block; width: 100%;">
                ประวัตินักศึกษา 🎓
            </h2>

            <div class="info-group">
                <span class="info-label">รหัสนักศึกษา</span>
                <span class="info-value">{{ $id ?? '68152310265-1' }}</span>
            </div>

            <div class="info-group">
                <span class="info-label">ชื่อ - นามสกุล</span>
                <span class="info-value">หทัยภัทร ภักดีแก้ว</span>
            </div>

            <div class="info-group">
                <span class="info-label">สาขาวิชา</span>
                <span class="info-value">ระบบสารสนเทศ</span>
            </div>

            <div class="info-group">
                <span class="info-label">คณะ</span>
                <span class="info-value">บริหารธุรกิจ</span>
            </div>

            <div style="margin-top: 2rem; text-align: center;">
                <a href="/" class="btn btn-secondary">ย้อนกลับหน้าแรก</a>
            </div>
        </div>
    </main>

    <footer>
        <p>&copy; 2026 Hathaiphat Pakdeekaew. All rights reserved.</p>
    </footer>
</body>

</html>
