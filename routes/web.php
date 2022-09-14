<?php

use Illuminate\Support\Facades\Route;

// Superadmin
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;

// Website Controller
use App\Http\Controllers\Website\WebsiteController;


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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Superadmin Router : Start
Route::get('/dashboard', [AdminController::class, 'index']);
// Superadmin Router : End

require __DIR__.'/auth.php';
