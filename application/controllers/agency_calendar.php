<?php

class Agency_Calendar_Controller extends Base_Controller
{
	public $layout = "layouts.main";
	public $tab = "Agency Calendar";
	public $page_title = "AC > Event > ";
	
	
	public function action_index() {
		
		$this->layout
			->nest('content','agency_calendar.index')
			->with('title', "AC > Index");
		
	}
	
	public function action_callsheet() {	
		
		$this->layout
			->nest('content','agency_calendar.callsheet')
			->with($this->titles("Callsheet"));
	}
	
	public function action_unavailable() {
		
		$this->layout
			->nest('content','agency_calendar.unavailable')
			->with($this->titles("Unavailable"));
			
	}
	
	public function action_expense_reports() {
		
		$this->layout
			->nest('content','agency_calendar.expense_reports')
			->with($this->titles("Expense Reports"));
			
	}
	
	public function action_er_options() {
	
		$this->layout
			->nest('content','agency_calendar.er_options')
			->with($this->titles("Expense Report Options"));
			
	}
	
	public function action_add_er() {
	
		$this->layout
			->nest('content','agency_calendar.add_er')
			->with($this->titles("Add Report Options"));
					
	}
	
	public function action_print_exp() {
		
		$this->layout
			->nest('content','agency_calendar.print_exp')
			->with($this->titles("Print Expenses"));
			
	}
	
}