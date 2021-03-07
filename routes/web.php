<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
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

Route::get('/', 'FrontController@index')->name('index');
Route::get('/product','FrontController@product')->name('product');

Auth::routes();
Route::middleware(['auth'])->group(function () {


Route::get('/dashboard', 'HomeController@index')->name('home');
Route::get('/brand/add_brand', 'BrandController@add_brand')->name('add_brand');

Route::post('/brand/create_brand','BrandController@create_brand')->name('create_brand');
Route::get('/brand/manage_brand', 'BrandController@manage_brand')->name('manage_brand');
// Route::get('/brand/change_status/{id}', 'BrandController@changeStatus')->name('change_status');
Route::get('/brand/edit_brand/{id}', 'BrandController@editBrand')->name('edit_brand');
Route::get('/brand/delete_brand/{id}', 'BrandController@deleteBrand')->name('delete_brand');
Route::post('/brand/update_brand', 'BrandController@updateBrand')->name('update_brand');
Route::get('/brand/brand_status/{id}/{s}', 'BrandController@brandStatus')->name('brand_status');

//categories
Route::get('/category/manage_category', 'CategoryController@manage_category')->name('manage_category');
Route::get('/category/add_category','CategoryController@add_category')->name('add_category');
Route::post('/category/create_category','CategoryController@create_category')->name('create_category');
Route::get('/category/category_status/{id}/{s}', 'CategoryController@categoryStatus')->name('category_status');
Route::get('/category/edit_category/{id}', 'CategoryController@editCategory')->name('edit_category');
Route::post('/category/update_category', 'CategoryController@updateCategory')->name('update_category');
Route::get('/category/delete_category/{id}', 'CategoryController@deleteCategory')->name('delete_category');

Route::get('/category/manage_sub_category', 'SubCategoryController@manage_sub_category')->name('manage_sub_category');
Route::get('/category/add_subcategory','SubCategoryController@add_sub_category')->name('add_subcategory');
Route::post('/category/create_sub_category','SubCategoryController@create_sub_category')->name('create_sub_category');
Route::get('/category/sub_category_status/{id}/{s}', 'SubCategoryController@subCategoryStatus')->name('sub_category_status');
Route::get('/category/edit_sub_category/{id}', 'SubCategoryController@editSubCategory')->name('edit_sub_category');
Route::post('/category/update_sub_category', 'SubCategoryController@updateSubCategory')->name('update_sub_category');
Route::get('/category/delete_sub_category/{id}', 'SubCategoryController@deleteSubCategory')->name('delete_sub_category');


Route::get('/category/add_sub_sub_category','SubSubCategoryController@add_sub_sub_category')->name('add_sub_sub_category');

});
