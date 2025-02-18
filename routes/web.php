<?php

use App\Models\Contact;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MerchantController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\AdminLoginController;


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

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/customer', function () {
    return view('customer');
});

Route::get('/men', function () {
    return view('men');
});

Route::get('/women', function () {
    return view('women');
});

Route::get('/merchant', [MerchantController::class, 'index'])->name('list.merchant');
Route::get('/customer', [MerchantController::class, 'user'])->name('list.customer');
Route::get('/men', [ProductController::class, 'men'])->name('list.men');
Route::get('/women', [ProductController::class, 'women'])->name('list.women');
Route::post('/approve/{id}', [ProductController::class, 'approve'])->name('approve');
Route::post('/reject/{id}', [ProductController::class, 'reject'])->name('reject');
Route::post('/destroy/{id}', [ProductController::class, 'destroy'])->name('destroy');

Route::get('/productmanage', function () {
    return view('productmanage');
});

Route::get('/usermanage', function () {
    return view('usermanage');
});

Route::get('/message', function () {
    $messages = Contact::all();
    return view('message',compact('messages'));
});

Route::get('/register', [UserController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [UserController::class, 'register']);
Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserController::class, 'login']);

//admin login

Route::get('/', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/', [AdminLoginController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth:admin')->name('admin.dashboard');

