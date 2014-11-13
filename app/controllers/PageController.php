<?php

class PageController extends BaseController {

	protected $layout = 'pages.template';

	public function index($path)
	{

		$path = ( $path == "/" ? "home" : $path);

		$api = Api::pages(str_replace('/','.',$path))->get(['language' => Config::get('app.locale')]);

		dd($api);

		if( isset($api) && isset($api['data']))
		{
			return View::make($this->layout)->with('data', $api['data']);
		}
		else
		{
			Log::error($api);
			App::abort(404);
		}
	}

}
