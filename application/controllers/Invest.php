<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invest extends CI_Controller {
	function __construct(){
		parent::__construct();

		if ($this->session->level_login==''){
    	redirect(base_url());
		}	
	
	}
	public function index() {
		
		$data['depo'] = $this->model_app->view_join_where1('deposit', 'deposit_package','id_package', array('uname' => $this->session->username),'id_depo','ASC')->result_array();
		$data['depo_package'] = $this->model_app->view_ordering1('deposit_package', 'id_package','ASC')->result();
		$data['title']= 'Royal | Invest';
		$this->template->load('lorpo/template','lorpo/mod_apps/invest_view', $data);
	}


	public function doInvest() {
		$package = $this->input->post('package_id');
		$depo = $this->model_app->view_where('deposit', array('uname' => $this->session->username ))->num_rows();
		$depo_package = $this->model_app->view_where('deposit_package', array('id_package' =>$package))->row_array();
		// $amount = hapus_karakter($this->db->escape_str($this->input->post('amount')));
		
		$date=date('Y-m-d');
		$time=date('h:i:s');
		
		$uniq = $this->_random_string($depo_package['amount'])[0];
		 

				 if($depo <=5){	


					$data = array('id_package'=>$depo_package['id_package'],
					'package_name'		=>$depo_package['title'],	
					'uname'     		=>$this->session->username,    
					'amount' 			=>$depo_package['amount'],
					'profit' 			=>$depo_package['comission'],
					'date' 				=>$date,
					'time' 				=>$time,
					'status' 			=>'Pending',
					'saldo_upgrade' 	=>'0',
					'uniq_code' 		=>$uniq,
					'toko' 				=>'',
					
				);
				$this->model_app->insert('deposit',$data);	
				$last_insert_id = $this->db->insert_id();
				
				redirect('package/checkout/'.$last_insert_id);

			}
		
				
	
		
	}


	private function _random_string($param){
			$nominal = $param; // jumlah nominal awal
			$sub = substr($nominal,-3);
			$sub2 = substr($nominal,-2);
			$sub3 = substr($nominal,-1);

			$total =  random_string('numeric', 3);
			$total2 =  random_string('numeric', 2);
			$total3 =  random_string('numeric', 1);

				if($sub==0){
					$paid =  $nominal + $total; 
					$uniq = $total;
					
				} else if($sub2 == 0){
					$paid = $nominal + $total2; 
					$uniq = substr($paid,-3);
					
				} else if($sub3 == 0){
					$paid = $nominal + $total3; 
					$uniq = substr($hasil,-3);
					
				}else{
					$paid = $nominal;
					$uniq = $sub;
				}	

			return  array($uniq,$paid );
		}


}