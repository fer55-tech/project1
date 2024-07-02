<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welfare extends CI_Controller {
	function __construct(){
		parent::__construct();

		if ($this->session->level_login==''){
    	redirect(base_url());
		}	
	
	}
	public function index() {
		
		
		$data['title']= 'Monera | Pusat Kesejahtraan';
		$this->template->load('lorpo/template','lorpo/mod_apps/kesejahtraan_view', $data);
	}

}