<?php
class World_Controller extends MY_Controller
{
	function __construct() {
		parent::__construct();
		$this->data['meta_title'] = 'The Drop';
		$this->load->library('session');
		$this->load->model('world_m');
		$this->load->helper('form');
		$this->load->library('form_validation');
	}
}

?>
