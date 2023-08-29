<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NavigationPageController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('auth.register');
});



Route::get('/dashboard', function () {
    return view('homepage');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::resource('admin',AdminController::class);
Route::get('admin/delete',[AdminController::class,'delete'])->name('admin.delete');
// Route::get('delete/{id}',[AdminController::class,'delete'])->name('admin.delete');
// Route::get('/home',[PageController::class,'index']);


Route::get('page/index',[PageController::class,'home'])->name('page.home');
Route::get('page/about',[PageController::class,'viewAbout'])->name('page.about');
Route::get('page/category',[PageController::class,'viewCategory'])->name('page.category');
Route::get('page/blog',[PageController::class,'viewBlog'])->name('page.blog');
Route::get('page/latest_news',[PageController::class,'viewLatestNews'])->name('page.latest_news');
Route::get('page/blog_details',[PageController::class,'viewBlogDetails'])->name('page.blog_details');
Route::get('page/element',[PageController::class,'viewElement'])->name('page.element');
Route::get('page/contact',[PageController::class,'viewContact'])->name('page.contact');
Route::get('show-details/{id}',[PageController::class,'show_details'])->name('page.details');
Route::post('show-details/{id}',[PageController::class,'show_details'])->name('page.details');
Route::get('show-cards',[PageController::class,'showPost'])->name('show.card');

Route::get('/get-cards/{id}', [PostController::class, 'getCards'])->name('get-cards');
Route::get('/cards', [CardController::class,'index']);
Route::get('/cards/all', [CardController::class,'showAll']);


Route::resource('post',PostController::class);
Route::resource('category',CategoryController::class);
Route::get('delete',[CategoryController::class,'delete'])->name('category.delete');

// Route::post('comment/store',[CommentController::class,'store'])->name('comments.store');
Route::resource('comment',CommentController::class);


require __DIR__.'/auth.php';
