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

Route::middleware('auth:api', 'scopes')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::middleware('auth:api')->group(function () {
//    Route::get('/notes', 'NotesController@index')->name('api.notes.index')->middleware('scopes:bing');
//    Route::get('/developers', 'DevelopersController@index')->name('api.developers.index');
//});


Route::middleware(['auth:api', 'scope:bing,all'])->group(function () {
    Route::get('/notes', 'NotesController@index')->name('api.notes.index');
    Route::get('/developers', 'DevelopersController@index')->name('api.developers.index');
});

