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
		  	$time=date('h:i:s');
		   // $daily_profit       = $this->cekDepoActive()['profit']; // profit perhari
		    $daily_profit       = $this->cekProfitArr()['profit']; // profit perhari
		   // $id_package         = $this->cekDepoActive()['id_package']; // 
		    $id_package         = $this->cekProfitArr()['id_package']; // 
		   // $id_depo_fk         = $this->cekDepoActive()['id_depo']; // 
		    $id_depo_fk         = $this->cekProfitArr()['id_depo']; // 
		    $count_daily_profit = ($daily_profit * $this->countDay()['1']);//daily profit kali jumlah berapa hari yang akan di isi dalam table profit
		    $user_mission 		= $this->model_app->view_where_ordering_limit('user_mission', array('username' => $this->session->username,'id_depo_fk'=>$id_depo_fk,'date_created'=>$today),'date_created','DESC','1')->num_rows();


		   
		    if($user_mission <=0){
		    	$insert= array();
		       //do something
		    		foreach ($this->countDay()['0'] as $value) {    
		    			$insert[] = array(
		    				'id_package_fk' =>$id_package,
		    				'username'		=>$this->session->username,
		    				'comission'  	=>$daily_profit,         
		    				'date_created'  =>date('Y-m-d', $value),         
		    				'time_created'  =>$time,         
		    				'status'        =>'Success',
		    				'id_depo_fk' =>$id_depo_fk,
		    				'toko' =>$this->cekProfitArr()['toko'],
		    				   ); 
		    		}

		    	//insert to table temp
		    	$insertTemp = array(
		    		'id_depo_fk'     	=>$id_depo_fk,    
		    		'username'     		=>$this->session->username,    
		    		'date_c'     		=>$today,    
		    	);


		        if($insert){//jika $insert bernilai true
		        	$this->db->insert_batch('user_mission',$insert);
		        	$this->model_app->insert('temp',$insertTemp);
		        }

		        

		        	
		    }


		 }

		
	}


	public function insertProfit1(){
		$today=date('Y-m-d');
		$time=date('h:i:s');

		$user_mission 		= $this->model_app->view_where_ordering_limit('user_mission', array('username' => $this->session->username,'date_created'=>$today),'date_created','DESC','1')->num_rows();

		$sumDepo = $this->model_app->sum_data_where('deposit',  array('uname' =>$this->session->username,'status'=> 'Active' ),'amount');
		$cek_depo = $this->model_app->view_where('deposit',  array('uname' =>$this->session->username,'status'=> 'Active' ))->num_rows();

		if ($sumDepo['amount'] >= 30000 AND $sumDepo['amount'] <= 1000000 ) {
			$profit = ($sumDepo['amount'] * 6.2) / 100;
		}else if($sumDepo['amount'] > 1000000 AND $sumDepo['amount'] <= 3000000 ){
			$profit = ($sumDepo['amount'] * 7.4) / 100;
		}else if($sumDepo['amount'] > 3000000 AND $sumDepo['amount'] <= 5000000 ){
			$profit = ($sumDepo['amount'] * 8.4) / 100;
		}else if($sumDepo['amount'] > 5000000 AND $sumDepo['amount'] <= 10000000 ){
			$profit = ($sumDepo['amount'] * 9.8) / 100;
		}elseif($sumDepo['amount']  > 10000000 ){
			$profit = ($sumDepo['amount'] * 10.2) / 100;
		}else{
			$profit = 0;
		}

		if ($cek_depo >= 1 ) {
			if($user_mission <=0){

		$insert = array(
			'id_package_fk'     =>'0',    
			'username'     		=>$this->session->username,  
			'comission' 		=>$profit,
			'date_created'		=> $today,
			'time_created' 		=>$time,
			'status' 			=>'',
			'id_depo_fk' 		=>'',
			
			'toko' 				=>''
		);

		$this->model_app->insert('user_mission',$insert);	 
	  }

	}
		
		 
		
	}

	public function welfare()
	{
		$data['title']= 'Royal | Pusat Kesejahtraan';
		$data['totalBonus'] = $this->totalAllBonus() ;//total bonus	
		$this->template->load('lorpo/template','lorpo/mod_apps/kesejahtraan_view', $data);
	}


	public function bonus_bergabung_free(){

		$today=date('Y-m-d');
		$time=date('h:i:s');
		$user_mission 		= $this->model_app->view_where_ordering_limit('user_mission', array('username' => $this->session->username,'id_package_fk'=>'0','date_created'=>$today),'date_created','DESC','1')->num_rows();

		if($user_mission <= 0){
			$data = array(

						'id_package_fk' =>'0',
						'username'		=>$this->session->username,
						'comission'  	=>1000,         
						'date_created'  =>$today,         
						'time_created'  =>$time,         
						'status'        =>'Success',
						'id_depo_fk' =>'0',


					);

			$this->model_app->insert('user_mission',$data);	
			redirect('pages/share');
		}
		else{
			redirect('pages/share');
		}
		
	}

	public function share(){
		header('Location: https://api.whatsapp.com/send?&text=*Silakan bergabung dengan kami, dapatkan bonus daftar 2000 dan bonus keuntungan 1000 setiap hari. Produk sewa server 49.000 keuntungan profit 2500 perhari, Klik tautan untuk bergabung*  https://www..site/register/ref/'.$this->session->reff_code.'   '. 'Group : https://chat.whatsapp.com/IPkYpY5b2PAJDRQAIvKN9C');
	}

	public function withdrawal() {
	$usr = $this->model_app->view_where('users', array('username'=>$this->session->username))->row_array();
	$data['usr'] = $usr;
	$data['depo'] = $this->model_app->view_where('deposit', array('id_package'=>$usr['id_package']))->row_array();
	//$data['test'] = $this->countDay()['1'];
	$data['title']		='Royal | Withdrawal';	
		$data['totalBonus'] = $this->totalAllBonus() ;//total bonus	
		$this->template->load('lorpo/template','lorpo/mod_apps/wd', $data);
	}
	public function history_wd() {
	$allWd		= $this->model_app->view_where_ordering('wd',   array('username' => $this->session->username ),'time_created','DESC');
	$allReward		= $this->model_app->view_where_ordering('reward',   array('uname' => $this->session->username ),'time_created','DESC');
	// $data['note'] = array_merge($allWd,$allReward);
	$data['note'] = $allWd;

	$data['title']		='Royal | Withdrawal';	
		$this->template->load('lorpo/template','lorpo/mod_apps/history_wd', $data);
	}
	public function dompetku() {
	$data['totalBonus'] = $this->totalAllBonus() ;//total bonus	
	$data['allComission'] = $this->model_app->view_where_ordering('user_mission',   array('username' => $this->session->username ),'date_created','ASC');
	
	// $data['reff1']      = $this->model_app->join_table($this->session->reff_code)->result_array();
	// $data['reff2']      = $this->model_app->join_table2($this->session->reff_code)->result_array();
	// $data['reff3']      = $this->model_app->join_table3($this->session->reff_code)->result_array();
	// $data['rabat1']      = $this->model_app->rabat($this->session->reff_code)->result_array();
	// $data['rabat2']      = $this->model_app->rabat2($this->session->reff_code)->result_array();
	// $data['rabat3']      = $this->model_app->rabat3($this->session->reff_code)->result_array();

	$data['totaRef1'] = $this->_ref1A() ;
	$data['totaRef2'] = $this->_ref2A()  ;
	$data['totaRef3'] = $this->_ref3A() ;

	$data['rabat1'] = $this->_sumMissionBonus('ref_gen_1');
	// $data['rabat2'] = $this->_sumMissionBonus('ref_gen_2');
	$data['profit'] = $this->sumComission();
	$data['sumWd'] = $this->sumWd();
	$data['sumReward'] = $this->sumReward();

	$data['title']		='Royal | Dompetku';	
		$this->template->load('lorpo/template','lorpo/mod_apps/dompetku', $data);
	}
	public function doWithdrawal() {
		$date=date('Y-m-d');
		$time=date('h:i:s');
		$usr = $this->model_app->view_where('users', array('username'=>$this->session->username))->row_array();
		$dueDate = date("Y-m-d", strtotime(" +3 days", strtotime($usr['date_active'])));
		// $available_balance = $this->input->post('available_balance');	
		$available_balance = $this->totalAllBonus();	
		$amount = $this->input->post('amount');
		$depo_active = $this->model_app->view_where_ordering_limit('deposit',   array('uname' => $this->session->username,'status'=>'Active'),'id_depo','DESC','1')->row_array();
		$depo_activeNum = $this->model_app->view_where_ordering_limit('deposit',   array('uname' => $this->session->username,'status'=>'Active'),'id_depo','DESC','1')->num_rows();
		//$cekIdPackage = $this->model_app->view_where_ordering_limit('deposit',   array('uname' => $this->session->username,'status'=>'Active','id_package'=>$usr['id_package']),'id_depo','DESC','1')->row_array();
		$wd_pending = $this->model_app->view_where('wd',  array('username' =>$this->session->username,'status'=>'Pending'))->num_rows();
		$wd_today = $this->model_app->view_where('wd',  array('username' =>$this->session->username,'date_created'=>$date))->num_rows();
		$setWd		= $this->model_app->view('setting_wd')->row_array();
		if($setWd['status']=='Enable'){

			if($amount > $available_balance ){
				$this->session->set_flashdata('msg', 
					' <div class="example-alert">
					<div class="alert alert-danger alert-icon" >
					<em class="icon ni ni-check-circle"></em> Bonus anda tidak mencukupi .! </div>
					</div>');
				redirect('pages/withdrawal');
			//}else if($usr['id_package'] <= 1 AND $date < $dueDate ){
			// }
			// // else if($usr['id_package'] <= 1 AND $amount > 72000 ){

			// // 	$this->session->set_flashdata('msg', 
			// // 		' <div class="example-alert">
			// // 		<div class="alert alert-danger alert-icon">
			// // 		<em class="icon ni ni-check-circle"></em> Maksimal penarikan Rp 72.000 .! </div>
			// // 		</div>');
			// // 	redirect('pages/withdrawal');
			}
			else if($amount < 30000 ){
				$this->session->set_flashdata('msg', 
					' <div class="example-alert">
					<div class="alert alert-danger alert-icon">
					<em class="icon ni ni-check-circle"></em> Penarikan Minimal Rp. 30.000 .! </div>
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
			// }else if($depo_activeNum <=0){
			// 	$this->session->set_flashdata('msg', 
			// 		' <div class="example-alert">
			// 		<div class="alert alert-danger alert-icon" >
			// 		<em class="icon ni ni-check-circle"></em> Anda belum melakukan topup .!  </div>
			// 		</div>');
			// 	redirect('pages/withdrawal');
			}else if($wd_pending >=1 AND $usr['status_agen'] !='Agen' ){
				$this->session->set_flashdata('msg', 
					' <div class="example-alert">
					<div class="alert alert-danger alert-icon" >
					<em class="icon ni ni-check-circle"></em> Permintaan penarikan Anda dalam antrian ..!   </div>
					</div>');
				redirect('pages/withdrawal');
			}else if($wd_today >=1 AND $usr['status_agen'] !='Agen'){
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
					'pay_date' 			=>'',
					'time_created' 		=>$time,
					'note' 				=>'wd'
				);

				$this->model_app->insert('wd',$data);	 
				$this->session->set_flashdata('msg', 
					' <div class="example-alert">
					<div class="alert alert-success alert-icon" >
					<em class="icon ni ni-check-circle"></em> Penarikan Berhasil .! </div>
					</div>');
				redirect('pages/withdrawal');
			}

		}else{
			$this->session->set_flashdata('msg', 
				' <div class="example-alert">
				<div class="alert alert-danger alert-icon">
				<em class="icon ni ni-check-circle"></em> Anda belum bisa melakukan penarikan saat ini .! </div>
				</div>');
			redirect('pages/withdrawal');
			

		}
		
	}
	public function network() {
		$usr = $this->model_app->view_where('users', array('username'=>$this->session->username))->row_array();
		//$peralatanMingguan = $this->model_app->view_where('deposit', array('id_package'=>'2'))->num_rows();
		//$peralatanBulanan = $this->model_app->view_where('deposit', array('id_package >'=>'2'))->num_rows();
		// $sum_ref_depo      = $this->model_app->sum_data_where('deposit',  array('uname' => $ref['username'],'status'=>'Active'),'amount');
		$data = array(
			'title'=>'Royal | Network',
			// 'total_ref1' 	=> $this->_cekRef('ref_gen_1')[0],
			// 'total_ref2' 	=> $this->_cekRef('ref_gen_2')[0],	
			// 'cekDepo1' 		=> $this->_cekRefDepo('ref_gen_1'),
			// 'cekDepo2' 		=> $this->_cekRefDepo('ref_gen_2'),	
			// // 'ref1'			=>$this->_ref1(),
			// 'peralatanMingguan'			=>$this->_cekPeralatan('ref_gen_1')[0],
			// 'peralatanMingguan2'		=>$this->_cekPeralatan('ref_gen_2')[0],
			// 'peralatanBulanan'		    =>$this->_cekPeralatan('ref_gen_1')[1],
			// 'peralatanBulanan2'			=>$this->_cekPeralatan('ref_gen_2')[1],
			// 'ref2'			=>$this->_ref2(),
			'usr'			=>$usr,
			
			'ref1'			=>$this->model_app->paketRef1($this->session->reff_code)->result_array(),
			'ref2'			=>$this->model_app->paketRef2($this->session->reff_code)->result_array(),
			'ref3'			=>$this->model_app->paketRef3($this->session->reff_code)->result_array(),
		);
		$this->template->load('lorpo/template','lorpo/mod_apps/network', $data);
	}

	public function reff_one1() {
		$usr = $this->model_app->view_where('users', array('username'=>$this->session->username))->row_array();
		$data = array(
			'title'=>'Royal | Network',
			'total_ref1' 	=> $this->_cekRef('ref_gen_1')[0],
			'ref_arr1' 		=> $this->_cekRef('ref_gen_1')[1],
			'ref1'			=>$this->_ref1(),
			'usr'			=>$usr,
			
		);
		$this->template->load('lorpo/template','lorpo/mod_apps/reff_one', $data);
	}

	public function reff_one() {
		// $reff1Mingguan = $this->model_app->paketMingguanRef1($this->session->reff_code)->num_rows();
		// $reff1Bulanan = $this->model_app->paketBulananRef1($this->session->reff_code)->num_rows();
		$data = array(
			'title'=>'Royal | Network',
			'ref_arr1' 		=> $this->_referal('ref_gen_1'),
			
			
			
		);
		$this->template->load('lorpo/template','lorpo/mod_apps/reff_one1', $data);
	}
	public function reff_two() {
		// $reff2Mingguan = $this->model_app->paketMingguanRef2($this->session->reff_code)->num_rows();
		// $reff2Bulanan = $this->model_app->paketBulananRef2($this->session->reff_code)->num_rows();
		$data = array(
			'title'=>'Royal | Network',	
			'ref_arr2' 		=> $this->_referal('ref_gen_2'),
			
			
		);
		$this->template->load('lorpo/template','lorpo/mod_apps/reff_two', $data);
	}

	public function reff_three() {
		// $reff3Mingguan = $this->model_app->paketMingguanRef3($this->session->reff_code)->num_rows();
		// $reff3Bulanan = $this->model_app->paketBulananRef3($this->session->reff_code)->num_rows();
		$data = array(
			'title'=>'Royal | Network',	
			'ref_arr3' 		=> $this->_referal('ref_gen_3'),
			
			
		);
		$this->template->load('lorpo/template','lorpo/mod_apps/reff_three', $data);
	}

	public function reff_active() {
		$reff1 = $this->model_app->user_join_depo1('ref_gen_1')->result_array();
		$reff2 = $this->model_app->user_join_depo1('ref_gen_2')->result_array();
		$array_merge = array_merge($reff1, $reff2);
		$data = array(
			'title'=>'Royal | Network',	
			'ref_aktif' 		=> $array_merge
			
			
		);
		$this->template->load('lorpo/template','lorpo/mod_apps/reff_aktif', $data);
	}


	public function reff_bonus() {
		$data = array(
			'title'=>'Royal | Network',
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
			'title'=>'Royal | Network',
			'totalRabat' => $this->totalBonusMisi(),
			'ref_arr1' 		=> $this->_view_rabatBonus('ref_gen_1'),
			
		);
		$this->template->load('lorpo/template','lorpo/mod_apps/rabat_bonus', $data);
	}



	public function unit_test(){
	$data['title'] = 'Unit Test';
	$data['test']  = $this->cekProfitArr()['date'];
	$data['test1']  = $this->cekProfitArr();
	$data['test3']  = $this->cekProfitArr()['profit'];
	$data['test4']  = $this->cekProfitArr()['date'];
	$data['countDay']  = $this->countDay()['0'];
	$data['countDay1']  = $this->countDay()['1'];
	 $id_package         = $this->cekProfitArr()['id_package']; // 
	
	 $id_depo_fk         = $this->cekProfitArr()['id_depo']; // 
	
	 $data['user_mission'] 		= $this->model_app->view_where_ordering_limit('user_mission', array('username' => $this->session->username,'id_depo_fk'=>$id_depo_fk,'date_created'=>$today),'date_created','DESC','1')->num_rows();

	 $data['allmission']	= $this->model_app->view_where_ordering1('user_mission', array('username' => $this->session->username,'id_depo_fk'=>$id_depo_fk),'date_created','DESC')->num_rows();
	 $data['id_depo_fk'] = $this->cekProfitArr()['id_depo'];
	 $data['id_package'] = $this->cekProfitArr()['id_package'];


	$this->template->load('lorpo/template','lorpo/mod_apps/unit_test', $data);
	}

	
	public function profil() {
		$usr = $this->model_app->view_where('users', array('username'=>$this->session->username))->row_array();
		$data['usr'] = $usr;
		$data['upline'] = $this->model_app->view_where('users', array('username'=>$usr['ref_gen_1']))->row_array();
		$data['depo'] = $this->model_app->view_where('deposit', array('id_package'=>$usr['id_package']))->row_array();
		$data['myDepo'] = $this->model_app->view_join_where('deposit', 'deposit_package','id_package', array('uname'=> $this->session->username,'status'=>'Active'),'id_depo','ASC');
		$data['sumDepo'] = $this->model_app->sum_data_where('deposit',  array('uname' =>$this->session->username ),'amount');
		// $data['usr']		= $this->model_app->view_where('users', array('username' => $this->session->username ))->row_array();
		$data['sumUserMission'] = $this->model_app->sum_data_where('user_mission',  array('username' =>$this->session->username ),'comission');
		$data['sumComission'] = $this->sumComission();
		$data['title']		='Royal | Profil';
		$data['totalBonus'] = $this->totalAllBonus() ;//total bonus	
		// $data['missedIncome'] = $this->missedIncome() ;//missed bonus	
		$data['assetRef'] = $this->assetRef();//total bonus ref
		$data['bonusRef'] = $this->_ref1A() + $this->_ref2A() + $this->_ref3A() + $this->_ref1B() + $this->_ref2B() + $this->_ref3B()  ;//total bonus ref
		$this->template->load('lorpo/template','lorpo/mod_apps/profil', $data);
	}



	public function mine() {
		$usr = $this->model_app->view_where('users', array('username'=>$this->session->username))->row_array();
		$data['usr'] = $usr;
		// $data['upline'] = $this->model_app->view_where('users', array('username'=>$usr['ref_gen_1']))->row_array();
		// $data['depo'] = $this->model_app->view_where('deposit', array('id_package'=>$usr['id_package']))->row_array();
		// $data['myDepo'] = $this->model_app->view_join_where('deposit', 'deposit_package','id_package', array('uname'=> $this->session->username,'status'=>'Active'),'id_depo','ASC');
		$data['sumDepo'] = $this->model_app->sum_data_where('deposit',  array('uname' =>$this->session->username ),'amount');
		// // $data['usr']		= $this->model_app->view_where('users', array('username' => $this->session->username ))->row_array();
		// $data['sumUserMission'] = $this->model_app->sum_data_where('user_mission',  array('username' =>$this->session->username ),'comission');
		// $data['sumComission'] = $this->sumComission();
		$data['title']		='Royal | Profil';
		$data['totalBonus'] = $this->totalAllBonus() ;//total bonus	
		// // $data['missedIncome'] = $this->missedIncome() ;//missed bonus	
		// $data['assetRef'] = $this->assetRef();//total bonus ref

		$data['cekDepo1'] 		= $this->_cekRefDepo('ref_gen_1');
		$data['cekDepo2'] 		= $this->_cekRefDepo('ref_gen_2');
		$data['cekDepo3'] 		= $this->_cekRefDepo('ref_gen_3');

		$data['bonusRef'] = $this->_ref1A() + $this->_ref2A() + $this->_ref3A()  ;//total bonus ref
		$data['ref1A'] = $this->_ref1A() ;
		$data['ref2A'] = $this->_ref2A() ;
		$data['ref3A'] = $this->_ref3A() ;
		$this->template->load('lorpo/template','lorpo/mod_apps/pusat_mitra_view', $data);
	}

	private function cekRef($ref){
	  $referal = $this->model_app->view_where('users', array($ref=> $this->session->reff_code));
	  return $referal;
	}

	  private function assetRef(){
	      $ref_gen1 = $this->cekRef('ref_gen_1')->result_array();
	      $ref_gen2 = $this->cekRef('ref_gen_2')->result_array();
	      $ref_gen3 = $this->cekRef('ref_gen_3')->result_array();
	      $ref_exp1 = 0;
	      foreach ($ref_gen1 as $gen1) {
	        $depo = $this->model_app->view_where('deposit', array('uname'=> $gen1['username'],'status'=>'Active'))->result_array();
	        foreach ($depo as $res ) {
	         $saldo = $res['amount'];
	         $ref_exp1 = ($ref_exp1 + $saldo); 

	       } }
	
	  //generasi level 2
	  $ref_exp2 = 0;
	  foreach ($ref_gen2 as $gen2) {
	    $depo2 = $this->model_app->view_where('deposit', array('uname'=> $gen2['username'],'status'=>'Active'))->result_array();
	    foreach ($depo2 as $res2 ) {
	     $saldo2 = $res2['amount'];
	     $ref_exp2 = ($ref_exp2 + $saldo2); 
	     
	   } }
	
	  //end generasi level 2
	  
	  //generasi level 3
	  $ref_exp3 = 0;
	  foreach ($ref_gen3 as $gen3) {
	    $depo3 = $this->model_app->view_where('deposit', array('uname'=> $gen3['username'],'status'=>'Active'))->result_array();
	    foreach ($depo3 as $res3 ) {
	     $saldo3 = $res3['amount'];
	     $ref_exp3 = ($ref_exp3 + $saldo3); 
	     
	   } }
	
	  //end generasi level 3
	  
	  $totalBonusRef = $ref_exp1 + $ref_exp2 + $ref_exp3 ;
	  return $totalBonusRef;
	}




	public function updateStatusWd() {
		$data = array( 
			'status_wd'      =>'1'
		);
		$where = array('username' 		=> $this->session->username);
		$this->model_app->update('users', $data, $where);
		
	}

	public function updateProfil() {
		if(isset($_POST['submit'])){
			$data = array( 
				'full_name'      =>$this->db->escape_str($this->input->post('full_name')),
				'phone'          =>$this->db->escape_str($this->input->post('phone'))
			);
			$where = array('id' 		=> $this->db->escape_str($this->input->post('id')));
			$this->model_app->update('users', $data, $where);
			redirect('pages/account_settings');	
		}else{
			$data['title'] = 'Update Profil';
			$data['usr']		= $this->model_app->view_where('users', array('username' => $this->session->username ))->row_array();
			$this->template->load('lorpo/template','lorpo/mod_apps/update_profil', $data);
		}
		
	}
	public function updateBank() {
		$usr		= $this->model_app->view_where('users', array('username' => $this->session->username ))->row_array();
		if(isset($_POST['submit'])){
			if($usr['account_number'] ==''){

				$data = array( 
					'bank'      		=>$this->db->escape_str($this->input->post('bank')),
					'account_number'   =>$this->db->escape_str($this->input->post('account_number')),
					'holder_name'      =>$this->db->escape_str($this->input->post('holder_name'))
				);
				$where = array('id' 		=> $this->db->escape_str($this->input->post('id')));
				$this->model_app->update('users', $data, $where);
				redirect('pages/mine');	

			}else{
				redirect('pages/updateBank');	
			}
		
		}else{
			$data['title'] = 'Update Bank';
			$data['usr'] = $usr;
			$this->template->load('lorpo/template','lorpo/mod_apps/update_bank', $data);
		}
	}

	public function updatePass() {
		if(isset($_POST['submit'])){
				if($this->input->post('pwd') ==''){
					redirect('pages/updatePass');
				}else{
					$data = array(  'password'     =>hash("sha512", md5($this->input->post('pwd'))),
						'pwdrecov'     =>$this->input->post('pwd')
					);
					$where = array('id' 		=> $this->db->escape_str($this->input->post('id')));
					$this->model_app->update('users', $data, $where);

					redirect('pages/updatePass');

				}
		}else{
			$data['title'] = 'Update Password';
			$data['usr']		= $this->model_app->view_where('users', array('username' => $this->session->username ))->row_array();
			$this->template->load('lorpo/template','lorpo/mod_apps/update_pass', $data);
		}
	}
	public function account_settings() {
		$data['title']		='Royal | Pengaturan Akun';
		$data['usr']		= $this->model_app->view_where('users', array('username' => $this->session->username ))->row_array();
		$this->template->load('lorpo/template','lorpo/mod_apps/account_setting', $data);

	}
	public function mining_profit() {
		$data['title']			='Royal | Profil';
		$data['profit_mining'] 	= $this->model_app->view_where_ordering('user_mission',   array('username' => $this->session->username ),'date_created','ASC');
		$this->template->load('lorpo/template','lorpo/mod_apps/mining_profit', $data);
	}
	public function reward() {
		$data['title']			='Royal | Profil';
		$data['reward'] 	= $this->model_app->view_where_ordering('reward',   array('uname' => $this->session->username ),'date_created','ASC');

		$this->template->load('lorpo/template','lorpo/mod_apps/reward', $data);
	}
	public function mission_bonus() {
		$data['title']			='Royal | Profil';
		$data['profit_mining'] 	= $this->model_app->view_where_ordering('user_mission',   array('username' => $this->session->username ),'date_created','ASC');
		$data['sumComission'] 	= $this->sumComission();
		$this->template->load('lorpo/template','lorpo/mod_apps/mission_bonus', $data);
	}
	public function contact_us() {
		$data = array(
			'title'=>'Royal | Contact Us',		
		);
		$this->template->load('lorpo/template','lorpo/mod_apps/contact_us', $data);
	}
	public function information() {
		$data = array(
			'title'=>'Royal | Information',		
		);
		$this->template->load('lorpo/template','lorpo/mod_apps/information', $data);
	}


	public function upgrade(){

		$data['depo_package'] = $this->model_app->view_ordering1('deposit_package', 'id_package','ASC')->result();
		$data['title']= 'Royal | Invest';
		$data['totalBonus'] = $this->totalAllBonus() ;//total bonus	
		$this->template->load('lorpo/template','lorpo/mod_apps/invest_view1', $data);

	}

	public function upgrade1(){

		$data['depo_package'] = $this->model_app->view_ordering1('deposit_package', 'id_package','ASC')->result();
		$data['title']= 'Royal | Invest';
		$data['totalBonus'] = $this->totalAllBonus() ;//total bonus	
		$this->template->load('lorpo/template','lorpo/mod_apps/invest_view1', $data);

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

			// $data1 = array('id_package' =>$this->db->escape_str($this->input->post('id_package')),
            //       'date_active' =>$date
        	// );
			$where = array('id_depo' 		=> $this->db->escape_str($this->input->post('id_depo')));
			// $where1 = array('username'     => $this->session->username);

			$this->model_app->update('deposit', $data, $where);
			// $this->model_app->update('users', $data1, $where1);
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
	  $totalMissionBonus = $missionGen1 + $missionGen2  ;
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
	      $bonus = ($ref_depo * 0)/100;//5 % 
	    }else if($refer == "ref_gen_2"){
	      $bonus = ($ref_depo * 0)/100;//4 %
	    }else if($refer == "ref_gen_3"){
	      $bonus = ($ref_depo * 0)/100;//2 %
	    }else{
	      $bonus = 0;//0 %
	    }
	    return $bonus;

	   //parameter @ digunakan untuk melewatkan eror yang terjadi ketika variabel query bernilai null 
	  }

	 private function sumReward(){
	 	$sumBonus      = $this->model_app->sum_data_where('reward',  array('uname' => $this->session->username),'amount');
	 	return $sumBonus['amount'];
	 }
	
	private function totalAllBonus(){
		$sumSaldoUpgrade      = $this->model_app->sum_data_where('deposit',  array('uname' => $this->session->username),'saldo_upgrade');
		$usr = $this->model_app->view_where('users', array('username' => $this->session->username ))->row_array();
		$package = $this->model_app->view_where('deposit_package', array('id_package'=>$usr['id_package']))->row_array();
		
		$totalBonus = ($this->_ref1A() + $this->_ref2A() + $this->_ref3A() + $this->_ref1B() + $this->_ref2B() + $this->_ref3B() + $this->totalBonusMisi()  + $this->sumComission() + $this->sumReward()  ) - $this->sumWd() - $sumSaldoUpgrade['saldo_upgrade'] - $usr['saldo_min']  ;
		
		if($totalBonus <=0 ){
			$tBonus = 0;
		
		}
		else{
			$tBonus = $totalBonus;
		}
		return $tBonus;

	}
	// private function missedIncome(){
	
	// 	$usr = $this->model_app->view_where('users', array('username' => $this->session->username ))->row_array();
	// 	$totalBns = ($this->_ref1() + $this->_ref2() + $this->totalBonusMisi()  + $this->sumComission() + $usr['saldo_reward'] );

	// 	$missedBonus = 0;
	// 	if($usr['id_package'] <=1  AND $totalBns >=72000  ){
	// 		$missedBonus = $totalBns - 72000;
	// 	}
	// 	else{
	// 		$missedBonus = 0;
	// 	}
	// 	return $missedBonus;

	// }
	private function _ref1A(){
		$referal  = $this->model_app->view_where('users', array('ref_gen_1' => $this->session->reff_code))->result_array();
		$ref_depo = 0;
		foreach ($referal as $ref ) {
			$sum_ref_depo      = $this->model_app->sum_data_where('deposit',  array('uname' => $ref['username'],'status'=>'Active'),'amount');

	    $ref_depo          += $sum_ref_depo['amount']; //10%
		}


	   $bonus = ($ref_depo * 12)/100;//10 %
	   return  $bonus;//parameter @ digunakan untuk melewatkan eror yang terjadi ketika variabel query bernilai null 

	}
	private function _ref2A(){
		$referal  = $this->model_app->view_where('users', array('ref_gen_2' => $this->session->reff_code))->result_array();
		$ref_depo = 0;
		foreach ($referal as $ref ) {
			$sum_ref_depo      = $this->model_app->sum_data_where('deposit',  array('uname' => $ref['username'],'status'=>'Active'),'amount');
	      $ref_depo          += $sum_ref_depo['amount']; //5%
	  }
	    $bonus = ($ref_depo * 4)/100;//3 %

	    return  $bonus;
	    //parameter @ digunakan untuk melewatkan eror yang terjadi ketika variabel query bernilai null 

	}
	private function _ref3A(){
		$referal  = $this->model_app->view_where('users', array('ref_gen_3' => $this->session->reff_code))->result_array();
		$ref_depo = 0;
		foreach ($referal as $ref ) {
			$sum_ref_depo      = $this->model_app->sum_data_where('deposit',  array('uname' => $ref['username'],'status'=>'Active'),'amount');
	      $ref_depo          +=  $sum_ref_depo['amount']; //%
	  }
	    $bonus = ($ref_depo * 2)/100;//1 %

	    return  $bonus;

	   //parameter @ digunakan untuk melewatkan eror yang terjadi ketika variabel query bernilai null 

	}


	private function _ref1B(){
		$referal  = $this->model_app->view_where('users', array('ref_gen_1' => $this->session->reff_code))->result_array();
		$ref_depo = 0;
		foreach ($referal as $ref ) {
			$sum_ref_depo      = $this->model_app->sum_data_where('deposit',  array('uname' => $ref['username'],'status'=>'Active','toko'=>'B'),'amount');

	    $ref_depo          += $sum_ref_depo['amount']; //10%
		}


	   $bonus = ($ref_depo * 12)/100;//10 %
	   return  $bonus;//parameter @ digunakan untuk melewatkan eror yang terjadi ketika variabel query bernilai null 

	}
	private function _ref2B(){
		$referal  = $this->model_app->view_where('users', array('ref_gen_2' => $this->session->reff_code))->result_array();
		$ref_depo = 0;
		foreach ($referal as $ref ) {
			$sum_ref_depo      = $this->model_app->sum_data_where('deposit',  array('uname' => $ref['username'],'status'=>'Active','toko'=>'B'),'amount');
	      $ref_depo          += $sum_ref_depo['amount']; //5%
	  }
	    $bonus = ($ref_depo * 3)/100;//3 %

	    return  $bonus;
	    //parameter @ digunakan untuk melewatkan eror yang terjadi ketika variabel query bernilai null 

	}
	private function _ref3B(){
		$referal  = $this->model_app->view_where('users', array('ref_gen_3' => $this->session->reff_code))->result_array();
		$ref_depo = 0;
		foreach ($referal as $ref ) {
			$sum_ref_depo      = $this->model_app->sum_data_where('deposit',  array('uname' => $ref['username'],'status'=>'Active','toko'=>'B'),'amount');
	      $ref_depo          +=  $sum_ref_depo['amount']; //%
	  }
	    $bonus = ($ref_depo * 1)/100;//1 %

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

	private function _referal($referal){
		$query = $this->model_app->user_join_depo($referal);
		$refRow 	= $query->result_array();
		return   $refRow;
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
	    // $cekDepo      = $this->model_app->view_where('deposit',  array('uname' => $ref['username'], 'status'=>'Active'))->num_rows();
	    $cekDepo = $this->model_app->sum_data_where('deposit',  array('uname' => $ref['username'], 'status'=>'Active'),'amount');
	      $ref_depo   += $cekDepo['amount']; 
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
		    $tglMin = date("Y-m-d", strtotime(" -1 days", strtotime($tgl)));//tambah satu hari dari tanggal terakhir masuk bonus di tbl profit
		    if(empty ($cekUsrMission)){ 
		   		
		    	$tAwal = $tglMin;//jika  kosong pada tabel user_mission

		    } else{
		    	$tAwal = $cekUsrMission['date_created'];//jika tidak kosong pada tabel user_mission
		    }
	
	  	}else{
		  
		   	$tAwal         = '';
	  	}

	   $tglMulai = date("Y-m-d", strtotime(" +1 days", strtotime($tAwal)));//tambah satu hari dari tanggal terakhir masuk bonus di tbl profit
	   $t_akhir          = date("Y-m-d");

	   $tglAwal = strtotime($tglMulai);

	   //cek apakah tanggal login hari ini lebih dari 3 hari dihitung sejak tanggal join
	   	$cekDate = date("Y-m-d", strtotime(" +3 days", strtotime($tgl)));
	   // if($today >= $cekDate AND $this->cekProfitArr()['id_package'] == 1){
	   // 	$tglAkhir = strtotime($cekDate);
	   // }else{
	   	  $tglAkhir = strtotime($t_akhir);
	 //  }
	  

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