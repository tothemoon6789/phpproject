<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainHome extends Controller
{
    //
    function trangChu(){
        return view('Home/main');
    }
    function sanPham(){
        return view('Product/index');
    }
}
