<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <title>@yield('title') - Hathaiphat</title>
</head>

<body>
    <header>
        <div class="nav-container">
            <a href="/" class="logo">✨ Hathaiphat</a>
            <nav>
                <a href="/" class="{{ Request::is('/') ? 'active' : '' }}">หน้าแรก</a>
                <a href="{{ route('abouts') }}" class="{{ Request::is('abouts') ? 'active' : '' }}">เกี่ยวกับเรา</a>
                <a href="{{ route('blogs') }}" class="{{ Request::is('blogs') ? 'active' : '' }}">บทความ</a>
                <a href="{{ route('form') }}" class="{{ Request::is('form') ? 'active' : '' }}">ข้อมูลพนักงาน</a>
                <a href="/student/68152310265-1" class="{{ Request::is('student/*') ? 'active' : '' }}">ประวัตินักศึกษา</a>
            </nav>
        </div>
    </header>

    <main class="container">
        <div class="card">
            @yield('content')
        </div>
    </main>

    <footer>
        <p>&copy; 2026 Hathaiphat Pakdeekaew. All rights reserved.</p>
    </footer>
</body>

</html>
