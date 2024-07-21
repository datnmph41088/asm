<?php

use Illuminate\Support\Facades\DB;
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
Route::get('/', function () {
    $highestPricedBooks = DB::table('books')->orderBy('price', 'desc')->take(8)->get();
    $lowestPricedBooks = DB::table('books')->orderBy('price', 'asc')->take(8)->get();
    $latestBooks = DB::table('books')->orderBy('created_at', 'desc')->take(8)->get(); 
    $categories = DB::table('categories')->get();

    return view('index', compact('highestPricedBooks', 'lowestPricedBooks', 'latestBooks', 'categories'));
});

Route::get('/category/{id}', function ($id) {
    $category = DB::table('categories')->find($id);
    $books = DB::table('books')->where('category_id', $id)->get();
    return view('category', compact('category', 'books'));
});

Route::get('/detail/{id}', function ($id) {
    $book = DB::table('books')->find($id);
    return view('detail', compact('book'));
});
Route::get('/login', function () {
   
    return view('login');
});

// Add routes for the other sections if needed
Route::get('/about', function () {
    return view('about'); 
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/faq', function () {
    return view('faq'); 
});
Route::get('/products', function () {
    $products = DB::table('books')->get(); // Lấy tất cả sản phẩm từ bảng books
    return view('products.index', compact('products')); // Sửa tên view ở đây
});