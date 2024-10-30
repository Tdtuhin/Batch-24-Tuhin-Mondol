<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProductController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/', function () {
//     return view('index');
// });


Route::get('/', [FrontendController::class, 'index'])->name('/');
Route::get('/allproduct', [ProductController::class, 'allproduct'])->name('allproduct');
Route::get('/addproduct', [ProductController::class, 'addproduct'])->name('addproduct');
Route::post('/storeproduct', [ProductController::class, 'storeproduct'])->name('storeproduct');
Route::get('/editproduct/{id}', [ProductController::class, 'editproduct'])->name('editproduct');
Route::post('/updateproduct/{id}',[ProductController::class,'updateproduct'])->name('updateproduct');
Route::get('/deleteproduct/{id}', [ProductController::class, 'deleteproduct'])->name('deleteproduct');
    
