  <section class="section-bg layout-pt-lg layout-pb-lg" style="max-width:460px;width:100%;margin:0 auto;margin-top: 40px;">
  
  <div class="container">
    <!-- <h4 class="text-white text-center">Pusat Investasi</h4> -->
   <!--  <div class="border-type-1 rounded-8 px-20 py-35 mt-1" style="background: #fff;">
      <div class="row">


        <div class="col-md-12 ">
          <div class="text-15 lh-12">Informasi Deposit</div>
          <div class="text-15 lh-12 fw-500 text-blue-1 mt-10">Minimal deposit adalah 30.000 sampai dengan maksimal deposit 20.000.000</div>
        </div>



      </div>
    </div> -->


    <div class="border-light rounded-8 px-20 py-0 mt-3" style="background:#fff">
      <div style="background: #069d08;border-top-right-radius: 8px;padding: 0px 12px;color: #fff;margin-bottom: 15px;width: 200px;position: absolute;right: 14px;">
         <p style="color: #fff;">Total Bonus : <?= format_rupiah($totalBonus);?> </p>
        </div>
      
      <h4 class="text-20 fw-500 mb-30" style="margin-top:40px">Silakan Pilih Paket Anda</h4>
     
      <div class="row y-gap-10">
        <form action="<?php echo base_url();?>invest/doInvest" method="POST" >



        <div class="col-12">
          <div class="d-flex justify-between border-top-light border-bottom-light pt-10">
            <div class="text-15 lh-16">Pilihan Pendapatan Harian</div>
            <div class="text-15 lh-16 fw-500 text-blue-1">
            <select name="package_id">
           <?php 
              foreach ($depo_package as $row  ) {
            echo"
            <option value='".$row->id_package."'>Paket ".$row->amount." - Profit  ".$row->comission."</option>";
              }
            ?>
  
            </select>  
            </div>
          </div>
        </div>

        
         <div class="col-12">
          <button type="submit" style="margin-top: 20px;width: 100%;border-radius: 30px;margin-bottom: 20px;" class="button -md -blue-1 bg-blue-1 text-white">Lakukan Sekarang</button>
          <!-- <a href="#" class="button -md -blue-1 bg-dark-1 text-white mt-30 md:mt-20">Investasikan Sekarang</a> -->
         
        </div>

      </form>

     </div>
   </div>

   


 </div>
</section>

