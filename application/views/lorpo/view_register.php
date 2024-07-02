<!DOCTYPE html>
<html lang="en" oncontextmenu="return false">

<head>
    
    <!-- Title -->
    <title>TechnoGym</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover">
    <meta name="theme-color" content="#FE4487">

    <!-- Favicons Icon -->
   <link rel="shortcut icon" type="image/x-icon" href="https://ik.imagekit.io/bqo7pjket/logo.png?updatedAt=1719290009344">
    
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600&amp;display=swap" rel="stylesheet">

    

    <link href="<?php echo base_url();?>assets/front/css/vendors.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/front/css/main.css" rel="stylesheet">


</head>   
<body>

  <?php 
  if(!empty($url)){
    $ref_link = $url;
  }else{
    $ref_link = "";
  }?>

    <section class="layout-pt-lg layout-pb-lg bg-dark-2">
      <div class="container">
        <img style="width: 200px;margin: 0 auto;margin-bottom: 0px;display: block;margin-bottom: 15px;" src="<?php echo base_url();?>assets/front/img/logo_miners.png" alt="logo icon">
       <form class="contact-form-inner" method="post" action="<?php echo base_url();?>register" >
        <div class="row justify-center">
          <div class="col-xl-6 col-lg-7 col-md-9">
            <div class="px-50 py-50 sm:px-20 sm:py-20 shadow-4 " style="border-radius:30px;background: #000033">
              <div class="row y-gap-20">

               
                <div class="col-12">
                  <h1 class="text-22 fw-500" style="color: gold;text-align: center">Silakan isi data diri anda</h1>     
                </div>
                <div class="col-12">
                  <div class="form-input ">
                    <input type="text" name="uname" required style="border-radius: 10px;color: #fff;font-size: 14px">
                    <label class="lh-1 text-14 text-light-1">UserID</label>
                  </div>
                </div>

                <div class="col-12">
                  <div class="form-input ">
                    <input type="password" name="pwd" required style="border-radius: 10px;color: #fff;font-size: 14px">
                    <label class="lh-1 text-14 text-light-1">Password</label>
                  </div>
                </div>

                <div class="col-12">
                  <div class="form-input ">
                    <input type="text" name="phone" required style="border-radius: 10px;color: #fff;font-size: 14px">
                    <label class="lh-1 text-14 text-light-1">Nomor Telpon</label>
                  </div>
                </div>

                <div class="col-12">
                  <div class="form-input ">
                    <input type="text" name="ref_code" value="<?= $ref_link;?>" autocomplete="off" required style="border-radius: 10px;color: #fff;font-size: 14px">
                    <label class="lh-1 text-14 text-light-1">Kode Undangan</label>
                  </div>
                </div>

                <div class="col-12">
                  <p class="mt-10" style="color: #fff;text-align: center">Sudah punya akun ? <a href="<?php echo base_url();?>" class="text-yellow-1">Masuk Akun</a></p>

                  <button type="submit" name="submit" style="padding: 0px 10px;width: 100%;border-radius: 30px;" type="submit" class="button py-15 -light-1 bg-dark-1 text-white">
                    Buat Akun <div class="icon-arrow-top-right ml-15"></div>
                  </button>

                </div>
            
              </div>

            
            </div>
          </div>
        </div>
    </form>
      </div>
    </section>


<!-- JavaScript -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAz77U5XQuEME6TpftaMdX0bBelQxXRlM"></script>
<script src="<?php echo base_url();?>assets/front/unpkg.com/%40googlemaps/markerclusterer%402.5.3/dist/index.min.js"></script>


<script src="<?php echo base_url();?>assets/front/js/vendors.js"></script>
<script src="<?php echo base_url();?>assets/front/js/main.js"></script>
</body>


</html>