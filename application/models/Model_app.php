<?php 
class Model_app extends CI_model{
    
    
    var $table = 'mission';
    var $pkey = 'id_mission';
    
    var $utable = 'users';
    var $ukey = 'id';
    
    public function view($table){
        return $this->db->get($table);
    }

    public function insert($table,$data){
        return $this->db->insert($table, $data);
    }

    public function edit($table, $data){
        return $this->db->get_where($table, $data);
    }
 
    public function update($table, $data, $where){
        return $this->db->update($table, $data, $where); 
    }

    public function delete($table, $where){
        return $this->db->delete($table, $where);
    }

   
    public function view_where($table,$data){
        $this->db->where($data);
        return $this->db->get($table);
    }

    public function view_ordering_limit($table,$order,$ordering,$baris,$dari){
        $this->db->select('*');
        $this->db->order_by($order,$ordering);
        $this->db->limit($dari, $baris);
        return $this->db->get($table);
    }

    public function view_order_limit($table,$order,$ordering,$baris){
        $this->db->select('*');
        $this->db->order_by($order,$ordering);
        $this->db->limit($baris);
        return $this->db->get($table);
    }

    public function view_where_ordering_limit($table,$data,$order,$ordering,$baris){
        $this->db->where($data);
        $this->db->order_by($order,$ordering);
        $this->db->limit($baris);
        return $this->db->get($table);
    }

  
    
    public function view_ordering($table,$order,$ordering){
        $this->db->select('*');
        $this->db->from($table);
        $this->db->order_by($order,$ordering);
        return $this->db->get()->result_array();
    }


    public function view_ordering1($table,$order,$ordering){
        $this->db->select('*');
        $this->db->from($table);
        $this->db->order_by($order,$ordering);
        return $this->db->get();
    }


    public function view_where_ordering($table,$data,$order,$ordering){
        $this->db->where($data);
        $this->db->order_by($order,$ordering);
        $query = $this->db->get($table);
        return $query->result_array();
    }

    public function view_where_ordering1($table,$data,$order,$ordering){
        $this->db->where($data);
        $this->db->order_by($order,$ordering);
        return $query = $this->db->get($table);
       
    }

    public function view_join_one($table1,$table2,$field,$order,$ordering){
        $this->db->select('*');
        $this->db->from($table1);
        $this->db->join($table2, $table1.'.'.$field.'='.$table2.'.'.$field);
        $this->db->order_by($order,$ordering);
        return $this->db->get()->result_array();
    }

    public function view_join_where($table1,$table2,$field,$where,$order,$ordering){
        $this->db->select('*');
        $this->db->from($table1);
        $this->db->join($table2, $table1.'.'.$field.'='.$table2.'.'.$field);
        $this->db->where($where);
        $this->db->order_by($order,$ordering);
        return $this->db->get()->result_array();
    }

    public function view_join_where1($table1,$table2,$field,$where,$order,$ordering){
        $this->db->select('*');
        $this->db->from($table1);
        $this->db->join($table2, $table1.'.'.$field.'='.$table2.'.'.$field);
        $this->db->where($where);
        $this->db->order_by($order,$ordering);
        return $this->db->get();
    }



    public function cek_login($username,$password,$table){
       $multipleWhere = ['username' => $username, 'password' => $password,'status_account'=>'active'];
       $this->db->where($multipleWhere);
       return $this->db->get($table);


        //return $this->db->query("SELECT * FROM $table where username='".$this->db->escape_str($username)."' AND password='".$this->db->escape_str($password)."' AND status_account='active'");
    }

      public function cek_pass($password,$table){
          return $this->db->query("SELECT * FROM $table where password='".$this->db->escape_str($password)."'");
    }


    public function activate($data, $id){
        $this->db->where('users.username', $id);
        return $this->db->update('users', $data);
    }    


    public function view_sum($table,$data,$field){
        $this->db->where($data);
        $this->db->select_sum($field);
        $this->db->select('amount_paid');     
        return $this->db->get($table);

    }



