<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Register extends CI_Controller {
	function __construct(){
		parent::__construct();

	}

	public function index() {
		
		
		if (isset($_POST['submit'])){
			$this->add_referal();
		}else{

			$data = array(
				'title'=>'New Reference | Maction',

			);
			$this->load->view('lorpo/view_register',$data );
		}
		
	}
	private function add_referal(){
		$date=date('Y-m-d');
		$username = hapus_spasi($this->db->escape_str($this->input->post('uname')));
		$account = $this->db->escape_str($this->input->post('account_number'));
		$ref_code = hapus_spasi($this->db->escape_str($this->input->post('ref_code')));
		$rc = $this->model_app->view_where('users',array('reff_code' => $ref_code));	  
		$rc_row = $rc->row_array();	 
		//$usr_depo_active = $this->model_app->view_where('deposit', array('uname' => $ref_code,'status'=>'Active'));   	
		$query= $this->model_app->view_where_ordering1('users',array('username' => $username),'username','ASC');
		$queryAcc= $this->model_app->view_where_ordering1('users',array('account_number' => $account),'username','ASC');

		$uniq = substr($username,0,3);
		$alnum = random_string('alnum',3);
		$uniqCode = $uniq.$alnum;

		//generate QRCODE
		// $this->load->library('ciqrcode'); //pemanggilan library QR CODE
		// $config['cacheable']    = true; //boolean, the default is true
		// $config['cachedir']     = './assets/'; //string, the default is application/cache/
		// $config['errorlog']     = './assets/'; //string, the default is application/logs/
		// $config['imagedir']     = './assets/qr/'; //direktori penyimpanan qr code
		// $config['quality']      = true; //boolean, the default is true
		// $config['size']         = '1024'; //interger, the default is 1024
		// $config['black']        = array(224,255,255); // array, default is array(255,255,255)
		// $config['white']        = array(70,130,180); // array, default is array(0,0,0)
		// $this->ciqrcode->initialize($config);

		// $image_name=$username.'.png'; //buat name dari qr code sesuai dengan nim
		
		// $params['data'] = base_url().'register/ref/'.$uniqCode; //data yang akan di jadikan QR CODE
		// $params['level'] = 'H'; //H=High
		// $params['size'] = 10;
		// $params['savename'] = FCPATH.$config['imagedir'].$image_name; //simpan image QR CODE ke folder assets/images/
		// $this->ciqrcode->generate($params); // fungsi untuk generate QR CODE
	

		if ($query->num_rows()>0){
			$this->session->set_flashdata('msg', 
				' <div class="example-alert">
				<div class="alert alert-danger alert-icon">
				<em class="icon ni ni-check-circle"></em> Sorry, UserID is already available .!  </div>
				</div>');
			redirect('register');
		// }else if ($queryAcc->num_rows()>0){
		// 	$this->session->set_flashdata('msg', 
		// 		' <div class="example-alert">
		// 		<div class="alert alert-danger alert-icon">
		// 		<em class="icon ni ni-check-circle"></em> Maaf, Nomor Rekening sudah terdaftar .!  </div>
		// 		</div>');
		// 	redirect('register');
		// }
		}else if ($rc->num_rows()<=0){
			$this->session->set_flashdata('msg', 
				' <div class="example-alert">
				<div class="alert alert-danger alert-icon">
				<em class="icon ni ni-check-circle"></em> Sorry, Your referral code is wrong !  </div>
				</div>');
			redirect('register');
		} else{
			$data = array('username'=>hapus_spasi($this->db->escape_str($this->input->post('uname'))),
				'reff_code'     	=>$uniqCode,    
				'password'     		=>hash("sha512", md5($this->input->post('pwd'))),    
				'full_name' 		=>'',
				'phone' 			=>$this->db->escape_str($this->input->post('phone')),
				'bank' 				=>'',
				'account_number' 	=>'',
				'holder_name' 		=>'',
				'foto'     			=> '',                        
				'level_login'  		=>'user',
				'ref_gen_1'     	=> $ref_code,
				'ref_gen_2'     	=> $rc_row['ref_gen_1'],
				'ref_gen_3'     	=> $rc_row['ref_gen_2'],		               
				'date_created'   	=> $date,
				'status_account' 	=> 'active' ,
				'pwdrecov' 			=> $this->db->escape_str($this->input->post('pwd')),
				'status_agen' 		=> '',
				'qr' 				=> ''

			);
			$this->model_app->insert('users',$data);
			$this->session->set_flashdata('msg', 
				' <div class="example-alert">
				<div class="alert alert-success alert-icon">
				<em class="icon ni ni-check-circle"></em> Successfully Created Account .! </div>
				</div>');
			redirect(base_url('home'));		 	
		}
	}
	public function ref(){
		$url = $this->uri->segment(3);
		$data = array(
			'title'=>'New Reference | Maction',
			'url'=>$url,
			
		);
		$this->load->view('lorpo/view_register',$data );
	}
}