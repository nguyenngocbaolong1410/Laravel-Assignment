<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
//->middleware('AdminLogin');
//->middleware('UserLogin');
Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'HomeController@index');
Route::get('/showProduct/{id}', 'productController@index');
Route::get('/productDetail/{id}', 'productController@productDetail');

Route::get('/login', 'loginController@login');
Route::post('login','loginController@login')->name('login');
Route::get('/logout', 'loginController@logout');
Route::get('/registered', 'loginController@registered');

Route::get('/addToCart/{id}', 'cartController@addToCart');
Route::get('/upQuantityCart/{id}', 'cartController@upQuantity');
Route::get('/downQuantityCart/{id}', 'cartController@downQuantity');
Route::get('/deleteItemCart/{id}', 'cartController@deleteItemCart');
Route::get('/cartShow', 'cartController@cartShow');

//ADMIN 
Route::get('/admin', 'AdminController@index')->middleware('AdminLogin');
Route::get('/admin/dashboard', 'AdminController@index')->middleware('AdminLogin');
//ADMIN PRODUCT
Route::get('/admin/dashboard/ListProduct', 'AdminController@indexProduct')->middleware('AdminLogin');//Danh sách Product

Route::post('image.upload.post','AdminController@xuLyUpload')->name('image.upload.post')->middleware('AdminLogin');//Gửi dữ liệu hình ảnh

Route::get('/admin/dashboard/ImagesNoneAdd', function () {return view('admin/product/Img_add_noneAdd_product');})->middleware('AdminLogin');//Thêm hình ảnh //Lưu hình !!!
Route::get('/admin/dashboard/ForgerImages', 'AdminController@forgetImagesUpload')->middleware('AdminLogin');//xóa dữ hiệu hình ảnh

Route::get('/admin/dashboard/create','AdminController@create')->middleware('AdminLogin')->middleware('AdminLogin');//thêm sản phẩm
Route::post('/admin/dashboard/store','AdminController@store')->middleware('AdminLogin');//Gửi dữ liệu sản phẩm

Route::get('/admin/dashboard/edit/{id}','AdminController@edit')->middleware('AdminLogin');//chỉnh sửa sản phẩm
Route::post('/admin/dashboard/update/{id}','AdminController@update')->middleware('AdminLogin');//Update sản phẩm

Route::get('/admin/dashboard/delete/{id}','AdminController@delete')->middleware('AdminLogin');//Xóa sản phẩm


//ADMIN CATALOG
Route::get('/admin/dashboard/ListCatalog', 'AdminCatalogController@indexCatalog')->middleware('AdminLogin');//Danh sách Catalog

Route::get('/admin/dashboard/createCatalog','AdminCatalogController@createCatalog')->middleware('AdminLogin');//thêm sản phẩm
Route::post('/admin/dashboard/storeCatalog','AdminCatalogController@storeCatalog')->middleware('AdminLogin');//Gửi dữ liệu sản phẩm

Route::get('/admin/dashboard/editCatalog/{id}','AdminCatalogController@editCatalog')->middleware('AdminLogin');//chỉnh sửa sản phẩm
Route::post('/admin/dashboard/updateCatalog/{id}','AdminCatalogController@updateCatalog')->middleware('AdminLogin');//Update sản phẩm

Route::get('/admin/dashboard/deleteCatalog/{id}','AdminCatalogController@deleteCatalog')->middleware('AdminLogin');//Xóa sản phẩm

//ADMIN USER
Route::get('/admin/dashboard/User', 'AdminUserController@indexUser')->middleware('AdminLogin');//Danh sách User
Route::get('/admin/dashboard/deleteuser/{id}', 'AdminUserController@deleteuser')->middleware('AdminLogin');//Xóa User 

//ADMIN ORDER
Route::get('/admin/dashboard/ListOrder', 'AdminOrderController@indexOrder')->middleware('AdminLogin');//Danh sách Catalog
Route::get('/admin/dashboard/deleteOrder/{id}', 'AdminOrderController@deleteOrder')->middleware('AdminLogin');//Xóa User 

Route::get('/user/account/profile', 'ProfileController@index');//Danh sách User