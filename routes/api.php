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

route::get('crud','CrudController@index');
route::post('crud','CrudController@create');
route::get('/crud/{id}','CrudController@detail');
route::put('/crud/{id}','CrudController@update');
route::delete('/crud/{id}','CrudController@delete');

