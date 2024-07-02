<?php 

if ($this->session->level_login!='admin'){

    redirect(base_url());

}else{

?>

<?php

$depo = $this->model_app->view_where('deposit',  array('uname' => $username ))->row_array();

if($depo['id_package'] == 1){
  $package_name = 'Level 1';
  $amount = 10000000;
}else if($depo['id_package'] == 2){
  $package_name = 'Level 1';
 
}
else if($depo['id_package'] == 3){
  $package_name = 'Level 3';
  
}
else if($depo['id_package'] == 4){
  $package_name = 'Level 4';
  
}
else if($depo['id_package'] == 5){
  $package_name = 'Level 5';
 
}else{
  $package_name = 'Level 6';
  
}
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

                               <h5 class="nk-block-title fw-normal">Detail Withdraw</h5>

                               

                           </div>


                            <div class="nk-block nk-block-lg">



                               <div class="card card-bordered card-preview" style="margin-top: 20px" >

                          <div class="card-inner" style="padding-bottom: 40px" >

                              <div class="preview-block">    



                              <?php 



                              $usr_wd = $this->model_app->view_where('users',array('username' => $username ))->row_array();



                               if ($status_wd =='Success'){ $status = '<span class="tb-status text-success">Success</span>'; 

                              }else if($status_wd =='Pending'){ $status = '<span class="tb-status text-warning">Pending</span>';

                               }else{

                                 $status = '<span class="tb-status text-danger">Not yet deposited</span>';

                               }?>



                              

                             <table class="table table-striped">

                                     

                                      <tbody>

                                        <tr>

                                              <th scope="row">Date</th>

                                              <td><?= $date;?></td>

                                              

                                          </tr>

                                          <tr>

                                              <th scope="row">ID</th>

                                              <td><?= $username;?></td>

                                              

                                          </tr>


                                          <tr>

                                              <th scope="row">Level</th>

                                              <td><?= $package_name;?></td>

                                              

                                          </tr>

                                          <tr>

                                              <th scope="row">Name</th>

                                              <td><?= $usr_wd['full_name']; ?></td>

                                             

                                          </tr>

                                          <tr>

                                              <th scope="row">Bank</th>

                                              <td><?= $usr_wd['bank'];?><td>

                                             

                                          </tr>

                                           <tr>

                                              <th scope="row">Bank Account</th>

                                              <td><?= $usr_wd['account_number'];?><td>

                                             

                                          </tr>

                                          <tr>

                                              <th scope="row">Wd Amount</th>

                                              <td>IDR <?= format_rupiah($res_amount);?></td>

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

                                                             

                                                                  <img src="<?php echo base_url();?>assets/backend/file_wd/<?= $file;?>" class="card-img-top" alt="">

                                                                  

                                                             

                                                          </div>

                                                    

                                               

                                                </div>

                                              </td>           

                                          </tr>

                                      </tbody>

                                  </table>



                                  



                                  <a href="" data-toggle="modal" data-target="#modalConfirm" style="margin-left:15px;margin-top: 15px" class="btn btn-primary">Confirm</a>



                                  <button type="reset" onclick="self.history.back()" style="margin-left:15px;margin-top: 15px;" class="btn btn-danger">Cancel</button>

                                

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



            <?php echo form_open_multipart('home/det_wd_true');?>

                                 

            <div class="modal-content">

                <div class="modal-header">

                    <h5 class="modal-title">Confirm</h5>

                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">

                        <em class="icon ni ni-cross"></em>

                    </a>

                </div>

                <div class="modal-body">

                



                    <label >Notes</label>

                    <div class="input-group mb-3  bg-dark ">  

                        <textarea class="form-control" rows="6" required ></textarea>  

                    </div>



                    <label >File Proof Of Transfer</label>

                    <div class="input-group  bg-dark ">  

                        <input  class="form-control" id="file" type="file" name="file_evidence">

                    </div>

                    <span style="font-size: 10px" >* please upload the proof of transfer </span>


                    <input type="hidden" name="id_wd" value="<?= $id_wd ;?>" >



      

                </div>

                <div class="modal-footer bg-dark ">

                    <button type="submit" name="submit" style="float: right;" class="btn btn-primary ">Confirm</button>

                </div>

            </div>

            </form>

        </div>

    </div>


  </body>

</html>

<?php } ?>

