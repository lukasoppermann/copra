<?php

class PageController extends BaseController {

	protected $layout = 'pages.template';

	public function index($path)
	{

		return View::make($this->layout)->with('path', $path);
	}

}
