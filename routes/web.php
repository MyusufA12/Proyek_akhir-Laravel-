<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KuponController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TableAdminController;
use App\Http\Controllers\SebelumloginController;
use App\Http\Controllers\SetelahloginController;

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
  
    return view('home');
});

//sebelum login
Route::get('/sebelum_login/gallery',[SebelumloginController::class, 'gallery']);
Route::get('/sebelum_login/tips',[SebelumloginController::class, 'tips']);
Route::get('/home',[SebelumloginController::class, 'home']);
Route::get('/auth/login',[SebelumloginController::class, 'login'])->name('login');



// Route::get('/dashboard', function () {
//     $user = auth()->User();
//     return view('dashboard',compact('user'));
// })->middleware(['auth', 'verified'])->name('dashboard');

//halaman home utama admin dan user
Route::get('/dashboard', [AdminController::class, 'index'])->middleware('auth')->name('dashboard');

//halaman  admin 
Route::get('/admin/post', [AdminController::class, 'post'])->middleware('auth', 'admin');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    //sesudah login
    Route::get('/setelah_login/gallery',[SetelahloginController::class, 'gallery'])->name('gallery2');
    Route::get('/setelah_login/tips',[SetelahloginController::class, 'tips'])->name('tips2');
    Route::get('/setelah_login/biodata',[SetelahloginController::class, 'biodata'])->name('biodata');
    Route::get('/setelah_login/harga',[SetelahloginController::class, 'harga'])->name('harga');
    Route::get('/setelah_login/kupon',[SetelahloginController::class, 'kupon'])->name('kupon');
    Route::get('/setelah_login/contact',[SetelahloginController::class, 'contact'])->name('contact');
});

//table user
Route::get('/admin/table_user', [AdminController::class, 'show'])->middleware('auth', 'admin');
Route::get('/delete/{name}', [AdminController::class, 'destroy'])->middleware('auth', 'admin');
Route::post('/setelah_login/biodata', [AdminController::class, 'updateProfile'])->name('update.profile')->middleware('auth');
// Route::resource('/admin/table_user', TableAdminController::class)->middleware('auth', 'admin');

//table contact
Route::post('/setelah_login/contact', [ContactController::class, 'create'])->name('contact')->middleware('auth');
Route::get('/admin/table_ulasan', [ContactController::class, 'index'])->middleware('auth', 'admin');
Route::get('/delete_ulasan/{nama}', [ContactController::class, 'destroy'])->middleware('auth', 'admin');

//table product
Route::get('/admin/product', [ProductController::class, 'product'])->name('product')->middleware('auth', 'admin');
Route::get('/admin/table_product', [ProductController::class, 'tbl_product'])->name('table_product')->middleware('auth', 'admin');
Route::post('/admin/product', [ProductController::class, 'input'])->name('input_product')->middleware('auth', 'admin');
Route::get('/delete_product/{nama}', [ProductController::class, 'destroy'])->middleware('auth', 'admin');
Route::get('/admin/update_product', [ProductController::class, 'update_product'])->name('update_product')->middleware('auth', 'admin');
Route::get('/update_product/{jenis}', [ProductController::class, 'update'])->name('update')->middleware('auth', 'admin');
Route::post('/admin/update_product/{jenis}', [ProductController::class, 'updateproduct'])->name('productupdate')->middleware('auth', 'admin');

//table kupon
Route::get('/admin/kupondiskon',[KuponController::class, 'view'])->name('kupondiskon')->middleware('auth','admin');
Route::post('/admin/kupondiskon',[KuponController::class, 'create'])->name('create.kupon')->middleware('auth','admin');
Route::get('/admin/table_kupon',[KuponController::class, 'tabel'])->name('tabel.kupon')->middleware('auth','admin');
Route::get('/delete_kupon/{jenis}', [KuponController::class, 'destroy'])->middleware('auth', 'admin');
Route::get('/update_kupon/{jenis}', [KuponController::class, 'updatekupon'])->name('update.kupon')->middleware('auth', 'admin');
Route::post('/admin/update_kupon/{jenis}', [KuponController::class, 'kuponupdate'])->name('kuponupdate')->middleware('auth', 'admin');

require __DIR__.'/auth.php';
