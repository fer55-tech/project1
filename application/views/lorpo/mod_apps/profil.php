<?php 
$gaji = 0;
foreach ($myDepo as $row ) {
 $gaji = $row['total_comission'];
}


 $dueDate = date("Y-m-d", strtotime(" +5 days", strtotime(@$depo['date'])));
 $today = date("Y-m-d");
    if($this->CI->cekProfitArr() != NULL ){
     if($today >= $this->CI->cekProfitArr()['date']   ){
      //  if($usr['id_package'] <= 1 AND $today <= $dueDate){
           // $this->CI->insertProfit();
       // }else{
           $this->CI->insertProfit(); 
        //}
     
    } 

}
 

?>

<!-- Header -->
  <header class="header header-fixed">
    <div class="container">
      <div class="header-content">
        <div class="left-content">
          <a href="javascript:void(0);" class="back-btn">
            <i class="icon feather icon-chevron-left"></i>
          </a>
        </div>
        <div class="mid-content">
          <h6 class="title">My Account</h6>
        </div>
        <div class="right-content">
          <a href="javascript:void(0);">
            <i class="icon feather icon-more-vertical-"></i>
          </a>
        </div>
      </div>
    </div>
  </header>

<!-- Page Content Start -->
  <div class="page-content space-top">
    <div class="container">
      <div class="profile-area">
        <div class="main-profile">
          <div class="media media-60 me-3 rounded-circle">
            <img src="<?php echo base_url();?>assets/front/product/logo_mac.png" alt="profile-image">
          </div>
          <div class="profile-detail">
            <h6 class="name">ID : <?= $usr['username'];?></h6>
            <span class="font-12">Phone : <?= $usr['phone'];?></span>
            <span class="font-12">Your Leader : <?= @$upline['username'];?></span>
          </div>
          <a href="#" class="edit-profile">
            <i class="icon feather icon-edit-2"></i>
          </a>
        </div>
        <div class="content-box">
          <ul class="row g-2">
            <li class="col-6">              
              <a href="#">     
                <span>Totale Bonuse</span>
                <span class="price">
                  <?= format_rupiah($totalBonus);?>
                </span>
              </a>
            </li>
            <li class="col-6">              
              <a href="#">   
                <span>Contract Team</span>
                <span class="price">
                  <?= format_rupiah($assetRef);?>
                </span>
              </a>
            </li>
            <li class="col-6">              
              <a href="#">
               
                <span>Bonuse Team</span>
                <span class="price">
                  <?= format_rupiah($bonusRef);?>
                </span>
              </a>
            </li>
            <li class="col-6">              
              <a href="#">
                
                <span>My Product</span>
                <span class="price">
                  <?= format_rupiah(@$sumDepo['amount']);?>
                </span>
              </a>
            </li>
          </ul>
        </div>
       
        <div class="dz-list style-1" style="margin-bottom: 70px;">
          <ul>
            <li>
              <a href="<?php echo base_url();?>pages/withdrawal" class="item-content item-link">
                <div class="dz-icon">
                  <i class="icon feather icon-download"></i>
                </div>
                <div class="dz-inner">
                  <span class="title">Withdrawal</span>
                </div>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url();?>pages/updatebank" class="item-content item-link">
                <div class="dz-icon">
                  <i class="icon feather icon-home"></i>
                </div>
                <div class="dz-inner">
                  <span class="title">Edit Bank</span>
                </div>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url();?>pages/updatepass" class="item-content item-link">
                <div class="dz-icon">
                  <i class="icon feather icon-user"></i>
                </div>
                <div class="dz-inner">
                  <span class="title">Edit Password</span>
                </div>
              </a>
            </li>
            
          
            <li class="mb-3">
              <a href="<?php echo base_url();?>home/logout" class="item-content item-link">
                <div class="dz-icon">
                  <i class="icon feather icon-log-out"></i>
                </div>
                <div class="dz-inner">
                  <span class="title">Log Out</span>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Page Content End -->

