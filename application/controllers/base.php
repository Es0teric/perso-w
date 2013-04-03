<?php

class Base_Controller extends Controller {

	/**
	 * Catch-all method for requests that can't be matched.
	 *
	 * @param  string    $method
	 * @param  array     $parameters
	 * @return Response
	 */
	public function __call($method, $parameters)
	{
		return Response::error('404');
	}

	public function titles($title) {
	
		$ta = array(
			'title' => $this->page_title . $title,
			'tab_title' => $this->tab
		);
		
		return $ta;
	}

}