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
    
    <link id="skin-default" rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/admin/css/jquery.dataTables.min.css">
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
                               <h5 class="nk-block-title fw-normal">All Mission Pending</h5>
                               
                           </div>


                            <div class="nk-block nk-block-lg">

                               <div class="card card-bordered card-preview" style="margin-top: 20px" >
                          <div class="card-inner" style="padding-bottom: 40px" >
                              <div class="preview-block">     
                                     <table class=" nk-tb-list nk-tb-ulist" id="dataTables" data-auto-responsive="false">
                                         <thead style="line-height:3.65rem" >
                                             <tr class="nk-tb-item nk-tb-head">
                                                 <th class="nk-tb-col nk-tb-col-check">
                                                     <div class="custom-control custom-control-sm custom-checkbox notext">
                                                         <input type="checkbox" class="custom-control-input" id="uid">
                                                         <label class="custom-control-label" for="uid"></label>
                                                     </div>
                                                 </th>
                                                 <th class="nk-tb-col"><span class="sub-text">Date</span></th>
                                                 <th class="nk-tb-col tb-col-mb"><span class="sub-text">ID</span></th>
                                                 <th class="nk-tb-col tb-col-md"><span class="sub-text">Comisision</span></th>
                                                  <th class="nk-tb-col tb-col-md"><span class="sub-text">Desc</span></th>
                                                 <th class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></th>
                                                 <th class="nk-tb-col tb-col-md"><span class="sub-text text-right ">Action</span></th>
                                                
                                             </tr>
                                         </thead>

                                         <tbody>

                                          <?php
                                          foreach ($usr_mission as $row ) {  ?>
                                          
                                             <tr class="nk-tb-item">
                                                 <td class="nk-tb-col nk-tb-col-check">
                                                     <div class="custom-control custom-control-sm custom-checkbox notext">
                                                         <input type="checkbox" class="custom-control-input" id="uid1">
                                                         <label class="custom-control-label" for="uid1"></label>
                                                     </div>
                                                 </td>
                                                 <td class="nk-tb-col">
                                                     <div class="user-card">
                                                         
                                                         <div class="user-info">
                                                             <span class="tb-lead"><?= $row['date_created'];?> <span class="dot dot-success d-md-none ml-1"></span></span>
                                                             
                                                         </div>
                                                     </div>
                                                 </td>
                                                 <td class="nk-tb-col tb-col-mb">
                                                     <span class="tb-lead"><?= $row['username'];?></span>
                                                 </td>
                                                <td class="nk-tb-col tb-col-md">
                                                     <span class="tb-lead ">+ IDR <?= format_rupiah($row['comission']);?></span>
                                                 </td>
                                                
                                                 <td class="nk-tb-col tb-col-md">
                                                     <span class="tb-lead "><?= $row['mission_title'];?></span>
                                                 </td>

                                                  <td class="nk-tb-col tb-col-md">


                                                     <?php
                                                    if ($row['status']=='Done'){ $status = '<span class="tb-status text-success">Done</span>'; 
                                                   }else{ $status = '<span class="tb-status text-warning">Pending</span>';
                                                   } ?> 

                                                  <span class="tb-status"><?= $status;?></span>
                                                </td>
                                                 <td class="nk-tb-col nk-tb-col-tools">

                                                     <ul class="nk-tb-actions gx-1">
                                                      <li class="nk-tb-action-hidden">
                                                          <a href="<?php echo base_url();?>home/det_user_mission/<?php echo $row['id_user_mission'];?>" class="btn btn-icon">
                                                              <em class="icon ni ni-user-check"></em></em> Confirm
                                                          </a>
                                                      </li>
                                                         
                                                         <li>
                                                             <div class="drodown">
                                                                 <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                 <div class="dropdown-menu dropdown-menu-right">
                                                                     <ul class="link-list-opt no-bdr">
                                                                         <li><a href="<?php echo base_url();?>home/det_user_mission/<?php echo $row['id_user_mission'];?>"><em class="icon ni ni-focus"></em><span>Detail</span></a></li>

                                                                         <li><a href="#"><em class="icon ni ni-pen"></em><span>Edit</span></a></li>
                                                                         
                                                                         <li><a href="#"><em class="icon ni ni-cross"></em><span>Delete</span></a></li>

                                                                         
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </li>
                                                     </ul>
                                                 </td>
                                             </tr><!-- .nk-tb-item  -->





                                             <!-- Modal Zoom -->
                                             <div class="modal fade zoom" tabindex="-1" id="modalZoom">
                                                 <div class="modal-dialog" role="document">
                                                     <div class="modal-content">
                                                         <div class="modal-header">
                                                             <h5 class="modal-title">Confirm</h5>
                                                             <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                        <em class="icon ni ni-cross"></em></a>
                                        </div>
                                        <div class="modal-body">
                                        <p>Are you sure to confirm this data..?</p>
                                        </div>
                                            <div class="modal-footer bg-dark ">
                                            <button style="float: right;" class="btn btn-primary ">Confirm</button>
                                            </div>
                                        </div>
                                    </div>
                                    </div>

                            <?php   } ?>


                                           </tbody>
                                         </table> 


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


         <script src="<?php echo base_url(); ?>assets/backend/admin/js/jquery.dataTables.min.js"></script>

    <script>
    $(document).ready(function() {
      $('#dataTables').DataTable();
    } );
    </script>


    
  </body>
</html>
<?php } ?>
