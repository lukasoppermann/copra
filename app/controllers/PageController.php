<?php

class PageController extends BaseController {

	protected $layout = 'pages.template';

	public function index($path)
	{
		$api = Api::get('pages/'.str_replace('/','.',$path).'?language='.Config::get('app.locale'));

		if( isset($api) && isset($api['data']))
		{
			return View::make($this->layout)->with('data', $api['data']);
		}
		else
		{
			return "Error from Controller (by fs)";
		}
	}

}
