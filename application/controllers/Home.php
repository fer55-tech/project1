<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
  function index(){
    
    $username = $this->db->escape_str($this->input->post('uname'));
    $password = hash("sha512", md5($this->db->escape_str($this->input->post('pwd'))));
    $cek = $this->model_app->cek_login($username,$password,'users');
    $row = $cek->row_array();
    $total = $cek->num_rows();
    
    if ($total > 0){
      $this->session->set_userdata(array('username'=>$row['username'],
        'level_login'      =>$row['level_login'], 
        'reff_code'      =>$row['reff_code'], 
        'status'           =>$row['status_account']));

      redirect('home/dashboard');
    }else{

      $data['title'] = 'Username atau Password salah!';
      $this->load->view('lorpo/view_login',$data );
    }
 
  }

  private function _sumMissionBonus($refer){
    $referal  = $this->model_app->view_where('users', array($refer => $this->session->reff_code))->result_array();
    $ref_depo = 0;
    foreach ($referal as $ref ) {
      $sum_ref_depo      = $this->model_app->sum_data_where('user_mission',  array('username' => $ref['username']),'comission');
        $ref_depo          = ($ref_depo + $sum_ref_depo['comission']); //1%
      }
      if($refer == "ref_gen_1"){
        $bonus = ($ref_depo * 2)/100;//5 % 
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
    function dashboard(){
      $date=date('Y-m-d');
      $month=date('m');
      if ($this->session->level_login=='admin'){
        $data['total_depo'] = $this->model_app->sum_data('deposit','amount','id','ASC');
        $data['all_user_active'] = $this->model_app->view_where('users',array('id_package >'=>'0'))->num_rows();
        $data['all_user_pending'] = $this->model_app->view_where('users',array('id_package ='=>'0'))->num_rows();
        $data['depo_package'] = $this->model_app->view_ordering('deposit_package', 'id_package','ASC');

        $data['title']= "Dashboard | Royal";
        $this->load->view('lorpo/view_home_admin',$data );
      }else if($this->session->level_login=='user'){
        $user = $this->model_app->view_where('users', array('username' => $this->session->username))->row_array();
        $data['user'] = $user;
       $data['upline'] = $this->model_app->view_where('users', array('reff_code' => $user['ref_gen_1']))->row_array();
        $dueDate = date("Y-m-d", strtotime(" +3 days", strtotime($user['date_active'])));
      	$cekTemp  = $this->model_app->view_where_ordering_limit('temp', array('username'=> $this->session->username),'id','DESC','1')->row_array();

	      	//if($user['id_package'] <=1 AND $date <= @$dueDate['date_active'] ){
	      		//$this->deleteTemp();
	      //	}else {
            if($date > @$cekTemp['date_c'] ){
            $this->deleteTemp();
            }
         // //}

          //if($date > @$cekTemp['date_c'] ){
            //$this->deleteTemp();
        //  }


        $data['depo_toko_c'] = $this->model_app->view_where_ordering('deposit_package', array('toko '=>'C'), 'id_package','ASC');
      
        $data['today_commision'] = $this->model_app->sum_comission('user_mission', array('username'=> $this->session->username,'date_created'=>$date),'comission','id_user_mission','ASC');

        $data['sumDepo'] = $this->model_app->sum_data_where('deposit',  array('uname' =>$this->session->username ),'amount');
          $data['dPackage'] = $this->model_app->view_where('deposit_package', array('id_package' => @$depoActive['id_package']))->row_array();//parameter @ digunakan untuk melewatkan eror ketika variable bernilai null
          $data['totalBonus'] = $this->totalAllBonus();//total bonus
          $data['total_ref1']  = $this->_cekRef('ref_gen_1')[0];
          $data['total_ref2']  = $this->_cekRef('ref_gen_2')[0];
          $data['total_ref3']  = $this->_cekRef('ref_gen_3')[0];

          $data['cekDepo1']    = $this->_cekRefDepo('ref_gen_1');
          $data['cekDepo2']    = $this->_cekRefDepo('ref_gen_2');
          $data['cekDepo3']    = $this->_cekRefDepo('ref_gen_3');
          $data['totalBonusReff'] = $this->bonusRef();

          $data['refActivelv1'] = $this->model_app->user_join_depo1('ref_gen_1')->num_rows();
          $data['refActivelv2'] = $this->model_app->user_join_depo1('ref_gen_2')->num_rows();
          $data['refActivelv3'] = $this->model_app->user_join_depo1('ref_gen_3')->num_rows();

          $reff1 = $this->model_app->user_join_depo2()->result_array();
          $reff2 = $this->model_app->user_join_depo2()->result_array();
          $reff3 = $this->model_app->user_join_depo2()->result_array();
          $array_merge = array_merge($reff1, $reff2,$reff3);
          $data['reff_aktif'] = $array_merge;

          $data['title']= "Royal | Dashboard";     
          $this->template->load('lorpo/template','lorpo/view_home', $data);
        }else{
          redirect(base_url());
        } 
        
      }

        function dashboard1(){
      $date=date('Y-m-d');
      $month=date('m');
      if ($this->session->level_login=='admin'){
        $data['total_depo'] = $this->model_app->sum_data('deposit','amount','id','ASC');
        $data['all_user_active'] = $this->model_app->view_where('users',array('id_package >'=>'0'))->num_rows();
        $data['all_user_pending'] = $this->model_app->view_where('users',array('id_package ='=>'0'))->num_rows();
        $data['depo_package'] = $this->model_app->view_ordering('deposit_package', 'id_package','ASC');

        $data['title']= "Dashboard | Royal";
        $this->load->view('lorpo/view_home_admin',$data );
      }else if($this->session->level_login=='user'){
        $user = $this->model_app->view_where('users', array('username' => $this->session->username))->row_array();
        $data['user'] = $user;
       $data['upline'] = $this->model_app->view_where('users', array('reff_code' => $user['ref_gen_1']))->row_array();
        $dueDate = date("Y-m-d", strtotime(" +3 days", strtotime($user['date_active'])));
        $cekTemp  = $this->model_app->view_where_ordering_limit('temp', array('username'=> $this->session->username),'id','DESC','1')->row_array();

          //if($user['id_package'] <=1 AND $date <= @$dueDate['date_active'] ){
            //$this->deleteTemp();
        //  }else {
            if($date > @$cekTemp['date_c'] ){
            $this->deleteTemp();
            }
         // //}

          //if($date > @$cekTemp['date_c'] ){
            //$this->deleteTemp();
        //  }


        $data['depo_toko_c'] = $this->model_app->view_where_ordering('deposit_package', array('toko '=>'C'), 'id_package','ASC');
      
        $data['today_commision'] = $this->model_app->sum_comission('user_mission', array('username'=> $this->session->username,'date_created'=>$date),'comission','id_user_mission','ASC');

        $data['sumDepo'] = $this->model_app->sum_data_where('deposit',  array('uname' =>$this->session->username ),'amount');
          $data['dPackage'] = $this->model_app->view_where('deposit_package', array('id_package' => @$depoActive['id_package']))->row_array();//parameter @ digunakan untuk melewatkan eror ketika variable bernilai null
          $data['totalBonus'] = $this->totalAllBonus();//total bonus
          $data['total_ref1']  = $this->_cekRef('ref_gen_1')[0];
          $data['total_ref2']  = $this->_cekRef('ref_gen_2')[0];
          $data['total_ref3']  = $this->_cekRef('ref_gen_3')[0];

          $data['cekDepo1']    = $this->_cekRefDepo('ref_gen_1');
          $data['cekDepo2']    = $this->_cekRefDepo('ref_gen_2');
          $data['cekDepo3']    = $this->_cekRefDepo('ref_gen_3');
          $data['totalBonusReff'] = $this->bonusRef();

          $data['refActivelv1'] = $this->model_app->user_join_depo1('ref_gen_1')->num_rows();
          $data['refActivelv2'] = $this->model_app->user_join_depo1('ref_gen_2')->num_rows();

          $reff1 = $this->model_app->user_join_depo2('ref_gen_1')->result_array();
          $reff2 = $this->model_app->user_join_depo2('ref_gen_2')->result_array();
          $reff3 = $this->model_app->user_join_depo2('ref_gen_3')->result_array();
          $array_merge = array_merge($reff1, $reff2,$reff3);
          $data['reff_aktif'] = $array_merge;
          $data['title']= "Royal | Dashboard";     
          $this->template->load('lorpo/template','lorpo/view_home1', $data);
        }else{
          redirect(base_url());
        } 
        
      }



    private function deleteTemp(){
	  $uname = array('username' => $this->session->username);
	  $this->model_app->delete('temp',$uname);
    }

    private function _cekRef($referal){
      $query = $this->model_app->view_where('users',   array($referal => $this->session->reff_code));
      $refNum = $query->num_rows();
      $refRow   = $query->result_array();
      return  array($refNum , $refRow);
    }

    private function _cekRefDepo($refer){
      $referal  = $this->model_app->view_where('users', array($refer => $this->session->reff_code))->result_array();
      $ref_depo = 0;
      foreach ($referal as $ref ) {
        // $cekDepo      = $this->model_app->view_where('deposit',  array('uname' => $ref['username']))->row_array();
         $sumBonus      = $this->model_app->sum_data_where('deposit',  array('uname' => $ref['username'],'status'=>'Active'),'amount');
          $ref_depo   += @$sumBonus['amount']; 
        }
        return $ref_depo;

      }



    private function bonusRef(){
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
    $ref_exp1_true = ($ref_exp1 * 12)/100; //10%
    //generasi level 2
    $ref_exp2 = 0;
    foreach ($ref_gen2 as $gen2) {
      $depo2 = $this->model_app->view_where('deposit', array('uname'=> $gen2['username'],'status'=>'Active'))->result_array();
      foreach ($depo2 as $res2 ) {
       $saldo2 = $res2['amount'];
       $ref_exp2 = ($ref_exp2 + $saldo2); 
       
     } }
    $ref_exp2_true = ($ref_exp2 * 4)/100; //5%
    //end generasi level 2
    
    //generasi level 3
    $ref_exp3 = 0;
    foreach ($ref_gen3 as $gen3) {
      $depo3 = $this->model_app->view_where('deposit', array('uname'=> $gen3['username'],'status'=>'Active'))->result_array();
      foreach ($depo3 as $res3 ) {
       $saldo3 = $res3['amount'];
       $ref_exp3 = ($ref_exp3 + $saldo3); 
       
     } }
    $ref_exp3_true = $ref_exp3 * 2 /100; //2%
    //end generasi level 3
    
    $totalBonusRef = $ref_exp1_true + $ref_exp2_true + $ref_exp3_true ;
    return $totalBonusRef;
  }
  private function cekRef($ref){
    $referal = $this->model_app->view_where('users', array($ref=> $this->session->reff_code));
    return $referal;
  }
  private function totalBonusMisi(){
    $missionGen1 = $this->_sumMissionBonus('ref_gen_1');
    $missionGen2 = $this->_sumMissionBonus('ref_gen_2');
    $missionGen3 = $this->_sumMissionBonus('ref_gen_3');
    $totalMissionBonus = $missionGen1 + $missionGen2 + $missionGen3 ;
    return $totalMissionBonus;
  }
  /*private function totalAllBonus(){
    $num_ref = $this->model_app->join_table($this->session->username)->num_rows();
    if(! empty($num_ref)){
      $constan = 20000 * $num_ref;
    }else{
      $constan = 0;
    }
    $totalBonus = ($constan + $this->totalBonusMisi() + $this->sumComission() ) - $this->sumWd();
    if($totalBonus <=0 ){
      $tBonus = 0;
    }else{
      $tBonus = $totalBonus;
    }
    return $tBonus;
  }*/
  private function sumReward(){
    $sumBonus      = $this->model_app->sum_data_where('reward',  array('uname' => $this->session->username),'amount');
    return $sumBonus['amount'];
  }
  private function totalAllBonus(){
    $sumSaldoUpgrade      = $this->model_app->sum_data_where('deposit',  array('uname' => $this->session->username),'saldo_upgrade');
    $usr = $this->model_app->view_where('users', array('username' => $this->session->username ))->row_array();
   // $totalBonus = ($this->_ref1() + $this->_ref2() + $this->_ref3()  + $this->totalBonusMisi() + $this->sumComission() ) - $this->sumWd();
    $totalBonus = ($this->bonusRef() + $this->totalBonusMisi()  + $this->sumComission() + $this->sumReward()) - $this->sumWd() - $sumSaldoUpgrade['saldo_upgrade'] - $usr['saldo_min'];
    if($totalBonus <=0 ){
      $tBonus = 0;
    }else{
      $tBonus = $totalBonus;
    }
    return $tBonus;
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
  private function bonusMissionRef($referal){
    $referal  = $this->model_app->view_where('users', array($referal => $this->session->reff_code))->result_array();
    $ref_depo = 0;
    foreach ($referal as $ref ) {
      $sum_ref_depo      = $this->model_app->sum_data_where('user_mission',  array('username' => $ref['username'],'status'=>'Active'),'comission');
      $ref_depo          = ($ref_depo + $sum_ref_depo['comission']); 
    }
      $bonus = ($ref_depo /100);//1 %
      return  $bonus;
    }
    public function delete_multiple_ads(){ 
      $id = $_POST['id']; 
      if($id != '' ){
        $this->model_app->delete_ads($id); 
        
        return redirect('home/list_advertising');
        
      }else{
        return redirect('home/list_advertising');
      }
      
    }
    
    
  
 function all_users(){
     if ($this->session->level_login=='admin'){

      $data['usr'] = $this->model_app->join_two_table()->result_array();

      $data['title']= "All Users | Royal";
      $this->load->view('lorpo/admin/all_user',$data );
    }else{
     redirect(base_url());
   } 

 }

 public function deleteDepo(){
 $id_depo = array('id_depo' => $this->uri->segment(3));
 $this->model_app->delete('deposit',$id_depo);
 redirect('home/filter_user_data');
 }



 public function addSaldo1() {
  if ($this->session->level_login=='admin'){
    $reward = $this->input->post('reward');
    $uname = $this->db->escape_str($this->input->post('uname'));
    $this->db->query("update users set saldo_reward = saldo_reward + '$reward' where username='$uname' ");
   // return $result;
    redirect('home/all_users');   
  }else{
   redirect(base_url());
 } 
 }

 public function addSaldo() {
    if ($this->session->level_login=='admin'){
      $reward = $this->input->post('reward');
      $uname = $this->db->escape_str($this->input->post('uname'));
      $date = date("Y-m-d");
      $time=date('h:i:s');

      $data = array(
        'uname' => $uname,
        'amount' => $reward,
        'date_created' => $date,
        'time_created' => $time,
        'note' => 'reward',
        'status' => 'Success'
      );

      $this->model_app->insert('reward',$data);  
      $this->session->set_flashdata('msg', 
        ' <div class="example-alert">
        <div class="alert alert-success alert-icon">
        <em class="icon ni ni-check-circle"></em> Add Data Successfuly .! <button class="close" data-dismiss="alert"></button> </div>
        </div>');
     
      redirect('home/all_users');   
    }else{
     redirect(base_url());
   } 
 }

 public function saldoMin() {
  if ($this->session->level_login=='admin'){
    $saldo_min = $this->input->post('saldo_min');
    $uname = $this->db->escape_str($this->input->post('uname'));
    $this->db->query("update users set saldo_min = saldo_reward + '$reward' where username='$uname' ");
   // return $result;
    redirect('home/all_users');   
  }else{
   redirect(base_url());
 } 
 }

 public function settings() {
  if ($this->session->level_login=='admin'){
      $data['setWd'] = $this->model_app->view('setting_wd')->row_array();
      $data['title'] = 'Settings';
      $this->load->view('lorpo/admin/settings',$data );
    }
  }

  public function setWd() {
   if ($this->session->level_login=='admin'){
    $status = $this->input->post('status');

    if($status == 'Enable'){
      $data = array('status' =>'Disable');
    }else{
       $data = array('status' =>'Enable');
    }

    $where1 = array('id'     => $this->db->escape_str($this->input->post('id')));
    $this->model_app->update('setting_wd', $data, $where);
     redirect('home/settings');
    }


   }

 public function agency() {
  if ($this->session->level_login=='admin'){
    $data = array('id' =>$this->input->post('id'),
      'status_agen' => 'Agen',
      'agen' => $this->input->post('agency')

  );
    $where = array('id'     => $this->db->escape_str($this->input->post('id')));
    $this->model_app->update('users', $data, $where);
    $this->session->set_flashdata('msg', 
      ' <div class="example-alert">
      <div class="alert alert-success alert-icon">
      <em class="icon ni ni-check-circle"></em>  Successfuly ! <button type="button" class="close" data-dismiss="alert">&times;</button> </div>
      </div>');
    redirect('home/all_users');      
  }else{
   redirect(base_url());
 } 
 }

 public function user_upgrade() {
   if ($this->session->level_login=='admin'){
     $id = $this->input->post('id_package');
     if($id == ""){
       $this->session->set_flashdata('msg', 
         ' <div class="example-alert">
         <div class="alert alert-danger alert-icon">
         <em class="icon ni ni-check-circle"></em> You have not selected a deposit package paket ! <button type="button" class="close" data-dismiss="alert">&times;</button> </div>
         </div>');
       redirect('home/all_users');   
     }else{
       if($id == 1){
         $package_name = 'LV Harian';
         $amount = 50000;
         $profit = 24000;
       }else if($id == 2){
         $package_name = 'LV Mingguan';
         $amount = 280000;
         $profit = 22000;
       }
       else if($id == 3){
         $package_name = 'LV Bulanan';
         $amount = 650000;
         $profit = 25000;
       }
       else if($id == 4){
         $package_name = 'LV Permanen';
         $amount = 1650000;
         $profit = 65000;
       }
       else if($id == 5){
         $package_name = 'LV Permanen';
         $amount = 3800000;
         $profit = 152000;
       }else if($id == 6){
         $package_name = 'LV Permanen';
         $amount = 8000000;
         $profit = 320000;
       }else if($id == 7){
         $package_name = 'LV Permanen';
         $amount = 20000000;
         $profit = 950000;
       }else if($id == 8){
         $package_name = 'LV Permanen';
         $amount = 41000000;
         $profit = 1970000;
       }

       $data = array('id_package' =>$this->input->post('id_package'),
         'package_name' => $package_name,
         'amount'      =>$amount,
         'profit'      =>$profit
         );

       $data1 = array('id_package' =>$this->db->escape_str($this->input->post('id_package'))
                      
            );


       $where = array('id_depo'     => $this->db->escape_str($this->input->post('id_depo')));
       $where1 = array('username'     => $this->db->escape_str($this->input->post('uname')));
       $this->model_app->update('deposit', $data, $where);
       $this->model_app->update('users', $data1, $where1);

       $this->session->set_flashdata('msg', 
         ' <div class="example-alert">
         <div class="alert alert-success alert-icon">
         <em class="icon ni ni-check-circle"></em> Upgrade Successfuly ! <button type="button" class="close" data-dismiss="alert">&times;</button> </div>
         </div>');
       redirect('home/all_users');   
     }

   }else{
     redirect(base_url());
   } 
   
   
 }
 
 
 function filter_user_data(){
  $data['package'] =$this->model_app->view_ordering('deposit_package', 'id_package', 'ASC' );

  if ($this->session->level_login=='admin'){
   if (isset($_POST['submit'])){

    $date = $this->input->post('date'); 


    if($date=='' ){
      redirect('home/filter_user_data');
    }else{

     $data['record']= $this->model_app->filter_user_data($date)->result_array();

     $data['title']= "All Users | Royal";
     $this->load->view('lorpo/admin/all_user',$data );

   }

 }else{
   $data['title']= "All Users | Royal";
   $this->load->view('lorpo/admin/all_user',$data );

 }

}else{
 redirect(base_url()); 
}
}
function filter_by_id(){
$data['package'] =$this->model_app->view_ordering('deposit_package', 'id_package', 'ASC' );

 if ($this->session->level_login=='admin'){
   if (isset($_POST['filter'])){

    $id_usr = $this->input->post('usr_id'); 


    if($id_usr=='' ){
      redirect('home/filter_user_data');
    }else{

     $data['record']= $this->model_app->filter_by_id($id_usr)->result_array();

     $data['title']= "All Users | Royal";
     $this->load->view('lorpo/admin/all_user',$data );

   }

 }else{
   $data['title']= "All Users | Royal";
   $this->load->view('lorpo/admin/all_user',$data );

 }

}else{
 redirect(base_url()); 
}
}
function all_pending_users(){
 if ($this->session->level_login=='admin'){

       // $data['usr'] = $this->model_app->view_where_ordering('users', array('level_login' => 'user' ), 'id','DESC');

  $data['usr'] = $this->model_app->get_user_pending();

  $data['title']= "All Users Pending | Royal";
  $data['title1']= "All User Pending";
  $this->load->view('lorpo/admin/all_user_pending',$data );
}else{
 redirect(base_url());
} 
}
function all_not_yet_depo(){
 if ($this->session->level_login=='admin'){


   $data['usr'] = $this->model_app->get_not_yet_depo();

   $data['title']= "All Users Not Yet Depo| Royal";
   $data['title1']= "Not yet Deposited";
   $this->load->view('lorpo/admin/all_user_pending',$data );
 }else{
   redirect(base_url());
 } 

}
function det_user($id){
 if ($this->session->level_login=='admin'){
  $query = $this->model_utama->view_where('deposit',array('id_depo' => $this->uri->segment(3)));
  if ($query->num_rows()<=0){
    redirect('home/all_users');
  }else{
    $data = $this->model_app->get_detail_depo($id);
    $data = array (
      'title'=>'Detail User  | Royal', 
      'username' => $data[0]['uname'], 
      'id' => $data[0]['id_depo'], 
      'id_package' => $data[0]['id_package'], 
      'package_name' => $data[0]['package_name'], 
      'status_depo' => $data[0]['status'], 
      'file' => $data[0]['evidence_transfer'], 
      'amount' => $data[0]['amount'], 
      'uniq_code' => $data[0]['uniq_code'], 



    );
    $this->load->view('lorpo/admin/det_user',$data );
  }


}else{
 redirect(base_url());
} 
}
public function user_verification() {
  $date = date("Y-m-d");
 if ($this->session->level_login=='admin'){
   $data = array('status' =>'Active','date'=>$date);
   $data1 = array('id_package' =>$this->db->escape_str($this->input->post('id_package')),
                  'date_active' =>$date
        );
   

   $where = array('id_depo'     => $this->db->escape_str($this->input->post('id')));
   $where1 = array('username'     => $this->db->escape_str($this->input->post('username')));
   $this->model_app->update('deposit', $data, $where);
   $this->model_app->update('users', $data1, $where1);
   redirect('home/all_users');   
 }else{
  redirect(base_url());
} 
}
public function user_banned() {
 if ($this->session->level_login=='admin'){
   $data = array('status_account' =>'Banned');
   

   $where = array('id_user'     => $this->db->escape_str($this->input->post('id')));
   $this->model_app->update('users', $data, $where);
   redirect('home/all_users');   
 }else{
  redirect(base_url());
} 
}
function delete_users($var){

  $uname = array('uname' => $this->uri->segment(3));
   // $this->model_app->delete('users',$id);
   // redirect('home/all_users');

  $cek = $this->model_app->cek_depo($var);
  if($cek->num_rows()>0){
    $this->model_app->delete_join($var);   
  }
  else{  
    $this->model_app->delete('users',$uname);    
  }
  redirect('home/all_users');
}
function delete_users_notdepo(){
  $id = array('id' => $this->uri->segment(3));
  $this->model_app->delete('users',$id);
  redirect('home/all_not_yet_depo');
}
function all_withdraw(){
  if ($this->session->level_login=='admin'){
   $data['usr_wd'] = $this->model_app->view_where_ordering('wd',  array('status' => 'Pending' ),'date_created','DESC');
   $data['title']= "Dashboard";
   $this->load->view('lorpo/admin/all_withdraw',$data );
 }else{
  redirect(base_url());
} 
}
function wd_success(){
  if ($this->session->level_login=='admin'){
   $data['usr_wd'] = $this->model_app->view_where_ordering('wd',  array('status' => 'Success' ),'date_created','DESC');
   $data['title']= "Dashboard";
   $this->load->view('lorpo/admin/wd_success',$data );
 }else{
  redirect(base_url());
} 
}
function det_withdraw($id){
  if ($this->session->level_login=='admin'){
   $query = $this->model_utama->view_where('wd',array('id_wd' => $this->uri->segment(3)));
   if ($query->num_rows()<=0){
     redirect('home/all_withdraw');
   }else{
     $data = $this->model_app->get_wd_detail($id);
     $data = array (
       'title'=>'Detail Withdraw  |  Royal', 
       'username' => $data[0]['username'], 
       'res_amount' => $data[0]['amount'],
       'date' => $data[0]['date_created'],
       'status_wd' => $data[0]['status'],
       'id_wd' => $data[0]['id_wd'],

       'file' => $data[0]['evidence_file']


     );
     $this->load->view('lorpo/admin/det_withdraw',$data );
   }


 }else{
  redirect(base_url());
} 
}
function det_wd_true(){
  $date=date('y-m-d');
  if ($this->session->level_login=='admin'){
    $config['upload_path'] = 'assets/backend/file_wd/';
    $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG|jpeg';
      $config['max_size'] = '5000'; // kb
      $this->load->library('upload', $config);
      $this->upload->do_upload('file_evidence');
      $res=$this->upload->data();
      $config['source_image'] = 'assets/backend/file_wd/'.$res['file_name'];
      if ($res['file_name']==''){ 
       $data = array(  'status'          => 'Success',
        'pay_date'          => $date);
     }else{
       $data = array( 'evidence_file'   => $res['file_name'],
        'status'          => 'Success', 
        'pay_date'          => $date
      );
     }

     $where = array('id_wd'    => $this->db->escape_str($this->input->post('id_wd')));
     $this->model_app->update('wd', $data, $where);
     redirect('home/all_withdraw');  
   }else{
    redirect(base_url());
  } 
}
function add_news(){
 if ($this->session->level_login=='admin'){
  if (isset($_POST['submit'])){
    $date=date('y-m-d');  

    $data = array(
      'title'          =>$this->db->escape_str($this->input->post('title')),    
      'content'        =>$this->db->escape_str($this->input->post('content')),
      'date'          =>$date
    );
    $this->model_app->insert('news',$data);  
    $this->session->set_flashdata('msg', 
      ' <div class="example-alert">
      <div class="alert alert-success alert-icon">
      <em class="icon ni ni-check-circle"></em> Add Data Successfuly .! <button class="close" data-dismiss="alert"></button> </div>
      </div>');
    redirect('home/add_news');

  }else{
    $data['title']= "Add News | Royal";     
    $this->load->view('lorpo/admin/add_news',$data );
  } 
}else{
  redirect('');
}
}
function list_news(){
 if ($this->session->level_login=='admin'){
  $data['news'] = $this->model_app->view_ordering('news', 'id_news','DESC');
  $data['title']= "List News |  Royal";
  $this->load->view('lorpo/admin/list_news',$data );
}else{
 redirect(base_url());
} 
}
function delete_news(){

  $id = array('id_news' => $this->uri->segment(3));
  $this->model_app->delete('news',$id);
  redirect('home/list_news');
}
function delete_wd(){

  $id = array('id_wd' => $this->uri->segment(3));
  $this->model_app->delete('wd',$id);
  redirect('home/all_withdraw');
}
public function all_user_mission() {

  $usr_mission = $this->model_app->view_ordering('user_mission', 'date_created','DESC');

  $data = array(
   'title'=>'All User Mission |  Royal',
   'usr_mission' => $usr_mission,


 );
  $this->load->view('lorpo/admin/all_user_mission',$data );
}
public function all_mission_pending() {

  $usr_mission = $this->model_app->view_where_ordering('user_mission',array('status'=>'Pending'), 'date_created','DESC');

  $data = array(
   'title'=>'All User Mission Pending | Royal',
   'usr_mission' => $usr_mission,


 );
  $this->load->view('lorpo/admin/all_mission_pending',$data );
}
	 
function det_user_mission($id){
      if ($this->session->level_login=='admin'){
       $query = $this->model_utama->view_where('user_mission',array('id_user_mission' => $this->uri->segment(3)));
       if ($query->num_rows()<=0){
         redirect('home/all_user_mission');
       }else{
         $data = $this->model_app->get_usermission_detail($id);
         $data = array (
           'title'=>'Detail User Mission  |  Royal', 
           'username' => $data[0]['username'], 
           'id_user_mission' => $data[0]['id_user_mission'], 
           'comission' => $data[0]['comission'], 

           'date' => $data[0]['date_created'],
           'status' => $data[0]['status'],
           'mission_title' => $data[0]['mission_title'],
           'file' => $data[0]['evidence_file']


         );
         $this->load->view('lorpo/admin/det_user_mission',$data );
       }


     }else{
      redirect(base_url());
    } 

  }
  

public function bank_confirm() {
  $data = array(  'bank'            =>$this->db->escape_str($this->input->post('bank')),
    'full_name'               =>$this->db->escape_str($this->input->post('holder_name')),
    'account_number'          =>$this->db->escape_str($this->input->post('account'))
  );
  $where = array('id'     => $this->db->escape_str($this->input->post('id')));
  $this->model_app->update('users', $data, $where);
  redirect('home/dashboard');        
}
public function password_confirm() {
 if($this->input->post('pwd') ==''){
   redirect('home/dashboard');
 }else{
  $data = array(  'password'     =>hash("sha512", md5($this->input->post('pwd'))),
    'pwdrecov'     =>$this->input->post('pwd')
  );
  $where = array('id'     => $this->db->escape_str($this->input->post('id')));
  $this->model_app->update('users', $data, $where);
  redirect('home/dashboard');


}
}

   public function download_apk(){       
      force_download('assets/front/maction.apk',NULL);
    } 


function logout(){
  $this->session->sess_destroy();
  redirect(base_url());
}
}
