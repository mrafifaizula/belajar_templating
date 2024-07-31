<?php

use App\Http\Controllers\FrontController;
use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// cet template admin
// Route::get('tes/admin', function () {
//     return view('layouts.admin');
// 

//  Route::group(['prefix'=>'admin','middleware'=>['auth']], function (){
//      Route::get('/', function (){
//          return view('admin.index');
//    });
    
// });

Route::get('/', [FrontController::class, 'index']);
Route::get('about', [FrontController::class, 'about']);
Route::get('contact', [FrontController::class, 'contact']);
Route::get('card', [FrontController::class, 'card']);
Route::get('detail', [FrontController::class, 'detail']);
Route::get('product', [FrontController::class, 'product']);
Route::get('blogs', [FrontController::class, 'blogs']);
Route::get('user', [FrontController::class, 'user']);
Route::get('blogs-detail', [FrontController::class, 'blogsdetail']);
Route::get('privacy', [FrontController::class, 'privacy']);
Route::get('terms', [FrontController::class, 'terms']);
Route::get('faq', [FrontController::class, 'faq']);
Route::get('compaire', [FrontController::class, 'compaire']);
Route::get('wishlist', [FrontController::class, 'wishlist']);
Route::get('become', [FrontController::class, 'become']);
Route::get('flash-sale', [FrontController::class, 'flashsale']);
Route::get('sellers', [FrontController::class, 'sellers']);
Route::get('detail-sellers', [FrontController::class, 'detailsellers']);
Route::get('order', [FrontController::class, 'order']);
Route::get('checkout', [FrontController::class, 'checkout']);


Route::group(['prefix' => 'admin', 'middleware' => ['auth', IsAdmin::class]], function () {
    Route::get('/', function () {
        return view('admin.index');
    });
    
    // untuk Route Backend Lainnya
    Route::resource('user', App\Http\Controllers\UsersController::class);
});
