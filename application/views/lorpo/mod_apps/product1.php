<!-- Header -->
<header class="header position-fixed bg-theme-round-opac text-white theme-red ">
    <div class="row">
        <div class="col-auto">
            <button type="button" class="btn btn-default btn-44 btn-rounded back-btn">
               <i class="bi bi-arrow-left"></i>
            </button>
        </div>
        <div class="col">
            <div class="logo-small">
                <img style="width:45px;border-radius: 0px;" src="<?php echo base_url();?>assets/front/img/logo_kecil.png" alt="" />
                
            </div>
        </div>
        <div class="col-auto">
            <a href="#" target="_self" class="btn btn-default btn-44 btn-rounded">
                <i class="bi bi-bell"></i>
                <span class="count-indicator"></span>
            </a>
           
        </div>
    </div>
</header>
<!-- Header ends -->

<!-- main page content -->
<div class="main-container container">
    <!-- products -->
    <div class="row mb-3">
        <div class="col align-self-center">
            <h6 class="title">Products</h6>
            <p class="text-secondary small">8 products</p>
        </div>
        <div class="col-auto">
            <nav>
                <div class="nav nav-tabs border-0" id="nav-tab" role="tablist">
                    <button class="btn btn-44 btn-outline-dark active text-normalcase" id="nav-thumbnails-tab" data-bs-toggle="tab" data-bs-target="#nav-thumbnails" type="button" role="tab" aria-controls="nav-thumbnails" aria-selected="true">
                        <i class="bi bi-grid"></i>
                    </button>
                    <button class="btn btn-44 btn-outline-dark ms-2 text-normalcase" id="nav-lists-tab" data-bs-toggle="tab" data-bs-target="#nav-lists" type="button" role="tab" aria-controls="nav-lists" aria-selected="false">
                        <i class="bi bi-list"></i>
                    </button>
                </div>
            </nav>
        </div>
       
    </div>
    <div class="row">
        <div class="col-12">
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-thumbnails" role="tabpanel" aria-labelledby="nav-thumbnails-tab">

                    <!-- product medsize box  -->
                    <div class="row mb-2">
                      <?php foreach ($package as $row ) {
                      ?>
                        <div class="col-12 col-md-4 col-lg-6">
                            <div class="card mb-3">
                                <div class="card-body p-1 position-relative">
                                  
                                    <figure class="avatar h-190 w-100 rounded-15 border coverimg">
                                        <img src="<?php echo base_url();?>assets/front/img/<?= $row['file'];?>" alt="" class="w-100">
                                    </figure>
                                </div>
                                <div class="card-body pt-2">
                                    <div class="row">
                                        <div class="col auto " style="padding-right:1px;padding-left: 0px;" >
                                            <p class="small text-center "><small class="text-muted size-12">Pendapatan</small><br /> Rp <?= format_rupiah($row['comission']);?>
                                            </p>
                                        </div>
                                        <div class="col" style="padding: 0 1px">
                                           <p class="small text-center "><small class="text-muted size-12">Jumlah Hari</small><br /> <?= $row['periode'];?> Hari
                                            </p>
                                        </div>
                                         <div class="col mr-0" style="padding-left:1px;padding-right: 5px;">
                                            <p class="small text-center "><small class="text-muted size-12">Alat Sewa</small><br /> Rp <?= format_rupiah($row['amount']);?>
                                            </p>
                                        </div>
                                    </div>

                                </div>
                                 <div class="col auto mb-3 p-3" style="padding-right:1px;padding-left: 0px;" >
                                  <a href="<?php echo base_url();?>package/invest/<?= $row['id_package'];?>" class="w-100" ><p style="font-size: 12px;display: block;background: #0e0e0e;" class="small text-center btn btn-default btn-md btn-rounded text-white  ">Sewa Peralatan</p></a>
                               </div>
                            </div>
                        </div>
                      <?php } ?>
                      
                    </div>

                </div>
                <div class="tab-pane fade" id="nav-lists" role="tabpanel" aria-labelledby="nav-lists-tab">

                    <!-- product medsize list  -->
                    <div class="row mb-2">
                      <?php foreach ($package as $row ) { ?>
                        <div class="col-12 col-md-6 ">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-auto position-relative">
                                            
                                            <figure class="avatar avatar-80 rounded-15 coverimg">
                                                <img src="<?php echo base_url();?>assets/front/img/<?= $row['file'];?>" alt="" class="w-100">
                                            </figure>
                                        </div>
                                        <div class="col position-relative">
                                            <div class="position-absolute end-0 top-0 z-index-1 ">
                                                <div class="tag bg-theme me-2 text-white">
                                                   <a  href="<?php echo base_url();?>package/invest/<?= $row['id_package'];?>" class="text-white"  > Sewa Peralatan </a>
                                                </div>
                                            </div>
                                            <p class="mb-0"><small class="text-muted size-12"><?= $row['title'];?></small>
                                            </p>
                                            <h5>Rp <?= format_rupiah($row['amount']);?></h5>
                                           <p class="mb-0"><small class="text-muted size-12">Gaji Harian : Rp <?= $row['comission'];?></small>
                                           <p class="mb-0"><small class="text-muted size-12">Tanggal Kadaluarsa: <?= $row['periode'];?> Hari</small>
                                            </p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                      <?php } ?>
                      
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
<!-- main page content ends -->

