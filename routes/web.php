<?php

use App\Http\Controllers\Admin\NccController;
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
        Route::get('/update', [NccController::class, 'update'])->name('ncc.update');
    });

});

