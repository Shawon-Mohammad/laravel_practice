<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::get('dashboard',[DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('categories',[CategoryController::class, 'categories'])->name('categories');
Route::get('add-category',[CategoryController::class, 'addcategory'])->name('addcategory');
Route::post('post-category',[CategoryController::class, 'postcategory'])->name('postcategory');



require __DIR__ . '/auth.php';
