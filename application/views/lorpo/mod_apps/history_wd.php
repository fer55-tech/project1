<style>
#linear {background-image: linear-gradient(to bottom, #BF953F, #FCF6BA); }
</style>
<section class="header__container container" style="padding-top: 120px;">
    <div data-anim-wrap class="container" style="background: #000044;width: 100%;height:auto; padding-top: 12px;padding-bottom: 12px;margin-top: 15px;color: #fff;border-radius: 15px;">
    <h4 style="color:#fff;font-family: verdana;text-align: center"><i class="fa fa-history"> <b>Riwayat Penarikan</b></i></h4><hr style="color: gold">
    <table style="width:100%; height: 30px;margin-top: 0px">
        <!-- <tr style="height: 50px"></tr> -->
        <tr>
          <td style="border-right: 1px gold solid;text-align: center;color: #fff;font-family: helvetica; font-size: 12px"><b>Tanggal</b></td>
          <td style="border-right: 1px gold solid;text-align: center;color: #fff;font-family: helvetica;font-size: 12px"><b>Jumlah</b></td>
          <td style="text-align: center;color: #fff;font-family: helvetica;font-size: 12px"><b>Status</b></td>
        </tr>
         <?php foreach ($note as $row ) { ?>
        <tr>
            <td style="border-right: 3px #fff solid;text-align: center;color: #fff;font-family: helvetica"><?= $row['date_created'];?></td>
            <td style="border-right: 3px #fff solid;text-align: center;color: #fff;font-family: helvetica"><?= $row['amount'];?></td>
            <td style="border-right: 3px #fff solid;text-align: center;color: #fff;font-family: helvetica"><?= $row['status'];?></td>
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
                <h4 class="sectionTitle__title " style="margin-top: 60px;">Riwayat Penarikan</h4>
                
              </div>
            </div>

          </div>

          <div class="tabs__content pt-30 js-tabs-content">


            <div class="tabs__pane -tab-item-1 is-tab-el-active">
              <div class="row y-gap-30">

                <div data-anim-child="slide-left delay-4" class="col-md-12" style="padding-top: 0px;">

                  <table style="width: 100%;">
                    <tr>
                      <td style="border-bottom: 1px #dedcdc solid;padding: 3px;font-size: 12px;text-align: left;width: 150px;font-weight: bold;">Tanggal</td>
                      <td style="border-bottom: 1px #dedcdc solid;padding: 3px;font-size: 12px;text-align: center;font-weight: bold;">Jumlah</td>
                      <td style="border-bottom: 1px #dedcdc solid;padding: 3px;font-size: 12px;text-align: right;font-weight: bold;">Status</td>
                    
                      
                    </tr>

                    <?php foreach ($note as $row ) { ?>
                      
                    
                    <tr>
                      <td style="border-bottom: 1px #dedcdc solid;padding: 3px;font-size: 10px;text-align: left;width: 150px;"><?= $row['date_created'];?></td>
                      <td style="border-bottom: 1px #dedcdc solid;padding: 3px;font-size: 10px;text-align: center;"><?= $row['amount'];?></td>
                      <td style="border-bottom: 1px #dedcdc solid;padding: 3px;font-size: 10px;text-align: center;"><?= $row['status'];?></td>
                      
                    </tr>

                  <?php } ?>
                  </table>

                </div>

  

              </div>
            </div>



          </div>
        </div>
      </div>
    </section> -->


