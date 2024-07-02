
<!-- header start -->
<div class="header-area" style="background-image: url(<?php echo base_url();?>assets/front/img/bg/head.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-3">
                <a class="menu-back-page" href="<?php echo base_url();?>pages/profil">
                    <i class="fa fa-angle-left"></i>
                </a>
            </div>
            <div class="col-sm-4 col-6 text-center">
                <div class="page-name">My Team</div>
            </div>
           
        </div>

    </div>
</div>
<!-- header end -->


  <!-- main page content -->
  <div class="main-container container" style="padding-top:80px;padding-bottom: 40px;">


    <div class="row">
        <div class="card " style="box-shadow: 0 0px 0px rgba(0, 0, 0, 0.1);-webkit-box-shadow: 0 0px 0px rgba(0, 0, 0, 0.1);margin: 0px 12px; width: 100%;" >
        <img src="<?php echo base_url();?>assets/front/img/bagan_team.jpg">
      </div>
    
    </div>
     
      <div class="row mb-4" style="margin-top:15px">
          <div class="col-12 text-center">
              <h2 class="mb-2"> <?= format_rupiah($ref1 + $ref2);?> IDR</h2>
              <p class="text-muted size-20">Referal Bonus</p>
          </div>
      </div>

      <!-- buttons -->
      <div class="row mb-4" style="text-align: center;">
          <div class="col-12">
              <a     href="#">Your Team : <strong><?= $total_ref1 + $total_ref2 ;?>  (Orang)</strong></a>
          </div>
          <div class="col-12">
              <a    href="#">Team Activated : <strong><?= $cekDepo1 + $cekDepo2 ;?> (Active) </strong></a>
          </div>
      </div>

      <div class="row mb-3 justify-content-center">
         <div class="col-auto text-center">
             <div class="card " style="box-shadow: 0 0px 0px rgba(0, 0, 0, 0.1);-webkit-box-shadow: 0 0px 0px rgba(0, 0, 0, 0.1);" >
                 <div class="card-body p-0">
                     <div class="col-auto">
                        Link Refferal
                     </div>
                        <div class="col">
                           <input style="width: 100%;margin-left: 0px;margin-bottom: 0px;border:0px #cc6911 solid;border-radius:0px;padding-left: 15px;background: transparent;" type="text" id="myInput" readonly value="<?php echo base_url();?>register/ref/<?= $this->session->reff_code;?>"  />
                        </div>
                        
                 </div>
             </div>


                  <a style="line-height: 14px;background: #0f0202;max-width: 85px;padding-top: 11px;height: 37px;margin-top: 14px;color: #fff;"  class="btn btn-default shadow-sm btn-sm w-100 btn-rounded" onclick="myFunction()" onmouseout="outFunc()" id="myTooltip">Salin</a>
             
         </div>
     </div>

    

     
      <div class="clearfix"></div>

      <!-- buttons -->
      <div class="row mb-4 my-2" >
          <div class="col-12">
              <a style="background: #000;color: #fff;padding: 0px;margin-bottom: 5px" href="<?php echo base_url();?>pages/reff_one" class="btn btn-outline-default btn-sm shadow-sm w-100 btn-rounded">Total Team Level A</a>
          </div>
          <div class="col-12">
               <a style="background: #000;color: #fff;padding: 0px;margin-bottom: 5px" href="<?php echo base_url();?>pages/reff_two" class="btn btn-outline-default btn-sm shadow-sm w-100 btn-rounded">Total Team Level B</a>
          </div>
           <div class="col-12">
               <a style="background: #000;color: #fff;padding: 0px;" href="<?php echo base_url();?>pages/reff_three" class="btn btn-outline-default btn-sm shadow-sm w-100 btn-rounded">Total Team Level C</a>
          </div>
      </div>
    
  </div>
  <!-- main page content ends -->



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
      tooltip.innerHTML = "Salin";
    }
  </script>

