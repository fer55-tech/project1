<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
	function __construct(){
		parent::__construct();

		if ($this->session->level_login==''){
    	redirect(base_url());
		}	
	
	}
	public function index() {
		
		$data['depo'] = $this->model_app->view_join_where1('deposit', 'deposit_package','id_package', array('uname' => $this->session->username),'id_depo','ASC')->result_array();
		
		$data['title']= 'Maction | Product';
		$this->template->load('lorpo/template','lorpo/mod_apps/product', $data);
	}

	public function upgrade() {
			$cekId = $this->model_app->view_where('deposit', array('id_depo'=>$this->uri->segment(3)));
			if($cekId->num_rows() <=0){
				redirect(base_url('package'));
			}else{
				
				$data['package'] = $this->model_app->view_where_ordering('deposit_package', array('id_package >' =>2  ), 'id_package','ASC');
				//$data['sumDepo'] = $this->model_app->sum_data_where('deposit',  array('uname' =>$this->session->username ),'amount');
				$data['title']= 'Maction | Product';
				$this->template->load('lorpo/template','lorpo/mod_apps/upgrade', $data);
			}
			
	}
	
}