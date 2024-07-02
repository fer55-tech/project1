<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
#linear {background-image: linear-gradient(to bottom, #BF953F, #FCF6BA); }
</style>

<section class="layout-pt-md layout-pb-lg" style="padding-top: 100px">
  <div data-anim-wrap class="container" style="background: #000044;width: 100%;height:auto; padding-top: 12px;margin-top: 15px;color: #fff;border-radius: 15px;">
  <div data-anim-wrap class="container">
    <div class="tabs -pills-2 js-tabs">

      <div data-anim-child="slide-up delay-1" class="row y-gap-20 justify-between items-end">
        <div class="col-auto">
          <div class="sectionTitle -md">
            <h2 class="sectionTitle__title " style="margin-top: 20px; font-family: verdana;color: gold"><i class="fa fa-info"> Info Referal</i></h2>

          </div>
        </div>

        <div class="col-auto">
          <div class="tabs__controls row x-gap-10 justify-center js-tabs-controls">

            <div class="col-auto">
              <button class="tabs__button text-14 fw-500 px-5 py-5 rounded-4 bg-yellow-2 js-tabs-button is-tab-el-active" data-tab-target=".-tab-item-1" style="font-family: tahoma;width: 100%;background: #6495ED;">Tingkat 1</button>
            </div>

            <div class="col-auto">
              <button class="tabs__button text-14 fw-500 px-5 py-5 rounded-4 bg-yellow-2 js-tabs-button " data-tab-target=".-tab-item-2"style="font-family: tahoma"> Tingkat 2</button>
            </div>

            <div class="col-auto">
              <button class="tabs__button text-14 fw-500 px-5 py-5 rounded-4 bg-yellow-2 js-tabs-button " data-tab-target=".-tab-item-3"style="font-family: tahoma"> Tingkat 3</button>
            </div>

          </div>
        </div>
      </div>

      <div class="tabs__content pt-30 js-tabs-content">


        <div class="tabs__pane -tab-item-1 is-tab-el-active">
          <div class="row y-gap-30">

            <div data-anim-child="slide-left delay-4" class="col-md-12" style="padding-top: 0px;">

              <table style="width: 100%;">
                <tr>
                  <td style="border-bottom: 1px #dedcdc solid;padding: 3px;font-size: 12px;color: #fff">UserID</td>
                  <td style="border-bottom: 1px #dedcdc solid;padding: 3px;font-size: 12px;color: #fff">Nomor WA</td>
                  <td style="border-bottom: 1px #dedcdc solid;padding: 3px;font-size: 12px;color: #fff">Upgrade</td>
                  <td style="border-bottom: 1px #dedcdc solid;padding: 3px;font-size: 12px;color: #fff">Status</td>

                </tr>
                <?php foreach ($ref1 as $row ) { 

                  if ($row['amount'] == "") {
                    $status = '-';
                    $depo = 0;
                  }else{
                    $status = $row['status'];
                    $depo = $row['amount'];
                  }

                  ?>

                  <tr>
                    <td style="border-bottom: 1px #dedcdc solid;padding: 3px;font-size: 12px;color: #fff"><?= $row['username']; ?></td>
                    <td style="border-bottom: 1px #dedcdc solid;padding: 3px;font-size: 12px;color: #fff"><?= $row['phone']; ?></td>
                    <td style="border-bottom: 1px #dedcdc solid;padding: 3px;font-size: 12px;color: #fff"><?= format_rupiah(@$depo); ?></td>
                    <td style="border-bottom: 1px #dedcdc solid;padding: 3px;font-size: 12px;color: #fff"><?= $status; ?></td>

                  </tr>

                <?php } ?>
              </table>

            </div>



          </div>
        </div>

        <div class="tabs__pane -tab-item-2 ">

          <div class="row y-gap-30">

            <div data-anim-child="slide-left delay-4" class="col-md-12" style="padding-top: 0px;">

              <table style="width: 100%;">
                <tr>
                  <td style="border-bottom: 1px #dedcdc solid;padding: 3px;font-size: 12px;color: #000">UserID</td>
                  <td style="border-bottom: 1px #dedcdc solid;padding: 3px;font-size: 12px;color: #000">Nomor WA</td>
                  <td style="border-bottom: 1px #dedcdc solid;padding: 3px;font-size: 12px;color: #000">Upgrade</td>
                  <td style="border-bottom: 1px #dedcdc solid;padding: 3px;font-size: 12px;color: #000">Status</td>

                </tr>
                <?php foreach ($ref2 as $row ) { 

                 if ($row['amount'] == "") {
                   $status = '-';
                   $depo = 0;
                 }else{
                   $status = $row['status'];
                   $depo = $row['amount'];
                 }

                 ?>

                 <tr>
                   <td style="border-bottom: 1px #dedcdc solid;padding: 3px;font-size: 12px;color: #000"><?= $row['username']; ?></td>
                   <td style="border-bottom: 1px #dedcdc solid;padding: 3px;font-size: 12px;color: #000"><?= $row['phone']; ?></td>
                   <td style="border-bottom: 1px #dedcdc solid;padding: 3px;font-size: 12px;color: #000"><?= format_rupiah(@$depo); ?></td>
                   <td style="border-bottom: 1px #dedcdc solid;padding: 3px;font-size: 12px;color: #000"><?= $status; ?></td>

                 </tr>

               <?php } ?>
             </table>

           </div>



         </div>
       </div>

       <div class="tabs__pane -tab-item-3 ">
        <div class="row y-gap-30">

          <div data-anim-child="slide-left delay-4" class="col-md-12" style="padding-top: 0px;">

            <table style="width: 100%;">
              <tr>
                <td style="border-bottom: 1px #dedcdc solid;padding: 3px;font-size: 12px;color: #000">UserID</td>
                <td style="border-bottom: 1px #dedcdc solid;padding: 3px;font-size: 12px;color: #000">Nomor WA</td>
                <td style="border-bottom: 1px #dedcdc solid;padding: 3px;font-size: 12px;color: #000">Upgrade</td>
                <td style="border-bottom: 1px #dedcdc solid;padding: 3px;font-size: 12px;color: #000">Status</td>

              </tr>
               <?php foreach ($ref3 as $row ) { 

                 if ($row['amount'] == "") {
                   $status = '-';
                   $depo = 0;
                 }else{
                   $status = $row['status'];
                   $depo = $row['amount'];
                 }

                ?>

               <tr>
                 <td style="border-bottom: 1px #dedcdc solid;padding: 3px;font-size: 12px;color: #000"><?= $row['username']; ?></td>
                 <td style="border-bottom: 1px #dedcdc solid;padding: 3px;font-size: 12px;color: #000"><?= $row['phone']; ?></td>
                 <td style="border-bottom: 1px #dedcdc solid;padding: 3px;font-size: 12px;color: #000"><?= format_rupiah(@$depo); ?></td>
                 <td style="border-bottom: 1px #dedcdc solid;padding: 3px;font-size: 12px;color: #000"><?= $status; ?></td>
                 
               </tr>

             <?php } ?>
              </tr>
            </table>
          </div>






        </div>
      </div>



    </div>
  </div>
</div>
</div>
</section>


