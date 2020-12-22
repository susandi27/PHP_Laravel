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

/*Route::get('/', function () {
    return view('welcome');
});*/




//frontend
Route::get('/','FrontendController@index')->name('homepage');
Route::get('itemdetail/{id}','FrontendController@itemdetail')->name('itemdetailpage');

Route::get('filtersubcategory/{id}','FrontendController@filtersubcategory')->name('filtersubcategorypage');

Route::get('shoppingcart','FrontendController@shoppingcart')->name('shoppingcartpage');







//backend
Route::middleware('role:admin')->group(function(){ //admin မှပေးဝင်
Route::get('dashboard','BackendController@dashboard')->name('dashboardpage');
Route::resource('categories','CategoryController');
Route::resource('brands','BrandController');
Route::resource('subcategories','SubcategoryController');
Route::resource('items','ItemController');
});

//Auth
Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home');


