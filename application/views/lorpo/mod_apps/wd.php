<style>
#linear {background-image: linear-gradient(to bottom, #BF953F, #FCF6BA); }
</style>
<section class="header__container container" style="padding-top: 150px;">
 
  <div class="row">
    <div class="col-12 col-md-6">
    <h4 class="text-dark-1 text-left" style="font-family: helvetica;color: gold">Silakan isi penarikan</h4>
    <div class="border-light rounded-8 px-20 py-40" style="background:#000044">
      <div class="row y-gap-10" style="margin-top: -30px;">

        <form action="<?php echo base_url();?>pages/doWithdrawal" method="POST" >
        <div class="col-12">
          <div class="d-flex justify-between pt-10">
            <div class="text-15 lh-16" style="color: #fff;font-family: arial;font-size: 10px">Total Bonus</div>
            <div class="text-15 lh-16 fw-500" style="color: #fff;font-family: arial;font-size: 10px"><?= format_rupiah($totalBonus);?> </div>
          </div>
        </div>

        <div class="col-12">
          <div class="d-flex justify-between border-top-light border-bottom-light pt-10">
            <div class="text-15 lh-16" style="color: #fff;font-family: arial;font-size: 10px">Isi Penarikan</div>
            <div class="text-15 lh-16 fw-500 text-blue-1" ><input style="color: #fff;" type="tel" name="amount" placeholder="Isi Penarikan..."  onkeypress="return hanyaAngka(event)"  required> </div>
          </div>
        </div>

        <div class="col-12">
         <button style="width: 100%;" type="submit" class="button -md -light-1 bg-dark-1 text-white mt-20">Tarik Uang Sekarang</button>  
        </div>
        </form>

      </div>
    </div>
    </div>
    
  <div class="col-12 col-md-6">
   <h4 class="text-dark-1 text-left mt-30" style="font-family: helvetica;color: gold">Info Penarikan</h4><hr>

   <div class="text-15 lh-12 fw-500 text-blue-1 mt-10">
    <p style="font-family: arial;color: gold;font-size: 12px">1. Penarikan berlangsung 1 x 24 jam dengan nominal penarikan 30.000 fee 10% sesuai potongan &nbsp;&nbsp;&nbsp;&nbsp;bank</p>
   </div>

   <div class="text-15 lh-12 fw-500 text-blue-1 mt-10">
    <p style="font-family: arial;color: gold;font-size: 12px">2. Pastikan  isi data bank anda dengan benar sebelum melakukan penarikan</p>
    </div>

   <div class="text-15 lh-12 fw-500 text-blue-1 mt-10">
    <p style="font-family: arial;color: gold;font-size: 12px">3. Pengajuan penarikan akan di tinjau 5 menit sampai dengan 2 jam sesuai sistem yang berlaku</p>
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
