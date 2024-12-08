<?php

use App\Livewire\AboutPage;
use App\Livewire\HomePage;
use App\Livewire\PengumumanPage;
use App\Livewire\PengumumanDetail;
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
Route::get('/',HomePage::class);
Route::get('/jadwal ',AboutPage::class);
Route::get('/pengumuman', [PengumumanPage::class, 'index'])->name('pengumuman.index');
Route::get('/pengumuman/{id}', PengumumanDetail::class)->name('pengumuman.detail');

