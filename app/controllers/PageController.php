<?php

class PageController extends BaseController {

	protected $layout = 'pages.template';

	public function index($path)
	{

		$this->layout->path = $path;
		
	}

}
