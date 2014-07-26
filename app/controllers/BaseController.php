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
		Api::config(['url' => 'http://www/formandsystem/public/api/v1/stream', 'auth' => ['lukas@vea.re', 'lukas'] ]);
	}

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

}
