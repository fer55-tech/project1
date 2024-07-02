<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {
	function __construct(){
		parent::__construct();

		if ($this->session->level_login==''){
    	redirect(base_url());
		}	
	
	}
		
	
	
	public function news() {
	    
	     $news = $this->model_app->view_ordering('news', 'id_news','DESC');
		
		$data = array(
			'title'=>'News | Xtokonft',
			'news'=>$news
		);
		$this->template->load('lorpo/template','lorpo/mod_news/news', $data);
	}


	public function news_det($id) {
	    
	    
	    $query = $this->model_utama->view_where('news',array('id_news' => $this->uri->segment(3)));
	    
		if ($query->num_rows()<=0){
			redirect('page/news');
		}else{

			$data = $this->model_app->get_news_det($id);
			    	$data = array (
			    	'title'=>'News Detail | Xtokonft',
					'title' => $data[0]['title'],	
					'content' => $data[0]['content']);	
			
			$this->template->load('lorpo/template','lorpo/mod_news/news_det', $data);
		
	}
	    
	   
	
	}


	public function me() {

		$date=date('Y-m-d');
		$month=date('m');

		$usr = $this->model_app->view_where('users', array('username'=> $this->session->username))->row_array();
		$usr_ref1 = $this->model_app->view_where('users', array('ref_gen_1'=> $this->session->username))->num_rows();
	
		$today_commision = $this->model_app->sum_comission('user_mission', array('username'=> $this->session->username,'date_created'=>$date),'comission','id_user_mission','ASC');
		

		$month_commision = $this->model_app->sum_comission('user_mission', array('username'=> $this->session->username,'month(date_created)'=> $month),'comission','id_user_mission','ASC');


		$total_commision = $this->model_app->sum_comission('user_mission', array('username'=> $this->session->username),'comission','id_user_mission','ASC');

		
		$ref_gen1 = $this->model_app->view_where('users', array('ref_gen_1'=> $this->session->username))->result_array();
		
		$ref_gen2= $this->model_app->view_where('users', array('ref_gen_2'=> $this->session->username))->result_array();
		$ref_gen3 = $this->model_app->view_where('users', array('ref_gen_3'=> $this->session->username))->result_array();

		$usr_depo = $this->model_app->view_where_ordering_limit('deposit', array('uname'=> $this->session->username),'id_depo','DESC','1')->row_array();
		$usr_depo_active = $this->model_app->view_where_ordering_limit('deposit', array('uname'=> $this->session->username,'status'=>'Active'),'id_depo','DESC','1');

		$depo_active= $usr_depo_active->row_array();
		$depo_num= $usr_depo_active->num_rows();

		$dPackage = $this->model_app->view_where('deposit_package', array('id_package' => @$depo_active['id_package']))->row_array();

		$total_wd = $this->model_app->sum_comission('wd', array('username'=> $this->session->username),'amount','id_wd','ASC');
		
		$data = array(
			'title'=>'Profil | Xtokonft',
			'user' => $usr,
			'user_depo' => $usr_depo,
			'usr_depo_active' => $depo_active,
			'depo_num' => $depo_num,
			'dPackage' => $dPackage,
			'user_ref1' => $usr_ref1,
			'today_commision' => $today_commision,
			
			'total_commision' => $total_commision,
			'month_commision' => $month_commision,
			'ref_gen1' => $ref_gen1,
			'ref_gen2' => $ref_gen2,
			'ref_gen3' => $ref_gen3,
			'total_wd' => $total_wd,
			'totalBonus' => $this->totalAllBonus() + $usr['saldo_reward'],//total bonus
			
			
		);
		$this->template->load('lorpo/template','lorpo/mod_users/me', $data);
	}
	


	public function add_referal() {
	    $date=date('Y-m-d');
	    if (isset($_POST['submit'])){

	    		  	$username = hapus_spasi($this->db->escape_str($this->input->post('uname')));
	    		  	$ref_code = hapus_spasi($this->db->escape_str($this->input->post('ref_code')));

	    		  	$rc = $this->model_app->view_where('users',array('username' => $ref_code));	  
	    		  	$rc_row = $rc->row_array();	  
	    		  	  
	    		  	$usr_depo_active = $this->model_app->view_where('deposit', array('uname' => $ref_code,'status'=>'Active'));   

	    	        $query= $this->model_app->view_where_ordering1('users',array('username' => $username),'username','ASC');

	    	        if ($query->num_rows()>0){
	    	            $this->session->set_flashdata('msg', 
	    				    ' <div class="example-alert">
	    				    <div class="alert alert-danger alert-icon">
	    				        <em class="icon ni ni-check-circle"></em> Maaf ID sudah tersedia .! <button class="close" data-dismiss="alert"></button> </div>
	    				</div>');

	    	            redirect('page/add_referal');

	    		        }if ($usr_depo_active->num_rows()==0){
	    	            $this->session->set_flashdata('msg', 
	    				    ' <div class="example-alert">
	    				    <div class="alert alert-danger alert-icon">
	    				        <em class="icon ni ni-check-circle"></em> Maaf kami tidak menemukan KODE RUJUKAN anda ! <button class="close" data-dismiss="alert"></button> </div>
	    				</div>');

	    	            redirect('page/add_referal');

	    		        }

	    		        else{

	    				 $data = array('username'		=>hapus_spasi($this->db->escape_str($this->input->post('uname'))),
	    				               'password'     	=>hash("sha512", md5($this->input->post('pwd'))),    
	    				               'full_name' 		=>$this->db->escape_str($this->input->post('full_name')),
	    				               'phone' 			=>$this->db->escape_str($this->input->post('hp')),
	    				               'bank' 			=>'',
	    				               'rekening_number' =>'',
	    				               'foto'     		=> '',                        
	    				               'level_login'  	=>'user',
	    				               'ref_gen_1'     	=> $ref_code,
	    				               'ref_gen_2'     	=> $rc_row['ref_gen_1'],
	    				               'ref_gen_3'     	=> $rc_row['ref_gen_2'],		               
	    				               'date_created'   => $date,
	    				               'status_account' => 'active' 
	    	               
	    				           );


	    				 $this->model_app->insert('users',$data);

	    			 	$this->session->set_flashdata('msg', 
	    				    ' <div class="example-alert">
	    				    <div class="alert alert-success alert-icon">
	    				        <em class="icon ni ni-check-circle"></em> Register Successfuly .! <button class="close" data-dismiss="alert"></button> </div>
	    				</div>');
	    			 	redirect('page/add_referal');
	    			 	

	    			 }

	    }else{

	    	$data = array(
	    		'title'=>'Add Referal | Xtokonft',
	    		
	    	);
	    	$this->template->load('lorpo/template','lorpo/mod_users/add_member', $data);

	    }
	  
		
	}



	public function wd() {
		$usr = $this->model_app->view_where('users', array('username'=> $this->session->username))->row_array();
		$total_commision = $this->model_app->sum_comission('user_mission', array('username'=> $this->session->username),'comission','id_user_mission','ASC');
		$usr_depo_active = $this->model_app->view_where_ordering_limit('deposit', array('uname'=> $this->session->username, 'status'=>'Active'),'id_depo','DESC','1');
		$usr_depo_num = $usr_depo_active->num_rows();
		$depoActive = $usr_depo_active->row_array();

		$total_wd = $this->model_app->sum_comission('wd', array('username'=> $this->session->username),'amount','id_wd','ASC');
		$allWd = $this->model_app->view_where_ordering('wd',   array('username' => $this->session->username ),'id_wd','ASC');
		$num_ref = $this->model_app->join_table($this->session->username)->num_rows();
		$data = array(
			'title'=>'Wd | Xtokonft',
			'usr_depo_active' => $depoActive,
			'usr_depo_num' => $usr_depo_num,
			'usr'	   => $usr,	
			'total_wd' => $total_wd,
			'allWd' => $allWd,
			'num_ref' => $num_ref,	
			'totalBonus' => $this->totalAllBonus() + $usr['saldo_reward'] ,//total bonus
	
		);
		$this->template->load('lorpo/template','lorpo/mod_users/wd', $data);
	}


	public function wd_confirm() {
				$date=date('Y-m-d');
				$available_balance = $this->input->post('available_balance');	
				$amount = $this->input->post('wd_amount');

				$depo_active = $this->model_app->view_where_ordering_limit('deposit',   array('uname' => $this->session->username,'Status'=>'Active'),'id_depo','DESC','1')->row_array();
				$wd_pending = $this->model_app->view_where('wd',  array('username' =>$this->session->username,'status'=>'Pending'))->num_rows();
				$wd_today = $this->model_app->view_where('wd',  array('username' =>$this->session->username,'date_created'=>$date))->num_rows();

				if($amount > $available_balance ){



			 	$this->session->set_flashdata('msg', 
				    ' <div class="example-alert">
				    <div class="alert alert-danger alert-icon">
				        <em class="icon ni ni-check-circle"></em> Bonus anda tidak mencukupi .! <button class="close" data-dismiss="alert"></button> </div>
				</div>');
			 	redirect('page/wd');

				}else if($amount == ""){

					 	$this->session->set_flashdata('msg', 
						    ' <div class="example-alert">
						    <div class="alert alert-danger alert-icon">
						        <em class="icon ni ni-check-circle"></em> Anda belum memilih paket penarikan .! <button class="close" data-dismiss="alert"></button> </div>
						</div>');
					 	redirect('page/wd');


				}	else if($depo_active['status'] == 'Pending'){

					 	$this->session->set_flashdata('msg', 
						    ' <div class="example-alert">
						    <div class="alert alert-danger alert-icon">
						        <em class="icon ni ni-check-circle"></em> Anda belum melakukan top up atau belum dikonfirmasi .! <button class="close" data-dismiss="alert"></button> </div>
						</div>');
						redirect('page/wd');

				}else if($wd_pending >=1){
					 	$this->session->set_flashdata('msg', 
						    ' <div class="example-alert">
						    <div class="alert alert-danger alert-icon">
						        <em class="icon ni ni-check-circle"></em> Permintaan penarikan Anda sebelumnya belum dikonfirmasi. Silahkan melakukan penarikan setelah permintaan sebelumnya selesai ..!  <button class="close" data-dismiss="alert"></button> </div>
						</div>');
						redirect('page/wd');
				}else if($wd_today >=1){
					 	$this->session->set_flashdata('msg', 
						    ' <div class="example-alert">
						    <div class="alert alert-danger alert-icon">
						        <em class="icon ni ni-check-circle"></em> Anda sudah melakukan penarikan hari ini, silakan kembali besok ..!  <button class="close" data-dismiss="alert"></button> </div>
						</div>');
						redirect('page/wd');
				}else{

				
				$data = array(
				              'username'     		=>$this->session->username,    
				              'amount' 				=>hapus_karakter($this->input->post('wd_amount')),
				              'date_created' 		=>$date,
				              'evidence_file'		=> '',
				              'status' 				=>'Pending',
				              'notes' 				=>'',
				              'pay_date' 			=>''
				               );
	
			$this->model_app->insert('wd',$data);	 
		 	$this->session->set_flashdata('msg', 
			    ' <div class="example-alert">
			    <div class="alert alert-success alert-icon">
			        <em class="icon ni ni-check-circle"></em> Penarikan berhasil .! <button class="close" data-dismiss="alert"></button> </div>
			</div>');
		 	redirect('page/wd');

		 }

	}


	public function cs() {
			
		$data = array(
			'title'=>'Cs | Xtokonft',	
		);
		$this->template->load('lorpo/template','lorpo/mod_users/cs', $data);
	}


	public function wd_history() {

		$wd_record = $this->model_app->view_where('wd', array('username'=> $this->session->username))->result_array();
		
			
		$total_wd = $this->model_app->sum_data_where('wd', array('username'=> $this->session->username),'amount','date_created','DESC');
		
		$data = array(
			'title'=>'History | Xtokonft',
			'wd_record' => $wd_record,
			'total_wd' => $total_wd
			
		);
		$this->template->load('lorpo/template','lorpo/mod_users/wd_history', $data);
	}

	public function notes() {
		$data['deposit'] = $this->model_app->view_where_ordering('deposit',  array('uname' => $this->session->username ),'date','DESC');
		$data['wd'] = $this->model_app->view_where_ordering('wd',  array('username' => $this->session->username ),'id_wd','DESC');

		$data['total_commision'] = $this->model_app->sum_comission('user_mission', array('username'=> $this->session->username),'comission','id_user_mission','ASC');
		$data['usr_depo'] = $this->model_app->view_where_ordering_limit('deposit', array('uname'=> $this->session->username),'id_depo','DESC','1')->row_array();

		$data['ref_gen1'] = $this->model_app->view_where('users', array('ref_gen_1'=> $this->session->username))->result_array();
		$data['ref_gen2'] = $this->model_app->view_where('users', array('ref_gen_2'=> $this->session->username))->result_array();
		$data['ref_gen3'] = $this->model_app->view_where('users', array('ref_gen_3'=> $this->session->username))->result_array();


		$usr_depo_active = $this->model_app->view_where_ordering_limit('deposit', array('uname'=> $this->session->username, 'status'=>'Active'),'id_depo','DESC','1');
		
		$data['usr_depo_active'] = $usr_depo_active->row_array();
		$data['usr_depo_num'] = $usr_depo_active->num_rows();
		$depoActive = $usr_depo_active->row_array();

		$data['dPackage'] = $this->model_app->view_where('deposit_package', array('id_package' => $depoActive['id_package']))->row_array();
		$data['user'] = $this->model_app->view_where('users', array('username'=> $this->session->username))->row_array();
		$data['total_wd'] = $this->model_app->sum_comission('wd', array('username'=> $this->session->username),'amount','id_wd','ASC');

		$data['title'] = "Catatan | Xtokonft";
		$this->template->load('lorpo/template','lorpo/mod_users/notes', $data);
	}

	
	
	public function invoice($id=null) {//tampil jika id ditemukan
	  
	$query = $this->model_utama->view_where('wd',array('id_wd' => $this->uri->segment(3)));
	if ($query->num_rows()<=0){
	//if (empty($query)){
		redirect('page/wd_history');
	}else{

		$data = $this->model_app->get_wd_detail($id);
		    	$data = array (
		    	'title'=>'Invoice | Xtokonft',
				'username' => $data[0]['username'],	
				'pay_date' => $data[0]['pay_date'],	
				'amount' => $data[0]['amount'],	
				'evidence_file' => $data[0]['evidence_file'],	
				'status' => $data[0]['status'],	
				'notes' => $data[0]['notes'],	
				);	
		
		$this->template->load('lorpo/template','lorpo/mod_users/invoice', $data);

		
	}
	
	}


	public function bank_acc() {
		$usr = $this->model_app->view_where('users', array('username'=> $this->session->username))->row_array();
		$data = array(
			'title'=>'Bank Acc | Xtokonft',
			'usr' => $usr
			
		);
		$this->template->load('lorpo/template','lorpo/mod_users/bank_acc', $data);
	}

	public function bank_confirm() {
		 $data = array(  'bank'            =>$this->db->escape_str($this->input->post('bank')),
		         'full_name'               =>$this->db->escape_str($this->input->post('holder_name')),
		         'account_number'          =>$this->db->escape_str($this->input->post('account'))
		       );
			$where = array('id' 		=> $this->db->escape_str($this->input->post('id')));
			$this->model_app->update('users', $data, $where);

			redirect('page/me');	
		}


	public function upgrade() {
		$package = $this->model_app->view_ordering('deposit_package','id_package','ASC');
		
		$usr = $this->model_app->view_where('users',array('username'=>$this->session->username))->row_array();
		
		$usr_depo = $this->model_app->view_where('deposit',array('uname'=>$usr['username']))->row_array();
		
		$data = array(
			'title'=>'Upgrade | Xtokonft',
			'package'=>$package,
			'usr'=>$usr,
			'usr_depo'=>$usr_depo
			
		);
		$this->template->load('lorpo/template','lorpo/upgrade', $data);
	}

	public function upgrade_det($id) {
		
		$query = $this->model_utama->view_where('deposit_package',array('id_package' => $this->uri->segment(3)));
		if ($query->num_rows()<=0){
			redirect('page/upgrade');
		}else{
			$depo = $this->model_app->view_where('deposit', array('uname' => $this->session->username,'id_package'=>$this->uri->segment(3),'status'=>'Pending'))->num_rows();

			$data1 = $this->model_app->get_depopackage($id);
			    	$data = array (
			    	'title'=>'Upgrade True | Xtokonft',
					'file' => $data1[0]['file'],	
					'package_name' => $data1[0]['package_name'],	
					'id_package' => $data1[0]['id_package'],	
					'id_package' => $data1[0]['id_package'],		
					'amount' => $data1[0]['amount'],	
					'file' => $data1[0]['file'],
					'depo'=>$depo
					
				);	
			
			$this->template->load('lorpo/template','lorpo/upgrade_true', $data);

		
	}

}

public function upgrade_true() {
		//date_default_timezone_get('Asia/Jakarta');
		$date=date('y-m-d');
		$time=date('h:i:s');

		$depo = $this->model_app->view_where('deposit',  array('uname' => $this->session->username ));
		$depo_num_rows = $depo->num_rows();
		$depo_row_arr = $depo->row_array();
		

		 $data = array('id_package'			=>$this->db->escape_str($this->input->post('id_package')),
		 			   'package_name'		=>$this->db->escape_str($this->input->post('package_name')),	
		               'uname'     			=>$this->db->escape_str($this->input->post('uname')),    
		               'amount' 			=>$this->db->escape_str($this->input->post('amount')),
		               'date' 				=>$date,
		               'time' 				=>$time,
		               'status' 			=>'Pending'
		                );


	
		 
		if($depo_num_rows <= 0 ){
		 
		 	$this->model_app->insert('deposit',$data);
		
		}else{
			 $where = array('id_depo'     => $depo_row_arr['id_depo']);
			 $this->model_app->update('deposit', $data, $where);
		}

	 	$this->session->set_flashdata('msg', 
		    ' <div class="example-alert">
		    <div class="alert alert-success alert-icon">
		        <em class="icon ni ni-check-circle"></em> Berhasil melakukan aktivasi peringkat .! <button class="close" data-dismiss="alert"></button> </div>
		</div>');

	 	redirect('page/me');



}


	public function referal() {

		$usr = $this->model_app->view_where('users', array('username'=> $this->session->username))->row_array();
		$usr_ref1 = $this->model_app->view_where('users', array('ref_gen_1'=> $this->session->username));
		$usr_ref2 = $this->model_app->view_where('users', array('ref_gen_2'=> $this->session->username));
		$usr_ref3 = $this->model_app->view_where('users', array('ref_gen_3'=> $this->session->username));
		$data = array(
			'title'=>'Referal | Xtokonft',
			'usr' => $usr,
			'usr_ref1' => $usr_ref1,
			'usr_ref2' => $usr_ref2,
			'usr_ref3' => $usr_ref3
			
		);
		$this->template->load('lorpo/template','lorpo/mod_users/referal', $data);
	}


	public function how_to() {
		
		$data = array(
			'title'=>'How To | Xtokonft',
			
		);
		$this->template->load('lorpo/template','lorpo/how_to', $data);
	}
	

	public function me_info() {

		$usr = $this->model_app->view_where('users', array('username'=> $this->session->username))->row_array();
		
		$data = array(
			'title'=>'User Info | Xtokonft',
			'usr'=>$usr
			
		);
		$this->template->load('lorpo/template','lorpo/mod_users/user_info', $data);
	}

	public function me_confirm() {

		 $data = array(     'full_name' =>$this->db->escape_str($this->input->post('full_name')),     
                            'phone' =>$this->db->escape_str($this->input->post('phone')),
                            'bank' =>$this->db->escape_str($this->input->post('bank')),
                            'rekening_number' =>$this->db->escape_str($this->input->post('rek_number')),  
                          );
		
		
		$where = array('id' 		=> $this->db->escape_str($this->input->post('id')));
		$this->model_app->update('users', $data, $where);
		redirect('page/me_info');		
	
	}


	public function change_password() {

		
		$usr = $this->model_app->view_where('users', array('username'=> $this->session->username))->row_array();
		$data = array(
			'title'=>'Change Password | Xtokonft',
			'usr'=>$usr
			
		);
		$this->template->load('lorpo/template','lorpo/mod_users/change_password', $data);
	}

	public function password_confirm() {
		 if($this->input->post('pwd') ==''){
			
			 redirect('page/change_password');
			}else{

			$data = array(  'password'     =>hash("sha512", md5($this->input->post('pwd'))),
			                 'pwdrecov'     =>$this->input->post('pwd')
			  );


			$where = array('id' 		=> $this->db->escape_str($this->input->post('id')));
			$this->model_app->update('users', $data, $where);

			redirect('page/change_password');
			
		
			}
		}
	

	public function verification() {

		if (isset($_POST['submit'])){			
		$config['upload_path'] = 'assets/backend/file_verification/';
		$config['allowed_types'] = 'gif|jpg|png|JPG|JPEG|jpeg';
		$config['max_size'] = '8000'; // kb
		$this->load->library('upload', $config);
		$this->upload->do_upload('file_evidence');
		$res=$this->upload->data();
		$config['source_image'] = 'assets/backend/file_verification/'.$res['file_name'];


		if ($res['file_name']==''){ 

			 	$this->session->set_flashdata('msg', 
				    ' <div class="example-alert">
				    <div class="alert alert-danger alert-icon">
				        <em class="icon ni ni-check-circle"></em> Anda belum memilih file bukti transfer.! <button class="close" data-dismiss="alert"></button> </div>
				</div>');

			 	redirect('page/verification');

		}else{

		$data = array( 'evidence_transfer'		=> $res['file_name']    );	
		$where = array('uname' 		=> $this->db->escape_str($this->input->post('username')));
		$this->model_app->update('deposit', $data, $where);

		 	$this->session->set_flashdata('msg', 
			    ' <div class="example-alert">
			    <div class="alert alert-success alert-icon">
			        <em class="icon ni ni-check-circle"></em> Bukti taransfer berhaisl dikirim.! <button class="close" data-dismiss="alert"></button> </div>
			</div>');
		redirect('page/verification');	

		}
	

	}else{
		
		$usr = $this->model_app->view_where('users', array('username'=> $this->session->username))->row_array();
		$verify = $this->model_app->view_where('deposit', array('uname'=> $this->session->username));

		$usr_num_verify = $verify->row_array();
		$usr_verify = $verify->result_array();

		$data = array(
			'title'=>'Verification | Xtokonft',
			'usr'=>$usr,
			'usr_num_verify'=>$usr_num_verify,
			'usr_verify'=>$usr_verify
			
		);
		$this->template->load('lorpo/template','lorpo/mod_users/verification', $data);
	}

}


	public function update_profil() {


		if (isset($_POST['submit'])){
			
		$config['upload_path'] = 'assets/profil/';
		$config['allowed_types'] = 'gif|jpg|png|JPG|JPEG|jpeg';
		$config['max_size'] = '2000'; // kb
		$this->load->library('upload', $config);
		$this->upload->do_upload('file_profil');
		$res=$this->upload->data();
		$config['source_image'] = 'assets/profil/'.$res['file_name'];



		$data = array( 'foto'		=> $res['file_name'] );
		$where = array('id' 		=> $this->db->escape_str($this->input->post('id')));

		$this->model_app->update('users', $data, $where);
		redirect('page/me');	

		

	}else{
		
		$usr = $this->model_app->view_where('users', array('username'=> $this->session->username))->row_array();
		$data = array(
			'title'=>'Update Profil | Xtokonft',
			'usr'=>$usr,
			
			
		);
		$this->template->load('lorpo/template','lorpo/mod_users/update_profil', $data);
	}

}

public function topup(){
	$date=date('Y-m-d');
	$time=date('h:i:s');
	$data['title'] = 'Topup | Xtokonft';
	$data['usr'] = $this->model_app->view_where('users', array('username'=> $this->session->username))->row_array();
	//$usr_depo = $this->model_app->view_where('deposit', array('uname'=> $this->session->username))->num_rows();
	$data['usr_depo'] = $this->model_app->view_where('deposit', array('uname'=> $this->session->username))->num_rows();
	$data['usr_depo_today'] = $this->model_app->view_where('deposit', array('uname'=> $this->session->username,'date'=>$date))->num_rows();
	$data['myDepo'] = $this->model_app->view_where_ordering('deposit', array('uname'=> $this->session->username),'id_depo','ASC');

	$data['sumDepo'] = $this->model_app->sum_data_where('deposit',  array('uname' =>$this->session->username ),'amount');
	$this->template->load('lorpo/template','lorpo/mod_users/topup', $data);

}

public function cTopup(){
	//$id_package = $this->input->post('packageId');
	//$this ->session->set_userdata('sess_idpackage',$id_package);
	//$pId = $this->session->userdata('sess_idpackage');
	$pId = $this->uri->segment(3);
	if($pId == ""){
		redirect('page/topup');
	}else{

		$package = $this->model_app->view_where('deposit_package', array('id_package' => $pId ))->row_array();
		$data = array(
			'title'=>'Top Up | Xtokonft',
			'package' =>$package,
			'id_package' =>$pId		
		);
		$this->template->load('lorpo/template','lorpo/mod_users/ctopup', $data);
	}

}

public function pgetway(){
	$pId = $this->uri->segment(4);
	$pMethod = $this->uri->segment(3);
	if($pId == ""){
		redirect('page/topup');
	}else{

		$package = $this->model_app->view_where('deposit_package', array('id_package' => $pId ))->row_array();
		$deposit = $this->model_app->view_where('deposit', array('uname' => $this->session->username ))->row_array();
		$payment_method = $this->model_app->view_where('payment_method', array('code' => $pMethod))->row_array();
		$data = array(
			'title'=>'Payment| Xtokonft',
			'package' =>$package,	
			'deposit' =>$deposit,	
			'payment_method' =>$payment_method,	
			'paid' =>$this->_random_string($package['amount']),	
		);
		$this->template->load('lorpo/template','lorpo/mod_users/pgetway', $data);
	}

}

public function doTopup() {
	$depo = $this->model_app->view_where('deposit', array('uname' => $this->session->username ))->num_rows();
	$date=date('Y-m-d');
	$time=date('h:i:s');
	$id = $this->db->escape_str($this->input->post('packageId'));
	if($id == ""){
		redirect('page/topup');
	}else if($depo <=0){
		
		if($id == 1){
			$package_name = 'VC 1';
			$amount = 65000;
		}else if($id == 2){
			$package_name = 'VC 2';
			$amount = 200000;
		}
		else if($id == 3){
			$package_name = 'VC 3';
			$amount = 500000;
		}
		else if($id == 4){
			$package_name = 'VC 4';
			$amount = 1000000;
		}
		else if($id == 5){
			$package_name = 'VC 5';
			$amount = 2000000;
		}else if($id == 6){
			$package_name = 'VC 6';
			$amount = 4000000;
		}
		//$uniq   = $this->_random_string($package['amount']),	
		$data = array('id_package'=>$this->db->escape_str($this->input->post('packageId')),
			'package_name'		=>$package_name,	
			'uname'     		=>$this->session->username,    
			'amount' 			=>$amount,
			'date' 				=>$date,
			'time' 				=>$time,
			'status' 			=>'Pending',
			'saldo_upgrade' 	=>'0',
			'uniq_code' 		=>$this->_random_string($package['amount'])[0],
		);
		$this->model_app->insert('deposit',$data);	
		
		redirect('page/cTopup/'.$id);
	}else{
		redirect('page/cTopup/'.$id);
	}


	
}




public function topup_det() {
	
	$data = array(
		'title'=>'Total Pembayaran | Xtokonft',		
	);
	$this->template->load('lorpo/template','lorpo/mod_users/topup_det', $data);
}

public function order() {
	//date_default_timezone_get('Asia/Jakarta');
	$date=date('y-m-d');
	$uri = $this->uri->segment(3);
	$query = $this->model_app->view_where('deposit_package',   array('id_package' => $this->uri->segment(3)));
	$depo  = $this->model_app->view_where('deposit',   array('uname' => $this->session->username))->num_rows();
	$last_usr_depo = $this->model_app->view_where_ordering_limit('deposit', array('uname'=> $this->session->username),'id_depo','DESC','1')->row_array();

	//$depo_active = $this->model_app->view_where_ordering_limit('deposit',   array('uname' => $this->session->username,'Status'=>'Active'),'id_depo','DESC','1')->row_array();
	$user_mission 	= $this->model_app->view_where('user_mission', array('username'=> $this->session->username,'date_created'=>$date))->num_rows();

	$total_commision = $this->model_app->sum_comission('user_mission', array('username'=> $this->session->username),'comission','id_user_mission','ASC');

	$commision_today = $this->model_app->sum_comission('user_mission', array('username'=> $this->session->username,'date_created'=>$date),'comission','id_user_mission','ASC');

	$past_commision = $this->model_app->sum_comission('user_mission', array('username'=> $this->session->username,'date_created <'=>$date),'comission','id_user_mission','ASC');

	$ref_gen1 = $this->model_app->view_where('users', array('ref_gen_1'=> $this->session->username))->result_array();
	$ref_gen2 = $this->model_app->view_where('users', array('ref_gen_2'=> $this->session->username))->result_array();
	$ref_gen3 = $this->model_app->view_where('users', array('ref_gen_3'=> $this->session->username))->result_array();

	$sum_depo = $this->model_app->sum_data_where('deposit', array('uname'=> $this->session->username,'status'=>'Active'),'amount');
	$total_wd = $this->model_app->sum_comission('wd', array('username'=> $this->session->username),'amount','id_wd','ASC');
	

	if ($query->num_rows()<=0){
			redirect(base_url('home/dashboard'));
		}
	$deposit_package = $query->row_array();

		$data = array(
			'title'=>'Order | Xtokonft',
			'deposit_package'=> $deposit_package,
			'user_mission'=> $user_mission,
			'user_depo'=> $depo,
			'last_user_depo'=> $last_usr_depo,
			
			'sum_depo'=> $sum_depo,
			'total_commision'=> $total_commision,
			'commision_today'=> $commision_today,
			'past_commision'=> $past_commision,
			'ref_gen1'=> $ref_gen1,
			'ref_gen2'=> $ref_gen2,
			'ref_gen3'=> $ref_gen3,
			'uri'=> $uri,
			'total_wd' =>$total_wd,
			'date_now' =>$date
			
		);
	$this->template->load('lorpo/template','lorpo/mod_users/order', $data);

	
	
}

public function order_created() {
	$date=date('Y-m-d');
	//$uri = $this->db->escape_str($this->input->post('uri'));
	//	$depo = $this->model_app->view_where_ordering_limit('deposit',   array('uname' => $this->session->username,'Status'=>'Active'),'id_depo','DESC','1')->row_array();
	   // $depo_package = $this->model_app->view_where('deposit_package', array('id_package' => $depo['id_package']))->row_array();

		$limit_to_share = $this->input->post('limit_to_share');
		$max_income = $this->input->post('max_income');

	    $sum_depo = $this->model_app->sum_data_where('deposit', array('uname'=> $this->session->username,'status'=>'Active'),'amount');
		$comission = $this->model_app->sum_data_where('user_mission', array('username'=> $this->session->username),'comission');
		$user_mission 	= $this->model_app->view_where('user_mission', array('username'=> $this->session->username,'date_created'=>$date))->num_rows();

		if($user_mission < $limit_to_share){

			//if($uri == $depo['id_package'] ){

				$modDepo = $max_income - $comission['comission'];

				if($modDepo >= $depo_package['total_commision']){

				$data = array('id_mission_fk'		=>$this->db->escape_str($this->input->post('id_package')),
				              'username'     		=>$this->session->username,  
				              'mission_title'     	=>$this->db->escape_str($this->input->post('package_name')),
				              'comission' 			=>hapus_karakter($this->input->post('commision')),
				              'date_created' 		=>$date,
				              'status' 				=>'Active', 
				              
				             
				               );

				$this->model_app->insert('user_mission',$data);	 
				redirect('page/order/'.$this->input->post('id_package'));

				}else{

				            $this->session->set_flashdata('msg', 
							    ' <div class="example-alert">
							    <div class="alert alert-danger alert-icon">
							        <em class="icon ni ni-check-circle"></em> Maaf total aset anda tidak mencukupi ! <button class="close" data-dismiss="alert"></button> </div>
							</div>');

				            redirect('page/order/'.$this->input->post('id_package'));
				}

			//}else{


				          //  $this->session->set_flashdata('msg', 
							    //' <div class="example-alert">
							   // <div class="alert alert-danger alert-icon">
							        //<em class="icon ni ni-check-circle"></em> Maaf anda memlih pesanan tidak sesuai level anda ! <button class="close" data-dismiss="alert"></button> </div>
							//</div>');

			//}

			}else{

				            $this->session->set_flashdata('msg', 
							    ' <div class="example-alert">
							    <div class="alert alert-danger alert-icon">
							        <em class="icon ni ni-check-circle"></em> Anda sudah selesai mengambil misi harian, silakan kembali besok ! <button class="close" data-dismiss="alert"></button> </div>
							</div>');

				            redirect('page/order/'.$this->input->post('id_package'));
			}

	
	
}

public function checkin() {
	$date=date('Y-m-d');
	$data['title'] = 'Mission  | Xtokonft' ;
	$data['mission_profit'] = $this->model_app->sum_data_where('user_mission', array('username' => $this->session->username ),'comission');
	$data['mProfit'] = $this->model_app->view_where_ordering('user_mission', array('username' => $this->session->username ),'id_user_mission','ASC');
	$depoActive= $this->model_app->view_where_ordering_limit('deposit',  array('uname' => $this->session->username,'status'=>'Active'),'id_depo','DESC','1');
	$data['depoRowActive'] = $depoActive->row_array();
	$data['depoNumActive'] = $depoActive->num_rows();
	$resDepoActive  = $depoActive->row_array();
	
	$data['package']	   = $this->model_app->view_where('deposit_package', array('id_package'=>$resDepoActive['id_package']))->row_array();
	$data['profitToday'] = $this->model_app->view_where('user_mission',  array('username' => $this->session->username,'date_created'=>$date))->num_rows();
	$this->template->load('lorpo/template','lorpo/mod_users/mission', $data);
}



public function checkin_true() {
	
		$date=date('Y-m-d');
		$time = date('h:i:s');
		$depoActive= $this->model_app->view_where_ordering_limit('deposit',  array('uname' => $this->session->username,'status'=>'Active'),'id_depo','DESC','1');
		$depoRowActive = $depoActive->row_array();

		$id_package = $this->db->escape_str($this->input->post('idPackage'));
		$package = $this->model_app->view_where('deposit_package',   array('id_package' => $id_package ))->row_array();

		$profitToday  = $this->model_app->view_where('user_mission',  array('username' => $this->session->username,'date_created'=>$date))->num_rows();
		 	 
		if($package){//jika package terpenuhi atau == true

		 if($profitToday >= $package['limit_to_share'] ) {
            $this->session->set_flashdata('msg', 
			    ' <div class="example-alert">
			    <div class="alert alert-danger alert-icon">
			        <em class="icon ni ni-check-circle"></em> Anda sudah selesai mengambil misi harian, silakan kembali besok ! <button class="close" data-dismiss="alert"></button> </div>
			</div>');

			redirect('page/checkin');

		 	}else{

		 		 $date=date('Y-m-d');
		 		 $data = array('username'     		=>$this->session->username,      
		 		               'comission' 			=>$package['comission'],
		 		               'date_created' 		=>$date,
		 		               'time_created' 		=>$time,
		 		               'status' 			=>'Done',	              
		 		                );
		 		
		 		$this->model_app->insert('user_mission',$data);
		 		redirect('page/checkin');

		 	}

		 	
		 }
			 
	 	

}




public function order_finish() {
	$query = $this->model_app->view_where('deposit_package',   array('id_package' => $this->uri->segment(3)))->row_array();
	$data = array(
		'title'=>'Order Finish | Xtokonft',
		'depo'=>$query	
	);
	$this->template->load('lorpo/template','lorpo/mod_users/order_finish', $data);
}

private function _ref1(){
  $referal  = $this->model_app->view_where('users', array('ref_gen_1' => $this->session->username))->result_array();
  $ref_depo = 0;
  foreach ($referal as $ref ) {
    $sum_ref_depo      = $this->model_app->sum_data_where('deposit',  array('uname' => $ref['username'],'status'=>'Active'),'amount');

    $ref_depo          = ($ref_depo + $sum_ref_depo['amount']); //5%
    }
   $bonus = ($ref_depo * 10)/100;//10 %
   return  $bonus;//parameter @ digunakan untuk melewatkan eror yang terjadi ketika variabel query bernilai null 

}

private function _ref2(){
  $referal  = $this->model_app->view_where('users', array('ref_gen_2' => $this->session->username))->result_array();
  $ref_depo = 0;
  foreach ($referal as $ref ) {
    $sum_ref_depo      = $this->model_app->sum_data_where('deposit',  array('uname' => $ref['username'],'status'=>'Active'),'amount');
      $ref_depo          = ($ref_depo + $sum_ref_depo['amount']); //5%
    }
    $bonus = ($ref_depo * 6)/100;//5 %
   
    return  $bonus;
    //parameter @ digunakan untuk melewatkan eror yang terjadi ketika variabel query bernilai null 

}

private function _ref3(){
  $referal  = $this->model_app->view_where('users', array('ref_gen_3' => $this->session->username))->result_array();
  $ref_depo = 0;
  foreach ($referal as $ref ) {
    $sum_ref_depo      = $this->model_app->sum_data_where('deposit',  array('uname' => $ref['username'],'status'=>'Active'),'amount');
      $ref_depo          = ($ref_depo + $sum_ref_depo['amount']); //%
    }
    $bonus = ($ref_depo * 4)/100;//2 %
   
   return  $bonus;

   //parameter @ digunakan untuk melewatkan eror yang terjadi ketika variabel query bernilai null 

}

private function totalBonusMisi(){
  $missionGen1 = $this->_sumMissionBonus('ref_gen_1');
  $missionGen2 = $this->_sumMissionBonus('ref_gen_2');
  $missionGen3 = $this->_sumMissionBonus('ref_gen_3');
  $totalMissionBonus = $missionGen1 + $missionGen2 + $missionGen3;
  return $totalMissionBonus;
}


private function sumComission(){
  $total_commision = $this->model_app->sum_comission('user_mission', array('username'=> $this->session->username),'comission','id_user_mission','ASC');
  $sum_comission = $total_commision['comission'];
  return $sum_comission;
}

private function sumWd(){
  $total_wd = $this->model_app->sum_comission('wd', array('username'=> $this->session->username),'amount','id_wd','ASC');
  $sum_wd = $total_wd['amount'];
  return $sum_wd;
}

private function totalAllBonus(){
 // $totalBonus = ($this->_ref1() + $this->_ref2() + $this->_ref3()  + $this->totalBonusMisi() + $this->sumComission() ) - $this->sumWd();
  $totalBonus = ($this->_ref1() + $this->_ref2() + $this->_ref3()  + $this->sumComission() + $this->totalBonusMisi() ) - $this->sumWd();
  if($totalBonus <=0 ){
    $tBonus = 0;
  }else{
    $tBonus = $totalBonus;
  }

  return $tBonus;

}



private function _cekRef($referal){
	$query = $this->model_app->view_where('users',   array($referal => $this->session->username),'id','ASC');
	$refNum = $query->num_rows();
	$refRow 	= $query->result_array();
	return  array($refNum , $refRow);
}

private function _sumMissionBonus($refer){
  $referal  = $this->model_app->view_where('users', array($refer => $this->session->username))->result_array();
  $ref_depo = 0;
  foreach ($referal as $ref ) {
    $sum_ref_depo      = $this->model_app->sum_data_where('user_mission',  array('username' => $ref['username']),'comission');
      $ref_depo          = ($ref_depo + $sum_ref_depo['comission']); //1%
    } 
   if($refer == "ref_gen_1"){
   	$bonus = ($ref_depo * 5)/100;//3 % 
   }else if($refer == "ref_gen_2"){
   	$bonus = ($ref_depo * 4)/100;//2 %
   }else if($refer == "ref_gen_3"){
   	$bonus = ($ref_depo * 2)/100;//1 %
   }else{
   	$bonus = 0;//0 %
   }
   return $bonus;
   

   //parameter @ digunakan untuk melewatkan eror yang terjadi ketika variabel query bernilai null 

}



private function _joinToRef($referal,$ref_gen){
	$query = $this->model_app->join_two_table($referal,$ref_gen);
	$refRow 	= $query->result_array();
	return  $refRow;
}

private function _joinToUsermission($referal,$ref_gen){
	$query = $this->model_app->join_two_table1($referal,$ref_gen);
	$refRow 	= $query->result_array();
	return  $refRow;
}

private function cekUser(){
	$query = $this->model_app->view_where('users',   array('username' => $this->session->username));
	return $query->row_array();
}

		
public function team() {
	//$num_ref = $this->model_app->join_table($this->session->username)->num_rows();
	$data = array(
		'title'=>'Team | Xtokonft',
		'total_ref1' => $this->_cekRef('ref_gen_1')[0],
		'total_ref2' => $this->_cekRef('ref_gen_2')[0],
		'total_ref3' => $this->_cekRef('ref_gen_3')[0],

		'ref_arr1' => $this->_cekRef('ref_gen_1')[1],
		'ref_arr2' => $this->_cekRef('ref_gen_2')[1],
		'ref_arr3' => $this->_cekRef('ref_gen_3')[1],
		'ref1'=>$this->_ref1(),
		'ref2'=>$this->_ref2(),
		'ref3'=>$this->_ref3(),
		//'total_bonus_ref'=>$num_ref,
		
		//mencari total bonus misi
		'bonusMission1' => $this->_sumMissionBonus('ref_gen_1'),
		'bonusMission2' => $this->_sumMissionBonus('ref_gen_2'),
		'bonusMission3' => $this->_sumMissionBonus('ref_gen_3'),



		/*
		'bonus_refArr1' => $this->_joinToRef($this->cekUser()['ref_gen_1'],'ref_gen_1'),
		'bonus_refArr2' => $this->_joinToRef($this->cekUser()['ref_gen_2'],'ref_gen_2'),
		'bonus_refArr3' => $this->_joinToRef($this->cekUser()['ref_gen_3'],'ref_gen_3'),

		'mission_refArr1' => $this->_joinToUsermission($this->cekUser()['ref_gen_1'],'ref_gen_1'),
		'mission_refArr2' => $this->_joinToUsermission($this->cekUser()['ref_gen_2'],'ref_gen_2'),
		'mission_refArr3' => $this->_joinToUsermission($this->cekUser()['ref_gen_3'],'ref_gen_3'),*/


	);
	$this->template->load('lorpo/template','lorpo/mod_users/team', $data);
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