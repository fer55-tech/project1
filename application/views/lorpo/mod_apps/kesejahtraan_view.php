<section class="section-bg layout-pt-lg layout-pb-lg" style="max-width:460px;width:100%;margin:0 auto;margin-top: 40px;">
  
  <div class="container">
   
    <div class="border-type-1 rounded-8 px-20 py-35 mt-1" style="background: #fff;">
      <div class="row">


        <div class="col-auto ">
          <div class="text-20 lh-12 fw-500"><?= format_rupiah($totalBonus);?></div>
          <div class="text-15 lh-12 fw-500 text-blue-1 mt-10">Total Pendapatan</div>
        </div>


        <div class="col-auto" style="flex: 1 0 auto" >
          <div class="text-12 lh-12 fw-500" style="text-align: right;"><a style="background: red;padding: 5px 10px;border-radius: 15px;"  href="<?php echo base_url();?>pages/withdrawal">Tarik Uang</a></div>
          <div class="text-12 lh-12 fw-500 text-blue-1 mt-20" style="text-align: right;"><a style="border: 1px #04146f solid;padding: 5px 10px;border-radius: 15px;"  href="<?php echo base_url();?>pages/history_wd"> Riwayat Penarikan</a></div>
        </div>



      </div>
    </div>


    <div class="border-type-1 rounded-8 px-20  mt-2" style="background: #fff;padding-top: 5px;padding-bottom: 30px;">
      <div class="row">


        <div class="col-md-12 ">
     
          <div class="text-15 lh-12 fw-500 text-blue-1 mt-10">Keuntungan yang anda dapatkan di total pendapatkan bisa anda lakukan penarikan. </div>
        </div>

      </div>
    </div>



 </div>
</section>




<section class="section-bg layout-pt-lg layout-pb-lg" style="max-width:460px;width:100%;margin:0 auto;margin-top: -114px;padding-bottom: 0px;">


  <div class="container">

    <div class="  px-20 py-35 mt-1" style="background: #efefef;border-radius: 3px;">
      <div class="row">


        <div class="col-md-12 ">
          <div class="text-15 lh-12" style="background: red;padding: 5px 10px;border-radius: 5px;color: #fff;">Ini adalah hadiah anda</div>

          <table style="width:100%;">
            <tr>
              <td style="line-height: 1;text-align: left;font-size: 20px;">0 Rp</td>
              
              <td rowspan="3" style="line-height: 1;text-align: center;"> <img style="width: 110px" src="<?php echo base_url();?>assets/front/images/amplop.png"> </td>
              
            </tr>

            <tr>
              <td style="line-height: 1;text-align: left;font-size: 10px;">Jumlah total pendapatan</td>
              
                           
            </tr>
            <tr>
              <td style="line-height: 1;text-align: left;font-size: 10px;padding-top: 15px;"><a style="background: #ff0606;padding: 5px 10px;border-radius: 15px;color: #fff;"  href="#">Klik Untuk Mendapatkan</a></td>
              
                           
            </tr>
          </table>

          <div class="text-15 lh-12 fw-500 text-blue-1 mt-15">Silakan klaim untuk membuka aplop merah karena ini adalah bonus yang kami berikan untuk anda, hadiah yang kami berikan mulai dari 20.000 - 10.000.000 Rupiah dan jadilah agen agar amplop merah anda dapatkan setiap hari</div>

          
    
       

        </div>



      </div>
    </div>


  </div>
</section>







<script>
  function hanyaAngka(event) {
    var angka = (event.which) ? event.which : event.keyCode
    if (angka != 46 && angka > 31 && (angka < 48 || angka > 57))
      return false;
    return true;
  }
</script>
