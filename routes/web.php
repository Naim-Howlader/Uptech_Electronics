<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommonController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\BlogCategoryController;

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

//  Route::get('/', function () {
//      return view('welcome');
//  });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth:admin'])->name('admin.dashboard');


require __DIR__.'/adminauth.php';

Route::get('/image', [CommonController::class, 'image'])->name('image');

/**
* *-------Front end route--------
*/
 Route::get('/', [CommonController::class, 'index'])->name('index');
 Route::get('/all-products', [CommonController::class, 'allProducts'])->name('allproducts');
 Route::get('/single-category-product/{id}', [CommonController::class, 'singleCategoryProduct'])->name('singleCategoryProduct');

/**
* *-------Admin Dashboard route--------
*/
Route::group(['prefix' => 'admin', 'middleware' => ['auth:admin'], 'as' => 'admin.'], function(){
    Route::get('/products', [AdminDashboardController::class, 'products'])->name('products');
    Route::get('/blogs', [AdminDashboardController::class, 'blogs'])->name('blogs');
});
/**
* *-------Admin Products Route--------
*/
Route::group(['prefix' => 'category', 'middleware' => ['auth:admin'], 'as' => 'category.'], function(){
    Route::get('/add-category', [CategoryController::class, 'add'])->name('add');
    Route::post('/insert-category', [CategoryController::class, 'insert'])->name('insert');
    Route::get('/edit-category/{id}', [CategoryController::class, 'edit'])->name('edit');
    Route::post('/update-category/{id}', [CategoryCOntroller::class, 'update'])->name('update');
    Route::get('/delete-category/{id}', [categoryController::class, 'delete'])->name('delete');
});
Route::group(['prefix' => 'product', 'middleware' => ['auth:admin'], 'as' => 'product.'], function(){
    Route::get('/add-product', [ProductController::class, 'add',])->name('add');
    Route::post('/insert-product', [ProductController::class, 'insert',])->name('insert');
    Route::get('/edit-product/{id}', [ProductController::class, 'edit',])->name('edit');
    Route::post('/update-product/{id}', [ProductController::class, 'update',])->name('update');
    Route::get('/delete-product/{id}', [ProductController::class, 'delete'])->name('delete');
});

/**
 * *----------Admin Blogs Route---------
 */
Route::group(['prefix'=> 'blogs_category','middleware' => ['auth:admin'], 'as' => 'blog_category.'], function(){
    Route::get('/add-category', [BlogCategoryController::class, 'add'])->name('add');
    Route::post('/insert-category', [BlogCategoryController::class, 'insert'])->name('insert');
    Route::get('/edit-category/{id}', [BlogCategoryController::class, 'edit'])->name('edit');
    Route::post('/update-category/{id}', [BlogCategoryController::class, 'update'])->name('update');
    Route::get('/delete-category/{id}', [BlogCategoryController::class, 'delete'])->name('delete');
});

/**
 **-------Add to cart Route------
 */
Route::group(['prefix' => 'cart', 'as' => 'cart.'], function(){
    Route::get('/add-to-cart/{id}', [CartController::class, 'addToCart'])->name('add');
    Route::get('/view-cart', [CartController::class, 'viewCart'])->name('view');
    Route::post('/place-order',[OrderController::class, 'placeOrder'])->name('place-order');
    Route::get('/confirm-order', function(){
        return view('frontend.order-place');
    });

});
Route::delete('/cart-remove_cart', [CartController::class, 'removeCart'])->name('remove_cart');
Route::patch('/cart-update_cart', [CartController::class, 'updateCart'])->name('update_cart');


