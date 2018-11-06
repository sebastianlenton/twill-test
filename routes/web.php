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

//Route::get('/', 'HomepageController@index');

Route::get('/', 'DesignpageController@index');

Route::get('/projects', 'ProjectListingController@index');

Route::get('/projects/{projectSlug}', 'ProjectListingController@show');

Route::get('/info', 'InfopageController@index');