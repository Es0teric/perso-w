<?php

class Tasks_Controller extends Base_Controller
{

	public $layout = "layouts.main";
	
	public function action_view() {
		$this->layout
			->nest('content','tasks.view')
			->with('title', "Tasks > View");
	}

}