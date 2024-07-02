<?php 

 $today = date("Y-m-d");
    //if($this->CI->cekProfitArr() != NULL ){
     //if($today >= $this->CI->cekProfitArr()['date']   ){
   
           $this->CI->insertProfit1();      
     
    //} 

 // }
 

?>


<section class="section-bg layout-pt-lg layout-pb-lg" style="max-width:460px;width:100%;margin:0 auto;margin-top: 40px;">
  
  <div class="container">
   
    <div class="rounded-8 px-0 py-0 mt-0" style="background: #fff;">
      <div class="row">

        <h4 style="color:#757474">Selamat Datang Di Monera - Q</h4>
        <div class="col-auto ">
          <div class="text-20 lh-12 fw-500"><?= $usr['username'];?></div>
          <div class="text-15 lh-12 fw-500 text-blue-1 mt-10"><?= $usr['phone'];?></div>

          
        </div>


        <div class="col-auto" style="flex: 1 0 auto" >


          <div class="text-12 lh-12 fw-500 text-blue-1" style="float: right; margin-top: 7px;cursor: pointer;">
            <a style="border: 1px #04146f solid;padding: 5px 10px;border-radius: 15px;"  onclick="myFunction()" onmouseout="outFunc()" id="myTooltip"> Salin Tautan Promosi</a>
          </div>
        </div>

        <input style="width: 100%;margin-left: 0px;margin-bottom: 0px;border:0px #cc6911 solid;border-radius:0px;padding-left: 15px;background: transparent;font-size: 11px" type="text" id="myInput" readonly value="<?php echo base_url();?>register/ref/<?= $this->session->reff_code;?>"  />



      </div>
    </div>



 </div>
</section>


<section class="section-bg layout-pt-lg layout-pb-lg " style="max-width:460px;width:100%;margin:0 auto;margin-top: -114px;padding-bottom: 0px;">


  <div class="container">

    <div class="  px-20 py-35 mt-1 border-type-1" style="background: #efefef;border-radius: 3px;">
      <div class="row">


        <div class="col-md-12 ">
          <div class="text-15 lh-12 " style="width: 125px;border-radius: 5px;color: #0f0d0d;">Total Pendapatan</div>

          <table style="width:100%;">
            <tr>
              <td  style="line-height: 1;text-align: left;font-size: 30px;"><?= format_rupiah($totalBonus) ;?></td>
              <td  style="line-height: 1;text-align: right;font-size: 30px;">
                <?php if ($usr['status_agen'] != "") { 

                  if ($usr['agen'] == "Magang" ) {
                    $img = 'magang.png';
                  }else if ($usr['agen'] == "Junior" ) {
                    $img = 'junior.png';
                  }else if ($usr['agen'] == "Senior" ) {
                    $img = 'senior.png';
                  }else{
                    $img = '-';
                  }

                  ?>

                  <img style="border-radius: 10px" src="<?php echo base_url();?>assets/front/images/<?= $img;?>">
                  
               <?php } ?>
              </td>
            
            </tr>

            <tr>
              <td style="line-height: 1;text-align: left;font-size: 18px;padding-top: 13px;"><?= format_rupiah($sumDepo['amount']) ;?></td>
              <td style="line-height: 1;text-align: right;font-size: 18px;padding-top: 13px;"><?= format_rupiah($bonusRef) ;?></td>
                         
            </tr>
            <tr>
              <td style="line-height: 1;text-align: left;font-size: 12px;">Total Investasi</td>
              <td style="line-height: 1;text-align: right;font-size: 12px;">Total Bonus TIM </td>
                         
            </tr>
          </table>
    

        </div>


      </div>
    </div>

  </div>
</section>