    function save_depo(){
        $data = array(
                'id_package'        => $this->input->post('id_package'), 
                'uname'             => $this->input->post('uname'), 
                'amount'            => $this->input->post('amount') , 
                'pay_to_wallet_acc' => $this->input->post('pay_to_wallet'),
                'date'              => $this->input->post('date'),  
                'time'              => $this->input->post('time')  
               
            );
        $result=$this->db->insert('deposit',$data);
        return $result;
    }


    function get_depopackage($id) {
        $this->db->where('id_package', $id);
        $res = $this->db->get('deposit_package');
        return $res->result_array();
    }



    function get_mission_list($id_package,$limit){
        $date=date('y-m-d');
         $query = $this->db->query("SELECT * FROM mission a LEFT JOIN user_mission b ON a.id_mission=b.id_mission_fk where  b.username IS NULL AND a.id_package ='$id_package' AND a.status='Aktif' "  );

        return $query;


    }

    function cekDepo(){
        $date=date('Y-m-d');
        $uname = $this->session->username;
       //  $query = $this->db->query("SELECT * FROM deposit a LEFT JOIN user_mission b ON a.id_depo=b.id_depo_fk where  b.id_depo_fk IS NULL AND a.date !='$date' AND a.status='Active' AND a.uname='$uname' limit 1 "  );
         $query = $this->db->query("SELECT * FROM deposit a LEFT JOIN temp b ON a.id_depo=b.id_depo_fk where  b.id_depo_fk IS NULL  AND a.status='Active' AND a.uname='$uname' order by a.id_package DESC limit  1  "  );
        return $query;

    }

  
    
     function get_mission_list1($id_package,$limit){
        $date=date('Y-m-d');
         $query = $this->db->query("SELECT * FROM mission a LEFT JOIN user_mission b ON a.id_mission=b.id_mission_fk where  b.id_mission_fk IS NULL AND a.id_package ='$id_package' AND a.status='Aktif' limit $limit"  );

        return $query;


    }
    
     
    function get_user_pending(){
        $this->db->select('users.id,users.username,users.full_name,deposit.uname,deposit.package_name,deposit.status');
        $this->db->from('users');
        $this->db->join('deposit','deposit.uname=users.username');
        $this->db->where('deposit.status','Pending');
        $query=$this->db->get();
        $data= $query->result_array();
        return  $data;
    }
    
    function get_not_yet_depo(){
        $this->db->select('users.*, deposit.*');
        
        $this->db->from('users');
        $this->db->join('deposit','deposit.uname=users.username','Left'); 
        $this->db->limit('100');
       $this->db->where('deposit.uname is NULL', NULL, FALSE);
        $query=$this->db->get();
        $data= $query->result_array();
        return  $data;
    }

    public function user_join_depo($reff_code) {
      $multipleWhere = ['users.'.$reff_code => $this->session->reff_code];
     $this->db->select('*');
     $this->db->from('users');
     $this->db->join('deposit','deposit.uname = users.username','LEFT');
    
     $this->db->order_by('id_depo','DESC');
     $this->db->where($multipleWhere);
     $query = $this->db->get();
     return $query;
    }

    public function user_join_depo1($reff_code) {
        $multipleWhere = ['users.'.$reff_code => $this->session->reff_code,'deposit.status'=>'Active'];
         $this->db->select('*');
         $this->db->from('users');
         $this->db->join('deposit','deposit.uname = users.username');
        
         $this->db->order_by('id_depo','DESC');
         $this->db->where($multipleWhere);
         $query = $this->db->get();
         return $query;
        }

    public function user_join_depo2() {
        $multipleWhere = ['deposit.status'=>'Active'];
         $this->db->select('*');
         $this->db->from('users');
         $this->db->join('deposit','deposit.uname = users.username');
        
         $this->db->order_by('id_depo','DESC');
         $this->db->where($multipleWhere);
         $query = $this->db->get();
         return $query;
        }


