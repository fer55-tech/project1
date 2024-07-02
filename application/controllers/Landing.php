<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {
	function __construct(){
		parent::__construct();
	
	}
		

	public function index() {	
	
		$data = array(
			'title'=>'Landing Page | Exuindo',
			
		);
		 $this->load->view('lorpo/view_landing',$data );

		}
	

}