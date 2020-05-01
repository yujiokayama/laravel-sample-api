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

/**
 * Articles
 */

/*
Route::group(['middleware' => ['api']], function () {
    Route::resource('articles', 'Api\ArticlesController', ['except' => ['create', 'edit']]);
});
*/

/**
 * Members
 */
Route::group(['middleware' => ['api']], function () {
    Route::resource('members', 'Api\MembersController', ['except' => ['create', 'edit']]);
});
