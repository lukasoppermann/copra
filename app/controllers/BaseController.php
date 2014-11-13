<?php


class BaseController extends Controller {

	/**
	 * Basic Setup
	 *
	 * @return void
	 */
	function __construct()
	{
		header('content-type: application/json; charset=utf-8');
		Config::set('app.locale', 'de');
	}

}