     public function paketMingguanRef1($reff_code) {
       $multipleWhere = ['deposit.status' => 'Active', 'users.ref_gen_1' => $reff_code,'deposit.id_package'=>'2'];
      $this->db->select('*');
      $this->db->from('users');
      $this->db->join('deposit','deposit.uname = users.username');
      $this->db->group_by('deposit.uname');
      $this->db->order_by('id_depo','DESC');
      $this->db->where($multipleWhere);
      $query = $this->db->get();
      return $query;
     }

    public function paketBulananRef1($reff_code) {
      $multipleWhere = ['deposit.status' => 'Active', 'users.ref_gen_1' => $reff_code,'deposit.id_package >'=>'2'];
     $this->db->select('*');
     $this->db->from('users');
     $this->db->join('deposit','deposit.uname = users.username');
     $this->db->group_by('deposit.uname');
     $this->db->order_by('id_depo','DESC');
     $this->db->where($multipleWhere);
     $query = $this->db->get();
     return $query;
    }

     public function paketMingguanRef2($reff_code) {
       $multipleWhere = ['deposit.status' => 'Active', 'users.ref_gen_2' => $reff_code,'deposit.id_package'=>'2'];
      $this->db->select('*');
      $this->db->from('users');
      $this->db->join('deposit','deposit.uname = users.username');
      $this->db->group_by('deposit.uname');
      $this->db->order_by('id_depo','DESC');
      $this->db->where($multipleWhere);
      $query = $this->db->get();
      return $query;
     }

    public function paketBulananRef2($reff_code) {
      $multipleWhere = ['deposit.status' => 'Active', 'users.ref_gen_2' => $reff_code,'deposit.id_package >'=>'2'];
     $this->db->select('*');
     $this->db->from('users');
     $this->db->join('deposit','deposit.uname = users.username');
     $this->db->group_by('deposit.uname');
     $this->db->order_by('id_depo','DESC');
     $this->db->where($multipleWhere);
     $query = $this->db->get();
     return $query;
    }

     public function paketMingguanRef3($reff_code) {
       $multipleWhere = ['deposit.status' => 'Active', 'users.ref_gen_3' => $reff_code,'deposit.id_package'=>'2'];
      $this->db->select('*');
      $this->db->from('users');
      $this->db->join('deposit','deposit.uname = users.username');
      $this->db->group_by('deposit.uname');
      $this->db->order_by('id_depo','DESC');
      $this->db->where($multipleWhere);
      $query = $this->db->get();
      return $query;
     }

    public function paketBulananRef3($reff_code) {
      $multipleWhere = ['deposit.status' => 'Active', 'users.ref_gen_3' => $reff_code,'deposit.id_package >'=>'2'];
     $this->db->select('*');
     $this->db->from('users');
     $this->db->join('deposit','deposit.uname = users.username');
     $this->db->group_by('deposit.uname');
     $this->db->order_by('id_depo','DESC');
     $this->db->where($multipleWhere);
     $query = $this->db->get();
     return $query;
    }
      
      
    
    public function join_table($reff_code) {
      $multipleWhere = ['deposit.status' => 'Active', 'users.ref_gen_1' => $reff_code];
     $this->db->select('*');
     $this->db->from('users');
     $this->db->join('deposit','deposit.uname = users.username');
   //  $this->db->where('deposit.status', 'Active');
     $this->db->where($multipleWhere);
     $query = $this->db->get();
     return $query;
    }
    public function join_table2($reff_code) {
      $multipleWhere = ['deposit.status' => 'Active', 'users.ref_gen_2' => $reff_code];
     $this->db->select('*');
     $this->db->from('users');
     $this->db->join('deposit','deposit.uname = users.username');
   //  $this->db->where('deposit.status', 'Active');
     $this->db->where($multipleWhere);
     $query = $this->db->get();
     return $query;
    }

