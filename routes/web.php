<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\Home\MainHome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/',function(){
    return 'TRANG CHU';
});
Route::get('/trangchu',[MainHome::class,'trangChu']);
Route::get('/sanpham',[MainHome::class,'sanPham']);