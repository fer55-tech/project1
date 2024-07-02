<?php 
 $today = date("Y-m-d");
    if($this->CI->cekProfitArr() != NULL ){
     if($today >= $this->CI->cekProfitArr()['date']   ){
       // if($usr['id_package'] <= 1 AND $today <= $dueDate){
           // $this->CI->insertProfit();
       // }else{
           $this->CI->insertProfit(); 
        //}
     
    } 

} ?>

 
<!-- header start -->
<div class="header-area" style="background-image: url(<?php echo base_url();?>assets/front/img/bg/head.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-3">
                <a class="menu-back-page" href="<?php echo base_url();?>home/dashboard">
                    <i class="fa fa-angle-left"></i>
                </a>
            </div>
            <div class="col-sm-4 col-6 text-center">
                <div class="page-name">My Wallet</div>
            </div>
           
        </div>
    </div>
</div>
<!-- header end -->

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!-- main page content -->
<div class="main-container container" style="padding-top:80px;padding-bottom: 40px;">

    <div class="row mb-4">
        <div class="col-12 text-center">
            <h2 class="mb-2"><?= format_rupiah($totalBonus);?> IDR</h2>
            <p class="text-muted size-12">My Balance</p>
        </div>
    </div>

    <!-- buttons -->
    <div class="row mb-4 "> 
        <div class="col-12 text-center">
            <a style="background: #1a141e;padding:0px;color: #fff" href="<?php echo base_url();?>pages/withdrawal" class="btn btn-default btn-sm shadow-sm w-50 btn-rounded theme-red ">WITHDRAWAL</a>
           
        </div>
    </div>
  
    <div class="row mb-4">
        <div class="col-12">
         
            <div class="w3-bar " style="background: transparent;border-radius: 5px;color: #fff;" >
              <button style="width: 20.333%;font-size: 10px;background: #f9ab67;border: 1px #000 solid;margin-right: 19%;border-radius: 10px;" class="w3-bar-item w3-button" onclick="openBonus('reff')"><img style="width: 50px" src="<?php echo base_url();?>assets/front/img/icon/bonus_reff.png"> </button>
              <button style="width: 20.333%;font-size: 10px;background: #f9ab67;border: 1px #000 solid;margin-right: 19%;border-radius: 10px;" class="w3-bar-item w3-button" onclick="openBonus('rabat')"><img style="width: 50px" src="<?php echo base_url();?>assets/front/img/icon/rabate.png"></button>
              <button style="width: 20.333%;font-size: 10px;background: #f9ab67;border: 1px #000 solid;border-radius: 10px;" class="w3-bar-item w3-button" onclick="openBonus('profit')"><img style="width: 50px" src="<?php echo base_url();?>assets/front/img/icon/bonus_harian.png"></button>
            </div>

            <div id="reff" class="w3-container w3-display-container bonus "  style="padding: 0px;">
             <p style="margin-top: 10px;font-size: 12px;" > Purchase Bonus</p> 
             
                 <div class="card" style=" border-radius: 0px;" >
                     <div class="card-body p-0">
                         <ul class="list-group list-group-flush bg-none">
                         
                             <?php 
                             
                             foreach ($reff1 as $row) {
                               $comision = ($row['amount'] * 8)/100;

                              ?>
                          
                             <li class="list-group-item  ">
                                 <div class="row" style="padding-left: 0px;" >
                                     
                                     <div class="col-auto align-self-center ps-0">
                                         <p style="margin-bottom: 0px;font-size: 12px" ><?= $row['date'];?></p>
                                     </div>
                                     <div class="col align-self-center text-end" style="text-align: right;">
                                         <p style="margin-bottom: 0px;font-size: 12px" class=" text-black" style="font-weight: 600"><?= format_rupiah($comision);?> IDR</p>
                                     </div>
                                 </div>
                             </li>
                           <?php }


                             foreach ($reff2 as $row) {
                               $comision = ($row['amount'] * 3)/100;

                              ?>
                          
                             <li class="list-group-item  ">
                                 <div class="row" style="padding-left: 0px;" >
                                     
                                     <div class="col-auto align-self-center ps-0">
                                         <p style="margin-bottom: 0px;font-size: 12px" ><?= $row['date_created'];?></p>
                                     </div>
                                     <div class="col align-self-center text-end" style="text-align: right;">
                                         <p style="margin-bottom: 0px;font-size: 12px" class="text-black" style="font-weight: 600"><?= format_rupiah($comision);?> IDR</p>
                                     </div>
                                 </div>
                             </li>
                         <?php } 


                             foreach ($reff3 as $row) {
                               $comision = ($row['amount'] * 1)/100;

                              ?>
                          
                             <li class="list-group-item  ">
                                 <div class="row" style="padding-left: 0px;" >
                                     
                                     <div class="col-auto align-self-center ps-0">
                                         <p style="margin-bottom: 0px;font-size: 12px" ><?= $row['date_created'];?></p>
                                     </div>
                                     <div class="col align-self-center text-end" style="text-align: right;">
                                         <p style="margin-bottom: 0px;font-size: 12px" class="text-black" style="font-weight: 600"><?= format_rupiah($comision);?> IDR</p>
                                     </div>
                                 </div>
                             </li>
                         <?php } ?>


                             
                         </ul>
                     </div>
                 </div>
            </div>

            <div id="rabat" class="w3-container w3-display-container bonus" style="display:none;padding: 0px;">
              <p style="margin-top: 10px;font-size: 12px;" >Your Rabate Bonus</p> 
           
                  <div class="card" style=" border-radius: 0px;" >
                      <div class="card-body p-0">
                          <ul class="list-group list-group-flush bg-none">
                             <?php 
                             
                             foreach ($rabat1 as $row) {
                               $comision = ($row['comission'] * 2)/100;

                              ?>
                          
                             <li class="list-group-item  ">
                                 <div class="row" style="padding-left: 0px;" >
                                     
                                     <div class="col-auto align-self-center ps-0">
                                         <p style="margin-bottom: 0px;font-size: 12px"  ><?= $row['date_created'];?></p>
                                     </div>
                                     <div class="col align-self-center text-end" style="text-align: right;">
                                         <p style="margin-bottom: 0px;font-size: 12px" class=" text-black" style="font-weight: 600"><?= format_rupiah($comision);?> IDR</p>
                                     </div>
                                 </div>
                             </li>
                           <?php }


                             foreach ($rabat2 as $row) {
                               $comision = ($row['comission'] * 1)/100;

                              ?>
                          
                             <li class="list-group-item  ">
                                 <div class="row" style="padding-left: 0px;" >
                                     
                                     <div class="col-auto align-self-center ps-0">
                                         <p style="margin-bottom: 0px;font-size: 12px"  ><?= $row['date_created'];?></p>
                                     </div>
                                     <div class="col align-self-center text-end" style="text-align: right;">
                                         <p style="margin-bottom: 0px;font-size: 12px" class=" text-black" style="font-weight: 600">$<?= format_rupiah($comision);?> IDR</p>
                                     </div>
                                 </div>
                             </li>
                         <?php } 

                             foreach ($rabat3 as $row) {
                               $comision = ($row['comission'] * 1)/100;

                              ?>
                          
                             <li class="list-group-item  ">
                                 <div class="row" style="padding-left: 0px;" >
                                     
                                     <div class="col-auto align-self-center ps-0">
                                         <p style="margin-bottom: 0px;font-size: 12px"  ><?= $row['date_created'];?></p>
                                     </div>
                                     <div class="col align-self-center text-end" style="text-align: right;">
                                         <p style="margin-bottom: 0px;font-size: 12px" class=" text-black" style="font-weight: 600"><?= format_rupiah($comision);?> IDR</p>
                                     </div>
                                 </div>
                             </li>
                         <?php } ?>

                              
                          </ul>
                      </div>
                  </div>
              
            </div>

            <div id="profit" class="w3-container w3-display-container bonus" style="display:none;padding: 0px;">
             <p style="margin-top: 10px;font-size: 12px;" >Profit Day</p> 
             <?php  if(! empty($allComission)){?>
                 <div class="card" style=" border-radius: 0px;" >
                     <div class="card-body p-0">
                         <ul class="list-group list-group-flush bg-none">
                         
                             <?php 
                             
                             foreach ($allComission as $row) { ?>
                          
                             <li class="list-group-item  ">
                                 <div class="row" style="padding-left: 0px;" >
                                     
                                     <div class="col-auto align-self-center ps-0">
                                         <p style="margin-bottom: 0px;font-size: 12px" ><?= $row['date_created'];?> - <?= $row['time_created'];?>  </p>
                                     </div>
                                     <div class="col align-self-center text-end" style="text-align: right;">
                                         <p style="margin-bottom: 0px;font-size: 12px" class=" text-black" style="font-weight: 600"><?= format_rupiah($row['comission']);?> IDR</p>
                                     </div>
                                 </div>
                             </li>
                           <?php }?>
                            
                         </ul>
                     </div>
                 </div>
               <?php  }else{?>
                 <img style="margin: 0 auto;display: block;" src="<?php echo base_url();?>assets/front/img/empty.png" alt="" class="w-50">
                 <p class="text-muted text-center">Belum ada data.</p>
               <?php } ?>
            </div>

         
        </div>
    </div>

</div>
<script>
function openBonus(bonusName) {
  var i;
  var x = document.getElementsByClassName("bonus");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  document.getElementById(bonusName).style.display = "block";  
}
</script>

