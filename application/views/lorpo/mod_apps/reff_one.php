 
<!-- header start -->
<div class="header-area" style="background-image: url(<?php echo base_url();?>assets/front/img/bg/1.png);">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-3">
                <a class="menu-back-page" href="<?php echo base_url();?>home/dashboard">
                    <i class="fa fa-angle-left"></i>
                </a>
            </div>
            <div class="col-sm-4 col-6 text-center">
                <div class="page-name">Sewa Peralatan</div>
            </div>
           
        </div>
    </div>
</div>
<!-- header end -->>
<div class="main-container container">


    <!-- buttons -->
    <div class="row mb-2">
        <div class="col-6 mb-3">
            <a href="#" class="btn btn-outline-default btn-sm  w-100 btn-rounded">
            Total anggota yang menyewa peralatan active mingguan :
            <p><b><?= $reff1Mingguan;?></b> Anggota</p>
        </a>
        </div>
        <div class="col-6 ">
          <a href="#" class="btn btn-outline-default btn-sm  w-100 btn-rounded">
                      Total anggota yang menyewa peralatan active permanen :
                      <p><b><?= $reff1Bulanan;?></b> Anggota</p>
                  </a>
        </div>

    </div>

<!-- User list items  -->
<div class="row">
    <div class="col-12">
        <?php if(! empty($ref_arr1)){ ?>
        <div class="card  mb-4 " style="border-radius: 3px;" >
            <ul class="list-group list-group-flush bg-none">
                <?php foreach ($ref_arr1 as $row ) { 
                    $depo = $this->model_app->view_where('deposit',  array('uname' => $row['username']))->row_array();
                     if($depo['status'] == 'Active'){
                        $status = "bg-success";
                    }else{
                        $status = "bg-warning";
                    }
                    ?>
            
                <li class="list-group-item mb-0 p-1 ">
                    <div class="row">
                        <div class="col-auto">
                        
                                  <i class="bi bi-person"> </i>
                             
                        </div>
                        <div class="col px-0">
                            <p class="size-10"><?= $row['username'];?><br><small class="text-secondary"><?= $row['phone'];?></small></p>
                        </div>
                        <div class="col-auto text-end">
                            <p class="size-10 mb-0">
                                <small class="text-secondary"><?= $depo['status'];?> <span class="avatar avatar-6 rounded-circle <?php echo $status;?> d-inline-block"></span></small>
                              
                            </p>
                            <p class="size-10"><?= $depo['package_name'];?></p>
                        </div>
                    </div>
                </li>
               
            <?php } ?>
               
            </ul>
        </div>
    <?php  }else{?>
      <img style="margin: 0 auto;display: block;" src="<?php echo base_url();?>assets/front/img/empty.png" alt="" class="w-50">
      <p class="text-muted text-center">Belum ada data.</p>
    <?php } ?>
    </div>
</div>

</div>
<!-- main page content ends -->


