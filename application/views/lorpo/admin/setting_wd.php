

<!-- content @s -->
<div class="nk-content nk-content-fluid">
    <div class="container-xl wide-lg">
        <div class="nk-content-body">
  
            <div class="nk-block">
                <div class="row gy-gs">

                    <div class="col-lg-4 col-xl-4">
                        <div class="nk-block">
                           <a href="#"  data-toggle="modal" data-target="#modalSetWd" >
                            <div class="nk-block">
                                <div class="card card-bordered text-light is-dark h-100" style="background: #0b0a09;">
                                    <div class="card-inner" style="padding:3.5rem">
                                        <div  >
                                            <img style="width: 80px; display: block;margin-left: auto;margin-right: auto;"  src="<?php echo base_url();?>assets/front/img/wd.png" alt="icon">                             
                                                     
                                            <div class="nk-wg7-stats">
                                                <div  class="nk-wg7-title text-center" style="margin-top:20px">Pengaturan Withdraw</div>


                                            </div>
                                             
        
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>

 
                </div><!-- .row -->
            </div><!-- .nk-block -->

        
        </div>
    </div>
</div>
<!-- content @e -->

<div class="modal fade zoom" tabindex="-1" id="modalSetWd">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="<?php echo base_url();?>home/setWd" method="POST" >
            <div class="modal-header">
                <h5 class="modal-title">Pengaturan Withdraw</h5>
                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
            </div>
            <div class="modal-body">
                <?php 
                if($setWd['status'] == 'Disable'){
                    $title ='Aktifkan';
                    ?>
                <p style="text-transform: uppercase;">Penarikan Sudah dinonaktifkan</p>
                <p>Jika anda mengaktifkan fitur penarikan maka user bisa melakukan penarikan</p>
            <?php }else{ 
                $title ='Nonaktifkan';
                ?>
                 <p style="text-transform: uppercase;"> Penarikan sudah diaktifkan</p>
                <p>Jika anda menonaktifkan fitur penarikan maka user tidak bisa melakukan penarikan</p>
            <?php } ?>
            </div>
            <input type="hidden" name="status" value="<?= $setWd['status'];?>" >
            <input type="hidden" name="id" value="<?= $setWd['id'];?>" >
            <div class="modal-footer bg-dark ">
                <button type="submit" style="float: right;" class="btn btn-primary "><?= $title;?></button>
            </div>
            </form>
        </div>
    </div>
</div>