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
Route::get('/fscache', function(){
	Cache::flush();
	return 'ok';
});
// disable cache for dev
Route::group(array(/*'before' => array('cache.fetch'), 'after' => array('cache.put')*/), function()
{
	Route::any('/{path?}', "PageController@index")->where('path', '.+');

});

App::missing(function($exception)
{
    return Response::view('errors.missing', array(), 404);
});
