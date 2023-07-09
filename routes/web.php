<?php

use App\Http\Controllers\Admin\NccController;
use App\Http\Controllers\Admin\QuanlytourCotroller;
use App\Models\Danhmucdiadiem;
use Illuminate\Support\Facades\Route;
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

Route::prefix('admin')->group(function(){
    Route::get('/', function () {
        return view('Layouts.master');
    });
    Route::prefix('nhacungcap')->group(function () {
        Route::get('/', [NccController::class, 'index'])->name('ncc.index');
        Route::post('/save', [NccController::class, 'save'])->name('ncc.save');
        Route::post('/update', [NccController::class, 'update'])->name('ncc.update');
        Route::get('/delete/{ma_ncc}', [NccController::class, 'delete'])->name('ncc.delete');

    });

    Route::prefix('quan-ly-tour')->group(function () {
        Route::get('/dm-dia-diem', [QuanlytourCotroller::class, 'index'])->name('dmdd.index');
        Route::post('/them-dia-diem', [QuanlytourCotroller::class, 'AddDiadiem'])->name('dmdd.addDiadiem');
        Route::delete('/xoa-dm-dia-diem/{id}', [QuanlytourCotroller::class, 'DestroyDmdiadiem'])->name('dmdd.destroyDmdiadiem');
    });



});

