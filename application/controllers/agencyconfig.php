<?php

class AgencyConfig_Controller extends Base_Controller 
{
	public $layout = "layouts.main";
	public $tab = "Account Manager";
	public $page_title = "AM > Agency Config > ";
	
	public function action_index() {$this->layout->nest('content','agencyconfig.index')->with($this->titles("Index"));}
	
	public function action_general() {
		$general = array(
			'content' => 'agency_config.general',
			'top_content' => 'elements.am.top',
			'bottom_content' => 'elements.am.bottom'
		);
	
		$this->layout
			->nest('content','agencyconfig.general')
			->with($this->titles("General"));		
	}
	
	public function action_localsettings() {
		$this->layout
			->nest('content','agencyconfig.localsettings')
			->with($this->titles("Local Settings"));	
	}
	
	public function action_billing() {
		$this->layout
			->nest('content','agencyconfig.billing')
			->with($this->titles("Billing"));	
	}
	
	
}