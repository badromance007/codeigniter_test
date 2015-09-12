<?php
class MY_Controller extends CI_controller {

	public $data = array();
	function __construct() {
		parent::__construct();
		$this->data['errors'] = array();
		$this->data['site_name'] = config_item('site_name');
	}
}