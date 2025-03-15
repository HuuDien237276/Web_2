<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
public function home()
    {
        return view('home'); // Trang chủ
    }

public function about()
    {
        return view('about'); // Giới thiệu
    }

public function services()
    {
        return view('services'); // Dịch vụ
    }

public function contact()
    {
        return view('contact'); // Liên hệ
    }
}