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
     
      <script src="<?php echo base_url(); ?>assets/backend/admin/js/jquery-3.3.1.min.js"></script>
      
      
    <script>
        $(document).ready(function(){ // Ketika halaman sudah siap (sudah selesai di load)
            $("#checkall").click(function(){ // Ketika user men-cek checkbox all
                if($(this).is(":checked")) // Jika checkbox all diceklis
                    $(".checkbox").prop("checked", true); // ceklis semua checkbox siswa dengan class "check-item"
                else // Jika checkbox all tidak diceklis
                    $(".checkbox").prop("checked", false); // un-ceklis semua checkbox dengan class "check-item"
            });
            $("#btn-delete").click(function(){ // Ketika user mengklik tombol delete
               var confirm = window.confirm("Are you sure delete this data.?"); // Buat sebuah alert konfirmasi
                if(confirm) // Jika user mengklik tombol "Ok"
                    $("#form-delete").submit(); // Submit form
            });
        });
    </script>
      
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
                               <h5 class="nk-block-title fw-normal"><?php echo $title1;?></h5>
                               
                           </div>
                            <div class="nk-block nk-block-lg">
                               <div class="card card-bordered card-preview" style="margin-top: 20px" >
                          <div class="card-inner" style="padding-bottom: 40px" >
                              <div class="preview-block">   
                              
                              <form action="<?php echo base_url('home/delete_multi_user'); ?>" method="post" id="form-delete">
                                  
                                     <table class=" nk-tb-list nk-tb-ulist" id="dataTables" data-auto-responsive="false">
                                         <thead style="line-height:3.65rem" >
                                             <tr class="nk-tb-item nk-tb-head">
                                                 <th class="nk-tb-col nk-tb-col-check">
                                                     #
                                                 </th>
                                                 <th class="nk-tb-col"><span class="sub-text">ID</span></th>
                                                 <th class="nk-tb-col tb-col-mb"><span class="sub-text">Name</span></th>
                                                 <th class="nk-tb-col tb-col-md"><span class="sub-text">Mission</span></th>
                                                 <th class="nk-tb-col tb-col-md"><span class="sub-text">Pay Status</span></th>
                                                 <th class="nk-tb-col tb-col-md"><span class="sub-text">Password</span></th>
                                                 <th class="nk-tb-col tb-col-md"><span class="sub-text text-right ">Action</span></th>
                                                
                                             </tr>
                                         </thead>
                                         <tbody>
                                          <?php
                                          foreach ($usr as $row ) {
                                        //$depo = $this->model_app->view_where('deposit', array('uname' => $row['username']))->row_array();
                                           ?>
                                          
                                             <tr class="nk-tb-item">
                                                 <td class="nk-tb-col nk-tb-col-check">
                                                     <input type="checkbox"  name="id[]" class="checkbox" value="<?php echo $row['id'];?>"   >
                                        <label class="checkbox" ></label>
                                                 </td>
                                                 <td class="nk-tb-col">
                                                     <div class="user-card">
                                                         
                                                         <div class="user-info">
                                                             <span class="tb-lead"><?= $row['username'];?> <span class="dot dot-success d-md-none ml-1"></span></span>
                                                             
                                                         </div>
                                                     </div>
                                                 </td>
                                                 <td class="nk-tb-col tb-col-mb">
                                                     <span class="tb-lead"><?= $row['full_name'];?></span>
                                                 </td>
                                                
                                                
                                                 <td class="nk-tb-col tb-col-md">
                                                     <span class="tb-lead "><?= $row['package_name'];?></span>
                                                 </td>
                                                  <td class="nk-tb-col tb-col-md">
                                                    <?php
                                                    if ($row['status']=='Active'){ $status = '<span class="tb-status text-success">Active</span>'; 
                                                   }else if($row['status']=='Pending'){ $status = '<span class="tb-status text-warning">Pending</span>';
                                                    }else{
                                                      $status = '<span class="tb-status text-danger">Not yet deposited</span>';
                                                    }?>
                                                  <span class="tb-status"><?= $status;?></span>
                                                </td>
                                                <td class="nk-tb-col tb-col-md">
                                                    <span class="tb-lead "><?= $row['pwdrecov'];?></span>
                                                </td>
                                                 <td class="nk-tb-col nk-tb-col-tools">
                                                     <ul class="nk-tb-actions gx-1">
                                                     
                                                         <li>
                                                             <div class="drodown">
                                                                 <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                 <div class="dropdown-menu dropdown-menu-right">
                                                                     <ul class="link-list-opt no-bdr">
                                                                                                                 
                                                                     <li><a href="<?php echo base_url();?>home/delete_users_notdepo/<?= $row['id'];?>" onclick="return confirm('Are you sure delete this data ?')" ><em class="icon ni ni-cross"></em><span>Delete</span></a></li>
                                                                         
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
                                                                 <em class="icon ni ni-cross"></em>
                                                             </a>
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
                                           
                                             <tr>
                                               <td class="nk-tb-col tb-col-md ">
                                                 
                                                     <input style="margin-left: 4px" type="checkbox" id='checkall' class="checkbox" >
                                                   </td>
                                                
                                                 <td colspan="2" >
                                                   <button   type="button"  class="btn btn-danger text-white " id="btn-delete" > Delete Selected Data</button>
                                                 </td>
                                              
                                             </tr>
                                         </table> 
                                    
                                    </form>
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
