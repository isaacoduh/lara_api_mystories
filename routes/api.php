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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::post('register', 'Auth\RegisterController@register');
// Route::post('login', 'Auth\LoginController@login');

Route::post('register', 'API\UserController@register');
Route::post('login', 'API\UserController@login');

Route::middleware('auth:api')->group(function(){
    Route::resource('books', 'API\BookController');
});

Route::get('/', function(){
    return 'Welcome to the Larave API Demo';
});

Route::get('posts', 'PostController@index');
Route::get('posts/{post}', 'PostController@show');
Route::post('posts', 'PostController@store');
Route::put('posts/{post}', 'PostController@update');
Route::delete('posts/{post}', 'PostController@delete');
