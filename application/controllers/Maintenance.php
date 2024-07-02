<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Maintenance extends CI_Controller {
	function __construct(){
		parent::__construct();	
	}	
	public function index() {
		$data= array(	
						'title'		=> 'Maintenance');
		$this->load->view('lorpo/maintenance',$data);

	}
}