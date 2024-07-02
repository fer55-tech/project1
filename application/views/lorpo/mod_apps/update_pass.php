  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
#linear {background-image: linear-gradient(to bottom, #BF953F, #FCF6BA); }
</style>
  <section class="header__container container" style="padding-top: 120px;">
  <div data-anim-wrap class="container">
  <div class="border-light rounded-8 px-20 py-40 mt-50" style="background:#000044">
      <h4 class="text-20 fw-500 mb-30" style="color: gold"><i class="fa fa-edit"> Ubah Password</i></h4>

      <div class="row y-gap-10">

        <form method="POST" action="<?php echo base_url();?>pages/updatePass" >
        <div class="col-12">
          <div class="d-flex justify-between border-top-light border-bottom-light pt-10">
            <div class="text-15 lh-16" style="color: #fff">Password Baru</div>
            <div class="text-15 lh-16 fw-500 text-blue-1"><input style="color: gold;" type="text" name=""  placeholder="Masukan Password" >  </div>
          </div>
        </div>

        <div class="col-12">
          <div class="d-flex justify-between border-top-light border-bottom-light pt-10">
            <div class="text-15 lh-16" style="color: #fff">Konfirmasi Password</div>
            <div class="text-15 lh-16 fw-500 text-blue-1"><input style="color: gold;" type="text" name=""  placeholder="Konfirmasi Password" >  </div>
          </div>
        </div>

     <input type="hidden" name="id" value="<?= $usr['id'];?>">

        <div class="col-12">
         <button style="width:100%" type="submit" name="submit" class="button -md -light-1 bg-dark-1 text-white mt-20"><i class="fa fa-save"> Simpan</i></button>
         <!-- <a href="#" class="button -md -blue-1 bg-dark-1 text-white mt-30 md:mt-20">Investasikan Sekarang</a> -->
        
       </div>

     </form>

     </div>
   </div>
 </div>
</section>
