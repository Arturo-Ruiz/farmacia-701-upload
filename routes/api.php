<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('users', function () {
    return datatables()
    ->eloquent(App\User::query())
    ->addColumn('actions', 'admin.users.actions')
    ->rawColumns(['actions'])
    ->toJson();
});

Route::any('users/delete', 'Admin\UsersController@destroy');
Route::any('users/edit', 'Admin\UsersController@edit');


Route::get('dayrate', function () {
    return datatables()
    ->eloquent(App\DayRate::query())
    ->addColumn('actions', 'admin.dayrate.actions')
    ->rawColumns(['actions'])
    ->toJson();
});

Route::any('dayrate/edit', 'Admin\DayRateController@edit');
Route::any('dayrate/show', 'Admin\DayRateController@show');


Route::get('categories', function () {
    return datatables()
    ->eloquent(App\Category::query())
    ->addColumn('actions', 'admin.categories.actions')
    ->rawColumns(['actions'])
    ->toJson();
});

Route::any('categories/delete', 'Admin\CategoriesController@destroy');
Route::any('categories/edit', 'Admin\CategoriesController@edit');
Route::any('categories/show', 'Admin\CategoriesController@show');


Route::get('taxes', function () {
    return datatables()
    ->eloquent(App\Tax::query())
    ->addColumn('actions', 'admin.tax.actions')
    ->rawColumns(['actions'])
    ->toJson();
});

Route::any('tax/delete', 'Admin\TaxesController@destroy');
Route::any('tax/edit', 'Admin\TaxesController@edit');
Route::any('tax/show', 'Admin\TaxesController@show');


Route::get('products', function () {
    return datatables()
    ->eloquent(App\Product::query())
    ->toJson();
});

Route::get('ads', function () {
    return datatables()
    ->eloquent(App\Ad::query())
    ->addColumn('image', 'admin.ads.image')
    ->addColumn('actions', 'admin.ads.actions')
    ->rawColumns(['actions','image'])
    ->toJson();
});

Route::any('ads/delete', 'Admin\AdsController@destroy');
Route::any('ads/edit', 'Admin\AdsController@edit');
Route::any('ads/show', 'Admin\AdsController@show');


Route::get('carousel', function () {
    return datatables()
    ->eloquent(App\Carousel::query())
    ->addColumn('image', 'admin.carousel.image')
    ->addColumn('actions', 'admin.carousel.actions')
    ->rawColumns(['actions','image'])
    ->toJson();
});

Route::any('carousel/delete', 'Admin\CarouselsController@destroy');
Route::any('carousel/edit', 'Admin\CarouselsController@edit');
Route::any('carousel/show', 'Admin\CarouselsController@show');


Route::any('dollars', 'Web\WebController@dollars');
Route::any('bs', 'Web\WebController@bs');



