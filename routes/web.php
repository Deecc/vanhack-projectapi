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

        Route::get('', 'UserController@index')
            ->name('web..index');

        Route::get('create', 'UserController@create')
            ->name('web.users.create');            

        Route::get('{user}', 'UserController@show')
            ->name('web.users.show');

        Route::get('{user}/edit', 'UserController@edit')
            ->name('web.users.edit');

        Route::post('', 'UserController@store')
            ->name('web.users.store');            

        Route::put('{user}', 'UserController@update')
            ->name('web.users.update');            

        Route::delete('{user}', 'UserController@delete')
            ->name('web.users.delete');
    });

    Route::group(['prefix' => 'categories'], function () {

        Route::get('', 'CategoryController@index')
            ->name('web..index');

        Route::get('create', 'CategoryController@create')
            ->name('web.users.create');            

        Route::get('{category}', 'CategoryController@show')
            ->name('web.categories.show');

        Route::get('{category}/edit', 'CategoryController@edit')
            ->name('web.categories.edit');

        Route::post('', 'CategoryController@store')
            ->name('web.categories.store');            

        Route::put('{category}', 'CategoryController@update')
            ->name('web.categories.update');            

        Route::delete('{category}', 'CategoryController@delete')
            ->name('web.categories.delete');
    });

    Route::group(['prefix' => 'categoriesforum'], function () {

        Route::get('', 'CategoryForumController@index')
            ->name('web..index');

        Route::get('create', 'CategoryForumController@create')
            ->name('web.categoriesforum.create');            

        Route::get('{categoryforum}', 'CategoryForumController@show')
            ->name('web.categoriesforum.show');

        Route::get('{categoryforum}/edit', 'CategoryForumController@edit')
            ->name('web.categoriesforum.edit');

        Route::post('', 'CategoryForumController@store')
            ->name('web.categoriesforum.store');            

        Route::put('{categoryforum}', 'CategoryForumController@update')
            ->name('web.categoriesforum.update');            

        Route::delete('{categoryforum}', 'CategoryForumController@delete')
            ->name('web.categoriesforum.delete');
    });

    Route::group(['prefix' => 'companies'], function () {

        Route::get('', 'CompanyController@index')
            ->name('web..index');

        Route::get('create', 'CompanyController@create')
            ->name('web.companies.create');            

        Route::get('{company}', 'CompanyController@show')
            ->name('web.companies.show');

        Route::get('{company}/edit', 'CompanyController@edit')
            ->name('web.companies.edit');

        Route::post('', 'CompanyController@store')
            ->name('web.companies.store');            

        Route::put('{company}', 'CompanyController@update')
            ->name('web.companies.update');            

        Route::delete('{company}', 'CompanyController@delete')
            ->name('web.companies.delete');
    });

    Route::group(['prefix' => 'jobs'], function () {

        Route::get('', 'JobController@index')
            ->name('web..index');

        Route::get('create', 'JobController@create')
            ->name('web.jobs.create');            

        Route::get('{job}', 'JobController@show')
            ->name('web.jobs.show');

        Route::get('{job}/edit', 'JobController@edit')
            ->name('web.jobs.edit');

        Route::post('', 'JobController@store')
            ->name('web.jobs.store');            

        Route::put('{job}', 'JobController@update')
            ->name('web.jobs.update');            

        Route::delete('{job}', 'JobController@delete')
            ->name('web.jobs.delete');
    });

    Route::group(['prefix' => 'posts'], function () {

        Route::get('', 'PostController@index')
            ->name('web..index');

        Route::get('create', 'PostController@create')
            ->name('web.posts.create');            

        Route::get('{post}', 'PostController@show')
            ->name('web.posts.show');

        Route::get('{post}/edit', 'PostController@edit')
            ->name('web.posts.edit');

        Route::post('', 'PostController@store')
            ->name('web.posts.store');            

        Route::put('{post}', 'PostController@update')
            ->name('web.posts.update');            

        Route::delete('{post}', 'PostController@delete')
            ->name('web.posts.delete');
    });

    Route::group(['prefix' => 'roles'], function () {

        Route::get('', 'RoleController@index')
            ->name('web..index');

        Route::get('create', 'RoleController@create')
            ->name('web.roles.create');            

        Route::get('{role}', 'RoleController@show')
            ->name('web.roles.show');

        Route::get('{role}/edit', 'RoleController@edit')
            ->name('web.roles.edit');

        Route::post('', 'RoleController@store')
            ->name('web.roles.store');            

        Route::put('{role}', 'RoleController@update')
            ->name('web.roles.update');            

        Route::delete('{role}', 'RoleController@delete')
            ->name('web.roles.delete');
    });

    Route::group(['prefix' => 'threads'], function () {

        Route::get('', 'ThreadController@index')
            ->name('web..index');

        Route::get('create', 'ThreadController@create')
            ->name('web.threads.create');            

        Route::get('{thread}', 'ThreadController@show')
            ->name('web.threads.show');

        Route::get('{thread}/edit', 'ThreadController@edit')
            ->name('web.threads.edit');

        Route::post('', 'ThreadController@store')
            ->name('web.threads.store');            

        Route::put('{thread}', 'ThreadController@update')
            ->name('web.threads.update');            

        Route::delete('{thread}', 'ThreadController@delete')
            ->name('web.threads.delete');
    });

});