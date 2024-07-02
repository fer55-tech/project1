<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Package extends CI_Controller {
	function __construct(){
		parent::__construct();

		if ($this->session->level_login==''){
    	redirect(base_url());
		}	
	
	}
		
	// public function index() {
	// 	$data['myDepo'] = $this->model_app->view_join_where('deposit', 'deposit_package','id_package', array('uname'=> $this->session->username),'id_depo','ASC');
	// 	$data['sumDepo'] = $this->model_app->sum_data_where('deposit',  array('uname' =>$this->session->username, 'status'=>'Active' ),'amount');
	// 	$data['sumUserMission'] = $this->model_app->sum_data_where('user_mission',  array('username' =>$this->session->username ),'comission');
	// 	$data['title']= 'Royal | Package';
	// 	$this->template->load('lorpo/template','lorpo/mod_apps/package', $data);
	// }

	public function invest() {
		$data['title'] = 'Royal | Invest';
		$id_package = $this->uri->segment(3);
		$depo_package = $this->model_app->view_where('deposit_package', array('id_package' => $id_package))->row_array();

		if($id_package == NULL OR $depo_package['views'] ==1 ){
			redirect('home/dashboard');
		// }else if($id_package > 8 ){
		// 	redirect('home/dashboard');
		}else{
		$data['depo_package'] = $this->model_app->view_where('deposit_package', array('id_package' => $id_package))->row_array();

		//$data['myDepo'] = $this->model_app->view_where_ordering('deposit', array('uname'=> $this->session->username),'id_depo','ASC');
		//$data['sumDepo'] = $this->model_app->sum_data_where('deposit',  array('uname' =>$this->session->username ),'amount');
		$this->template->load('lorpo/template','lorpo/mod_apps/invest', $data);
		}
		
		
	}

	public function history() {
		$data['title'] = 'Royal | history';
		$data['topup']		= $this->model_app->view_where_ordering('deposit',   array('uname' => $this->session->username ),'date','DESC');
		$this->template->load('lorpo/template','lorpo/mod_apps/catatan_isi_ulang', $data);
		}
		
		
	

	public function doTopup() {
		$depo = $this->model_app->view_where('deposit', array('uname' => $this->session->username ))->num_rows();
		$depoPackage = $this->model_app->view_where('deposit', array('uname' => $this->session->username,'id_package'=>$this->input->post('id_package')));
		$date=date('Y-m-d');
		$time=date('h:i:s');
		$packageRow =  $this->model_app->view_where('deposit_package', array('id_package'=>$this->input->post('id_package')))->row_array();
		$uniq = $this->_random_string($packageRow['amount'])[0];
		 if($this->input->post('id_package') == 9){

			if($depoPackage->num_rows() >0){
				$this->session->set_flashdata('msg', 
					' <div class="example-alert" style="font-size: 12px;" >
					<div class="alert alert-danger alert-icon">
					<em class="icon ni ni-check-circle"></em> Maaf, Anda hanya dapat kontrak 1 kali pada produk ini !  </div>
					</div>');
				redirect('package/history');

			}else{

				 if($depo <=3){	
						$data = array('id_package'=>$this->db->escape_str($this->input->post('id_package')),
						'package_name'		=>$this->db->escape_str($this->input->post('package_name')),	
						'uname'     		=>$this->session->username,    
						'amount' 			=>$this->db->escape_str($this->input->post('amount')),
						'profit' 			=>$this->db->escape_str($this->input->post('profit')),
						'date' 				=>$date,
						'time' 				=>$time,
						'status' 			=>'Pending',
						'saldo_upgrade' 	=>'0',
						'uniq_code' 		=>$uniq,
						'toko' 				=>$this->db->escape_str($this->input->post('toko')),
					);
					$this->model_app->insert('deposit',$data);	
					$last_insert_id = $this->db->insert_id();
					redirect('package/invoice/'.$last_insert_id);
					}else{
						redirect('package/history');
					}
				 
		 }

		 }else{
	
			 if($depo <=4){	
					$data = array('id_package'=>$this->db->escape_str($this->input->post('id_package')),
					'package_name'		=>$this->db->escape_str($this->input->post('package_name')),	
					'uname'     		=>$this->session->username,    
					'amount' 			=>$this->db->escape_str($this->input->post('amount')),
					'profit' 			=>$this->db->escape_str($this->input->post('profit')),
					'date' 				=>$date,
					'time' 				=>$time,
					'status' 			=>'Pending',
					'saldo_upgrade' 	=>'0',
					'uniq_code' 		=>$uniq,
					'toko' 				=>$this->db->escape_str($this->input->post('toko')),
					
				);
				$this->model_app->insert('deposit',$data);	
				$last_insert_id = $this->db->insert_id();
				redirect('package/checkout/'.$last_insert_id);
				}else{
					redirect('package/history');
				}
			

		}
	
		
	}

	public function checkout() { 

		$cekDepo = $this->model_app->view_where('deposit',array('id_depo' => $this->uri->segment(3)));

		if($cekDepo->num_rows() <=0){
			redirect('pages/upgrade');
		}else{
		// $data['bank'] = $this->model_app->view_ordering('account_bank', 'id','ASC');
		$data['depo'] = $cekDepo->row_array();
		$data['title'] ='Royal | Checkout';
		// $this->template->load('lorpo/template','lorpo/mod_apps/invoice', $data);
		$this->load->view('lorpo/mod_apps/checkout', $data);

		}

	}




	public function invoice() {
		// $cekDepo = $this->model_app->view_join_where1('deposit', 'deposit_package','id_package', array('id_depo' => $this->uri->segment(3)),'id_depo','ASC');
		$cekDepo = $this->model_app->view_where('deposit',array('id_depo' => $this->uri->segment(3)));

		if($cekDepo->num_rows() <=0){
			redirect('pages/upgrade');
		}else{
		// $data['bank'] = $this->model_app->view_ordering('account_bank', 'id','ASC');
		$data['depo'] = $cekDepo->row_array();
		$data['title'] ='Royal | Invoice';
		// $this->template->load('lorpo/template','lorpo/mod_apps/invoice', $data);
		$this->load->view('lorpo/mod_apps/invoice', $data);

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