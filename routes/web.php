<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeliController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\RotiController;
use App\Http\Controllers\JumlahController;
use App\Http\Controllers\QuotesController;
use App\Http\Controllers\PromosiController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HelpandsupportController;
use App\Http\Controllers\InvoiceController;


// Route::get('/', function () {
//     return view('welcome');
// });




Route::get('/', [AuthController::class, 'index'])->name('login.admin');
Route::post('/post', [AuthController::class, 'postlogin'])->name('login.post');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/masuk/google', [AuthController::class, 'login'])->name('login.google');
Route::get('/google/callback', [AuthController::class, 'callback'])->name('login.google.callback');

Route::get('user', [FrontendController::class, 'index'])->name('user.dashboard');
Route::get('about', [FrontendController::class, 'about'])->name('user.about');
Route::get('menu', [RotiController::class, 'showMenu'])->name('menu');
Route::get('invoice/{id_roti}', [InvoiceController::class, 'index'])->name('invoice.menu');
// ----
Route::get('beli', [BeliController::class, 'index'])->name('beli');





Route::middleware('auth')->group(function () {
    Route::get('logout', [AuthController::class, 'logoutGoogle'])->name('logout.google');
});

Route::middleware('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // RotiController
    Route::get('/dataroti', [RotiController::class, 'index'])->name('admin.dataroti.index');
    Route::get('/dataroti/create', [RotiController::class, 'create'])->name('admin.dataroti.create');
    Route::post('/dataroti', [RotiController::class, 'store'])->name('admin.dataroti.store');
    Route::get('/dataroti/{id_roti}/edit', [RotiController::class, 'edit'])->name('admin.dataroti.edit');
    Route::put('/dataroti/{id_roti}', [RotiController::class, 'update'])->name('admin.dataroti.update');
    Route::get('/dataroti/{id_roti}', [RotiController::class, 'destroy'])->name('admin.dataroti.destroy');

    // KategoriController
    Route::get('/kategori', [KategoriController::class, 'index'])->name('admin.kategori.index');
    Route::get('/kategori/create', [KategoriController::class, 'create'])->name('admin.kategori.create');
    Route::post('/kategori', [KategoriController::class, 'store'])->name('admin.kategori.store');
    Route::get('/kategori/{id_kategori}/edit', [KategoriController::class, 'edit'])->name('admin.kategori.edit');
    Route::put('/kategori/{id_kategori}', [KategoriController::class, 'update'])->name('admin.kategori.update');
    Route::get('/kategori/{id_kategori}', [KategoriController::class, 'destroy'])->name('admin.kategori.destroy');

    // CarouselController
    Route::get('/carousel', [CarouselController::class, 'index'])->name('admin.carousel');
    Route::get('/carousel/create', [CarouselController::class, 'create'])->name('admin.carousel.create');
    Route::post('/carousel/store', [CarouselController::class, 'store'])->name('admin.carousel.store');
    Route::get('/carousel/{id_carousel}/edit', [CarouselController::class, 'edit'])->name('admin.carousel.edit');
    Route::put('/carousel/update/{id_carousel}', [CarouselController::class, 'update'])->name('admin.carousel.update');
    Route::get('/carousel/destroy/{id_carousel}', [CarouselController::class, 'destroy'])->name('admin.carousel.destroy');

    // HelpandsupportController
    Route::get('/help', [HelpandsupportController::class, 'index'])->name('admin.help');

    // JumlahController
    Route::get('/jumlah', [JumlahController::class, 'index'])->name('admin.jumlah');

    // PromosiController
    Route::get('/promosi', [PromosiController::class, 'index'])->name('admin.promosi.index');
    Route::get('/promosi/create', [PromosiController::class, 'create'])->name('admin.promosi.create');
    Route::post('/promosi/store', [PromosiController::class, 'store'])->name('admin.promosi.store');
    Route::get('/promosi/{id_promosi}/edit', [PromosiController::class, 'edit'])->name('admin.promosi.edit');
    Route::put('/promosi/{id_promosi}', [PromosiController::class, 'update'])->name('admin.promosi.update');
    Route::get('/promosi/{id_promosi}', [PromosiController::class, 'destroy'])->name('admin.promosi.destroy');

    // QuotesController
    Route::get('/quotes', [QuotesController::class, 'index'])->name('admin.quotes');
});
