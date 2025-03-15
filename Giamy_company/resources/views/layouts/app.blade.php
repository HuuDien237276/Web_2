<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Công ty Gia My</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    @include('partials.navbar')
    <!-- Thêm thanh menu -->
    <div class="container">
        @yield('home')
        <!-- @yield('about') -->
        <!-- @yield('services') -->
        <!-- @yield('contact') -->
        <!-- @yield('content') -->
        <!-- Nội dung chính -->
        @include('home')
        @include('about')
        @include('services')
        @include('contact')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>