<?php

use App\Http\Controllers\produkController;
use App\Models\category;
use Illuminate\Support\Facades\Route;
use App\Models\produk;
use App\Http\Controllers\DashboardProdukController;
use App\Http\Controllers\DashboardCategoryController;
use App\Http\Controllers\DashboardOrderController;
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

Route::get('/', function () {
    return view('home',[
        "title"=>"Home",
        "active"=>'home',
        "produk"=>produk::all(),
        "category"=>category::all()
    ]);
});

// Route::get('/kategori', function () {
//     return view('kategori',[
//         "title"=>"Kategori"
//     ]);
// });

Route::get('/about', function () {
    return view('about',[
        "title"=>"About",
        "active"=>'about',
        "nama" => "Teman Bearly Beauty",
        "alamat" => "Sidoarjo",
        "notelp" => "08123111380"
    ]);
});

Route::get('/produk', [produkController::class,'index']);
Route::get('produk/{produk:slug}',[produkController::class,'show']);
Route::get('/category/{category:slug}',function(category $category){
    return view('Kategori',[
        'title'=>'Category',
        "active"=>'kategori',
        "kategori"=>$category,
        "produk"=>produk::all()
    ]);
});
