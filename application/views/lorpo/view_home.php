

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="<?php echo base_url();?>assets/front/css/style.css" rel="stylesheet">

<style>
#linear {background-image: linear-gradient(to bottom, #BF953F, #FCF6BA); }
.button {
  display: inline-block;
  padding: 3px 15px;
  font-size: 20px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #04AA6D;
  border: none;
  border-radius: 15px;
  box-shadow: 0 5px #999;
  width: 100%;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

.slider {
  width: 100%;
  height: auto;
  overflow: hidden;
}

.slide {
  display: none;
  width: 100%;
  height: 100%;
}

.show {
  display: block !important;
}
</style>

<section class="header__container container" style="padding-top: 120px;">
<div data-anim-wrap class="container">
<div class="row">
  <div class="col-md-8">
    <div class="slider">
      
      <div class="slide">
        <img src="https://ik.imagekit.io/bqo7pjket/Gambar%20gerak/2.png?updatedAt=1719289951262" alt="Gambar 1">
        <!-- <p>Teks untuk gambar 2</p> -->
      </div>
      <div class="slide">
        <img src="https://ik.imagekit.io/bqo7pjket/Gambar%20gerak/3.png?updatedAt=1719289951866" alt="Gambar 2">
        <!-- <p>Teks untuk gambar 2</p> -->
      </div>
      <div class="slide show">
        <img src="https://ik.imagekit.io/bqo7pjket/Gambar%20gerak/Desain%20tanpa%20judul.png?updatedAt=1719289945284" alt="Gambar 3">
        <!-- <p>Teks untuk gambar 1</p> -->
      </div>
    </div>
  </div>
  <div class="col-md-4" style="height: auto;padding-top: 30px">
   <img src="https://ik.imagekit.io/bqo7pjket/Black%20Modern%20Sporty%20Gym%20Equipment%20Promotion%20Instagram%20Post.png?updatedAt=1719638757384">
        <a href="<?php echo base_url();?>home/logout">
  </div>

</div>
</div>
</section>

    <!-- <section data-anim-wrap class="masthead -type-2 js-mouse-move-container">
          <div class="masthead__bg bg-dark-3">
            <img src="<?php echo base_url();?>assets/front/img/masthead/2/bg.png" alt="image">
          </div>
    </section> -->

    <section class="header__container container" style="padding-top: 20px;">
    <div data-anim-wrap class="container">
    
    <div class="row" style="">
    <div class="col-6 col-lg-8" style="border-radius: 12px;background: #000044">
      <!-- <h3><span class="blink" style='color:red'/><b>Selamat Datang di RoyalMiners</b></span></h3> -->
      <!-- <marquee><p style="margin-top: -33px;">Selamat Datang di RoyalMiners</p></marquee> -->
      <h3 class="" style="padding-top: 15px;color:#fff"> <a href="<?php echo base_url();?>pages/updatePass" title="Ubah Password"><i class="fa fa-edit"> <?= $user['username'];?></i></a></h3>
      
      <span><p class="" style="font-size: 20px;float: left;"><?= $user['phone'];?></p></span>
      <!-- <input style="width: 100%;margin-left: 0px;margin-bottom: 0px;border:0px #cc6911 solid;border-radius:0px;padding-left: 15px;background: transparent;" type="text" id="myInput" readonly value="<?php echo base_url();?>register/ref/<?= $this->session->reff_code;?>"  /> -->
      <!-- <a  onclick="myFunction()" onmouseout="outFunc()" id="myTooltip">
       <img style="width: 29px;position: absolute;right: 20px;top: 109px;" src="<?php echo base_url();?>assets/salin.png" alt="logo icon">
      </a> -->
    </div>
    <!-- linear-gradient (to right #BF953F, #FCF6BA, #B38728, #FBF5B7, #AA771C; -->



    <div class="col-6 col-lg-4" style="">

    <input style="" type="text" name="" class="form-control">
   <!--  <img style="width: 130px;float: right; margin-bottom: 200px: 0px;margin-right: 0px;" src="<?php echo base_url();?>assets/icontops.png" alt="logo icon"> -->

      <button style="width: 100%;font-size: 20px;font-family: brush script MT; color: #000044;border-radius: 8px;box-shadow: 0 12px 16px 0 rgba(0,0,0,0.15), 0 17px 50px 0 rgba(0,0,0,0.10);" id="linear"><a href="<?php echo base_url();?>pages/upgrade"><i class="fa fa-cloud"><b><i> Topup Sekarang!</b></i></i></button>
      <div style="background: #000;width: 100%;padding-top: 12px;margin-top: 15px;color: #ffffff;border-radius: 15px;">
          <!-- <img style="width: 52px;margin-left: 15px;" src="<?php echo base_url();?>assets/front/images/upgrade.png" alt="logo icon"> -->
          
        </div>
      </a>
    </div>
    </div>
  </section>

  <section class="header__container container" style="padding-top: 10px;">
    <div data-anim-wrap class="container" style="background: #000044;width: 100%;height:230px; padding-top: 12px;padding-bottom: 12px;margin-top: 15px;color: #fff;border-radius: 15px;box-shadow: 0 12px 16px 0 rgba(0,0,0,0.15), 0 17px 50px 0 rgba(0,0,0,0.10);">
       
        <table style="width:100%; border-radius: 5px;box-shadow: 0 12px 16px 0 rgba(0,0,0,0.15), 0 17px 50px 0 rgba(0,0,0,0.10);height: 100px;margin-top: 20px" id="linear">
        <tr style="height: 50px"></tr>
        <tr>
          <td style="border-right: 2px #F8F8FF solid;text-align: center;color: #000;font-family: helvetica;font-size: 14px"><b>Total Bonus</b></td>
          <td style="border-right: 2px #F8F8FF solid;text-align: center;color: #000;font-family: helvetica;font-size: 14px"><b>Total Investasi</b></td>
          <td style="text-align: center;color: #000;font-family: helvetica;font-size: 14px"><b>Bonus TIM</b></td>
        </tr>
        <tr>
            <td style="border-right: 2px #F8F8FF solid;text-align: center;color: #808080;font-family: helvetica;font-size: 12px"><b>Rp <?= format_rupiah($totalBonus) ;?></b></td>
            <td style="border-right: 2px #F8F8FF solid;text-align: center;color: #808080;font-family: helvetica;font-size: 12px"><b>Rp <?= format_rupiah($sumDepo['amount']) ;?></b></td>
            <td style="text-align: center;color: #808080;font-family: helvetica;font-size: 12px"><b>Rp <?= format_rupiah($totalBonusReff) ;?></b></td>
        </tr>
        <tr style="height: 50px"></tr>
        </table>
      
    </div>
  </section>

    <section class="header__container container" style="padding-top: 10px;">
    <div data-anim-wrap class="container" style="background: #000044;width: 100%;height:180px; padding-top: 12px;padding-bottom: 12px;margin-top: 15px;color: #fff;border-radius: 15px;">
    <h4 style="color:#fff;font-family: verdana;text-align: center">Informasi Anggota</h4><hr style="color: #000">
    <table style="width:100%; height: 50px;margin-top: 0px">
        <!-- <tr style="height: 50px"></tr> -->
        <tr>
          <td style="border-right: 2px #fff solid;text-align: center;color: gold;font-family: helvetica"><h6>Level 1</h6></td>
          <td style="border-right: 2px #fff solid;text-align: center;color: gold;font-family: helvetica"><h6>Level 2</h6></td>
          <td style="border-right: 2px #fff solid;text-align: center;color: gold;font-family: helvetica"><h6>Level 3</h6></td>
          <td style="text-align: center;color: gold;font-family: helvetica"><h6>Total</h6></td>
        </tr>
        <tr>
            <td style="border-right: 2px #fff solid;text-align: center;color: gold;font-family: helvetica"><h4><?= $refActivelv1 ;?></h4></td>
            <td style="border-right: 2px #fff solid;text-align: center;color: gold;font-family: helvetica"><h4><?= $refActivelv2 ;?></h4></td>
            <td style="border-right: 2px #fff solid;text-align: center;color: gold;font-family: helvetica"><h4><?= $refActivelv3 ;?></h4></td>
            <td style="text-align: center;color: gold;font-family: helvetica"><h4><?= $refActivelv1 + $refActivelv2  + $refActivelv3 ;?></h4></td>
        </tr>
        </table>
      
    </div>
  </section>
  
  <section class="header__container container" style="padding-top: 10px;">
    <div data-anim-wrap class="container" style="background: #000044;width: 100%;height:180px; padding-top: 12px;padding-bottom: 12px;margin-top: 15px;color: #fff;border-radius: 15px;height: auto">
    <h4 style="color:#fff;font-family: verdana;text-align: center">Data Pribadi</h4>
    <div class="row">
    <br>
    <div class="col-6 col-lg-2" style="margin-top: 15px">
       <!--  <div style="width: 100%;padding-top: 12px;padding-bottom: 12px;margin-bottom: 5px;color: #fff;border-radius: 5px;" id="linear"> -->
        <button class="button" id="linear" style="font-size: 14px;color: #000044"><a href="<?php echo base_url();?>pages/withdrawal"><i class="fa fa-money"><br>Withdraw</i></a></button>
    </div>

    <div class="col-6 col-lg-2" style="margin-top: 15px">
        <!-- <div style="width: 100%;padding-top: 12px;padding-bottom: 12px;margin-bottom: 5px;color: #fff;border-radius: 5px;" id="linear"> -->
        <button class="button" id="linear" style="font-size: 14px;color: #000044"><a href="<?php echo base_url();?>pages/history_wd">
        <i class="fa fa-info"><br> Info Penarikan</i></a></button>
    </div>

    <div class="col-6 col-lg-2" style="margin-top: 15px">
        <!-- <div style="width: 100%;padding-top: 12px;padding-bottom: 12px;margin-bottom: 5px;color: #fff;border-radius: 5px;" id="linear"> -->
        <button class="button" id="linear" style="font-size: 14px;color: #000044"><a href="<?php echo base_url();?>package/history">
          <i class="fa fa-list"><br>Catatan Topup</i></a></button>
    </div>

    <div class="col-6 col-lg-2" style="margin-top: 15px">
        <!-- <div style="width: 100%;padding-top: 12px;padding-bottom: 12px;margin-bottom: 5px;color: #fff;border-radius: 5px;" id="linear"> -->
        <button class="button" id="linear" style="font-size: 14px;color: #000044"><a href="<?php echo base_url();?>pages/updateBank">
          <i class="fa fa-edit"><br> Isi Data Bank</i>
        </a></button>
    </div>

    <div class="col-6 col-lg-2" style="margin-top: 15px">
        <!-- <div style="width: 100%;padding-top: 12px;padding-bottom: 12px;margin-bottom: 5px;color: #fff;border-radius: 5px;" id="linear"> -->
        <button class="button" id="linear" style="font-size: 14px;color: #000044"><a href="<?php echo base_url();?>pages/network">
          <i class="fa fa-group"><br> Info Team</i></a></button>
    </div>

    <div class="col-6 col-lg-2" style="margin-top: 15px">
       <!--  <div style="width: 100%;padding-top: 12px;padding-bottom: 12px;margin-bottom: 5px;color: #fff;border-radius: 5px;" id="linear"> -->
        <button class="button" id="linear" style="font-size: 14px;color: #000044"><a href="<?php echo base_url();?>pages/mining_profit">
          <i class="fa fa-folder"><br> Profit Harian</i></a></button>
        </div>
    </div>
    </div>
    <br><br><br>

  </div>
  </section>

  <section class="header__container container" style="padding-top: 10px;">
    <div data-anim-wrap class="container" style="background: #000044;width: 100%;height:auto; padding-top: 12px;padding-bottom: 12px;margin-top: 15px;color: #fff;border-radius: 15px;">
    <!-- <h4 style="color:#fff;font-family: verdana;text-align: center">Data Pribadi</h4> -->
    <div class="row">

    <div class="col-6 col-lg-6" style="background: #000044;">
        <div style="width: 100%;padding-top: 12px;padding-bottom: 12px;margin-bottom: 5px;color: #fff;border-radius: 5px;" id="linear">
        <a href="<?php echo base_url();?>pages/contact_us">
          <div class="text-15 lh-12" style="width: 100%;color: #000044;text-align: center;"><h6><i class="fa fa-inbox"> Contact Us</i></h6></div>
        </a>
        </div>
    </div>
    
    <div class="col-6 col-lg-6" style="background: #000044;">
        <div style="width: 100%;padding-top: 12px;padding-bottom: 12px;margin-bottom: 5px;color: #fff;border-radius: 5px;" id="linear">
        <a href="#">
          <div class="text-15 lh-12 " style="width: 100%;color: #000044;text-align: center;"><h6><i class="fa fa-download"> Unduh Aplikasi</i></h6></div>
        </a>
        </div>
    </div>

    <div class="col-12 col-lg-12" style="background: #000044;">
        <div style="background: #f44336;width: 100%;padding-top: 12px;padding-bottom: 12px;margin-bottom: 5px;color: #fff;border-radius: 5px;">

          <div class="text-15 lh-12 " style="width: 100%;color: #000044;text-align: center;"><h6><i class="fa fa-close"> Exit</i></h6></div>
        </a>
        </div>
    </div>

    <br><br><br>

      
    </div>
  </div>

  </section>

  <section class="header__container container" style="padding-top: 10px;">
    <div data-anim-wrap class="container" style="background: #000033;width: 100%;height:180px; padding-top: 12px;padding-bottom: 12px;margin-top: 15px;color: #fff;border-radius: 15px;">
    
  </div>

  </section>

<script>
var slideIndex = 0;
tampilkanSlide();

function tampilkanSlide() {
  var i;
  var slides = document.getElementsByClassName("slide");
  
  for (i = 0; i < slides.length; i++) {
    slides[i].classList.remove("show");
  }
  
  slideIndex++;
  
  if (slideIndex > slides.length) {slideIndex = 1}
  
  slides[slideIndex-1].classList.add('show');
  
  setTimeout(tampilkanSlide, 3000); // Ganti slide setiap 3 detik
}
</script>
  

    <script>
      function myFunction() {
        var copyText = document.getElementById("myInput");
        copyText.select();
        copyText.setSelectionRange(0, 99999);
        document.execCommand("Copy");
        
        var tooltip = document.getElementById("myTooltip");
        // tooltip.innerHTML = "";
      }

      function outFunc() {
        var tooltip = document.getElementById("myTooltip");
        // tooltip.innerHTML = "";
      }
    </script>










    <!-- bagian popup -->
   <!--  <div class="popup">
     <div id="box">
       <a class="close" href="#">X</a> 

        <img style="margin: 0 auto;display: block;" src="<?php echo base_url();?>assets/pop.png">

        <a href="https://chat.whatsapp.com/BvLdaemGBk60n1cHK7NaBS" style="background: #f59314; position: absolute; margin: 0 auto; margin-top: -180px; margin-left: 73px; border-radius: 18px; padding: 5px;" target="_BANK">
          <button>Bergabung Sekarang</button>
        </a>
        
    </div>    
    </div> -->
    <!-- akhir dari popup -->

<!--     <div class="kefu">
        <a  href="https://chat.whatsapp.com/FeNGpmyUePxJTEFpXkX4QV">  <img style="width: 65px" src="<?php// echo base_url();?>assets/front/images/icon_cs_new.png"> <span style="color:#fff" >WAGroup</span> </a>
    </div>
 -->
  
