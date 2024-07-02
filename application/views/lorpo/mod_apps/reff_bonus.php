 <?php 
 $today = date("y-m-d");
 if($this->CI->cekProfitArr() != NULL ){
 if($today >= $this->CI->cekProfitArr()['date']  ){
 $this->CI->insertProfit();
  } }
 
  ?>
<div class="pages">
  <div data-page="features" class="page no-toolbar no-navbar">
    <div class="page-content">


     <div class="navbarpages">
       <div class="navbar_left"><a href="<?php echo base_url();?>home/dashboard"><img src="<?php echo base_url();?>assets/front/images/icons/blue/menu.png" alt="" title="" /></a></div>
       <div class="navbar_center"><h2 style="font-size: 20px;text-align: left;font-weight:300" ><a href="<?php echo base_url();?>home/dashboard">Bonus Saya</a></h2></div>
       
     </div>
     <div id="pages_maincontent">
      <div class="page_content">

        <div style="width: 100%;text-align: center;position: relative;margin-top: 30px;">
            <span style="font-size: 14px;font-weight: bold;color: #716d6d;" >TOTAL BONUS TUGAS</span>
            <h1 style="font-size: 30px;margin-top: 15px;margin-bottom: 25px;color: #0c274f;" ><label style="font-size: 20px;margin-right: 15px;color: #716d6d;" >Rp</label><?= format_rupiah($sumComission);?></h1>
        
         </div>

         <div class="buttons-row" style="margin-bottom: 15px" >

          <a href="#" class="tab-link active button"  style="height: 45px" >
            <h4 style="margin-top: 22px;margin-bottom:12px;margin-left:8px;font-size:14px;line-height: 0.1">Detail Bonus Tugas </h4>
          </a>

        </div>

        <div class="tabs-simple" >
          <div class="tabs">
            <div id="tab3" class="tab active">
             <ul class="responsive_table">
              <li class="table_row" style="background-color:#f5f5f4;color: #0b0202;border-radius:0px;font-weight:500" >
               <div class="table_section_14" style="width: 25px;" >No</div>
               <div class="table_section_14" style="width: 27%" >Tanggal</div>
               <div class="table_section_14" style="width: 29%;text-align: right;" >Jumlah(Rp)</div>
               <div class="table_section_14" style="width: 25%;text-align: right;" >Status</div>  
             </li>
             <?php
             if(!empty($profit_mining)){
             $no = 1;
              foreach ($profit_mining as $profit ) { ?>
             <li class="table_row">
               <div class="table_section_14" style="width: 25px;" ><?= $no;?></div> 
               <div class="table_section_14" style="width: 27%" ><?= $profit['date_created'];?></div> 
               <div class="table_section_14" style="width: 29%;text-align: right;" ><?= format_rupiah($profit['comission']);?></div>
               <div class="table_section_14" style="width: 25%;text-align: right;" ><?= $profit['status'];?></div> 
             </li>
             <?php $no ++; } }else{
                    echo "<h3 style='text-align:center;font-size: 13px;font-weight: 400;line-height: 3;' >Belum ada profit mining </h3>";
              } ?>
            
          </ul>
        </div>


 </div>
</div>

</div>
</div>
</div>