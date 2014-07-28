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
Route::group(array('before' => array('cache.fetch'), 'after' => array('cache.put')), function()
{

	Route::any('/{path?}', "pageController@index")->where('path', '.+');
	
});