<section class="section-bg layout-pt-lg layout-pb-lg " style="max-width:460px;width:100%;margin:0 auto;margin-top: -54px;padding-bottom: 0px;">


  <div class="container">

    <div class="  px-20 py-0 mt-1 " style="background: #efefef;border-radius: 3px;">
      <div class="row">

        <h4 style="margin-left: -17px;" >Informasi Mitra</h4>
        <div style="background: #053c6d;width: 100%;padding-top: 12px;padding-bottom: 12px;margin-bottom: 12px;color: #fff;border-radius: 3px;">

        <div class="col-md-12 ">
          <div class="text-15 lh-12 " style="width: 100%;border-radius: 5px;color: #fff;">Agen Level Satu 20%</div>

          <table style="width:100%;">
            

            <tr>
              <td style="line-height: 1;text-align: left;font-size: 18px;padding-top: 13px;"><?= format_rupiah($cekDepo1);?></td>
              <td style="line-height: 1;text-align: right;font-size: 18px;padding-top: 13px;"><?= format_rupiah($ref1A) ;?></td>
                         
            </tr>
            <tr>
              <td style="line-height: 1;text-align: left;font-size: 12px;">Isi Ulang</td>
              <td style="line-height: 1;text-align: right;font-size: 12px;">Komisi Diperoleh </td>
                         
            </tr>
          </table>
    

        </div>


        </div>

        <div style="background: #053c6d;width: 100%;padding-top: 12px;padding-bottom: 12px;margin-bottom: 12px;color: #fff;border-radius: 3px;">

        <div class="col-md-12 ">
          <div class="text-15 lh-12 " style="width: 100%;border-radius: 5px;color: #fff;">Agen Level 2 4%</div>

          <table style="width:100%;">
            

            <tr>
              <td style="line-height: 1;text-align: left;font-size: 18px;padding-top: 13px;"><?= format_rupiah($cekDepo2);?></td>
              <td style="line-height: 1;text-align: right;font-size: 18px;padding-top: 13px;"><?= format_rupiah($ref2A) ;?></td>
                         
            </tr>
            <tr>
              <td style="line-height: 1;text-align: left;font-size: 12px;">Isi Ulang</td>
              <td style="line-height: 1;text-align: right;font-size: 12px;">Komisi Diperoleh </td>
                         
            </tr>
          </table>
        

        </div>

        
        </div>

        <div style="background: #053c6d;width: 100%;padding-top: 12px;padding-bottom: 12px;margin-bottom: 12px;color: #fff;border-radius: 3px;">

        <div class="col-md-12 ">
          <div class="text-15 lh-12 " style="width: 100%;border-radius: 5px;color: #fff;">Agen Level 3 1%</div>

          <table style="width:100%;">
            

            <tr>
              <td style="line-height: 1;text-align: left;font-size: 18px;padding-top: 13px;"><?= format_rupiah($cekDepo3);?></td>
              <td style="line-height: 1;text-align: right;font-size: 18px;padding-top: 13px;"><?= format_rupiah($ref3A) ;?></td>
                         
            </tr>
            <tr>
              <td style="line-height: 1;text-align: left;font-size: 12px;">Isi Ulang</td>
              <td style="line-height: 1;text-align: right;font-size: 12px;">Komisi Diperoleh </td>
                         
            </tr>
          </table>
        

        </div>

        
        </div>

        <div style="background: #053c6d;width: 100%;padding-top: 12px;padding-bottom: 12px;margin-bottom: 12px;color: #fff;border-radius: 3px;">

        <div class="col-md-12 ">
          <div class="text-15 lh-12 " style="width: 100%;border-radius: 5px;color: #fff;">Hitungan Tim</div>

          <table style="width:100%;">
            

            <tr>
              <td style="line-height: 1;text-align: left;font-size: 18px;padding-top: 13px;"><?= format_rupiah($cekDepo1 + $cekDepo2 +$cekDepo3 );?></td>
              <td style="line-height: 1;text-align: right;font-size: 18px;padding-top: 13px;"><?= format_rupiah($bonusRef) ;?></td>
                         
            </tr>
            <tr>
              <td style="line-height: 1;text-align: left;font-size: 12px;">Total Pengisian Ulang TIM</td>
              <td style="line-height: 1;text-align: right;font-size: 12px;">Total Komisi TIM </td>
                         
            </tr>
          </table>
        

        </div>

        
        </div>

      
      </div>
    </div>

  </div>

</section>



<section class="section-bg layout-pt-lg layout-pb-lg " style="max-width:460px;width:100%;margin:0 auto;margin-top: -54px;padding-bottom: 0px;">


  <div class="container">

    <div class="  px-20 py-0 mt-1 " style="border-radius: 3px;">
      <div class="row">

        <h4 style="margin-left: -17px;margin-top: 20px;" >Pusat Pribadi</h4>
        <div style="background: #053c6d;width: 100%;padding-top: 12px;padding-bottom: 12px;margin-bottom: 5px;color: #fff;border-radius: 15px;">

        <div class="col-md-12 ">
          <a href="<?php echo base_url();?>pages/updateBank">
          <div class="text-15 lh-12 " style="width: 100%;border-radius: 5px;color: #fff;">Akun Penarikan</div>
          </a>
        </div>

        </div>

        <div style="background: #053c6d;width: 100%;padding-top: 12px;padding-bottom: 12px;margin-bottom: 5px;color: #fff;border-radius: 15px;">

        <div class="col-md-12 ">
          <a href="<?php echo base_url();?>pages/network">
          <div class="text-15 lh-12 " style="width: 100%;border-radius: 5px;color: #fff;">Anggota TIM</div>
          </a>
        </div>

        </div>

        <div style="background: #053c6d;width: 100%;padding-top: 12px;padding-bottom: 12px;margin-bottom: 5px;color: #fff;border-radius: 15px;">

        <div class="col-md-12 ">
            <a href="<?php echo base_url();?>pages/mining_profit">
          <div class="text-15 lh-12 " style="width: 100%;border-radius: 5px;color: #fff;">Pendapatan Harian</div>
        </a>
        </div>

        </div>

        <div style="background: #053c6d;width: 100%;padding-top: 12px;padding-bottom: 12px;margin-bottom: 5px;color: #fff;border-radius: 15px;">

        <div class="col-md-12 ">
           <a href="<?php echo base_url();?>pages/updatePass">
          <div class="text-15 lh-12 " style="width: 100%;border-radius: 5px;color: #fff;">Ubah Kata Sandi</div>
        </a>
        </div>

        </div>

        <div style="background: #053c6d;width: 100%;padding-top: 12px;padding-bottom: 12px;margin-bottom: 5px;color: #fff;border-radius: 15px;">

        <div class="col-md-12 ">
          <div class="text-15 lh-12 " style="width: 100%;border-radius: 5px;color: #fff;">Unduh Aplikasi</div>
        </div>

        </div>


  

        <a style="background: #ff0606;padding: 5px 10px;border-radius: 15px;color: #fff;width: 100%;margin-bottom:15px;text-align: center;margin-top: 20px"  href="<?php echo base_url();?>home/logout">Logout Akun</a>

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


<script>
  function myFunction() {
    var copyText = document.getElementById("myInput");
    copyText.select();
    copyText.setSelectionRange(0, 99999);
    document.execCommand("Copy");
    
    var tooltip = document.getElementById("myTooltip");
    tooltip.innerHTML = "Disalin ";
  }

  function outFunc() {
    var tooltip = document.getElementById("myTooltip");
    tooltip.innerHTML = "Salin Tautan Promosi";
  }
</script>