     public function join_table3($reff_code) {
       $multipleWhere = ['deposit.status' => 'Active', 'users.ref_gen_3' => $reff_code];
      $this->db->select('*');
      $this->db->from('users');
      $this->db->join('deposit','deposit.uname = users.username');
    //  $this->db->where('deposit.status', 'Active');
      $this->db->where($multipleWhere);
      $query = $this->db->get();
      return $query;
     }

    public function rabat($reff_code) {
      $multipleWhere = ['users.ref_gen_1' => $reff_code];
     $this->db->select('*');
     $this->db->from('users');
     $this->db->join('user_mission','user_mission.username = users.username');
   //  $this->db->where('deposit.status', 'Active');
     $this->db->where($multipleWhere);
     $query = $this->db->get();
     return $query;
    }
      public function rabat2($reff_code) {
      $multipleWhere = ['users.ref_gen_2' => $reff_code];
     $this->db->select('*');
     $this->db->from('users');
     $this->db->join('user_mission','user_mission.username = users.username');
   //  $this->db->where('deposit.status', 'Active');
     $this->db->where($multipleWhere);
     $query = $this->db->get();
     return $query;
    }

       public function rabat3($reff_code) {
       $multipleWhere = ['users.ref_gen_3' => $reff_code];
      $this->db->select('*');
      $this->db->from('users');
      $this->db->join('user_mission','user_mission.username = users.username');
    //  $this->db->where('deposit.status', 'Active');
      $this->db->where($multipleWhere);
      $query = $this->db->get();
      return $query;
     }


     public function view_refBonus($where) {
      $this->db->select('*');
      $this->db->from('users');
      $this->db->join('deposit','deposit.uname = users.username');
      $this->db->where($where);
      $query = $this->db->get();
      return $query;
     }

     public function view_rabatBonus($where) {
      $this->db->select('*');
      $this->db->from('users');
      $this->db->join('user_mission','user_mission.username = users.username');
      $this->db->where($where);
      $query = $this->db->get();
      return $query;
     }


    public function join_two_table() {
     $this->db->select('*');
     $this->db->from('users');
     $this->db->join('deposit','deposit.uname = users.username');
     $this->db->where('deposit.status', 'Pending');
    //$this->db->limit('2000');
     $query = $this->db->get();
     return $query;
    }

    public function join_two_table1($referal,$ref_gen) {
     $this->db->select('*');
     $this->db->from('users');
     $this->db->join('user_mission','user_mission.username = users.username');
    $this->db->where('user_mission.username',$referal);
    //$this->db->limit('2000');
     $query = $this->db->get();
     return $query;
    }
    
    public function filter_user_data($date) {
     $this->db->select('*');
     $this->db->from('users');
     $this->db->join('deposit','deposit.uname = users.username');
     $this->db->where('deposit.date',$date);
     //$this->db->where('deposit.status','Pending');
     $this->db->order_by('users.id','ASC');
     $query = $this->db->get();
     return $query;
    }
    
     public function filter_by_id($id) {
     $this->db->select('*');
     $this->db->from('users');
     $this->db->join('deposit','deposit.uname = users.username');
     $this->db->where('deposit.uname',$id);
     //$this->db->where('deposit.status','Pending');
    $this->db->order_by('users.id','ASC');
     $query = $this->db->get();
     return $query;
    }

  

    function get_mission_detail($id) {
        $this->db->where('id_mission', $id);
        $res = $this->db->get('mission');
        return $res->result_array();
    }

    function get_user_detail($id) {
        $this->db->where('id', $id);
        $res = $this->db->get('users');
        return $res->result_array();
    }

    function get_detail_depo($id) {
        $this->db->where('id_depo', $id);
        $res = $this->db->get('deposit');
        return $res->result_array();
    }

    function get_wd_detail($id) {
        $this->db->where('id_wd', $id);
        $res = $this->db->get('wd');
        return $res->result_array();
    }
    
