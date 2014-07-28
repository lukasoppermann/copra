<?php

class BaseController extends Controller {

	/**
	 * Basic Setup
	 *
	 * @return void
	 */
	function __construct()
	{
		// needs to be set
		Api::config(['url' => 'http://api.formandsystem.com/v1/stream', 'auth' => ['lukas@vea.re', 'lukas'] ]);
	}

}
