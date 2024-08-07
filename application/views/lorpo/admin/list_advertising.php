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
                               <h5 class="nk-block-title fw-normal">List Advertising</h5>
                               
                           </div>


                            <div class="nk-block nk-block-lg">

                               <div class="card card-bordered card-preview" style="margin-top: 20px" >
                          <div class="card-inner" style="padding-bottom: 40px" >
                              <div class="preview-block">     
                              
                               <form action="<?php echo base_url('home/delete_multiple_ads'); ?>" method="post" id="form-delete">
                                  
                              
                                     <table class=" nk-tb-list nk-tb-ulist" id="dataTables" data-auto-responsive="false">
                                         <thead style="line-height:3.65rem" >
                                             <tr class="nk-tb-item nk-tb-head">
                                                 <th class="nk-tb-col nk-tb-col-check">
                                                     #
                                                 </th>
                                                 <th class="nk-tb-col"><span class="sub-text">Date</span></th>
                                                 <th class="nk-tb-col tb-col-mb"><span class="sub-text">Title</span></th>
                                                 <th class="nk-tb-col tb-col-md"><span class="sub-text">file</span></th>
                                                 <th class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></th>
                                                 <th class="nk-tb-col tb-col-md"><span  class="sub-text  ">Action</span></th>
                                                
                                             </tr>
                                         </thead>

                                         <tbody>

                                          <?php
                                          foreach ($ads as $row ) { ?>
                                          
                                             <tr class="nk-tb-item">
                                                 <td class="nk-tb-col nk-tb-col-check">
                                                     
                                        <input type="checkbox"  name="id[]" class="checkbox" value="<?php echo $row['id_mission'];?>"   >
                                        <label class="checkbox" ></label>
                                                    
                                                 </td>
                                                 <td class="nk-tb-col">
                                                     <div class="user-card">
                                                         
                                                         <div class="user-info">
                                                             <span class="tb-lead"><?= $row['date'];?> <span class="dot dot-success d-md-none ml-1"></span></span>
                                                             
                                                         </div>
                                                     </div>
                                                 </td>
                                                 <td class="nk-tb-col tb-col-mb">
                                                     <span class="tb-lead"><?= $row['title'];?></span>
                                                 </td>
                                                
                                                
                                                 <td class="nk-tb-col tb-col-md">
                                                     <span class="tb-lead "><?= $row['file'];?></span>
                                                 </td>

                                                  <td class="nk-tb-col tb-col-md">
                                                  <span class="tb-status text-success"><?= $row['status'];?></span>
                                                </td>
                                                 <td class="nk-tb-col nk-tb-col-tools">
                                                     <ul class="nk-tb-actions gx-1">
                                                         
                                                         <li>
                                                             <div class="drodown">
                                                                 <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                 <div class="dropdown-menu dropdown-menu-right">
                                                                     <ul class="link-list-opt no-bdr">
                                                                         <li><a href="#"><em class="icon ni ni-focus"></em><span>Detail</span></a></li>

                                                                         <li><a href="#"><em class="icon ni ni-pen"></em><span>Edit</span></a></li>
                                                                         
                                       <li><a href="<?php echo base_url();?>home/delete_advertising/<?= $row['id_mission'];?>" onclick="return confirm('Are you sure delete this data ?')" ><em class="icon ni ni-cross"></em><span>Delete</span></a></li>

                                                                         
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </li>
                                                     </ul>
                                                 </td>
                                             </tr><!-- .nk-tb-item  -->

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
                                    <form>

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
