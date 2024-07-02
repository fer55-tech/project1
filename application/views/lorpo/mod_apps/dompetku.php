<?php 
$today = date("Y-m-d");
    if($this->CI->cekProfitArr() != NULL ){
     if($today >= $this->CI->cekProfitArr()['date']   ){
      //  if($usr['id_package'] <= 1 AND $today <= $dueDate){
           // $this->CI->insertProfit();
       // }else{
           $this->CI->insertProfit(); 
        //}
     
    } 

}?>
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
          <h6 class="title">Catatan</h6>
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
      
        <div class="content-box">
          <ul class="row g-2">
            <div style="padding: 12px;border-radius: 6px;margin-bottom: 15px;">
            <li class="col-12">              
              <a style="background: #000;color: #fff" href="<?php echo base_url();?>pages/reff_one">     
                <span style="text-align: left;color: #fff">LEVEL A  </span> <span style="color:#fff">IDR <?= format_rupiah($totaRef1);?> </span>
               
              </a>
            </li>
            <li class="col-12" style="margin-bottom: 5px;margin-top: 5px;">              
               <a style="background: #000;color: #fff" href="<?php echo base_url();?>pages/reff_two">  
                
                 <span style="text-align: left;color: #fff">LEVEL B  </span> <span style="color:#fff">IDR <?= format_rupiah($totaRef2);?> </span>
                
              </a>
            </li>
            <li class="col-12">              
               <a style="background: #000;color: #fff" href="<?php echo base_url();?>pages/reff_three">   
               
                 <span style="text-align: left;color: #fff">LEVEL C </span> <span style="color:#fff">IDR <?= format_rupiah($totaRef3);?> </span>
               
              </a>
            </li>

             <li class="col-12" style="margin-bottom:5px;margin-top: 5px;">              
              <a style="background: #000;color: #fff" href="#">
      
                <span style="text-align: left;color: #fff">RABAT LEVEL A </span> <span style="color:#fff">IDR <?= format_rupiah($rabat1);?> </span>
                
              </a>
            </li>

            <li class="col-12">              
              <a style="background: #000;color: #fff" href="<?php echo base_url();?>pages/mining_profit">     
                
                 <span style="text-align: left;color: #fff">PROFIT </span> <span style="color:#fff">IDR <?= format_rupiah($profit);?> </span>
              </a>
            </li>
            <li class="col-12" style="margin-bottom: 5px;margin-top: 5px;">              
              <a style="background: #000;color: #fff" href="<?php echo base_url();?>pages/history_wd">     
              
                <span style="text-align: left;color: #fff">WITHDRAW </span> <span style="color:#fff">IDR <?= format_rupiah($sumWd);?> </span>

               
              </a>
            </li>
            <li class="col-12" style="margin-bottom: 15px;">              
              <a style="background: #000;color: #fff" href="<?php echo base_url();?>pages/reward">     
               
                <span style="text-align: left;color: #fff">BONUS </span> <span style="color:#fff">IDR <?= format_rupiah($sumReward);?> </span>
                
              </a>
            </li>


         </div>
         
       
          </ul>
        </div>
       
     
      </div>
    </div>
  </div>
  <!-- Page Content End -->

