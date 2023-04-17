<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\TokoController;
use App\Http\Controllers\LarisController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\TolakController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\client\SettingController;
use App\Http\Controllers\VoucherController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\konfirmasiController;
use App\Http\Controllers\LoginSuperController;



// use App\Http\Controllers\client\BajuController;
// use App\Http\Controllers\client\TokoController;
// use App\Http\Controllers\client\JaketController;
// use App\Http\Controllers\client\HoodieController;
// use App\Http\Controllers\client\ProdukController;
// use App\Http\Controllers\client\SettingController;
// use App\Http\Controllers\client\RegisterController;
// use App\Http\Controllers\ClientDashboardController;
// use App\Http\Controllers\client\ClientFaqController;
// use App\Http\Controllers\client\ClientKategoriController;

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



Route::get('/', [HomeController::class, 'index_client']);
Route::get('/dashboard', [HomeController::class, 'index_client'])->name('dashboarduser');
Route::get('/toko', [TokoController::class, 'index_client'])->name('tokouser');
Route::get('/toko/search',[TokoController::class,'index_client'])->name('search');
Route::get('/faq', [FaqController::class, 'index'])->name('faq');
Route::get('/FAQ', [FaqController::class, 'client_index']);
Route::get('/products', [ProdukController::class, 'index']);






Route::middleware('user')->group(function () {
    Route::get('/setting', [SettingController::class, 'index']);
});

// Route::get('/kategori1', [KategoriController::class, 'kategori'])->name('kategoriuser');

Route::get('/tentang', function () {
    return view('client.tentang');
});

Route::middleware('user','auth')->group(function () {
    Route::post('/add/faq', [FaqController::class, 'store']);
    Route::get('/kode/{id}', [ProdukController::class, 'kode']);
});
Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginSuperController::class, 'login'])->name('login');
    Route::post('/loginuser', [LoginSuperController::class, 'loginuser'])->name('loginuser');
    Route::get('/register', [LoginSuperController::class, 'index']);
    Route::post('/registeruser', [LoginSuperController::class, 'registeruser']);
});

Route::middleware('superadmin','auth')->group(function () {
    Route::get('/user', [LoginSuperController::class, 'user'])->name('profil');
    Route::get('/table_user', [RouteController::class, 'user'])->name('user');
    Route::post('/updateprofil/{id}', [RouteController::class, 'updateprofil'])->name('updateprofil');
    Route::post('/changePassword/{id}', [RouteController::class, 'changePassword'])->name('changePassword');

    Route::get('/superadmin', [RouteController::class, 'index'])->name('index');
    Route::get('/table_admin', [RouteController::class, 'admin'])->name('admin');
    Route::get('/editadmin/{id}', [RouteController::class, 'adminedit'])->name('adminedit');
    Route::post('/updateadmin/{id}', [RouteController::class, 'updateadmin'])->name('updateadmin');
    Route::get('/tambahadmin', [RouteController::class, 'tambahadmin'])->name('tambahadmin');
    Route::post('/insertadmin', [RouteController::class, 'insertadmin'])->name('insertadmin');
    Route::get('/deleteadmin/{id}', [RouteController::class, 'deleteadmin'])->name('deleteadmin');

    Route::get('/table_super_admin', [RouteController::class, 'superadmin'])->name('superadmin');
    Route::get('/tambahsuper', [RouteController::class, 'tambahsuper'])->name('tambahsuper');
    Route::post('/insertsuper', [RouteController::class, 'insertsuper'])->name('insertsuper');
    Route::get('/editsuper/{id}', [RouteController::class, 'editsuper'])->name('editsuper');
    Route::post('/updatesuper/{id}', [RouteController::class, 'updatesuper'])->name('updatesuper');
    Route::get('/deletesuper/{id}', [RouteController::class, 'deletesuper'])->name('deletesuper');

    Route::get('/data_toko', [RouteController::class, 'toko'])->name('toko');
    Route::get('/tambahtoko', [RouteController::class, 'tambahtoko'])->name('tambahtoko');
    Route::get('/edittoko/{id}', [RouteController::class, 'edittoko'])->name('edittoko');
    Route::get('/hapustoko/{id}', [RouteController::class, 'hapustoko'])->name('hapustoko');
    Route::post('/inserttoko', [RouteController::class, 'inserttoko'])->name('inserttoko');
    Route::post('/updatetoko/{id}', [RouteController::class, 'updatetoko'])->name('updatetoko');


    Route::get('/data_voucher', [RouteController::class, 'voucher'])->name('datavoucher');
    Route::get('/deletevoucher/{id}', [RouteController::class, 'deletevoucher'])->name('deletevoucher');

    Route::get('/validasi', [RouteController::class, 'validasi'])->name('validasi');
    Route::post('/updatetolak/{id}', [RouteController::class, 'updatetolak'])->name('updatetolak');
    Route::get('/konfirmasi/{id}/{status}', [RouteController::class, 'konfirmasi'])->name('konfirmasi');
    Route::get('/tolak/{id}/{status}', [RouteController::class, 'tolak'])->name('tolak');

    Route::get('/kategori', [RouteController::class, 'kategori'])->name('kategori');
    Route::get('/tambahkategori', [RouteController::class, 'tambahkategori'])->name('tambahkategori');
    Route::get('/editkategori/{id}', [RouteController::class, 'editkategori'])->name('editkategori');
    Route::get('/deletekategori/{id}', [RouteController::class, 'deletekategori'])->name('deletekategori');
    Route::post('/insertkategori', [RouteController::class, 'insertkategori'])->name('insertkategori');
    Route::post('/updatekategori/{id}', [RouteController::class, 'updatekategori'])->name('updatekategori');

    //FAQ
    Route::get('/faqdelete/{id}', [FaqController::class, 'deletes']);
    Route::get('/faqs', [FaqController::class, 'faq_admin']);
    Route::get('/faqtampil/{id}', [FaqController::class, 'show']);
    Route::get('/faqupdates/{id}', [FaqController::class, 'tampilfaq']);
    Route::post('/faqupdate/{id}', [FaqController::class, 'update']);
});

