<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard', function(){
    return view('index');
});

Route::get('brand', [BrandController::class, 'index']);
Route::get('brand/create', [BrandController::class, 'create']);
Route::post('brand', [BrandController::class, 'addBrand']);
Route::get('brand/edit/{id}', [BrandController::class, 'edit']);
Route::put('brand/{id}', [BrandController::class, 'editProses']);
Route::delete('brand/{id}', [BrandController::class, 'delete']);

Route::resource('product', ProductController::class);
