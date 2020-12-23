<?php

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


//backend
Route::middleware('role:admin')->group(function() {

	Route::get('dashboard', 'BackendController@dashboard')->name('dashboardpage');

	Route::resource('categories','CategoryController');

	Route::resource('brands','BrandController');

	Route::resource('subcategories','SubcategoryController');

	Route::resource('items','ItemController');
});

//Auth
Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home');


//frontend
Route::get('index','FrontendController@index')->name('indexpage');
Route::get('filtercategory/{id}','FrontendController@categoryfilter')->name('categoryfilterpage');
Route::get('filterbrand/{id}','FrontendController@brandfilter')->name('brandfilterpage');
Route::get('itemdetail/{id}','FrontendController@itemdetail')->name('itemdetailpage');
Route::get('shoppingcart','FrontendController@shoppingcart')->name('shoppingcartpage');