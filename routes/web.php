<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\news;
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
Route::get('/', [news::class,'lay10tin'])->name('home');
//user
Route::prefix('tin')->group(function () {
    Route::get('/danhmuc/{id}', [news::class,'laytintrongdm']);
    Route::get('/chitiet/{id}', [news::class,'chitiettin']);
});
//handle
Route::prefix('xuly')->middleware('auth')->group(function () {
    Route::get('/them', [news::class,'them'])->name('addnews');
    Route::post('/xulythem', [news::class,'xulyThem']);
    Route::get('/xoa/{id}', [news::class,'xoa']);
    Route::get('/capnhat/{id}', [news::class,'capnhat']);
    Route::post('/xulycapnhat', [news::class,'xulycapnhat']);
});;

//notification
route::get('success',function(){
    return (view('success'));
})->name('success');
route::get('error',function(){
    return (view('error'));
})->name('error');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
