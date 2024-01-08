<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\ProductController;
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
Route::get('/', function () 
{
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/registration', function () {
    return view('registration');
});

Route::get('/dashboard_penjual', function () {
    return view('dashboard_penjual');
});

Route::get('/add_produk', function () {
    return view('add_produk');
});

 Route::get('/Daftar_pemesanan', function () {
     return view('Daftar_pemesanan');
 });

Route::get('/Daftar_pemesanan', [App\Http\Controllers\penawaranController::class,'daftar_pemesanan']);

Route::get('/Pemilihan-pemenang', function () {
    return view('Pemilihan-pemenang');
});


Route::get('/detail_produk', function () {
    return view('detail_produk');
    
});

Route::get('/homepage_pembeli', function () {
     return view('homepage_pembeli');
 });

Route::get('/Melihat_produk', function () {
    return view('Melihat_produk');
});

Route::get('/transaksi/{id}', [App\Http\Controllers\penawaranController::class,'index']);
Route::post('/transaksi/tawar',[App\Http\Controllers\penawaranController::class,'store']);

Route::get('/chat', function () {
    return view('chat');
});

Route::get('/search', function () {
    return view('search');
});

Route::get('/account', function () {
    return view('account');
});

Route::get('/edit_account', function () {
    return view('edit_account');
});


Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

Route::get('/homepage_pembeli', [RegistrationController::class, 'homepage_pembeli']);
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

Route::post('registration', [RegistrationController::class,'registration']);


// Route::get('/add_produk', [ProductController::class, 'GetAddProduct'])->name('add_produk');
// Route::post('/add_produk', [ProductController::class, 'test']);

Route::get('/account/{id}', [App\Http\Controllers\accountController::class,'show']);
Route::get('/account/edit/{id}', [App\Http\Controllers\accountController::class,'edit']);

// Route::post('/edit_account', [App\Http\Controllers\accountController::class,'update']);


// Route::get('/add_produk', [ProductController::class, 'GetAddProduct']  )->name('add_produk');
// Route::get('/hapusProduk/{id}'[ProductController::class, 'deleteProduct']);
// Route::get('/editProduk/{id}',[ProductController::class, 'editProduct']);
// Route::post('/updateProduk/{id}',[ProductController::class, 'updateProduct']);
// Route::get('/detailProduk/{id}', [ProductController::class, 'detailProduct']);
// Route::post('/add_produk', [ProductController::class, 'PostAddProduct']);

Route::get('/search','ProductController@search');
// Route::get('/search', [App\Http\Controllers\ProductController::class,'search']);


 


