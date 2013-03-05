<?php

class Agency_Calendar_Controller extends Base_Controller
{
	public $layout = "layouts.main";
	
	public function action_index() {
		
		$this->layout
			->nest('content','agency_calendar.index')
			->with('title', "AC > Index");
		
	}
	
	public function action_callsheet() {
		
		$this->layout
			->nest('content','agency_calendar.callsheet')
			->with('title', "AC > Event > Callsheet");
	}
	
	public function action_unavailable() {
	
		$this->layout
			->nest('content','agency_calendar.unavailable')
			->with('title', "AC > Event > Unavailable");
			
	}
	
}