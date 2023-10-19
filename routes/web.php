<?php

use Inertia\Inertia;
use App\Http\Controllers\homepage;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('admin.login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});


Route::get('/', homepage::class)
->name('Home');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('giftcards', function () {
    return Inertia::render('GiftCards');
});

Route::get('flixpicks', function () {
    return Inertia::render('FlixPicks');
});


/*
Common Resource Routes
Index - show all listings
Show - Show single listing
Create - show form to create new listing
Store - Store new Listing
Edit - show form to edit listing
Update - update edited listing
Destroy - delete listing

*/

//Show login form
Route::get('/admin/login', [UserController::class, 'login'])->name('login')->middleware('guest');

//Log in user
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

//Log user out
Route::post('/logout', [UserController::class, 'logout'])->name('logout')->middleware('auth');

//Show Admin Home
Route::get('/admin/home', [UserController::class, 'adminHome'])->name('home')->middleware('auth');

Route::get('AdminHome', function () {
    return Inertia::render('AdminHome');
})->middleware(['auth', 'verified'])->name('AdminHome');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__ . '/auth.php';
