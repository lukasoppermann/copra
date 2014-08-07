<?php

class PageController extends BaseController {

	protected $layout = 'pages.template';

	public function index($path)
	{
		$api = Api::get('.json?path='.$path.'&lang='.Config::get('app.locale'));
		echo '.json?path='.$path.'&lang='.Config::get('app.locale');
		return $api;
		if( isset($api) && isset($api['data']))
		{
			return View::make($this->layout)->with('data', $api['data']);
		}
		else
		{
			return "Error";
		}
	}

}
