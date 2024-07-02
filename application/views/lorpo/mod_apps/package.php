 
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
                <div class="page-name">Purchase Order</div>
            </div>
           
        </div>
    </div>
</div>
<!-- header end -->


  <!-- bill-pay start -->
    <div class="bill-pay-area pd-top-0" style="padding-top:80px">
        <div class="container" style="padding-bottom: 15px;">
          <?php foreach ($myDepo as $row ) {  ?>
            <div class="ba-bill-pay-inner">
                <div class="ba-single-bill-pay">
                    <div class="thumb">
                        <img src="<?php echo base_url();?>assets/front/img/icon/icon1a.jpg" alt="img">
                    </div>
                    <div class="details">
                        <h5><?= $row['title'];?></h5>
                        <p>Total Income : <?= format_rupiah($row['comission'] * $row['periode']);?></p>
                        <p>Profit Day : <?= format_rupiah($row['comission']) ;?></p>
                        <p>Periode Invesment : <?=$row['periode'];?> Days</p>
                        <p>Status : <?= ($row['status']=='Pending') ? "<span style='color:red'>Pending</span>" : "<span style='color:green'>Active</span>" ;?> </p>
                    </div>
                </div>
                <div class="amount-inner">
                    <h5>Amount  :<?= format_rupiah($row['amount'] + $row['uniq_code']);?></h5>
                    <a class="btn btn-dark" href="<?php echo base_url();?>package/invoice/<?= $row['id_depo'];?>">Detail</a>
                </div>
            </div>
         <?php } ?>
           
           
        </div>
    </div>
    <!-- bill-pay End -->