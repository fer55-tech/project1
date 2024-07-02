 <!-- Header -->
     <header class="header header-fixed">
         <div class="container">
             <div class="header-content">
                 <div class="left-content">
                     <a href="javascript:void(0);" class="back-btn">
                         <i class="icon feather icon-chevron-left"></i>
                     </a>
                     <h6 class="title">Rewards</h6>
                 </div>
                 <div class="mid-content">
                 </div>
                 <div class="right-content">
                 </div>
             </div>
         </div>
     </header>
 <!-- Header -->

 <!-- Page Content Start -->
 <div class="page-content space-top p-b50">
     <div class="container">
        
         <div class="dz-notification">
             <ul class="notification-list">
                 <?php   
                 foreach ($reward as $row) { ?>
                 <li class="list-items fill-color">
                    <div class="dz-icon-box me-3" style="width: 40px;height: 40px;">
                        <img src="<?php echo base_url();?>assets/front/product/icon_profit.png">
                     </div>
                     <div class="list-content">
                         <h5 class="title-head">Rp. <?= format_rupiah($row['amount']);?></h5>
                         <p>Hadiah platform mactionred diterima </p>
                     </div>
                     <span class="time"><i class="icon feather icon-clock"></i> <?= $row['date_created'];?></span>
                 </li>
             <?php } ?>
                 
              
             </ul>   
         </div>


        
      
     </div>
 </div>
 <!-- Page Content End -->