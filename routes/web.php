<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommonController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

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



/**
* *-------Front end route--------
*/
 Route::get('/', [CommonController::class, 'index'])->name('index');

/**
* *-------Admin Dashboard route--------
*/
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function(){
    Route::get('/products', [AdminDashboardController::class, 'products'])->name('products');
});
/**
* *-------Admin Product route--------
*/
Route::group(['prefix' => 'category', 'as' => 'category.'], function(){
    Route::get('/add-product', [CategoryController::class, 'add'])->name('add');
    Route::post('/insert-category', [CategoryController::class, 'insert'])->name('insert');
    Route::get('/edit-category/{id}', [CategoryController::class, 'edit'])->name('edit');
    Route::post('/update-category/{id}', [CategoryCOntroller::class, 'update'])->name('update');
    Route::get('/delete-category/{id}', [categoryController::class, 'delete'])->name('delete');
});