Route::middleware('admin','auth')->group(function () {
    Route::get('/adminuser', [LoginSuperController::class, 'adminuser'])->name('adminuser');
    // DASHBOARD

    Route::get('/admin/toko', [DashboardController::class, 'Chart'])->name('dashboard');
    Route::get('/deletevoucher/{id}', [DashboardController::class, 'deletevoucher'])->name('deletevoucher');

    // Route::get('/konfirmasi/{id}/{status}', [DashboardController::class, 'konfirmasi'])->name('konfirmasi');
    // Route::get('/tolak/{id}/{status}', [DashboardController::class, 'tolak'])->name('tolak');
   

    // DATA VOUCHER

    Route::get('/datavoucher', [VoucherController::class, 'index'])->name('voucher');

    Route::get('/tambahvoucher', [VoucherController::class, 'tambahvoucher'])->name('tambahvoucher');
    Route::post('/insertdata', [VoucherController::class, 'insertdata'])->name('insertdata');

    Route::get('/tampildata/{id}', [VoucherController::class, 'tampildata'])->name('tampildata');
    Route::post('/updatedata/{id}', [VoucherController::class, 'updatedata'])->name('updatedata');

    Route::get('/delete/{id}', [VoucherController::class, 'delete'])->name('delete');

    // KATEGORI

    Route::get('/kategoritoko', [KategoriController::class, 'index'])->name('kategoritoko');

    // KONFIRMASI

    Route::get('/konfirmasi', [konfirmasiController::class, 'index'])->name('datakonfirmasi');

    // TOLAK

    Route::get('/tolakvoucher', [TolakController::class, 'index'])->name('tolakvoucher');

    Route::get('/tampil/{id}', [TolakController::class, 'tampil'])->name('tampil');
    Route::post('/update/{id}', [TolakController::class, 'update'])->name('update');

    Route::get('/hapus/{id}', [TolakController::class, 'hapus'])->name('hapus');

    Route::get('/panding', [TolakController::class, 'panding'])->name('panding');
});
// Route::middleware('user')->group(function(){
//silahkan di atur middlewarenya



Route::middleware('auth')->group(function () {
    Route::get('/logout', [LoginSuperController::class, 'logout'])->name('logout');
});
