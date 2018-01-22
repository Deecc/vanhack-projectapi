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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('v1')->group(function () {
    
    Route::group(['prefix' => 'users'], function () {

        Route::get('', 'UserController@index');       
        Route::get('{user}', 'UserController@show');
        Route::post('', 'UserController@store');
        Route::put('{user}', 'UserController@update');
        Route::delete('{user}', 'UserController@delete');

    });

    Route::group(['prefix' => 'categories'], function () {

        Route::get('', 'CategoryController@index');        
        Route::get('{category}', 'CategoryController@show');       
        Route::post('', 'CategoryController@store');
        Route::put('{category}', 'CategoryController@update');
        Route::delete('{category}', 'CategoryController@delete');
    });

    Route::group(['prefix' => 'categoriesforum'], function () {

        Route::get('', 'CategoryForumController@index');
        Route::get('{categoryforum}', 'CategoryForumController@show');
        Route::post('', 'CategoryForumController@store');
        Route::put('{categoryforum}', 'CategoryForumController@update');
        Route::delete('{categoryforum}', 'CategoryForumController@delete');

    });

    Route::group(['prefix' => 'companies'], function () {

        Route::get('', 'CompanyController@index');
        Route::get('{company}', 'CompanyController@show');
        Route::post('', 'CompanyController@store');
        Route::put('{company}', 'CompanyController@update');
        Route::delete('{company}', 'CompanyController@delete');

    });

    Route::group(['prefix' => 'jobs'], function () {

        Route::get('', 'JobController@index');
        Route::get('{job}', 'JobController@show');
        Route::post('', 'JobController@store');
        Route::put('{job}', 'JobController@update');
        Route::delete('{job}', 'JobController@delete');

    });

    Route::group(['prefix' => 'posts'], function () {

        Route::get('', 'PostController@index');
        Route::get('{post}', 'PostController@show');
        Route::post('', 'PostController@store');
        Route::put('{post}', 'PostController@update');
        Route::delete('{post}', 'PostController@delete');

    });

    Route::group(['prefix' => 'roles'], function () {

        Route::get('', 'RoleController@index');
        Route::get('{role}', 'RoleController@show');
        Route::post('', 'RoleController@store');
        Route::put('{role}', 'RoleController@update');
        Route::delete('{role}', 'RoleController@delete');
        
    });

    Route::group(['prefix' => 'threads'], function () {

        Route::get('', 'ThreadController@index');
        Route::get('{thread}', 'ThreadController@show');
        Route::post('', 'ThreadController@store');
        Route::put('{thread}', 'ThreadController@update');
        Route::delete('{thread}', 'ThreadController@delete');
        
    });

});