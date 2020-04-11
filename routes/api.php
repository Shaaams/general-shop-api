<?php

use App\Http\Resources\UserFullResource;
use App\Product;
use App\User;
use Illuminate\Http\Request;


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

// Get Categories
Route::get('categories', 'Api\CategoryController@index');
Route::get('categories/{id}', 'Api\CategoryController@show');

// Get Tags
Route::get('tags', 'Api\TagController@index');
Route::get('tags/{id}', 'Api\TagController@show');

// Get Products
Route::get('products', 'Api\ProductController@index');
Route::get('products/{id}', 'Api\ProductController@show');

// Get Images
Route::get('images', 'Api\ImageController@index');
Route::get('images/{id}', 'Api\ImageController@show');

// Get Review

Route::get('reviews', 'Api\ReviewController@index');
Route::get('reviews/{id}', 'Api\ReviewController@show');

// Get General Routes
Route::get('countries', 'Api\CountryController@index');
Route::get('countries/{id}/states', 'Api\CountryController@showStates');
Route::get('countries/{id}/cities', 'Api\CountryController@showCities');

// Get All Users

Route::get('users', function(){
    return UserFullResource::collection(User::paginate());
});

Route::post('auth/register', 'Api\AuthController@register');
Route::post('auth/login', 'Api\AuthController@login');

// Route::get('addresses','Api\AddressController@index');
Route::group(['auth:api'], function () {

    // Get Payment

});

