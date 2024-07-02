<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
#linear {background-image: linear-gradient(to bottom, #BF953F, #FCF6BA); }
</style>
<section class="header__container container" style="padding-top: 80px;">
  <div class="border-light rounded-8 px-20 py-40 mt-50" style="background:#000044">
      <h6 class="text-30 fw-500 mb-30" style="color: #fff;font-size: 14px"><i class="fa fa-bank"> Data Bank Anda</i></h6>

      <div class="row y-gap-10">

        <form method="POST" action="<?php echo base_url();?>pages/updateBank" >


        <div class="col-12">
          <div class="d-flex justify-between border-top-light border-bottom-light pt-10">
            <div class="text-15 lh-16" style="font-family: tahoma;color: #fff">Nama Pengguna Bank</div>
            <div class="text-15 lh-16 fw-500 text-blue-1"><input style="color: gold;" type="text" name="holder_name"  value="<?= $usr['holder_name'];?>"  required placeholder="Masukan Nama Pemilik Bank" >  </div>
          </div>
        </div>

        <div class="col-12">
          <div class="d-flex justify-between border-top-light border-bottom-light pt-10">
            <div class="text-15 lh-16" style="font-family: tahoma;color: #fff">My Bank</div>
            <div class="text-15 lh-16 fw-500 text-blue-1"><input style="color: gold;" type="text"  name="bank" value="<?= $usr['bank'];?>"   required  placeholder="Masukan Nama Bank" >  </div>
          </div>
        </div>

        <div class="col-12">
          <div class="d-flex justify-between border-top-light border-bottom-light pt-10">
            <div class="text-15 lh-16" style="font-family: tahoma;color: #fff">Account Number</div>
            <div class="text-15 lh-16 fw-500 text-blue-1"><input style="color: gold;" type="tel" name="account_number" value="<?= $usr['account_number'];?>" placeholder="Masukan Nomor Rekening" >  </div>
          </div>
        </div>

         <input type="hidden" name="id" value="<?= $usr['id'];?>">
        <div class="col-12">
         <button style="width: 100%;background: #6495ED;" type="submit" name="submit" class="button -md -dark-1 text-white mt-30 md:mt-20"><i class="fa fa-save"> Simpan Data</i></a>
         <!-- <a href="#" class="button -md -blue-1 bg-dark-1 text-white mt-30 md:mt-20">Investasikan Sekarang</a> -->
        
       </div>

     </form>

     </div>
   </div>

</section>