<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pages extends CI_Controller {
	public $CI = NULL;
	function __construct(){
		parent::__construct();
		$this->CI = & get_instance();
		if ($this->session->level_login==''){
			redirect(base_url());
		}	

	}
	
	public function insertProfit(){
	  //	$amountDepo         = $this->cekDepoActive()['amount'];
	  	if($this->cekProfitArr() != NULL ){ //validasi jika nilai NULL
	  	$today=date('Y-m-d');
	   // $daily_profit       = $this->cekDepoActive()['profit']; // profit perhari
	    $daily_profit       = $this->cekProfitArr()['profit']; // profit perhari
	   // $id_package         = $this->cekDepoActive()['id_package']; // 
	    $id_package         = $this->cekProfitArr()['id_package']; // 
	   // $id_depo_fk         = $this->cekDepoActive()['id_depo']; // 
	    $id_depo_fk         = $this->cekProfitArr()['id_depo']; // 
	    $count_daily_profit = ($daily_profit * $this->countDay()['1']);//daily profit kali jumlah berapa hari yang akan di isi dalam table profit
	    $user_mission 		= $this->model_app->view_where_ordering_limit('user_mission', array('username' => $this->session->username,'id_depo_fk'=>$id_depo_fk,'date_created'=>$today),'date_created','DESC','1')->num_rows();

	   // $remainLimit = ($this->_memberDepo() * 2 ) - $this->_activeBonus();//sisa limit yang akan di insert ke tabel profit
	   // if($count_daily_profit < $remainLimit){//jika jumlah profit daily Kurang dari selisi limit - bonus active

	   
	    if($user_mission <=0){
	    	$insert= array();
	       //do something
	    		foreach ($this->countDay()['0'] as $value) {    
	    			$insert[] = array(
	    				'id_package_fk' =>$id_package,
	    				'username'		=>$this->session->username,
	    				'comission'  	=>$daily_profit,         
	    				'date_created'  =>date('Y-m-d', $value),         
	    				'time_created'  =>'',         
	    				'status'        =>'Success',
	    				'id_depo_fk' =>$id_depo_fk,
	    				   ); 
	    		}
	        if($insert){//jika $insert bernilai true
	        	$this->db->insert_batch('user_mission',$insert);
	        }

	        //insert to table temp
	        $insertTemp = array(
	        	'id_depo_fk'     	=>$id_depo_fk,    
	        	'username'     		=>$this->session->username,    
	        	'date_c'     		=>$today,    
	        );

	        $this->model_app->insert('temp',$insertTemp);	
	    }


	 }

	//}
}

	public function withdrawal() {
	$usr = $this->model_app->view_where('users', array('username'=>$this->session->username))->row_array();
	$data['usr'] = $usr;
	$data['depo'] = $this->model_app->view_where('deposit', array('id_package'=>$usr['id_package']))->row_array();
	//$data['test'] = $this->countDay()['1'];
	$data['title']		='D-Tech Solution | Withdrawal';	
		$data['totalBonus'] = $this->totalAllBonus() ;//total bonus	
		$this->template->load('lorpo/template','lorpo/mod_apps/wd', $data);
	}
	public function history_wd() {
	$data['allWd'] 		= $this->model_app->view_where_ordering('wd',   array('username' => $this->session->username ),'id_wd','ASC');
	$data['title']		='D-Tech Solution | Withdrawal';	
		$this->template->load('lorpo/template','lorpo/mod_apps/history_wd', $data);
	}
	public function dompetku() {
	$data['totalBonus'] = $this->totalAllBonus() ;//total bonus	
	$data['allComission'] = $this->model_app->view_where_ordering('user_mission',   array('username' => $this->session->username ),'date_created','ASC');
	
	$data['reff1']      = $this->model_app->join_table($this->session->reff_code)->result_array();
	$data['reff2']      = $this->model_app->join_table2($this->session->reff_code)->result_array();
	$data['rabat1']      = $this->model_app->rabat($this->session->reff_code)->result_array();
	$data['rabat2']      = $this->model_app->rabat2($this->session->reff_code)->result_array();

	$data['title']		='D-Tech Solution | Dompetku';	
		$this->template->load('lorpo/template','lorpo/mod_apps/dompetku', $data);
	}
	public function doWithdrawal() {
		$date=date('Y-m-d');
		$usr = $this->model_app->view_where('users', array('username'=>$this->session->username))->row_array();
		$dueDate = date("Y-m-d", strtotime(" +3 days", strtotime($usr['date_active'])));
		$available_balance = $this->input->post('available_balance');	
		$amount = $this->input->post('amount');
		$depo_active = $this->model_app->view_where_ordering_limit('deposit',   array('uname' => $this->session->username,'status'=>'Active'),'id_depo','DESC','1')->row_array();
		//$cekIdPackage = $this->model_app->view_where_ordering_limit('deposit',   array('uname' => $this->session->username,'status'=>'Active','id_package'=>$usr['id_package']),'id_depo','DESC','1')->row_array();
		$wd_pending = $this->model_app->view_where('wd',  array('username' =>$this->session->username,'status'=>'Pending'))->num_rows();
		$wd_today = $this->model_app->view_where('wd',  array('username' =>$this->session->username,'date_created'=>$date))->num_rows();
		if($amount > $available_balance ){
			$this->session->set_flashdata('msg', 
				' <div class="example-alert">
				<div class="alert alert-danger alert-icon" >
				<em class="icon ni ni-check-circle"></em> Bonus anda tidak mencukupi .! </div>
				</div>');
			redirect('pages/withdrawal');
		}else if($usr['id_package'] <= 1 AND $date < $dueDate ){

			$this->session->set_flashdata('msg', 
				' <div class="example-alert">
				<div class="alert alert-danger alert-icon">
				<em class="icon ni ni-check-circle"></em> Anda dapat melakukan penarikan 3 hari setelah paket anda aktif .! </div>
				</div>');
			redirect('pages/withdrawal');
		}
		else if($amount < 35000 ){
			$this->session->set_flashdata('msg', 
				' <div class="example-alert">
				<div class="alert alert-danger alert-icon">
				<em class="icon ni ni-check-circle"></em> Penarikan Minimal Rp. 35.000 .! </div>
				</div>');
			redirect('pages/withdrawal');
		}
		else if($amount == ""){
			$this->session->set_flashdata('msg', 
				' <div class="example-alert">
				<div class="alert alert-danger alert-icon" >
				<em class="icon ni ni-check-circle"></em> Anda belum memasukan paket penarikan .! </div>
				</div>');
			redirect('pages/withdrawal');
		}	else if($depo_active['status'] == 'Pending'){
			$this->session->set_flashdata('msg', 
				' <div class="example-alert">
				<div class="alert alert-danger alert-icon" >
				<em class="icon ni ni-check-circle"></em> Anda belum melakukan pembayaran .!  </div>
				</div>');
			redirect('pages/withdrawal');
		}else if($wd_pending >=1){
			$this->session->set_flashdata('msg', 
				' <div class="example-alert">
				<div class="alert alert-danger alert-icon" >
				<em class="icon ni ni-check-circle"></em> Permintaan penarikan Anda dalam antrian ..!   </div>
				</div>');
			redirect('pages/withdrawal');
		}else if($wd_today >=1){
			$this->session->set_flashdata('msg', 
				' <div class="example-alert">
				<div class="alert alert-danger alert-icon">
				<em class="icon ni ni-check-circle"></em> Anda sudah melakukan penarikan hari ini ..!   </div>
				</div>');
			redirect('pages/withdrawal');
		}else{

			$data = array(
				'username'     		=>$this->session->username,    
				'amount' 			=>hapus_karakter($this->input->post('amount')),
				'date_created' 		=>$date,
				'evidence_file'		=> '',
				'status' 			=>'Pending',
				'notes' 			=>'',
				'pay_date' 			=>''
			);

			$this->model_app->insert('wd',$data);	 
			$this->session->set_flashdata('msg', 
				' <div class="example-alert">
				<div class="alert alert-success alert-icon" >
				<em class="icon ni ni-check-circle"></em> Withdrawal Successfully .! </div>
				</div>');
			redirect('pages/withdrawal');
		}
	}
	public function network() {
		$usr = $this->model_app->view_where('users', array('username'=>$this->session->username))->row_array();
		//$peralatanMingguan = $this->model_app->view_where('deposit', array('id_package'=>'2'))->num_rows();
		//$peralatanBulanan = $this->model_app->view_where('deposit', array('id_package >'=>'2'))->num_rows();
		$sum_ref_depo      = $this->model_app->sum_data_where('deposit',  array('uname' => $ref['username'],'status'=>'Active'),'amount');
		$data = array(
			'title'=>'D-Tech Solution | Network',
			'total_ref1' 	=> $this->_cekRef('ref_gen_1')[0],
			'total_ref2' 	=> $this->_cekRef('ref_gen_2')[0],	
			'cekDepo1' 		=> $this->_cekRefDepo('ref_gen_1'),
			'cekDepo2' 		=> $this->_cekRefDepo('ref_gen_2'),	
			'ref1'			=>$this->_ref1(),
			'peralatanMingguan'			=>$this->_cekPeralatan('ref_gen_1')[0],
			'peralatanMingguan2'		=>$this->_cekPeralatan('ref_gen_2')[0],
			'peralatanBulanan'		    =>$this->_cekPeralatan('ref_gen_1')[1],
			'peralatanBulanan2'			=>$this->_cekPeralatan('ref_gen_2')[1],
			'ref2'			=>$this->_ref2(),
			'usr'			=>$usr,
			
			//'test1'	=> $this->cekProfitArr()['profit'],
			//'test2'	=> $this->cekProfitArr()['date'],
		);
		$this->template->load('lorpo/template','lorpo/mod_apps/network', $data);
	}

	public function reff_one1() {
		$usr = $this->model_app->view_where('users', array('username'=>$this->session->username))->row_array();
		$data = array(
			'title'=>'D-Tech Solution | Network',
			'total_ref1' 	=> $this->_cekRef('ref_gen_1')[0],
			'ref_arr1' 		=> $this->_cekRef('ref_gen_1')[1],
			'ref1'			=>$this->_ref1(),
			'usr'			=>$usr,
			
		);
		$this->template->load('lorpo/template','lorpo/mod_apps/reff_one', $data);
	}

	public function reff_one() {
		$reff1Mingguan = $this->model_app->paketMingguanRef1($this->session->reff_code)->num_rows();
		$reff1Bulanan = $this->model_app->paketBulananRef1($this->session->reff_code)->num_rows();
		$data = array(
			'title'=>'D-Tech Solution | Network',
			'ref_arr1' 		=> $this->_cekRef('ref_gen_1')[1],
			'reff1Mingguan' => $reff1Mingguan,
			'reff1Bulanan' => $reff1Bulanan,
			
			
		);
		$this->template->load('lorpo/template','lorpo/mod_apps/reff_one1', $data);
	}
	public function reff_two() {
		$reff2Mingguan = $this->model_app->paketMingguanRef2($this->session->reff_code)->num_rows();
		$reff2Bulanan = $this->model_app->paketBulananRef2($this->session->reff_code)->num_rows();
		$data = array(
			'title'=>'D-Tech Solution | Network',	
			'ref_arr2' 		=> $this->_cekRef('ref_gen_2')[1],
			'reff2Mingguan' => $reff2Mingguan,
			'reff2Bulanan' => $reff2Bulanan,
			
		);
		$this->template->load('lorpo/template','lorpo/mod_apps/reff_two', $data);
	}


	public function reff_bonus() {
		$data = array(
			'title'=>'D-Tech Solution | Network',
			'total_ref1' 	=> $this->_cekRef('ref_gen_1')[0],
			'total_ref2' 	=> $this->_cekRef('ref_gen_2')[0],
			'total_ref3' 	=> $this->_cekRef('ref_gen_3')[0],
			'ref_arr1' 		=> $this->_view_refBonus('ref_gen_1'),
			'ref_arr2' 		=> $this->_view_refBonus('ref_gen_2'),
			'ref_arr3' 		=> $this->_view_refBonus('ref_gen_3'),
			'ref1'			=>$this->_ref1(),
			'ref2'			=>$this->_ref2(),
			'ref3'			=>$this->_ref3(),
			
		);
		$this->template->load('lorpo/template','lorpo/mod_apps/refferal_bonus', $data);
	}

	public function rabat_bonus() {
		$data = array(
			'title'=>'D-Tech Solution | Network',
			'totalRabat' => $this->totalBonusMisi(),
			'ref_arr1' 		=> $this->_view_rabatBonus('ref_gen_1'),
			
		);
		$this->template->load('lorpo/template','lorpo/mod_apps/rabat_bonus', $data);
	}



	public function unit_test(){
	$data['title'] = 'Unit Test';
	$data['test']  = $this->cekProfitArr()['date'];
	//$data['test1']  = $this->cekProfitArr();
	//$data['test3']  = $this->cekProfitArr()['profit'];
	//$data['test4']  = $this->cekProfitArr()['date'];
	$this->template->load('lorpo/template','lorpo/mod_apps/unit_test', $data);
	}

	public function profil() {
		$usr = $this->model_app->view_where('users', array('username'=>$this->session->username))->row_array();
		$data['usr'] = $usr;
		$data['depo'] = $this->model_app->view_where('deposit', array('id_package'=>$usr['id_package']))->row_array();
		$data['myDepo'] = $this->model_app->view_join_where('deposit', 'deposit_package','id_package', array('uname'=> $this->session->username,'status'=>'Active'),'id_depo','ASC');
		$data['sumDepo'] = $this->model_app->sum_data_where('deposit',  array('uname' =>$this->session->username,'status'=>'Active' ),'amount');
		$data['usr']		= $this->model_app->view_where('users', array('username' => $this->session->username ))->row_array();
		$data['sumUserMission'] = $this->model_app->sum_data_where('user_mission',  array('username' =>$this->session->username ),'comission');
		$data['sumComission'] = $this->sumComission();
		$data['title']		='D-Tech Solution | Profil';
		$data['totalBonus'] = $this->totalAllBonus() ;//total bonus	
		$this->template->load('lorpo/template','lorpo/mod_apps/profil', $data);
	}

	public function updateStatusWd() {
		$data = array( 
			'status_wd'      =>'1'
		);
		$where = array('username' 		=> $this->session->username);
		$this->model_app->update('users', $data, $where);
		
	}

	public function updateProfil() {
		$data = array( 
			'full_name'      =>$this->db->escape_str($this->input->post('full_name')),
			'phone'          =>$this->db->escape_str($this->input->post('phone'))
		);
		$where = array('id' 		=> $this->db->escape_str($this->input->post('id')));
		$this->model_app->update('users', $data, $where);
		redirect('pages/account_settings');	
	}
	public function updateBank() {
		$data = array( 
			'bank'      		=>$this->db->escape_str($this->input->post('bank')),
			'account_number'   =>$this->db->escape_str($this->input->post('account_number')),
			'holder_name'      =>$this->db->escape_str($this->input->post('holder_name'))
		);
		$where = array('id' 		=> $this->db->escape_str($this->input->post('id')));
		$this->model_app->update('users', $data, $where);
		redirect('pages/account_settings');	
	}

	public function updatePass() {
		if($this->input->post('pwd') ==''){
			redirect('pages/account_settings');
		}else{
			$data = array(  'password'     =>hash("sha512", md5($this->input->post('pwd'))),
				'pwdrecov'     =>$this->input->post('pwd')
			);
			$where = array('id' 		=> $this->db->escape_str($this->input->post('id')));
			$this->model_app->update('users', $data, $where);

			redirect('pages/account_settings');

		}
	}
	public function account_settings() {
		$data['title']		='D-Tech Solution | Pengaturan Akun';
		$data['usr']		= $this->model_app->view_where('users', array('username' => $this->session->username ))->row_array();
		$this->template->load('lorpo/template','lorpo/mod_apps/account_setting', $data);

	}
	public function mining_profit() {
		$data['title']			='D-Tech Solution | Profil';
		$data['profit_mining'] 	= $this->model_app->view_where_ordering('user_mission',   array('username' => $this->session->username ),'date_created','ASC');
		$data['totalBonus'] = $this->totalAllBonus() ;//total bonus	
		$data['sumComission'] 	= $this->sumComission();
		$data['rabatMisi'] 		= $this->totalBonusMisi();
		$data['ref1']			=$this->_ref1();
		$data['ref2']			=$this->_ref2();
		$data['ref3']			=$this->_ref3();
		$this->template->load('lorpo/template','lorpo/mod_apps/mining_profit', $data);
	}
	public function mission_bonus() {
		$data['title']			='D-Tech Solution | Profil';
		$data['profit_mining'] 	= $this->model_app->view_where_ordering('user_mission',   array('username' => $this->session->username ),'date_created','ASC');
		$data['sumComission'] 	= $this->sumComission();
		$this->template->load('lorpo/template','lorpo/mod_apps/mission_bonus', $data);
	}
	public function contact_us() {
		$data = array(
			'title'=>'D-Tech Solution | Contact Us',		
		);
		$this->template->load('lorpo/template','lorpo/mod_apps/contact_us', $data);
	}
	public function information() {
		$data = array(
			'title'=>'D-Tech Solution | Information',		
		);
		$this->template->load('lorpo/template','lorpo/mod_apps/information', $data);
	}

	public function doUpgrade() {
		$date=date('Y-m-d');
		$time=date('h:i:s');
		$amount = $this->input->post('amount');
		$totalBonus = $this->totalAllBonus() ;//total bonus	

		$packageRow =  $this->model_app->view_where('deposit_package', array('id_package'=>$this->input->post('id_package')))->row_array();
		$uniq = $this->_random_string($packageRow['amount'])[0];
		if($totalBonus >= $amount ){
				$data = array('id_package'=>$this->db->escape_str($this->input->post('id_package')),
				'package_name'		=>$this->db->escape_str($this->input->post('package_name')),	
				'amount' 			=>$amount,
				'profit' 			=>$this->db->escape_str($this->input->post('profit')),
				'date' 				=>$date,
				'time' 				=>$time,
				'status' 			=>'Active',
				'saldo_upgrade' 	=>$totalBonus,
				'uniq_code' 		=>'0',
				'date_of_upgrade' 	=>$date,
				'upgraded' 			=>$this->db->escape_str($this->input->post('profit')) + 1,
			);
			$where = array('id_depo' 		=> $this->db->escape_str($this->input->post('id_depo')));
			$this->model_app->update('deposit', $data, $where);
			redirect(base_url('package'));
		}else{	
			$data = array('id_package'=>$this->db->escape_str($this->input->post('id_package')),
			'package_name'		=>$this->db->escape_str($this->input->post('package_name')),	
			'amount' 			=>$amount,
			'profit' 			=>$this->db->escape_str($this->input->post('profit')),
			'date' 				=>$date,
			'time' 				=>$time,
			'status' 			=>'Pending',
			'saldo_upgrade' 	=>$totalBonus,
			'uniq_code' 		=>$uniq,
			'date_of_upgrade' 	=>$date,
			'upgraded' 			=>$this->db->escape_str($this->input->post('upgraded')) + 1,
		);
		$where = array('id_depo' 		=> $this->db->escape_str($this->input->post('id_depo')));
		$this->model_app->update('deposit', $data, $where);
		 redirect(base_url('package/invoice/'.$uniq));
		}
				
	}


	private function totalBonusMisi(){
	  $missionGen1 = $this->_sumMissionBonus('ref_gen_1');
	  $missionGen2 = $this->_sumMissionBonus('ref_gen_2');
	  $missionGen3 = $this->_sumMissionBonus('ref_gen_3');
	  $totalMissionBonus = $missionGen1 + $missionGen2 ;
	  return $totalMissionBonus;
	}

	private function _sumMissionBonus($refer){
	  $referal  = $this->model_app->view_where('users', array($refer => $this->session->reff_code))->result_array();
	  $ref_depo = 0;
	  foreach ($referal as $ref ) {
	    $sum_ref_depo      = $this->model_app->sum_data_where('user_mission',  array('username' => $ref['username']),'comission');
	      $ref_depo          = ($ref_depo + $sum_ref_depo['comission']); //1%
	    }

	   
	    if($refer == "ref_gen_1"){
	      $bonus = ($ref_depo * 10)/100;//5 % 
	    }else if($refer == "ref_gen_2"){
	      $bonus = ($ref_depo * 3)/100;//4 %
	    }else if($refer == "ref_gen_3"){
	      $bonus = ($ref_depo * 1)/100;//2 %
	    }else{
	      $bonus = 0;//0 %
	    }
	    return $bonus;

	   //parameter @ digunakan untuk melewatkan eror yang terjadi ketika variabel query bernilai null 
	  }
	
	private function totalAllBonus(){
		$sumSaldoUpgrade      = $this->model_app->sum_data_where('deposit',  array('uname' => $this->session->username),'saldo_upgrade');
		$usr = $this->model_app->view_where('users', array('username' => $this->session->username ))->row_array();
		$package = $this->model_app->view_where('deposit_package', array('id_package'=>$usr['id_package']))->row_array();
	 // $totalBonus = ($this->_ref1() + $this->_ref2() + $this->_ref3()  + $this->totalBonusMisi() + $this->sumComission() ) - $this->sumWd();
		$totalBonus = ($this->_ref1() + $this->_ref2() + $this->totalBonusMisi()  + $this->sumComission() + $usr['saldo_reward'] ) - $this->sumWd() - $sumSaldoUpgrade['saldo_upgrade']  ;
		if($totalBonus <=0 ){
			$tBonus = 0;
		}else if($usr['id_package'] <=1 AND $totalBonus > $package['total_comission']){
			$tBonus = $package['total_comission'];
		}
		else{
			$tBonus = $totalBonus;
		}
		return $tBonus;

	}
	private function _ref1(){
		$referal  = $this->model_app->view_where('users', array('ref_gen_1' => $this->session->reff_code))->result_array();
		$ref_depo = 0;
		foreach ($referal as $ref ) {
			$sum_ref_depo      = $this->model_app->sum_data_where('deposit',  array('uname' => $ref['username'],'status'=>'Active'),'amount');

	    $ref_depo          += $sum_ref_depo['amount']; //10%
	}
	   $bonus = ($ref_depo * 10)/100;//10 %
	   return  $bonus;//parameter @ digunakan untuk melewatkan eror yang terjadi ketika variabel query bernilai null 

	}
	private function _ref2(){
		$referal  = $this->model_app->view_where('users', array('ref_gen_2' => $this->session->reff_code))->result_array();
		$ref_depo = 0;
		foreach ($referal as $ref ) {
			$sum_ref_depo      = $this->model_app->sum_data_where('deposit',  array('uname' => $ref['username'],'status'=>'Active'),'amount');
	      $ref_depo          += $sum_ref_depo['amount']; //5%
	  }
	    $bonus = ($ref_depo * 3)/100;//3 %

	    return  $bonus;
	    //parameter @ digunakan untuk melewatkan eror yang terjadi ketika variabel query bernilai null 

	}
	private function _ref3(){
		$referal  = $this->model_app->view_where('users', array('ref_gen_3' => $this->session->reff_code))->result_array();
		$ref_depo = 0;
		foreach ($referal as $ref ) {
			$sum_ref_depo      = $this->model_app->sum_data_where('deposit',  array('uname' => $ref['username'],'status'=>'Active'),'amount');
	      $ref_depo          +=  $sum_ref_depo['amount']; //%
	  }
	    $bonus = ($ref_depo * 3)/100;//3 %

	    return  $bonus;

	   //parameter @ digunakan untuk melewatkan eror yang terjadi ketika variabel query bernilai null 

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
	private function _cekRef($referal){
		$query = $this->model_app->view_where('users',   array($referal => $this->session->reff_code));
		$refNum = $query->num_rows();
		$refRow 	= $query->result_array();
		return  array($refNum , $refRow);
	}
	private function _cekPeralatan($referal){
		$usr = $this->model_app->view_where('users',   array($referal => $this->session->reff_code))->row_array();
		$peralatanMingguan = $this->model_app->view_where('deposit',   array('uname' => $usr['username'], 'id_package'=>'2'))->num_rows();
		$peralatanBulanan = $this->model_app->view_where('deposit',   array('uname' => $usr['username'], 'id_package >'=>'2'))->num_rows();
		return  array($peralatanMingguan , $peralatanBulanan);
	}
	private function _cekRefDepo($refer){
	  $referal  = $this->model_app->view_where('users', array($refer => $this->session->reff_code))->result_array();
	  $ref_depo = 0;
	  foreach ($referal as $ref ) {
	    $cekDepo      = $this->model_app->view_where('deposit',  array('uname' => $ref['username'], 'status'=>'Active'))->num_rows();
	      $ref_depo   += $cekDepo; 
	    }
	    return $ref_depo;

	  }
	private function _view_refBonus($referal){
		$query = $this->model_app->view_refBonus(array($referal=>$this->session->reff_code))->result_array();
		return $query;
	}

	private function _view_rabatBonus($referal){
		$query = $this->model_app->view_rabatBonus(array($referal=>$this->session->reff_code))->result_array();
		return $query;
	}


	public function cekDepoActive(){
		$depo = $this->model_app->view_where_ordering_limit('deposit',   array('uname' => $this->session->username,'status'=>'Active'),'id_depo','ASC','1')->row_array();
		//$result = $depo;
		return $depo;
	}

	public function cekProfitArr(){
	// $cekProfit = $this->model_app->view_where_ordering_limit('user_mission', array('username' => $this->session->username),'id_user_mission','DESC','1')->row_array();
	 $cekProfit = $this->model_app->cekDepo()->row_array();
	 return $cekProfit;
	}

	private function countDay(){
	    if($this->cekProfitArr() != NUll){
	    $id_depo = $this->cekProfitArr()['id_depo'];
	     $cekUsrMission = $this->model_app->view_where_ordering_limit('user_mission',   array('username' => $this->session->username,'id_depo_fk'=>$id_depo),'id_user_mission','DESC','1')->row_array();

	    	$today          = date("Y-m-d");
		    $tgl         = $this->cekProfitArr()['date'];
		    if(empty ($cekUsrMission)){ 
		   		//$date_created = date("Y-m-d", strtotime(" -1 days", strtotime($tgl)));
		    	//$tglAwal = $date_created;//jika tidak kosong pada tabel user_mission
		    	$tglAwal = $tgl;//jika tidak kosong pada tabel user_mission

		    } else{
		    	$tglAwal = $cekUsrMission['date_created'];//jika tidak kosong pada tabel user_mission
		    }
	
	  	}else{
		  	//$tgl         = $this->cekDepoActive()['date'];
		  	//$date_created = date("Y-m-d", strtotime(" -1 days", strtotime($tgl)));
		   	//$tglAwal         = $this->cekDepoActive()['date'];
		   	$tglAwal         = '';
	  	}

	   $tglMulai = date("Y-m-d", strtotime(" +1 days", strtotime($tglAwal)));//tambah satu hari dari tanggal terakhir masuk bonus di tbl profit
	   $tglAkhir          = date("Y-m-d");

	   $tglAwal = strtotime($tglMulai);
	   $tglAkhir = strtotime($tglAkhir);
	   $hariBonusMasuk = array();
	   $sabtuminggu = array();

	   for ($i=$tglAwal; $i <= $tglAkhir; $i += (60 * 60 * 24)) {
	   	//if (date('w', $i) !== '0' && date('w', $i) !== '6') { //bonus tidak masuk hari sabtu dan minggu 0,6 kode hari
	   		$hariBonusMasuk[] = $i;
	   	//} else {
	   		//$sabtuminggu[] = $i;
	   //	}

	   }

	   $jumlahHariBonus = count($hariBonusMasuk);
	   $jumlah_sabtuminggu = count($sabtuminggu);
	   $abtotal = $jumlahHariBonus + $jumlah_sabtuminggu;

	   return  array($hariBonusMasuk, $jumlahHariBonus);
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