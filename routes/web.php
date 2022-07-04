<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
 use App\Http\Controllers\CommentController;
 use App\Http\Controllers\AboutController;

use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::middleware('user_must_be_admin')->group(static function () {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('create_category', [CategoryController::class, 'create'])->name('category');

    Route::post('create_category', [CategoryController::class, 'newCat'])->name('saveCat');

    Route::get('/all_category', [CategoryController::class, 'showCat'])->name('allCat');

    Route::get('/category/delete/{id}', [CategoryController::class, 'destroy'])->name('deleteCat');

    Route::get('update_category/{id}', [CategoryController::class, 'update'])->name('updateCat');

    Route::post('/category/{id}', [CategoryController::class, 'edit'])->name('editCat');

    Route::get('/create_post', [PostController::class, 'create'])->name('createPost');

    Route::post('/create_post', [PostController::class, 'store'])->name('savePost');

    Route::get('/all_post', [PostController::class, 'showPost'])->name('dispalyPost');

    Route::get('/post/delete/{id}', [PostController::class, 'destroyPost'])->name('deletePost');
});

Route::get('/posts', [PostController::class, 'allPost'])->name('displayPost');

Route::get('/post_details/{id}', [PostController::class, 'SinglePost'])->name('readPost');

Route::post('/comment', [CommentController::class, 'shearComment'])->name('comme');

Route::get('/about_us', [AboutController::class, 'aboutUs'])->name('about');

Route::get('/contact_us', [AboutController::class, 'contactUs'])->name('contact');

Route::get('/blog_entries', [AboutController::class, 'blogEntries'])->name('read');


