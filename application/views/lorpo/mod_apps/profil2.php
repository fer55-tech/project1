<?php 
$gaji = 0;
foreach ($myDepo as $row ) {
 $gaji = $row['total_comission'];
}


  $dueDate = date("Y-m-d", strtotime(" +3 days", strtotime($depo['date'])));
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
<header class="header position-fixed bg-theme-round-opac text-white"  >
    <div class="row">
        <div class="col-auto">
            <button type="button" class="btn btn-default btn-44 btn-rounded back-btn">
               <img style="width:45px" src="<?php echo base_url();?>assets/front/img/favicon180.png" alt="">
            </button>
        </div>
        <div class="col">
            <div style="margin-left: -15px;" class="logo-small">  
             <p style="line-height: 6px;font-size: 12px;"> ID. <?= $usr['username'];?></p>
             <p style="line-height: 6px;font-size: 12px;"> Phone. <?= $usr['phone'];?></p>   
            </div>
        </div>
      
       <h6 class="mt-2" >Halo , Selamat Datang <?=  $usr['status_agen'].' '. $usr['agen'];?></h6>
    </div>

    <div class="row pt-2">
        <div class="col  " style="padding-right:1px;padding-left: 0px;" >
            <p class="small text-center"><small class="text-muted size-12">Total Saldo</small><br />Rp <?= format_rupiah($totalBonus);?>
            </p>
        </div>
        <div class="col " style="padding-right:1px;padding-left: 0px;" >
            <p class="small text-center"><small class="text-muted size-12">Total Peralatan</small><br />+Rp <?= $sumDepo['amount'];?>
            </p>
        </div>
         
    </div>

    <div class="row pt-2">
       
        <div class="col" style="padding: 0 1px">
           <p class="small text-center"><small class="text-muted size-12">Menunggu Gajian</small><br />+Rp <?=$gaji - $sumComission;?></p>
        </div>
         <div class="col " style="padding-left:1px;padding-right: 5px;">
           <p class="small text-center"><small class="text-muted size-12">Total Gaji</small><br />+Rp <?=$gaji;?> </p>
        </div>
    </div>


