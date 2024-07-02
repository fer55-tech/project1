<?php 
if ($this->session->level_login!='admin'){
    redirect(base_url());
}else{
?>


<?php
$usr = $this->model_app->view_where('users',array('username'=>$username))->row_array();?>
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
                               <h5 class="nk-block-title fw-normal">Detail Users Mission</h5>
                               
                           </div>


                            <div class="nk-block nk-block-lg">

                               <div class="card card-bordered card-preview" style="margin-top: 20px" >
                          <div class="card-inner" style="padding-bottom: 40px" >
                              <div class="preview-block">    

                              <?php 

                            

                               if ($status=='Done'){ $status = '<span class="tb-status text-success">Done</span>'; 
                              }else if($status=='Pending'){ $status = '<span class="tb-status text-warning">Pending</span>';
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
                                              <th scope="row">Name</th>
                                              <td><?= $usr['full_name'];?></td>
                                             
                                          </tr>
                                          <tr>
                                              <th scope="row">Comission</th>
                                              <td>+ IDR <?= format_rupiah($comission);?></td>
                                          </tr>
                                          <tr>
                                              <th scope="row">Desc</th>
                                              <td><?= $mission_title;?></td>
                                          </tr>

                                          <tr>
                                              <th scope="row">Status</th>
                                              <td>
                                                <?= $status;?>


                                                
                                              </td>
                                          </tr>

                                          <tr>
                                              <th scope="row">File capture form fb wall</th>
                                              <td>
                                              
                                                 
                                                      <div class="row">
                                                          <div class="col-lg-4">
                                                             
                                                                  <img src="<?php echo base_url();?>assets/backend/file_mission_user/<?= $file;?>" class="card-img-top" alt="">
                                                                  
                                                             
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
           <?php echo form_open('home/mission_verify'); ?>
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Confirm</h5>
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                        <em class="icon ni ni-cross"></em>
                    </a>
                </div>
                <div class="modal-body">
                    <p>Are you sure to confirm this data..?</p>

                    
                    <input type="hidden" name="id_user_mission" value="<?= $id_user_mission;?>" > 
                   
                    
                </div>
                <div class="modal-footer bg-dark ">
                    <button type="submit" style="float: right;" class="btn btn-primary ">Confirm</button>
                </div>
            </div>
            </form>
        </div>
    </div>



    
  </body>
</html>
<?php } ?>
