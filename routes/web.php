<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;

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

Route::get('/', [FrontController::class, 'index']);
Route::get('/index', [FrontController::class, 'index']);
Route::get('/about', [FrontController::class, 'about']);
Route::get('/team', [FrontController::class, 'team']);
Route::get('/error', [FrontController::class, 'error']);
Route::get('/service', [FrontController::class, 'service']);
Route::get('/service-single', [FrontController::class, 'service_single']);
Route::get('/blog-grid', [FrontController::class, 'blog_grid']);
Route::get('/blog-with-sidebar', [FrontController::class, 'blog_with_sidebar']);
Route::get('/blog-details', [FrontController::class, 'blog_details']);
Route::get('/contact', [FrontController::class, 'contact']);
Route::get('/header', [FrontController::class, 'header']);