     function get_usermission_detail($id) {
        $this->db->where('id_user_mission', $id);
        $res = $this->db->get('user_mission');
        return $res->result_array();
    }
    
     function get_news_det($id) {
        $this->db->where('id_news', $id);
        $res = $this->db->get('news');
        return $res->result_array();
    }

    
    function delete_with_image($id){
     $this->db->where('id_mission',$id);
     $query = $this->db->get('mission');
     $row = $query->row();

     $delete = unlink("./assets/backend/file_mission/$row->file");
     if($delete){
          $this->db->delete('mission', array('id_mission' => $id));
     }else{
         $this->db->delete('mission', array('id_mission' => $id));
     }
    
    }

    function sum_comission($tabel,$data,$field,$order,$ordering){
        $this->db->where($data);
        $this->db->select_sum($field);
        $this->db->order_by($order,$ordering);
        $query = $this->db->get($tabel);
        return $query->row_array();
    }

    public function sum_data($tabel,$field){
        $this->db->select_sum($field);
        $query = $this->db->get($tabel);
        return $query->row_array();
    }

    public function sum_data_where($tabel,$data,$field){
        $this->db->where($data);
        $this->db->select_sum($field);
        $query = $this->db->get($tabel);
        return $query->row_array();
    }


    public function sum_data_where_groupby($tabel,$data,$field,$group_by){
        $this->db->where($data);
        $this->db->select_sum($field);
        $this->db->group_by($group_by);
        $query = $this->db->get($tabel);
        return $query->row_array();
    }
    
      public function delete_ads($id){ 
              
        $query = $this->db->get_where('mission',array('id_mission'=>$id));
        $img = $query->result_array();
    
        foreach ($img as $row) {
    
            $delete = unlink("./assets/backend/file_mission/$row[file]");
             
         }
         
           if($delete){

           $this->db->where_in($this->pkey, $id);
           $this->db->delete($this->table);
        

        }else{

            $this->db->where_in($this->pkey, $id);
            $this->db->delete($this->table);
        
        }
    
        
    }
    
       public function delete_multi_user($id){ 
              
           $this->db->where_in($this->ukey, $id);
           $this->db->delete($this->utable);       
        
    }

    function cek_depo($uname) {
        $this->db->where('uname', $uname);
        $res = $this->db->get('deposit');
        return $res;
    }

    //hapus multi table
    public function delete_join($uname){
    $this->db->where('username',$uname);
    $query = $this->db->get('users');
    $row = $query->row();
    unlink("./assets/profil/$row->foto");
    $sql = "DELETE a,g FROM users a JOIN deposit g ON a.username = g.uname WHERE a.username=?";
    $this->db->query($sql, array($uname));  
    }


    public function paketRef1($reff_code) {
      $multipleWhere = ['users.ref_gen_1' => $reff_code];
     $this->db->select('*');
     $this->db->from('users');
     $this->db->join('deposit','deposit.uname = users.username','LEFT');
    
     $this->db->order_by('id_depo','DESC');
     $this->db->where($multipleWhere);
     $query = $this->db->get();
     return $query;
    }
    public function paketRef2($reff_code) {
      $multipleWhere = ['users.ref_gen_2' => $reff_code];
     $this->db->select('*');
     $this->db->from('users');
     $this->db->join('deposit','deposit.uname = users.username','LEFT');
    
     $this->db->order_by('id_depo','DESC');
     $this->db->where($multipleWhere);
     $query = $this->db->get();
     return $query;
    }

    public function paketRef3($reff_code) {
      $multipleWhere = ['users.ref_gen_3' => $reff_code];
     $this->db->select('*');
     $this->db->from('users');
     $this->db->join('deposit','deposit.uname = users.username','LEFT');
    
     $this->db->order_by('id_depo','DESC');
     $this->db->where($multipleWhere);
     $query = $this->db->get();
     return $query;
    }

    
}