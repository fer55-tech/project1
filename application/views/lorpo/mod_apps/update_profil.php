<!-- header start -->
<div class="header-area" style="background-image: url(<?php echo base_url();?>assets/front/img/bg/head.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-sm-4 col-3">
        <a class="menu-back-page" href="<?php echo base_url();?>pages/account_settings">
          <i class="fa fa-angle-left"></i>
        </a>
      </div>
      <div class="col-sm-4 col-6 text-center">
        <div class="page-name">Update Profil</div>
      </div>

    </div>
  </div>
</div>
<!-- header end -->

<!-- main page content -->
<div class="main-container container">



  <!-- products -->
  <div class="row mb-2">
    <div class="col-12 col-md-6 ">
      <div class="card mb-3" style="margin-top: 65px;">
          <form method="POST" action="<?php echo base_url();?>pages/updateProfil" >
        <div class="card-body">
          <div class="col-12">
            <div class="row ">
              <label>Full Name</label>
            <input style="font-size: 18px;background: transparent;line-height: 24px;height: 26px;border: 0;border-bottom: 2px #000 solid;text-align: left;width: 100%;" type="text" name="full_name" value="<?= $usr['full_name'];?>"   required >

          </div>
        </div>

          <div class="col-12">
            <div class="row ">
               <label style="margin-top:15px" >Phone</label>
            <input style="font-size: 18px;background: transparent;line-height: 24px;height: 26px;border: 0;border-bottom: 2px #000 solid;text-align: left;width: 100%;" type="text" name="phone" value="<?= $usr['phone'];?>"   required >

          </div>
        </div>
        <input type="hidden" name="id" value="<?= $usr['id'];?>">


      </div>

      <div class="row mb-4">
          <div class="col-12 ">
              <button type="submit" name="submit" class="btn btn-default  shadow-sm  text-white " style="background: #000;padding: 0px;font: #fff;margin-left: 20px;padding: 0px 15px;" >
                 Update
              </button>
          </div>
      </div>
    </form>
    </div>

  </div>

</div>
<div class="clearfix"></div>




