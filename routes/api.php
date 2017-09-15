<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::middleware('jwt')->resource('galleries', 'GalleriesController');
Route::middleware('jwt')->get('search/{term}', 'GalleriesController@search');
Route::middleware('jwt')->resource('comments', 'CommentsController');
Route::middleware('jwt')->get('my-galleries/{id}', 'UsersController@show');


Route::post('login', 'Auth\LoginController@authenticate');

Route::post('register', 'Auth\RegisterController@create');
