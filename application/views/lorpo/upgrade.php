
  <style type="text/css">
   
     .span-mission{
     
      font-size: 12px;

    }
    .figure{
      width: 50px;
    }
    .text-blue{
      color: #000;
    }
  </style>
  <div class="main-content"  >
               <header class="bg-white style2 pt-3 pb-0">
                   <div class="row">
                       <div class="col-sm-4 text-left pos-top">
                           <a  type="reset" onclick="self.history.back()" class="bttn-box-round back-chat-div"><i style="font-size: 18px"class="ti-arrow-left"></i></a>
                       </div>
                       <div class="col-sm-4 text-center pos-top">
                          Peringkat
                       </div>      
                       
                   </div>
               </header>


                <div class="preloader-wrap p-3">
                    <div class="box shimmer">
                        <div class="lines">
                            <div class="line s_shimmer"></div>
                            <div class="line s_shimmer"></div>
                            <div class="line s_shimmer"></div>
                            <div class="line s_shimmer"></div>
                        </div>
                    </div>
                    <div class="box shimmer mb-3">
                        <div class="lines">
                            <div class="line s_shimmer"></div>
                            <div class="line s_shimmer"></div>
                            <div class="line s_shimmer"></div>
                            <div class="line s_shimmer"></div>
                        </div>
                    </div>
                </div>

     <div class="app-body p-4 form-wrap">
                    <div class="row">

                      <?php 
                      foreach ($package as $row ) {  ?>

                        <div class="col-sm-6 mt-3" >
                          
                            <ul class="shop-item pl-0 mb-0" style="background: #4527A0;border-radius: 10px;padding-top: 15px;padding-bottom: 15px " >
                              <?php if(! empty($usr_depo)){
                                  if($usr_depo['id_package'] == $row['id_package']){ ?> 

                                      <li style="width: 50%" ><a href="#" data-toggle="modal" data-target="#modal-depo-false"><img style="border-radius: 5px" src="<?php echo base_url();?>assets/backend/images/<?php echo $row['file'];?>" alt="banner">

                                        </a>
                                        <h4 style="font-size: 14px;color: #ef9b7a" ><?= $row['package_name'];?></h4>
                                                   <h4 style="color: #ef9b7a;font-size: 12px;margin-top: 5px;
                                                   ">IDR <?= format_rupiah($row['amount'])?></h4>

                                      </li>                   
                               
                               
                                
                                  <?php }else{ ?>

                                      <li style="width: 50%" ><a href="<?php echo base_url();?>page/upgrade_det/<?php echo $row['id_package'];?>"><img style="border-radius: 5px" src="<?php echo base_url();?>assets/backend/images/<?php echo $row['file'];?>" alt="banner">

                                      </a>

                                      <h4 style="font-size: 14px;color: #ef9b7a" ><?= $row['package_name'];?></h4>
                                               <h4 style="color: #ef9b7a;font-size: 12px;margin-top: 5px;
                                               ">IDR <?= format_rupiah($row['amount'])?></h4>

                                    </li>

                               <?php }} else {?>
                                  <li style="width: 50%" ><a href="<?php echo base_url();?>page/upgrade_det/<?php echo $row['id_package'];?>"><img style="border-radius: 5px" src="<?php echo base_url();?>assets/backend/images/<?php echo $row['file'];?>" alt="banner">

                                  </a>

                                  <h4 style="font-size: 14px;color: #ef9b7a" ><?= $row['package_name'];?></h4>
                                           <h4 style="color: #ef9b7a;font-size: 12px;margin-top: 5px;
                                           ">IDR <?= format_rupiah($row['amount'])?></h4>

                                </li>
                                
     
                            <?php  } ?>
                                
                            </ul>  

                        </div>
                    

                      <?php } ?>


                    </div>

                

                </div> 


</div>


    