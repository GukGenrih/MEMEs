<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/users', 'UserController@index');
Route::get('/users/{user}', 'UserController@show');
Route::post('/users', 'UserController@store');
Route::get('/users/{user}/memes', 'UserController@all_memes');

Route::get('/memes', 'MemeController@index');
Route::get('/memes/{meme}', 'MemeController@show');
Route::post('/memes', 'MemeController@store');
Route::get('/memes/category/{category}', 'MemeController@category');

Route::get('/categories', 'CategoryController@index');
Route::get('/categories/{category}', 'CategoryController@show');
Route::get('/categories/{category}/memes', 'CategoryController@allMemes');
Route::post('/categories', 'CategoryController@store');

Route::post('/likes', 'LikeController@store');
Route::get('/likes', 'LikeController@index');