</header>
<!-- Header ends -->

  <!-- main page content -->
  <div class="main-container container">
     
      <div class="row mb-4">
          <div class="col-12 text-center">
              <h2 class="mb-2"> Rp <?= format_rupiah($totalBonus);?></h2>
              <p class="text-muted size-12">Total Keseimbangan Gaji</p>
          </div>
      </div>

      <!-- buttons -->
      <div class="row mb-4">
          <div class="col">
              <a href="<?php echo base_url();?>package" class="btn btn-outline-default btn-sm shadow-sm w-100 btn-rounded">Peralatanku</a>
          </div>
          <div class="col">
              <a href="<?php echo base_url();?>pages/withdrawal" class="btn btn-default btn-sm shadow-sm w-100 btn-rounded">Tarik Gaji</a>
          </div>
      </div>
      

      <!-- products -->
      <div class="row mb-2">
          <div class="col-12 col-md-6 ">
              <div class="card mb-3">
                  <div class="card-body">
                     <div class="row mb-2 mt-2">
                          <div class="col-auto pe-0 position-relative">
                             
                              <div class="avatar avatar-20 rounded-15 coverimg">
                                  <img src="<?php echo base_url();?>assets/front/img/favicon16.png" alt="" class="w-100">
                              </div>
                          </div>
                          <div class="col align-self-center">
                            <a style="color:#211d1d" href="<?php echo base_url();?>pages/dompetku">
                              <p class="mb-0"><small class="text-muted size-12">Dompetku</small>
                              </p>
                            </a>
                             
                          </div>
                          <div class="col-auto align-self-center">
                              <a href="#"> <i class="bi bi-chevron-right"></i></a>
                          </div>
                      </div>
                      <div class="dashed-line" ></div>
                      <div class="row mb-2 mt-2">
                          <div class="col-auto pe-0 position-relative">
                             
                              <div class="avatar avatar-20 rounded-15 coverimg">
                                  <img src="<?php echo base_url();?>assets/front/img/favicon16.png" alt="" class="w-100">
                              </div>
                          </div>
                          <div class="col align-self-center">
                            <a style="color:#211d1d" href="<?php echo base_url();?>package">
                              <p class="mb-0"><small class="text-muted size-12">Catatan Pembelian</small>
                              </p>
                            </a>
                             
                          </div>
                          <div class="col-auto align-self-center">
                              <a href="#"> <i class="bi bi-chevron-right"></i></a>
                          </div>
                      </div>
                      <div class="dashed-line" ></div>
                      <div class="row mb-2 mt-2">
                          <div class="col-auto pe-0 position-relative">
                             
                              <div class="avatar avatar-20 rounded-15 coverimg">
                                  <img src="<?php echo base_url();?>assets/front/img/favicon16.png" alt="" class="w-100">
                              </div>
                          </div>
                          <div class="col align-self-center">
                            <a style="color:#211d1d" href="<?php echo base_url();?>pages/history_wd">
                              <p class="mb-0"><small class="text-muted size-12">Catatan Penarikan</small>
                              </p>
                            </a>
                             
                          </div>
                          <div class="col-auto align-self-center">
                              <a href="#"> <i class="bi bi-chevron-right"></i></a>
                          </div>
                      </div>
                      <div class="dashed-line" ></div>
                      <div class="row mb-2 mt-2">
                          <div class="col-auto pe-0 position-relative">
                             
                              <div class="avatar avatar-20 rounded-15 coverimg">
                                  <img src="<?php echo base_url();?>assets/front/img/favicon16.png" alt="" class="w-100">
                              </div>
                          </div>
                          <div class="col align-self-center">
                            <a style="color:#211d1d" href="<?php echo base_url();?>pages/network">
                              <p class="mb-0"><small class="text-muted size-12">Tim Saya</small>
                              </p>
                            </a>
                             
                          </div>
                          <div class="col-auto align-self-center">
                              <a href="#"> <i class="bi bi-chevron-right"></i></a>
                          </div>
                      </div>
                      <!-- <div class="dashed-line" ></div>
                      <div class="row mb-2 mt-2">
                          <div class="col-auto pe-0 position-relative">
                             
                              <div class="avatar avatar-20 rounded-15 coverimg">
                                  <img src="<?php //echo base_url();?>assets/front/img/favicon16.png" alt="" class="w-100">
                              </div>
                          </div>
                          <div class="col align-self-center">
                              <p class="mb-0"><small class="text-muted size-12">Checkin</small>
                              </p>
                             
                          </div>
                          <div class="col-auto align-self-center">
                              <a href="#"> <i class="bi bi-chevron-right"></i></a>
                          </div>
                      </div>-->
                      <div class="dashed-line" ></div>
                      <div class="row mb-2 mt-2">
                          <div class="col-auto pe-0 position-relative">
                             
                              <div class="avatar avatar-20 rounded-15 coverimg">
                                  <img src="<?php echo base_url();?>assets/front/img/favicon16.png" alt="" class="w-100">
                              </div>
                          </div>
                          <div class="col align-self-center">
                              <a style="color:#211d1d" href="<?php echo base_url();?>pages/account_settings">
                              <p class="mb-0"><small class="text-muted size-12">Pengaturan Akun</small>
                              </p>
                              </a>
                             
                          </div>
                          <div class="col-auto align-self-center">
                              <a href="#"> <i class="bi bi-chevron-right"></i></a>
                          </div>
                      </div>
                      <div class="dashed-line" ></div>
                      <div class="row mb-2 mt-2">
                          <div class="col-auto pe-0 position-relative">
                             
                              <div class="avatar avatar-20 rounded-15 coverimg">
                                  <img src="<?php echo base_url();?>assets/front/img/favicon16.png" alt="" class="w-100">
                              </div>
                          </div>
                          <div class="col align-self-center">
                            <a style="color:#211d1d" href="<?php echo base_url();?>home/logout">
                              <p class="mb-0"><small class="text-muted size-12">Logout</small>
                              </p>
                            </a>
                             
                          </div>
                          <div class="col-auto align-self-center">
                              <a href="#"> <i class="bi bi-chevron-right"></i></a>
                          </div>
                      </div>
                  </div>
              </div>

          </div>
         
      </div>

  
      <div class="clearfix"></div>
  </div>
  <!-- main page content ends -->


