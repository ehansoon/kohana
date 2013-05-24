<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index()
	{
		$this->response->body('hello, Ehan');
	}
	
	public function action_new()
	{
		$this->response->body('Hello, Ehan!');
	}

} // End Welcome
