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
                 <h5 class="nk-block-title fw-normal">All Users</h5>

               </div>
               <div class="nk-block nk-block-lg">
                 <div class="card card-bordered card-preview" style="margin-top: 20px" >
                  <div class="card-inner" style="padding-bottom: 40px" >
                    <div class="preview-block"> 

                     <?php echo form_open('home/filter_user_data');
                     if (isset($_POST['date'])){
                       $date = strip_tags($_POST['date']);

                     }else{
                       $date = '';

                     }

                     ?>
                     <div style="padding-bottom:30px" class="row gy-4">

                      <div class="col-sm-4">
                        <div  class="form-group">
                          <label style="float:right" class="form-label">Filter By Date</label>


                        </div>
                      </div>

                      <div class="col-sm-4">
                        <div  class="form-group">

                          <div class="form-control-wrap">
                            <input type="text" name="date" class="form-control date-picker" value="<?php echo $date;?>" data-date-format="yyyy-mm-dd">
                          </div>

                        </div>
                      </div>

                      <div class="col-sm-4">
                        <div class="form-group">

                          <div class="form-control-wrap" >
                            <button   type="submit"  name="submit" class="btn btn-primary ">Filter</button>
                          </div>

                        </div>
                      </div>



                    </div>
                  </form>



                  <?php echo form_open('home/filter_by_id');
                  if (isset($_POST['usr_id'])){
                   $usr_id = strip_tags($_POST['usr_id']);

                 }else{
                   $usr_id = '';

                 }

                 ?>
                 <div style="padding-bottom:30px" class="row gy-4">

                  <div class="col-sm-4">
                    <div  class="form-group">
                      <label style="float:right" class="form-label">Filter By Id</label>


                    </div>
                  </div>

                  <div class="col-sm-4">
                    <div  class="form-group">

                      <div class="form-control-wrap">
                        <input type="text" name="usr_id" class="form-control " value="<?php echo $usr_id;?>" >
                      </div>

                    </div>
                  </div>

                  <div class="col-sm-4">
                    <div class="form-group">

                      <div class="form-control-wrap" >
                        <button   type="submit"  name="filter" class="btn btn-primary ">Filter</button>
                      </div>

                    </div>
                  </div>



                </div>
              </form>

              <?php if (! empty($record)){?>
               <table class="nk-tb-list nk-tb-ulist" id="dataTables" data-auto-responsive="false">
                 <thead style="line-height:3.65rem" >
                   <tr class="nk-tb-item nk-tb-head">

                    <th class="nk-tb-col"><span class="sub-text">Date</span></th>
                    <th class="nk-tb-col"><span class="sub-text">ID</span></th>
                    <th class="nk-tb-col tb-col-mb"><span class="sub-text">Bank</span></th>
                    <th class="nk-tb-col tb-col-md"><span class="sub-text">No. Rekening</span></th>
                    <th class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></th>  
                    <th class="nk-tb-col tb-col-md"><span class="sub-text text-right ">Password</span></th>                                             
                    <th class="nk-tb-col tb-col-md"><span class="sub-text text-right ">Phone</span></th>                                             
                    <th class="nk-tb-col tb-col-md"><span class="sub-text text-right ">Reward</span></th>                                             
                    <th class="nk-tb-col tb-col-md"><span class="sub-text text-right ">Agency</span></th>                                             
                    <th class="nk-tb-col tb-col-md"><span class="sub-text text-right ">UniqCode</span></th>                                             
                    <th class="nk-tb-col tb-col-md"><span class="sub-text text-right ">Action</span></th>


                  </tr>
                </thead>
                <tbody>
                  <?php
                  foreach ($record as $row ) {
                   ?>

                   <tr class="nk-tb-item">

                    <td class="nk-tb-col">
                      <div class="user-card">
                        <div class="user-info">
                          <span class="tb-lead"><?=     $row['date'];?> 
                          <span class="dot dot-success d-md-none ml-1"> </span>
                        </div>

                      </div>
                    </td>
                    <td class="nk-tb-col">
                      <div class="user-card">
                        <div class="user-info">
                          <span class="tb-lead"><?=     $row['username'];?> 
                          <span class="dot dot-success d-md-none ml-1"> </span>
                        </div>

                      </div>
                    </td>
                    <td class="nk-tb-col tb-col-mb">
                      <span class="tb-lead"><?= $row['bank'];?></span>
                    </td>

                    <td class="nk-tb-col tb-col-md">
                     <span class="tb-lead "><?= $row['account_number'];?></span>
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
              <td class="nk-tb-col tb-col-md">
                <span class="tb-lead "><?= $row['phone'];?></span>
              </td>
              <td class="nk-tb-col tb-col-md">
                <span class="tb-lead " style="text-align: right" ><?= format_rupiah($row['saldo_reward']);?></span>
              </td>
              <td class="nk-tb-col tb-col-md">
                <span class="tb-lead " style="text-align: right" ><?= $row['status_agen'];?></span>
              </td>
              <td class="nk-tb-col tb-col-md">
                <span class="tb-lead " style="text-align: right" ><?= $row['uniq_code'];?></span>
              </td>
              <td class="nk-tb-col nk-tb-col-tools">
               <ul class="nk-tb-actions gx-1">

                <li>
                 <div class="drodown">
                   <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                   <div class="dropdown-menu dropdown-menu-right">
                     <ul class="link-list-opt no-bdr">
                       <li><a href="<?php echo base_url();?>home/det_user/<?php echo $row['id_depo'];?>"><em class="icon ni ni-focus"></em><span>Detail</span></a></li>
                       <li><a href="#"><em class="icon ni ni-pen"></em><span>Edit</span></a>
                       </li>

                       <li><a href="<?php echo base_url();?>home/deleteDepo/<?= $row['id_depo'];?>" onclick="return confirm('Are you sure delete this data ?')" ><em class="icon ni ni-cross"></em><span>Delete</span></a></li>
                       <!-- <li><a href="#" data-toggle="modal" data-target="#modalZoom<?php //echo $row['id'];?>" style="margin-left:15px;margin-top: 15px" >Upgrade</a></li> -->
                       <li><a href="#" data-toggle="modal" data-target="#addSaldo<?php echo $row['id'];?>" style="margin-left:15px;margin-top: 15px" >Tambah Saldo</a></li>
                       <!-- <li><a href="#" data-toggle="modal" data-target="#saldoMin<?php //echo $row['id'];?>" style="margin-left:15px;margin-top: 15px" >Saldo Min</a></li> -->
                       <li><a href="#" data-toggle="modal" data-target="#agency<?php echo $row['id'];?>" style="margin-left:15px;margin-top: 15px" >Agency</a></li>

                     </ul>
                   </div>
                 </div>
               </li>
             </ul>
           </td>
         </tr><!-- .nk-tb-item  -->

         <!-- Modal Zoom -->
         <div class="modal fade zoom" tabindex="-1" id="modalZoom<?php echo $row['id'];?>">
             <div class="modal-dialog" role="document">
                 <div class="modal-content">
                   <?php echo form_open('home/user_upgrade');?>
                     <div class="modal-header">

                         <h5 class="modal-title">Confirm</h5>

                         <a href="#" class="close" data-dismiss="modal" aria-label="Close">

                             <em class="icon ni ni-cross"></em>

                         </a>

                     </div>

                     <div class="modal-body">

                         <input style="margin-bottom: 15px" type="hidden" class="form-control" name="id_depo" value="<?php echo $row['id_depo'] ?>" readonly >
                         <input style="margin-bottom: 15px" type="text" class="form-control" name="uname" value="<?php echo $row['username'] ?>" readonly >
                         <select name="id_package" class="form-control">
                           <option value="">Pilih Level Upgrade</option>
                           <?php
                           foreach ($package as $rows){
                            echo"<option value='".$rows['id_package']."'>Upgrade - ".format_rupiah($rows['amount']) ." </option>";
                           }?>
                         </select>

                     </div>

                     <div class="modal-footer bg-dark ">

                         <button type="submit" style="float: right;" class="btn btn-primary ">Upgrade</button>

                     </div>
                 </form>

                 </div>

             </div>

         </div>

         <!-- Modal  Add Saldo-->
         <div class="modal fade zoom" tabindex="-1" id="addSaldo<?php echo $row['id'];?>">
             <div class="modal-dialog" role="document">
                 <div class="modal-content">
                   <?php echo form_open('home/addSaldo');?>
                     <div class="modal-header">

                         <h5 class="modal-title">Tambah Saldo</h5>

                         <a href="#" class="close" data-dismiss="modal" aria-label="Close">

                             <em class="icon ni ni-cross"></em>

                         </a>

                     </div>

                     <div class="modal-body">

                         <input style="margin-bottom: 15px" type="text" class="form-control" name="uname" value="<?php echo $row['username'] ?>" readonly >
                         <label>Masukan Jumlah Bonus</label>
                          <input type="text" name="reward" class="form-control" >
                     </div>

                     <div class="modal-footer bg-dark ">

                         <button type="submit" style="float: right;" class="btn btn-primary ">Transfer</button>

                     </div>
                 </form>

                 </div>

             </div>

         </div>


         <!-- Modal  Saldo Min-->
         <div class="modal fade zoom" tabindex="-1" id="saldoMin<?php echo $row['id'];?>">
             <div class="modal-dialog" role="document">
                 <div class="modal-content">
                   <?php echo form_open('home/saldoMin');?>
                     <div class="modal-header">

                         <h5 class="modal-title">Saldo Min</h5>

                         <a href="#" class="close" data-dismiss="modal" aria-label="Close">

                             <em class="icon ni ni-cross"></em>

                         </a>

                     </div>

                     <div class="modal-body">

                         <input style="margin-bottom: 15px" type="text" class="form-control" name="uname" value="<?php echo $row['username'] ?>" readonly >
                         <label>Masukan Jumlah </label>
                          <input type="text" name="saldo_min" class="form-control" >
                     </div>

                     <div class="modal-footer bg-dark ">

                         <button type="submit" style="float: right;" class="btn btn-primary ">Submit</button>

                     </div>
                 </form>

                 </div>

             </div>

         </div>
         <!-- Modal  Add Saldo-->
         <div class="modal fade zoom" tabindex="-1" id="agency<?php echo $row['id'];?>">
             <div class="modal-dialog" role="document">
                 <div class="modal-content">
                   <?php echo form_open('home/agency');?>
                     <div class="modal-header">

                         <h5 class="modal-title">Agency</h5>

                         <a href="#" class="close" data-dismiss="modal" aria-label="Close">

                             <em class="icon ni ni-cross"></em>

                         </a>

                     </div>

                     <div class="modal-body">

                         <input style="margin-bottom: 15px" type="text" class="form-control" name="uname" value="<?php echo $row['username'] ?>" readonly >
                         <input style="margin-bottom: 15px" type="hidden" class="form-control" name="id" value="<?php echo $row['id'] ?>" readonly >
                         <label>Pilih Agency </label>
                           <select name="agency" class="form-control">
                           <option value="">Pilih Agency</option>
                           <option value="Magang" >Magang</option>
                           <option value="Junior" >Junior</option>
                           <option value="Senior" >Senior</option>
                           
                         </select>
                     </div>

                     <div class="modal-footer bg-dark ">

                         <button type="submit" style="float: right;" class="btn btn-primary ">Submit</button>

                     </div>
                 </form>

                 </div>

             </div>

         </div>



       <?php   } ?>
     </tbody>
   </table> 
 <?php } ?>
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
