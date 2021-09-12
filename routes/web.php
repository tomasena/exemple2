<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController; // ajouté. Lavarvel 8 ne troube pas le controleur

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

Route::get('/', 'App\Http\Controllers\WelcomeController@index');
//Route::get('/', 'WelcomeController@index');  // avec use
// Route::get('/', [WelcomeController::class, 'index']);

Route::get('/product', function () {
    return view('product-list');
});

Route::get('/product/{id}', function ($id) {
    return view('product-detail')->with('numero', $id);
}) ->where('id', '[0-9]+');

Route::get('/cart', function () {
    return view('cart');
});


 