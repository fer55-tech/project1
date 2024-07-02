<!-- Header -->
    <header class="header header-fixed">
        <div class="container">
            <div class="header-content">
                <div class="left-content">
                    <a href="javascript:void(0);" class="back-btn">
                        <i class="icon feather icon-chevron-left"></i>
                    </a>
                    <h6 class="title">Catatan Anggota Aktif</h6>
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
<div class="page-content space-top p-b60">
    <div class="container">
       
        <ul class="dz-list message-list">
             <?php foreach ($ref_aktif as $row ) { 
                // $depo = $this->model_app->view_where('deposit',  array('uname' => $row['username']))->row_array();
                 if($row['status'] == 'Active'){
                    $status = ' <div class="seen-btn active mt-2 dz-flex-box">
                                <i class="icon feather icon-check"></i>
                            </div>';
                    $statusa ='Sudah Aktif';
                }else{
                    $status = '';
                    $statusa ='Belum Aktif';
                }
                $bonus = ($row['amount'] * 5)/100;
                ?>
            <li>
                <a href="#">
                    <div class="media media-50">
                        <img class="rounded" src="<?php echo base_url();?>assets/front/product/logo_mac.png" alt="image">
                    </div>
                    <div class="media-content">
                        <div>
                            <h6 class="name"><?= $row['username'];?></h6>
                            <p  style="margin: 0px;line-height: 15px;">
                                <?= $row['phone'];?> - <?= @$row['package_name'];?> 
                            </p>
                              <p style="margin: 0px;line-height: 15px;"><?= $statusa;?> </p>
                               <p style="margin: 0px;line-height: 15px;"><?= $row['date_created'];?></p>
                        </div>
                        <div class="left-content">
                            <span class="time">Rp <?= format_rupiah(@$bonus);?></span>
                           <?= $status;?>
                         
                        </div>
                    </div>
                </a>
            </li>

        <?php } ?>

       
        </ul>
    </div>    
</div>
<!-- Page Content End -->
