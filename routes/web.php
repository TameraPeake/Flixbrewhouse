<?php

use Inertia\Inertia;
use App\Models\Movies;
use App\Http\Controllers\homepage;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShowtimesController;

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
        'canRegister' => Route::has('admin.register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});


// Route::get('/', homepage::class)
// ->name('Home');


Route::get('/', function () {
    return Inertia::render('Home', [
        'movies' => Movies::latest()->get()
    ]);
})->name('home');


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

/* Admin */

//Show login form
Route::get('/admin/login', [UserController::class, 'login'])->name('login')->middleware('guest');

//show register/create form
Route::get('/admin/register', [UserController::class, 'register'])->name('register')->middleware('guest');

//create new user
Route::post('/store', [UserController::class, 'store']);

//Log in user
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

//Log user out
Route::post('/logout', [UserController::class, 'logout'])->name('logout')->middleware('auth');

//Show Admin Home
Route::get('/admin/home', [UserController::class, 'adminHome'])->name('home')->middleware('auth');

Route::get('AdminHome', function () {
    return Inertia::render('AdminHome');
})->middleware(['auth', 'verified'])->name('AdminHome');

//Show Admin Home
Route::get('/admin/home', [UserController::class, 'adminHome'])->name('home')->middleware('auth');

/*Admin End */




/* Movies */

//show create form
Route::get('/movies/addMovies', [MovieController::class, 'addMovies'])->middleware('auth');

//store movie
Route::post('/movies', [MovieController::class, 'createMovie'])->middleware('auth');

/* Movies End */





/* Showtimes */

//show create showtime form
Route::get('/movies/addShowtimes', [ShowtimesController::class, 'addShowtimes'])->middleware('auth');

//store showtimes
Route::post('/showtimes', [ShowtimesController::class, 'createShowtimes'])->middleware('auth');

/* Showtimes End */




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__ . '/auth.php';
