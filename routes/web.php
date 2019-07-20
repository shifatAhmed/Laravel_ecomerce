<?php
use App\Http\Controllers\HomeController;

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
//fontend
Route::get('/', 'HomeController@index');





//backend controller

Route::get('/admin', 'AdminController@index');
Route::get('/dashboard','AdminController@show_dashboard');
Route::post('/admin_dashboard','AdminController@dashboard');
Route::get('/logout','SuperAdminController@logout');

//category routes

Route::get('/add-category','CategoryController@index');
Route::get('/all-category','CategoryController@all_category');
Route::post('/save-category','CategoryController@save_category');
