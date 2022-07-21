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

Auth::routes();


//Web Routes
Route::redirect('/', 'Inicio', 301);
Route::get('Inicio', 'Web\WebController@index')->name('inicio');

Route::get('Inicio-Dolares', 'Web\WebController@index_dollars')->name('inicio.dolares');

Route::post('/Inicio/Realizar-Busqueda', 'Web\WebController@search')->name('search');

Route::post('/Inicio/Realizar-Busqueda-En-Dolares', 'Web\WebController@search_dollars')->name('search_dollars');


Route::get('Carrito', 'Web\WebController@cart')->name('cart');
Route::get('Carrito-Dolares', 'Web\WebController@cart_dollars')->name('cart_dollars');

Route::post('/Carrito/Pedido', 'Web\WebController@cartSave')->name('cartSave');
Route::post('/Carrito/Pedido/Dolares', 'Web\WebController@cartSaveDollars')->name('cartSaveDollars');


//Admin Routes
Route::get('Iniciar-Sesion', 'Admin\LoginController@index')->name('login-admin');

Route::get('/Panel-Administrativo', 'Admin\PanelController@index')->name('panel-admin');


Route::Resource('/Users', 'Admin\UsersController');

Route::post('/Users/update', 'Admin\UsersController@update')->name('user.update');


Route::Resource('/DayRate', 'Admin\DayRateController');

Route::post('/DayRate/update', 'Admin\DayRateController@update')->name('dayrate.update');

Route::Resource('/Categories', 'Admin\CategoriesController');

Route::post('/Category/update', 'Admin\CategoriesController@update')->name('category.update');


Route::Resource('/Taxes', 'Admin\TaxesController');

Route::post('/Taxes/update', 'Admin\TaxesController@update')->name('taxe.update');


Route::Resource('/Publicidad', 'Admin\AdsController');

Route::post('/Publicidad/guardar', 'Admin\AdsController@update')->name('Publicidad.guardar');

Route::Resource('/Carrusel', 'Admin\CarouselsController');

Route::post('/Carrusel/guardar', 'Admin\CarouselsController@update')->name('Carrusel.guardar');


Route::Resource('/Productoss', 'Admin\ProductsController');

Route::get('/Products/upload-file', 'Admin\ProductsController@upload_file')->name('product.upload.file');

Route::post('/Products/upload', 'Admin\ProductsController@upload')->name('product.upload.store');

Route::post('/Productos/update', 'Admin\ProductsController@update')->name('product.update');

Route::get('/products/pagination', 'Web\WebController@pagination')->name('products_pagination');

Route::get('/products/pagination/dollars', 'Web\WebController@pagination_dollars')->name('products_pagination_dollars');

