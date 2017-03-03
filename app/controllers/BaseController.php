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
	}

}
