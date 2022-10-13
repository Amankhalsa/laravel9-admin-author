<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Author\AuthorDashboardController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::group([ 'as'=>'admin.', 'prefix'=>'admin' , 'namespace'=>'Admin', 'middleware'=>['auth','admin']],
// function(){
// 	Route::get('dashboard','DashboardController@index')->name('dashboard');
// });


Route::group(['as'=>'admin.', 'prefix' =>'Admin', 'middleware'=>['auth','admin']], function(){

    Route::controller(AdminDashboardController::class)->group(function () {
        Route::get('/dashboard', 'adminindex')->name('dashboard');

    });
});


Route::group(['as'=>'author.', 'prefix' =>'Author', 'middleware'=>['auth','author']], function(){

    Route::controller(AuthorDashboardController::class)->group(function () {
        Route::get('/dashboard', 'authorindex')->name('dashboard');

    });
});
