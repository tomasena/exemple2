<?php
use Illuminate\Support\Facades\Route;

// necessaires pour laravel 8
use App\Http\Controllers\WelcomeController; 
use App\Http\Controllers\ProductController; 
use App\Http\Controllers\CartController; 
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ContactController;

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

//Route::get('/', 'App\Http\Controllers\WelcomeController@index');
//Route::get('/', 'WelcomeController@index');  // avec use
Route::get('/', [WelcomeController::class, 'index'])->name('home'); // route nommé

Route::get('photo', [PhotoController::class, 'create']);
Route::post('photo', [PhotoController::class, 'store']);

Route::get('contact',  [ContactController::class, 'create']);   // non : 'ContactController@create'
Route::post('contact', [ContactController::class, 'store']); 

Route::get('users', [UsersController::class, 'create']);
Route::post('users', [UsersController::class, 'store']);

Route::get('product', [ProductController::class, 'list']);
// le paramètre est passé.  
Route::get('product/{id}', [ProductController::class,'show']) ->where('id', '[0-9]+');

Route::get('cart', [CartController::class, 'show']);



 