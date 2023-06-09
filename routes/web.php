<?php
use App\Http\Controllers\AddRoomController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Route::get('/products/create', [App\Http\Controllers\ProductController::class, 'store']);
// Route::get('/products', [App\Http\Controllers\ProductController::class, 'store']);
Route::get('/', function () {
    return view('welcome');
});



// tinh-toan là đường dẫn  URL để truy cập trang tính toán 
// Route::get('tinh-toan', [App\Http\Controllers\myController::class, 'index']);
// Route::post('tinh-toan', [App\Http\Controllers\myController::class, 'tong']);

// Route::post()
// Route::get('/welcome',function() {
//     return "xin chào bạn đẫ đến đây vì tôi";
// });

// Route::get('test',[App\Http\Controllers\userController::class,'xinchao']);

// Route::get('sum', [App\Http\Controllers\sumController::class, 'index']);
// Route::post('sum', [App\Http\Controllers\sumController::class, 'tinhtong']);
// Route::get('areaOfShape', [App\Http\Controllers\AreaofshapeController::class, 'computerArea']);
// Route::post('areaOfShape', [App\Http\Controllers\AreaofshapeController::class, 'areaOfShape']);

// Route::get('signup', [App\Http\Controllers\signupController::class, 'index']);
// Route::post('signup', [App\Http\Controllers\signupController::class, 'displayInfor']);

// Route::get('signup', "signupController@index");
// Route::post('signup', "signupController@displayInfor");

Route::get('products/create', [App\Http\Controllers\ProductController::class, 'create']);
Route::post('../index', [App\Http\Controllers\ProductController::class, 'index']);
Route::get('../index', [App\Http\Controllers\ProductController::class, 'store']);

Route::get('add', [AddRoomController::class, 'index']);
Route::post('add', [AddRoomController::class, 'store'])->name('add.store');

Route::get('master',[App\Http\Controllers\PageController::class, 'getIndex']);
Route::get('loai_sanpham',[App\Http\Controllers\PageController::class, 'getLoaiSp']);
Route::get('chitiet_sanpham',[App\Http\Controllers\PageController:: class,'getChitiet']);
Route::get('lienhe',[App\Http\Controllers\PageController:: class,'getLienhe']);
Route::get('about_sanpham',[App\Http\Controllers\PageController:: class,'getAboutus']);