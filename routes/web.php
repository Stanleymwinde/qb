<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AuthController;



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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__ . '/auth.php';


Route::get('/', [UserController::class, 'index'])->name('home');
Route::get('/about', [UserController::class, 'about'])->name('about');
Route::get('/services', [UserController::class, 'services'])->name('services');
Route::get('/projects', [UserController::class, 'projects'])->name('projects');
Route::get('/contact', [UserController::class, 'contact'])->name('contact');
Route::get('/blogs', [UserController::class, 'blog'])->name('blog');
Route::get('/singleblog/{slug}', [UserController::class, 'singleblog'])->name('singleblog');
Route::get('/quote', [UserController::class, 'quote'])->name('quote');




Route::get('/project/{id}', [UserController::class, 'singleproject'])->name('single');

//send mail
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
Route::post('/quote', [ContactController::class, 'quote'])->name('quote.send');


//admin routes
Route::get('/dashboard', [AdminController::class, 'kenbras'])->name('admin')->middleware('isLoggedIn');
Route::get('/forms', [AdminController::class, 'forms'])->name('forms')->middleware('isLoggedIn');
Route::get('/tables', [AdminController::class, 'tables'])->name('tables')->middleware('isLoggedIn');

// Route::get('/create_blog', [BlogController::class, 'create'])->name('create_blog')->middleware('isLoggedIn');
// Route::get('/create_category', [CategoryController::class, 'createCategory'])->name('create_category')->middleware('isLoggedIn');

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('alreadyLoggedIn');

// Auth Routes
Route::post('/login-user', [AuthController::class, 'loginUser'])->name('loginUser');

Route::get('/register', [AuthController::class, 'register'])->name('register')->middleware('alreadyLoggedIn');
Route::post('/register-user', [AuthController::class, 'registerUser'])->name('registerUser');

// Route::get('/projects', [AdminController::class, 'projects'])->name('projects');
// Route::get('/contact', [AdminController::class, 'contact'])->name('contact');
// Route::get('/blogs', [AdminController::class, 'blog'])->name('blog');



//Category Routes
Route::get('/create_category', [CategoryController::class, 'createCategory'])->name('create_category')->middleware('isLoggedIn');

Route::post('/storeCategory', [CategoryController::class, 'storeCategory'])->name('storeCategory')->middleware('isLoggedIn')->middleware('isLoggedIn');

Route::get('/showCategory', [CategoryController::class, 'showCategory'])->name('showCategory')->middleware('isLoggedIn')->middleware('isLoggedIn');

Route::get('/editCategory/{category}', [CategoryController::class, 'editCategory'])->name('editCategory')->middleware('isLoggedIn')->middleware('isLoggedIn');

Route::put('/updateCategory/{category}', [CategoryController::class, 'updateCategory'])->name('updateCategory')->middleware('isLoggedIn')->middleware('isLoggedIn');

Route::delete('/deleteCategory/{category}', [CategoryController::class, 'deleteCategory'])->name('deleteCategory')->middleware('isLoggedIn')->middleware('isLoggedIn');
//end Category Routes

//Blog Routes
Route::get('/createBlogs', [BlogController::class, 'create'])->name('createBlogs')->middleware('isLoggedIn');

Route::post('/storeBlogs', [BlogController::class, 'store'])->name('storeBlogs')->middleware('isLoggedIn');

Route::get('/showBlogs', [BlogController::class, 'showBlogs'])->name('showBlogs')->middleware('isLoggedIn');

Route::get('/editBlog/{blog}', [BlogController::class, 'edit'])->name('editBlogs')->middleware('isLoggedIn');

// Route::get('/{post:slug}', [BlogController::class, 'singleBlog'])->name('singleBlogs')->middleware('isLoggedIn');

Route::put('/updateBlog/{blog}', [BlogController::class, 'updateBlog'])->name('updateBlogs')->middleware('isLoggedIn');

Route::delete('/{post:slug}/deleteBlog', [BlogController::class, 'destroy'])->name('deleteBlogs')->middleware('isLoggedIn');
//end Blog Routes
