<?php


class BaseController extends Controller {

	/**
	 * Basic Setup
	 *
	 * @return void
	 */
	function __construct()
	{

		Config::set('app.locale', 'de');
		// needs to be set
		Api::config(['url' => Config::get('secrets.api.url'), 'auth' => [ Config::get('secrets.api.user'), Config::get('secrets.api.password')] ]);
	}

}
