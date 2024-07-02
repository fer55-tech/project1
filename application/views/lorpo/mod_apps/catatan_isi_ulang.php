<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
#linear {background-image: linear-gradient(to bottom, #BF953F, #FCF6BA); }
</style>
<section class="header__container container" style="padding-top: 120px;">
    <div data-anim-wrap class="container" style="background: #000044;width: 100%;height:auto; padding-top: 12px;padding-bottom: 12px;margin-top: 15px;color: #fff;border-radius: 15px;">
    <h4 style="color:gold;font-family: verdana;text-align: center"><i class="fa fa-list"> <b>Catatan Upgrade</b></i></h4><hr style="color: gold">
    <table style="width:100%; height: auto;margin-top: 0px">
        <!-- <tr style="height: 50px"></tr> -->
        <tr>
          <td style="border-right: 1px #fff solid;text-align: center;color: #fff;font-family: helvetica;font-size: 12px"><b>Tanggal</b></td>
          <td style="border-right: 1px #fff solid;text-align: center;color: #fff;font-family: helvetica;font-size: 12px"><b>Jumlah</b></td>
          <td style="border-right: 1px #fff solid;text-align: center;color: #fff;font-family: helvetica;font-size: 12px"><b>Status</b></td>
          <td style="text-align: center;color: #fff;font-family: helvetica;font-size: 12px"><b>Info Bayar</b></td>
        </tr>
         <?php foreach ($topup as $row ) { ?>
        <tr>
            <td style="border-right: 1px #fff solid;text-align: center;color: #fff;font-family: helvetica;font-size: 10px"><?= $row['date'];?></td>
            <td style="border-right: 1px #fff solid;text-align: center;color: #fff;font-family: helvetica;font-size: 10px"> Rp. <?= $row['amount'];?></td>
            <td style="border-right: 1px #fff solid;text-align: center;color: #fff;font-family: helvetica;font-size: 10px"><?= $row['status'];?></td>
            <td style="text-align: center;color: #fff;font-family: helvetica;font-size: 10px;">
            <a href="<?php echo base_url();?>package/checkout/<?= $row['id_depo'] ?>" style="background-color: #000;">  Cek Pembayaran</a></td>
        </tr>
        <?php } ?>

        </table>
      
    </div>
  </section>

    <!-- <section class="layout-pt-md layout-pb-lg">
      <div data-anim-wrap class="container">
        <div class="tabs -pills-2 js-tabs">

          <div data-anim-child="slide-up delay-1" class="row y-gap-20 justify-between items-end">
            <div class="col-auto">
              <div class="sectionTitle -md">
                <h4 class="sectionTitle__title " style="margin-top: 60px;">Catatan Upgrade</h4>
                
              </div>
            </div>

          </div>

          <div class="tabs__content pt-30 js-tabs-content">


            <div class="tabs__pane -tab-item-1 is-tab-el-active">
              <div class="row y-gap-30">

                <div data-anim-child="slide-left delay-4" class="col-md-12" style="padding-top: 0px;">

                  <table style="width: 100%;">
                    <tr>
                      <td style="border: 1px #dedcdc solid;padding: 3px;font-size: 12px;text-align: left;width: 150px;font-weight: bold;">Tanggal</td>
                      <td style="border: 1px #dedcdc solid;padding: 3px;font-size: 12px;text-align: center;font-weight: bold;">Jumlah</td>
                      <td style="border: 1px #dedcdc solid;padding: 3px;font-size: 12px;text-align: center;font-weight: bold;">Status</td>
                      <td style="border: 1px #dedcdc solid;padding: 3px;font-size: 12px;text-align: right;font-weight: bold;">Info Bayar</td>
                    
                      
                    </tr>
                    <?php foreach ($topup as $row ) { ?>
                     
                    
                    <tr>
                      <td style="border: 1px #dedcdc solid;padding: 3px;font-size: 10px;text-align: left;width: 150px;"><?= $row['date'];?></td>
                      <td style="border: 1px #dedcdc solid;padding: 3px;font-size: 10px;text-align: center;"><?= $row['amount'];?></td>
                      <td style="border: 1px #dedcdc solid;padding: 3px;font-size: 10px;text-align: center;"><?= $row['status'];?></td>
                      <td style="border: 1px #dedcdc solid;padding: 3px;font-size: 10px;text-align: right;"> <a href="<?php echo base_url();?>package/checkout/<?= $row['id_depo'] ?>">  Cek Pembayaran</td>
                      
                    </tr>
                  <?php } ?>

                  </table>

                </div>

  

              </div>
            </div>



          </div>
        </div>
      </div>
    </section>
 -->

