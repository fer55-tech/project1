 <?php
 $tglMulai = date("Y-m-d", strtotime(" -1 days", strtotime('2022-10-09')));
 //var_dump($tglMulai);
 //var_dump($tglMulai);
 //var_dump($test);

 ?>
<div class="pages">
  <div data-page="features" class="page no-toolbar no-navbar">
    <div class="page-content">

     <div class="navbarpages">
       <div class="navbar_left"><a href="<?php echo base_url();?>pages/mining_profit"><img src="<?php echo base_url();?>assets/front/images/icons/blue/back.png" alt="" title="" /></a></div>
       <div class="navbar_center"><h2 style="font-size: 20px;text-align: left;font-weight:300" ><a href="<?php echo base_url();?>pages/mining_profit">Bonus Mengajak</a></h2></div>
       
     </div>
     
     <div id="pages_maincontent">
      <div class="page_content">


        <div style="width: 100%;text-align: center;position: relative;margin-top: 30px;">
            <span style="font-size: 14px;font-weight: bold;color: #716d6d;" >TOTAL BONUS MENGAJAK</span>
            <h1 style="font-size: 30px;margin-top: 15px;margin-bottom: 25px;color: #0c274f;" ><label style="font-size: 20px;margin-right: 15px;color: #716d6d;" >IDR</label><?= format_rupiah($ref1 + $ref2 + $ref3);?> </h1>         
         </div>


         <div class="buttons-row" style="margin-bottom: 15px" >

          <a href="#" class="tab-link active button"  style="height: 45px" >
            <h4 style="margin-top: 22px;margin-bottom:12px;margin-left:8px;font-size:14px;line-height: 0.1">Detail Bonus Mengajak </h4>
          </a>

        </div>

        <div class="buttons-row">
         <a href="#tab3" class="tab-link active button" >Team 1  </a>
         <a href="#tab4" class="tab-link button" >Team 2</a>
         <a href="#tab5" class="tab-link button" >Team 3</a>
       </div>

       <div class="tabs-simple" >
         <div class="tabs">
           <div id="tab3" class="tab active">
            <div class="head" style="background:#ededed;padding: 10px;width: 100%;margin-top: 15px;margin-bottom: 15px;;border-radius:3px;text-align:center;" >
             <h4 style="margin-top: 10px;margin-left:8px;font-size:14px;line-height: 0.1">Bonus Mengajak Team 1 </h4>
             <h4 style="margin-top: 10px;margin-left:8px;font-size:14px;line-height: 0.1"><?= format_rupiah($ref1);?></h4> 
           </div>
         

           <ul class="responsive_table" style="font-size: 10px">
             <li class="table_row" style="background-color:#f5f5f4;color: #0b0202;border-radius:0px" >
              <div class="table_section_14" style="width: 25px;" >No</div>
              <div class="table_section_14" style="width: 20%" >Username</div>
             
              <div class="table_section_14" style="width: 40%;text-align:right;" >BonusDiterima(Rp)</div>
              <div class="table_section_14" style="width: 22%;text-align: right;" >Status</div>  
            </li>
            <?php
                 if(!empty($ref_arr1)){
                   $no = 1;
                   foreach ($ref_arr1 as $ref1 ) {   
                     if(@$ref1['status'] == 'Active'){
                       $status = 'Active';
                       $bonus = (@$ref1['amount'] * 10)/100;
                     }else if(@$ref1['status'] == 'Pending'){
                       $status = 'Conection';
                       $bonus = 0;
                     }else{
                       $status = 'No Protect';
                       $bonus = 0;
                     }
                   ?>
               <li class="table_row">
                 <div class="table_section_14" style="width: 25px;" ><?= $no;?></div>
                 <div class="table_section_14" style="width: 20%" ><?= $ref1['username'];?></div>
                
                 <div class="table_section_14" style="width: 40%;text-align:right;"><?= format_rupiah($bonus);?></div> 
                 <div class="table_section_14" style="width: 22%;text-align: right;" ><?= $status;?></div> 
               </li>
                <?php $no ++; } }else{
                     echo "<h3 style='text-align:center;font-size: 10px;font-weight: 400;line-height: 3;' >Belum ada data  </h3>";
                 } ?>
           
         </ul>
       </div>

       <div id="tab4" class="tab ">
         <div class="head" style="background:#ededed;padding: 10px;width: 100%;margin-top: 15px;margin-bottom: 15px;;border-radius:3px;text-align:center;" >
          <h4 style="margin-top: 10px;margin-left:8px;font-size:14px;line-height: 0.1">Bonus Mengajak Team 2 </h4>
          <h4 style="margin-top: 10px;margin-left:8px;font-size:14px;line-height: 0.1"><?= format_rupiah($ref2);?></h4> 
        </div>
     

        <ul class="responsive_table" style="font-size: 10px">
        <li class="table_row" style="background-color:#f5f5f4;color: #0b0202;border-radius:0px" >
              <div class="table_section_14" style="width: 25px;" >No</div>
              <div class="table_section_14" style="width: 20%" >Username</div>
             
              <div class="table_section_14" style="width: 40%;text-align: right;" >BonusDiterima(Rp)</div>
              <div class="table_section_14" style="width: 22%;text-align: right;" >Status</div>  
            </li>
            <?php
             if(!empty($ref_arr2)){
               $no = 1;
               foreach ($ref_arr2 as $ref2 ) { 
                if(@$ref2['status'] == 'Active'){
                  $status = 'Active';
                  $bonus = (@$ref2['amount'] * 5)/100;
                }else if(@$ref2['status'] == 'Pending'){
                  $status = 'Conection';
                  $bonus = 0;
                }else{
                  $status = 'No Protect';
                  $bonus = 0;
                }
               ?>
           <li class="table_row">
             <div class="table_section_14" style="width: 25px;" ><?= $no;?></div>
             <div class="table_section_14" style="width: 20%" ><?= $ref2['username'];?></div>
            
             <div class="table_section_14" style="width: 40%;text-align: right;"><?= format_rupiah($bonus);?></div> 
             <div class="table_section_14" style="width: 22%;text-align: right;" ><?= $status;?></div> 
           </li>
            <?php $no ++; } }else{
                 echo "<h3 style='text-align:center;font-size: 10px;font-weight: 400;line-height: 3;' >Belum ada data  </h3>";
             } ?>
       
     </ul>
   </div>

   <div id="tab5" class="tab">
    <div class="head" style="background:#ededed;padding: 10px;width: 100%;margin-top: 15px;margin-bottom: 15px;;border-radius:3px;text-align:center;" >
     <h4 style="margin-top: 10px;margin-left:8px;font-size:14px;line-height: 0.1">Bonus Mengajak Team 3 </h4>
     <h4 style="margin-top: 10px;margin-left:8px;font-size:14px;line-height: 0.1"><?= format_rupiah($ref3);?></h4> 
   </div>
   

   <ul class="responsive_table" style="font-size: 10px" >
     <li class="table_row" style="background-color:#f5f5f4;color: #0b0202;border-radius:0px" >
      <div class="table_section_14" style="width: 25px;" >No</div>
      <div class="table_section_14" style="width: 20%" >Username</div>
     
      <div class="table_section_14" style="width: 40%;text-align:right;" >BonusDiterima(Rp)</div>
      <div class="table_section_14" style="width: 22%;text-align:right;" >Status</div>  
    </li>
     <?php
      if(!empty($ref_arr3)){
        $no = 1;
        foreach ($ref_arr3 as $ref3 ) { 
          if(@$ref3['status'] == 'Active'){
            $status = 'Active';
            $bonus = (@$ref3['amount'] * 3)/100;
          }else if(@$ref3['status'] == 'Pending'){
            $status = 'Conection';
            $bonus = 0;
          }else{
            $status = 'No Protect';
            $bonus = 0;
          }
        ?>
    <li class="table_row">
      <div class="table_section_14" style="width: 25px;" ><?= $no;?></div>
      <div class="table_section_14" style="width: 20%" ><?= $ref3['username'];?></div>
    
      <div class="table_section_14" style="width: 40%;text-align:right;"><?= format_rupiah($bonus);?></div> 
      <div class="table_section_14" style="width: 22%;text-align:right;" ><?= $status;?></div> 
    </li>
     <?php $no ++; } }else{
          echo "<h3 style='text-align:center;font-size: 10px;font-weight: 400;line-height: 3;' >Belum ada data </h3>";
      } ?>
 </ul>
</div>

</div>
</div>

</div>
</div>


</div>
</div>
</div>