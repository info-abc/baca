<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::group(['prefix' => 'admin'], function () {

	Route::get('/login', array('uses' => 'AdminController@login', 'as' => 'admin.login'));
	Route::post('/login', array('uses' => 'AdminController@doLogin'));
	Route::get('/logout', array('uses' => 'AdminController@logout', 'as' => 'admin.logout'));
	Route::resource('/', 'AdminController');

	Route::get('/manager/changepassword/{id}', array('uses' => 'ManagerController@changePassword', 'as' => 'admin.manager.chanpassword'));
	Route::post('/manager/updatePassword/{id}', array('uses' => 'ManagerController@updatePassword'));
	Route::get('/manager/search', array('uses' => 'ManagerController@search', 'as' => 'admin.manager.search'));
	Route::resource('/manager', 'ManagerController');

	Route::get('/contact/search', 'ContactController@search');
	Route::resource('/contact', 'ContactController');

	Route::get('/slide/stype/{type}', 'SlideController@stype');
	Route::resource('/slide', 'SlideController');

	Route::get('/block/btype/{type}', 'BlockController@btype');
	Route::resource('/block', 'BlockController');

	Route::resource('/configsite', 'ConfigsiteController');

	Route::get('/post/search', 'PostController@search');
	Route::resource('/post', 'PostController');
	Route::resource('/posttype', 'PostTypeController');

});

Route::get('/sitemap.xml', 'SiteMapController@index');
Route::resource('/sitemap', 'SiteMapController');

Route::get('/', 'SiteIndexController@index');
