<!-- <!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ - Công ty Gia My</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
    <h1>Chào mừng đến với Công ty Gia My</h1>
    <p>Đây là trang chủ của chúng tôi.</p>
    <div>
        <nav>
            <ul>
                <li><a href="{{url('../home')}}">Home</a></li>
                <li><a href="{{url('../about')}}">About Me</a></li>
                <li><a href="{{url('../services')}}">Services</a></li>
                <li><a href="{{url('../contact')}}">Contact</a></li>
            </ul>
        </nav>
    </div>
</body>

</html> -->

@extends('layouts.app')

@section('title', 'Home')

@section('home')
<h1>Chào mừng đến với Công ty Gia My</h1>
<p>Đây là trang chủ của chúng tôi.</p>
@endsection