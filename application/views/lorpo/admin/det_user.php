<?php 
if ($this->session->level_login!='admin'){
  redirect(base_url());
}else{
  ?>
  <!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?=$title?></title>
    <meta name="author" content="jago dogge">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/backend/images/favicon.png">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Style -->
    <!-- BEGIN GLOBAL MANDATORY STYLES -->

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/admin/css/dashlite.css?ver=1.4.0">
    <link id="skin-default" rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/admin/css/theme.css?ver=1.4.0">
  </head>

  <body class="nk-body npc-crypto has-sidebar has-sidebar-fat ui-clean ">
    <div class="nk-app-root">
      <!-- main @s -->
      <div class="nk-main ">
        <?php include 'menu.php' ;?>
        <!-- wrap @s -->
        <div class="nk-wrap ">
          <?php include 'header.php' ;?>  
          <!-- content @s -->
          <div class="nk-content nk-content-fluid">
            <div class="container-xl wide-lg">
              <div class="nk-content-body">
               <div class="nk-block-head-content">
                 <div class="nk-block-head-sub"><a class="back-to" href="<?php echo base_url();?>home/dashboard"><em class="icon ni ni-arrow-left"></em><span>Dashboard</span></a></div>
                 <h5 class="nk-block-title fw-normal">Detail Users</h5>

               </div>
               <div class="nk-block nk-block-lg">
                 <div class="card card-bordered card-preview" style="margin-top: 20px" >
                  <div class="card-inner" style="padding-bottom: 40px" >
                    <div class="preview-block">    
                      <?php 
                      $usr = $this->model_app->view_where('users',array('username' => $username ))->row_array();
                      if ($status_depo=='Active'){ $status = '<span class="tb-status text-success">Active</span>'; 
                    }else if($status_depo =='Pending'){ $status = '<span class="tb-status text-warning">Pending</span>';
                  }else{
                   $status = '<span class="tb-status text-danger">Not yet deposited</span>';
                 }?>

                 <table class="table table-striped">

                  <tbody>
                    <tr>
                      <th scope="row">ID</th>
                      <td><?= $username;?></td>

                    </tr>
                    <tr>
                      <th scope="row">Name</th>
                      <td><?= $usr['full_name'];?></td>

                    </tr>
                    <tr>
                      <th scope="row">Phone</th>
                      <td><?= $usr['phone'];?></td>

                    </tr>
                    <tr>
                      <th scope="row">Paket</th>
                      <td><?= $package_name;?></td>

                    </tr>
                    <tr>
                      <th scope="row">Deposite Amount</th>
                      <td>IDR <?= format_rupiah($amount + $uniq_code);?></td>
                    </tr>
                    <tr>
                      <th scope="row">Status</th>
                      <td>
                        <?= $status;?>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">Proof of transfer</th>
                      <td>

                        <div class="row">
                          <div class="col-lg-4">

                            <img src="<?php echo base_url();?>assets/backend/file_verification/<?= $file;?>" class="card-img-top" alt="">


                          </div>


                        </div>
                      </td>           
                    </tr>
                  </tbody>
                </table>

                <a href="" data-toggle="modal" data-target="#modalConfirm" style="margin-left:15px;margin-top: 15px" class="btn btn-primary">Confirm</a>
                <button type="reset" onclick="self.history.back()" style="margin-left:15px;margin-top: 15px;" class="btn btn-danger">Cancel</button>

                <a href="" data-toggle="modal" data-target="#modalBanned" style="margin-left:15px;margin-top: 15px" class="btn btn-warning">Banned</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include 'footer.php' ;?>      



</div>
<!-- wrap @e -->
</div>
</div>
<script src="<?php echo base_url(); ?>assets/backend/admin/js/bundle.js?ver=1.4.0"></script>
<script src="<?php echo base_url(); ?>assets/backend/admin/js/scripts.js?ver=1.4.0"></script>
<script src="<?php echo base_url(); ?>assets/backend/admin/js/charts/chart-crypto.js?ver=1.4.0"></script>
<!-- Modal Zoom -->
<div class="modal fade zoom" tabindex="-1" id="modalConfirm">
  <div class="modal-dialog modal-lg" role="document">
   <?php echo form_open('home/user_verification'); ?>
   <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title">Confirm</h5>
      <a href="#" class="close" data-dismiss="modal" aria-label="Close">
        <em class="icon ni ni-cross"></em>
      </a>
    </div>
    <div class="modal-body">
      <p>Are you sure to confirm this data..?</p>
      <input type="hidden" name="id" value="<?= $id;?>" > 
      <input type="hidden" name="id_package" value="<?= $id_package;?>" > 
      <input type="hidden" name="username" value="<?= $username;?>" > 
    </div>
    <div class="modal-footer bg-dark ">
      <button type="submit" style="float: right;" class="btn btn-primary ">Confirm</button>
    </div>
  </div>
</form>
</div>
</div>
<div class="modal fade zoom" tabindex="-1" id="modalBanned">
  <div class="modal-dialog modal-lg" role="document">
   <?php echo form_open('home/user_banned'); ?>
   <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title">Banned</h5>
      <a href="#" class="close" data-dismiss="modal" aria-label="Close">
        <em class="icon ni ni-cross"></em>
      </a>
    </div>
    <div class="modal-body">
      <p>Are you sure banned this account..?</p>
      <input type="hidden" name="id_user" value="<?= $id;?>" > 
    </div>
    <div class="modal-footer bg-dark ">
      <button type="submit" style="float: right;" class="btn btn-primary ">Banned</button>
    </div>
  </div>
</form>
</div>
</div>
</body>
</html>
<?php } ?>
