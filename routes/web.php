<?php

// use App\Models\User;
// use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ArticlePostController;
use App\Http\Controllers\AdminCategoryController;

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
        'title' => 'Home'
    ]);
});

Route::get('about', function(){
    return view('frontend.about', [
        'title' => 'About',
        'active' => 'about',
    ]);
});

Route::get('menu', function(){
    return view('frontend.menu');
});

Route::get('contact', function(){
    return view('frontend.contact');
});

Route::get('categories', function(){
    return view('frontend.categories', [
        'title' => 'Post Category',
        'active' => 'categories',
        'categories' => Category::all(),
    ]);
});

// Route::get('categories/{category:slug}', function(Category $category){
//     return view('frontend.blog', [
//         'title' => "Post By Category : $category->name",
//         'active' => 'categories',
//         'blog' => $category->articles->load('author', 'category'),
//     ]);
// });

// Route::get('authors/{author:username}', function(User $author){
//     return view('frontend.blog', [
//         'title' => "Post By User : $author->name",
//         'active' => 'posts',
//         'blog' => $author->articles->load('author', 'category'),
//     ]);
// });

Route::get('login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('login', [LoginController::class, 'authenticate']);
Route::post('logout', [LoginController::class, 'logout']);

Route::get('register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store']);


// Route::get('dashboard', function(){
//     return view('dashboard')->middleware('auth');
// });

Route::get('dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::resource('article', ArticlePostController::class)->middleware('auth');
Route::get('article/checkSlug', [ArticlePostController::class, 'checkSlug'])->middleware('auth');

Route::get('posts', [ArticleController::class, 'index']);
Route::get('post/{article:slug}', [ArticleController::class, 'show']);

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
Route::resource('dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');
// Route::resource('dashboard/categories', AdminCategoryController::class)->except('show');



