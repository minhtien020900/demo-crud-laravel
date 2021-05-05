<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;


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

//Route::middleware(['auth'])->group(function () {
//    Route::get('/', function () {
//        return view('index');
//    })->name("home");
//});

//Route::get('/list-product', [ProductController::class, 'index'])->name('list-product');
Route::get('/',function (){
   return view('index');
})->name('home');
Route::resource('list-product',ProductController::class)->middleware('AdminRole');
//Route::resource('/list-product', [ProductController::class])->middleware('AdminRole');

Route::get('/test', [ProductController::class, 'test']);

Auth::routes();

//Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

Route::get('logout', function () {
    Auth::logout();
    Session::regenerate();
    return redirect('/login');
});
