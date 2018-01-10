<?php

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

Route::get('/', 'IndexController@index');

Route::get('tool/filter',   [ 'uses' => 'ToolController@filter', 'as' => 'tool.filter' ]);
Route::get('tool/distance', [ 'uses' => 'ToolController@distance', 'as' => 'tool.distance' ]);

Route::get('admin/login', [ 'uses' => 'admin\LoginController@show', 'as' => 'admin.loginShow' ]);
Route::post('admin/login', [ 'uses' => 'admin\LoginController@login', 'as' => 'admin.login' ]);
Route::get('admin/logout', [ 'uses' => 'admin\LoginController@logout', 'as' => 'admin.logout' ]);

Route::group(['prefix' => 'admin', 'namespace' => 'admin', 'middleware' => 'chkLogin'], function () {
    Route::get('/', [ 'uses' => 'IndexController@index', 'as' => 'admin.index']);
});

Route::get('user/', function () {
    return View::make('users');
});

Route::get('users', function()
{
    return 'Users!';
});


// Route 'as' =>
//         middleware -> 入route前先驗證
//         resource
//         prefix -> 前置
// NotifyResponse??
