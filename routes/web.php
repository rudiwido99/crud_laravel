<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ArticleController;
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
    return view('home', [
        'title' => 'Home',
    ]);
});

Route::get('about', function(){
    return view('frontend.about', [
        'title' => 'About'
    ]);
});

Route::get('posts', function(){
    $blog = [
                [
                    'judul' => 'Postingan Pertama',
                    'slug' => 'postingan-pertama',
                    'author' => 'Rudi Wido A',
                    'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.Fugit similique tempore animi! Reprehenderit dolorum eaque fuga repellendus sed accusamus deserunt!'
                ],
                [
                    'judul' => 'Postingan Kedua',
                    'slug' => 'postingan-kedua',
                    'author' => 'Feri Kurniawan',
                    'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.Fugit similique tempore animi! Reprehenderit dolorum eaque fuga repellendus sed accusamus deserunt!'
                ]
        ];
    return view('frontend.blog', [
        'title' => 'Blog',
        'blog' => $blog
    ]);
});

Route::get('post/{slug}', function($slug){
    return view('frontend.post',[
        'title' => 'Single Post'
    ]);
});

Route::get('dashboard', function(){
    return view('dashboard');
});

Route::get('brand', [BrandController::class, 'index']);
Route::get('brand/create', [BrandController::class, 'create']);
Route::post('brand', [BrandController::class, 'addBrand']);
Route::get('brand/edit/{id}', [BrandController::class, 'edit']);
Route::put('brand/{id}', [BrandController::class, 'editProses']);
Route::delete('brand/{id}', [BrandController::class, 'delete']);

Route::get('product/trash', [ProductController::class, 'trash']);
Route::get('product/restore/{id?}', [ProductController::class, 'restore']);
Route::get('product/delete/{id?}', [ProductController::class, 'delete']);
Route::resource('product', ProductController::class);

Route::resource('article', ArticleController::class);


