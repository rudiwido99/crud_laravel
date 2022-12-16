<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BimbelController;

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

Route::get('/home', function(){
    return view('home');
});


Route::get('jenjang', [BimbelController::class, 'index']);
Route::get('jenjang/create', [BimbelController::class, 'create']);
Route::post('jenjang', [BimbelController::class, 'store']);
Route::get('jenjang/edit/{id}', [BimbelController::class, 'edit']);
Route::put('jenjang/{id}', [BimbelController::class, 'editProses']);
Route::delete('jenjang/{id}', [BimbelController::class, 'delete']);