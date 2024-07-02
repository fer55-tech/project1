
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
                          PeringkatSaya
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

                      
                        <div class="col-sm-12">
                           <div class="card" style="margin-bottom:20px;padding-bottom: 15px;padding-top: 15px">
                               <div class="card-body" >

                                <?php 
                                   //$attributes = array('class'=>'mt-4','role'=>'form');
                                   echo form_open('page/upgrade_true');  ?>


                                   <div class="mt-0 list-item pl-0 pr-0 d-flex" >
                                       <div style="text-align: center; border: 1px #cba467 solid; border-radius: 10px;padding:10px" class="content-div">
                                          
                                            <span><img style="width: 90px ;border-radius: 5px " src="<?php echo base_url();?>assets/backend/images/<?php echo $file;?>" alt="icon"></span>
                                            <h4 style="font-size: 14px;color: #ef9b7a" class="mb-1"><?= $package_name;?></h4>
                                           <h4 style="color: #ef9b7a;font-size: 12px;margin-top: 15px;
                                           ">IDR <?= format_rupiah($amount);?></h4>
                                        

                                       </div>
                                      
                                   </div> 
                                   <input type="hidden" name="uname" value="<?= $this->session->username;?>" >
                                   <input type="hidden" name="id_package" value="<?= $id_package;?>" >
                                   <input type="hidden" name="package_name" value="<?= $package_name;?>" >
                                   <input type="hidden" name="id_package" value="<?= $id_package;?>" >
                                   <input type="hidden" name="amount" value="<?= $amount;?>" >



                                    <div class="col-sm-12 mt-0 list-item pl-0 pr-0 d-flex" >
                                       <div style="text-align: center;padding-left: 5px;padding-right: 5px;" class="content-div mr-3">
                                          <?php
                                          if($depo >=1){?>
                                           <button  type="submit" name="submit" class="btn btn-round btn-success mt-4 mr-1 mb-2" disabled>Jalankan</button>
                                         <?php }else{?>
                                          <button  type="submit" name="submit" class="btn btn-round btn-success mt-4 mr-1 mb-2">Jalankan</button>

                                        <?php } ?>

                                            
                                       </div>
                                      
                                   </div>   


                                 </form>
                               </div>
                           </div> 
                        
                        </div>

                   


                    </div>

                

                </div> 


</div>


    