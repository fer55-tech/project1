

<!-- content @s -->
<div class="nk-content nk-content-fluid">
    <div class="container-xl wide-lg">
        <div class="nk-content-body">
            <div class="nk-block-head">
                <?php $usr = $this->model_app->view_where('users', array('username'=> $this->session->username))->row_array();?>
                <div class="nk-block-head-sub"><span>Welcome!</span>
                </div>
                <div class="nk-block-between-md g-4">
                    <div class="nk-block-head-content">
                        <h4 class="nk-block-title fw-normal"><?php echo $usr['full_name'];?></h4>
                        <div class="nk-block-des">
                            <p>At a glance summary of your account. Have fun!</p>
                        </div>
                    </div><!-- .nk-block-head-content -->
                    <div class="nk-block-head-content">
                        <ul class="nk-block-tools gx-3">
                            <li style="color: #bfc8e2 !important">
                               Search
                            </li>   

                             <li class="opt-menu-md dropdown">
                                <input style="height:40px;border-radius: 50px;border:0px;background: #fff;padding-left: 15px;padding-right: 15px;color: #bfc8e2 !important" type="text" name="" readonly  >
                            </li>
                           
                        </ul>
                    </div><!-- .nk-block-head-content -->
                </div><!-- .nk-block-between -->
            </div><!-- .nk-block-head -->

          
            <div class="nk-block">
                <div class="row gy-gs">
                    <div class="col-lg-5 col-xl-4">
                        <div class="nk-block">
                            <div class="nk-block-head-xs">
                                <div class="nk-block-head-content">
                                    <h6 class="nk-block-title title">Total Deposit</h6>
                                </div>

                             
                            </div><!-- .nk-block-head -->
                            <div class="nk-block">
                                <div class="card card-bordered text-light is-dark h-100">
                                    <div class="card-inner">
                                        <div class="nk-wg7">
                                            <img style="width: 90px; display: block;margin-left: auto;margin-right: auto;"  src="<?php echo base_url();?>assets/front/img/logo_kecil.png" alt="icon">                             
                                                     
                                            <div class="nk-wg7-stats">
                                                <div  class="nk-wg7-title text-center">Total Deposit in IDR</div>
                                                <div class="number-lg amount text-center">IDR <?= format_rupiah($total_depo['amount']);?> </div>
                                               

                                            </div>
                                             
                                            
                                          
                                        </div><!-- .nk-wg7 -->
                                    </div><!-- .card-inner -->
                                </div><!-- .card -->
                            </div><!-- .nk-block -->
                        </div><!-- .nk-block -->
                    </div><!-- .col -->
                    <div class="col-lg-7 col-xl-8">
                        <div class="nk-block">
                            <div class="nk-block-head-xs">
                                <div class="nk-block-between-md g-2">
                                    <div class="nk-block-head-content">
                                        <h6 class="nk-block-title title">Deposit Package</h6>
                                    </div>
                                    <div class="nk-block-head-content">
                                        <a href="#" class="link link-primary">See All</a>
                                    </div>
                                </div>
                            </div><!-- .nk-block-head -->

                            <div class="row g-2">

                                <?php foreach ($depo_package as $package) {

                                    $depo_available = $this->model_app->sum_data_where('deposit', array('package_name' => $package['package_name'], 'status'=>'Active' ),'amount','id','ASC');

                                    $depo_pending = $this->model_app->sum_data_where('deposit', array('package_name' => $package['package_name'], 'status'=>'Pending' ),'amount','id','ASC');

                                    ?>
                               
                                <div class="col-sm-4">
                                    <div class="card bg-dark" style="padding: 25px 25px 25px 25px " >
                                        <div class="nk-wgw sm">       
                                            <img style="width: 90px; display: block;margin-left: auto;margin-right: auto;"  src="<?php echo base_url();?>assets/front/img/<?php echo $package['file'];?>" alt="icon">                             
                                                     
                                                    
                                                    <h5 style="margin-top:7px"  class="nk-wgw-title title"><?= $package['package_name'];?></h5>
                                               
                                               
                                              <div style="margin-top: 13px;color: #bfc8e2 !important" class="nk-wg7-stats-group">
                                                    <div class="nk-wg7-stats w-100">
                                                     
                                                        <ul class="nk-iv-wg2-list">
                                                            <li>
                                                                <span class="item-label">Available</span>
                                                                <span style="color: #76aef5" class="item-value"><?= format_rupiah($depo_available['amount']);?> IDR</span> 
                                                            </li>
                                                            <li>
                                                                <span class="item-label">Pending</span>
                                                                <span style="color: #76aef5" class="item-value"> <?= format_rupiah($depo_pending['amount']);?> IDR</span>
                                                            </li>
                                                            <li class="total" style="border-top: 1px solid #565657;" >
                                                                <span class="item-label">Total</span>
                                                                <span style="color: #76aef5" class="item-value"><?= format_rupiah($depo_available['amount'] + $depo_pending['amount'] );?> IDR</span>
                                                            </li>
                                                        </ul>


                                                    </div>
                                                   
                                                </div>
                                            
                                        </div>
                                    </div>
                                </div><!-- .col -->

                            <?php } ?>


                  
                            </div><!-- .row -->
                        </div><!-- .nk-block -->
                      
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .nk-block -->


            <div class="nk-block">
                <div class="row gy-gs">
                    
                    <div class="col-md-6 col-lg-4">
                    <div class="nk-wg-card card card-bordered h-100" style="background: #414140;">
                        <div class="card-inner h-100">
                            <div class="nk-iv-wg2">
                                <div class="nk-iv-wg2-title">
                                    <h6 style="color: #c9d2de" class="title">Total Users <em class="icon ni ni-info text-primary"></em></h6>
                                </div>
                                <div class="nk-iv-wg2-text">
                                    <div style="color: #bfc8e2 !important"  class="nk-iv-wg2-amount ui-v2">
                                        <?= $all_user_active + $all_user_pending;?>
                                        <span class="change up"></span>People</span>
                                        
                                        <span style="float:right;font-size:14px"  class="item-value"><a  href="<?= base_url();?>home/all_users">See All</a></span>
                                    </div>
                                    <ul  class="nk-iv-wg2-list">
                                        <li style="color:#bfc8e2 !important ">
                                            <span style="color:#1ee0ac !important" class="item-label">Active User</span>
                                            <span style="color:#1ee0ac !important " class="item-value">See All</span>
                                            <span style="color:#1ee0ac !important; margin-right:20px" class="item-value"><?= $all_user_active;?> People</span>
                                        </li>
                                        <li style="color:#e85347 ">
                                            <span class="item-label">Pending User</span>
                                            <span style="color:#e85347 " class="item-value">See All</span>
                                            <span style="color:#e85347; margin-right:20px" class="item-value"><?= $all_user_pending;?> People</span>
                                        </li>
                                      
                                      
                                    </ul>
                                </div>
                               
                            </div>
                        </div>
                    </div><!-- .card -->
                </div><!-- .col -->
                
                    <div class="col-md-6 col-lg-4">
                        <div class="nk-wg-card card card-bordered h-100" style="background: #414140;">
                            <div class="card-inner h-100">
                                <div class="nk-iv-wg2">
                                    <div class="nk-iv-wg2-title">
                                        <h6 style="color: #c9d2de" class="title">Total Withdraw <em class="icon ni ni-info text-primary"></em></h6>
                                    </div>
                                    <div class="nk-iv-wg2-text">
                                        <div style="color: #bfc8e2 !important"  class="nk-iv-wg2-amount ui-v2">109 <span class="change up"><span class="sign"></span>IDR</span></div>
                                        <ul  class="nk-iv-wg2-list">
                                            <li style="color:#bfc8e2 !important ">
                                                <span class="item-label">Success</span>
                                                <span style="color:#bfc8e2 !important " class="item-value">See All</span>
                                            </li>
                                            <li style="color:#bfc8e2 !important ">
                                                <span class="item-label">Pending</span>
                                                <span style="color:#bfc8e2 !important " class="item-value">See All</span>
                                            </li>
                                          
                                          
                                        </ul>
                                    </div>
                                   
                                </div>
                            </div>
                        </div><!-- .card -->
                    </div><!-- .col -->
                    <div class="col-md-12 col-lg-4">
                        <div class="nk-wg-card card card-bordered h-100" style="background: #414140;">
                            <div class="card-inner h-100">
                                <div class="nk-iv-wg2">
                                    <div class="nk-iv-wg2-title">
                                        <h6 style="color: #c9d2de" class="title">Mission <em class="icon ni ni-info text-primary"></em></h6>
                                    </div>
                                    <div class="nk-iv-wg2-text">
                                        <div style="color: #bfc8e2 !important" class="nk-iv-wg2-amount ui-v2">  Soon<span  class="change up"><span  class="sign"></span>4.5%</span></div>
                                        <ul style="color:#bfc8e2 !important " class="nk-iv-wg2-list">
                                            <li>
                                                <span class="item-label"><a href="#">Silver</a> <small>- 4.76% for 21 Days</small></span>
                                                <span class="item-value">Coomming Soon</span>
                                            </li>
                                            <li>
                                                <span class="item-label"><a href="#">Silver</a> <small>- 4.76% for 21 Days</small></span>
                                                <span class="item-value">Coomming Soon</span>
                                            </li>
                                            <li>
                                                <span class="item-label"><a href="#">Dimond</a> <small>- 14.29% for 14 Days</small></span>
                                                <span class="item-value">Coomming Soon</span>
                                            </li>
                                            <li>
                                                <span class="item-label"><a href="#">Starter</a> <small>- 1.67% for 30 Days</small></span>
                                                <span class="item-value">335.00</span>
                                            </li>
                                        </ul>
                                    </div>
                                   
                                </div>
                            </div>
                        </div><!-- .card -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .nk-block -->


        
        </div>
    </div>
</div>
<!-- content @e -->