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
use App\Http\Controllers\BlogController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\NewsLetterController;
use App\Http\Controllers\OrderUpdate;
use App\Http\Controllers\SslCommerzPaymentController;
use App\Http\Controllers\UserProfileController;
use Illuminate\Routing\RouteGroup;

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

/**
 * *Testing Route
 */
Route::get('/test', function(){
    return view('frontend.invoice');
});

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
 Route::get('/single-blog/{id}', [CommonController::class, 'singleBlog'])->name('singleblog');
 Route::get('/blog', [CommonController::class, 'allBlogs'])->name('allblogs');

/**
* *-------Admin Dashboard route--------
*/
Route::group(['prefix' => 'admin', 'middleware' => ['auth:admin'], 'as' => 'admin.'], function(){
    Route::get('/products', [AdminDashboardController::class, 'products'])->name('products');
    Route::get('/blogs', [AdminDashboardController::class, 'blogs'])->name('blogs');
    Route::get('/orders', [AdminDashboardController::class, 'orders'])->name('orders');

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
Route::group(['prefix' => 'blog', 'middleware' => ['auth:admin'], 'as' => 'blog.'], function(){
    Route::get('/add-blog', [BlogController::class, 'add'])->name('add');
    Route::post('/insert-blog', [BlogController::class, 'insert'])->name('insert');
    Route::get('/edit-blog/{id}', [BlogController::class, 'edit'])->name('edit');
    Route::post('/update-blog/{id}', [BlogController::class, 'update'])->name('update');
    Route::get('/delete-blog/{id}', [BlogController::class, 'delete'])->name('delete');
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


/**
 * *--------Invoice Route-------
 */
Route::group(['prefix' => 'invoice', 'as' => 'invoice.'], function(){
    Route::get('/generate-invoice/{id}', [InvoiceController::class, 'generateInvoice'])->name('generate');
});


/**
 * *--------Order Update Route-------
 */
Route::group(['prefix' => 'admin/order', 'middleware' => ['auth:admin'], 'as' => 'order.'], function(){
    Route::get('/status-edit/{id}', [OrderUpdate::class, 'editStatus'])->name('edit-status');
    Route::post('/update-edit/{id}', [OrderUpdate::class, 'updateStatus'])->name('update-status');
});



/** 
 * * ---------User Profile Controller----------
 * */
Route::group(['prefix' => 'user/profile', 'middleware' => 'web', 'as' => 'profile.'],function(){
    Route::get('/dashboard', [UserProfileController::class, 'dashboard'])->name('dashboard');
    Route::get('/my-orders', [UserProfileController::class, 'myOrders'])->name('my-orders');
});



/** 
 * * ---------News Letter Route----------
 * */
Route::group(['prefix' => 'newsletter', 'as' => 'newsletter.'], function(){
    Route::post('/subscribe', [NewsLetterController::class, 'subscribe'])->name('subscribe');
});


/** 
 * * ---------SSL commerce payment gateway----------
 * */
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout'])->name('example2');

Route::post('/pay', [SslCommerzPaymentController::class, 'index'])->name('pay');
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax'])->name('payAjax');

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);






