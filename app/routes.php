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
// Route::filter('cache.fetch', function($route, $request){
// 	$key = 'route_'.Str::slug($request->url());
//
// 	if( Cache::has($key) ) return Cache::get($key);
// });
// Route::filter('cache.put', function($route, $request, $response){
// 	$key = 'route_'.Str::slug($request->url());
// 	if( ! Cache::has($key) ) Cache::put($key, $response->getContent(),60);
// });
// Route::filter('cache.fetch','Cachefilter@fetch');
// Route::filter('cache.put','Cachefilter@put');
Route::group(array('before' => array('cache.fetch'), 'after' => array('cache.put')), function()
{

	// Route::any('/{path?}', "pageController@index")->where('path', '.+');
	Route::any('/{path?}', function(){
		return "y";
	})->where('path', '.+');
});