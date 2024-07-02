
<?php 
if ($this->session->level_login==''){
    redirect(base_url());
}else{
?>

<!DOCTYPE html>

<html lang="en"  data-x="html" data-x-toggle="html-overflow-hidden">


<head>
  <!-- Required meta tags -->

   <title>TechnoGym</title>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="https://ik.imagekit.io/bqo7pjket/logo.png?updatedAt=1719290009344">

  <!-- Google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600&amp;display=swap" rel="stylesheet">

  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="<?php echo base_url();?>assets/front/css/vendors.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/front/css/main.css" rel="stylesheet">

 



</head>

<body style="background: #000033">
  <main>

<section class="layout-pt-md layout-pb-lg" >
  <div data-anim-wrap class="container">
    <div class="tabs -pills-2 js-tabs">

      <div data-anim-child="slide-up delay-1" class="row y-gap-20 justify-between items-end">
        <div class="col-md-12">
          <div class="sectionTitle -md">
            <h2 class="sectionTitle__title " style="margin-top: 0px;text-align: center;color: gold"><i>~ Checkout ~</i></h2>
            <hr style="color: gold">
            <h2 class="sectionTitle__title " style="margin-top: 0px;text-align: center;color: #fff">Rp. <?= format_rupiah($depo['amount']+ $depo['uniq_code']);?></h2>

          </div>
        </div>

     
          <div class="tabs__controls row x-gap-10 justify-center js-tabs-controls">

            <div class="col-auto">
              <button class="tabs__button text-14 fw-500 px-10 py-10 rounded-4 js-tabs-button" data-tab-target=".-tab-item-1" style="background-color: gold">  <!-- <img style="width: 16px;" src="<?php echo base_url();?>assets/icon_va.png" alt="logo icon">  --> <i class="fa fa-send"> VIRTUAL ACCOUNT</i></button>
            </div>

            <div class="col-auto">
              <button class="tabs__button text-14 fw-500 px-10 py-10 rounded-4 js-tabs-button " data-tab-target=".-tab-item-2" style="background-color: silver"><!-- <img style="width: 16px;" src="<?php echo base_url();?>assets/icon_bercode.png" alt="logo icon"> --> <i class="fa fa-barcode"> QRIS</i></button>
            </div>

        </div>
      </div>

      <div class="tabs__content pt-30 js-tabs-content">


        <div class="tabs__pane -tab-item-1 is-tab-el-active">
          <div class="row y-gap-30">

            <div data-anim-child="slide-left delay-4" class="col-md-12" style="padding-top: 0px;color: #fff">
            Kode VA :
            </div>



          </div>
        </div>

        <div class="tabs__pane -tab-item-2 ">

          <div class="row y-gap-30">

            <div data-anim-child="slide-left delay-4" class="col-md-12" style="padding-top: 0px;">
              <a href="<?php echo base_url();?>package/invoice/<?= $depo['id_depo'];?>">
              <img style="width: 130px;margin: 0 auto;display: block;" src="<?php echo base_url();?>assets/icon_qiris.png" alt="logo icon">
            </a>
           </div>



         </div>
       </div>

   


    </div>
  </div>
</div>
</section>
</main>

<!-- JavaScript -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAz77U5XQuEME6TpftaMdX0bBelQxXRlM"></script>
<script src="<?php echo base_url();?>assets/front/unpkg.com/%40googlemaps/markerclusterer%402.5.3/dist/index.min.js"></script>


<script src="<?php echo base_url();?>assets/front/js/vendors.js"></script>
<script src="<?php echo base_url();?>assets/front/js/main.js"></script>

</body>


<?php } ?>
