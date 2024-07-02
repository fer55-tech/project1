<!-- sidebar @s -->
<div class="nk-sidebar nk-sidebar-fat nk-sidebar-fixed is-dark" data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-sidebar-brand">
            <a href="#" class="logo-link nk-sidebar-logo">
                <img class="logo-light logo-img" src="<?php echo base_url();?>assets/backend/images/logo.png" srcset="<?php echo base_url();?>assets/backend/images/logo.png " alt="logo">
                <img class="logo-dark logo-img" src="<?php echo base_url();?>assets/backend/images/logo.png" srcset="<?php echo base_url();?>assets/backend/images/logo.png " alt="logo-dark">
               
            </a>
        </div>
        <div class="nk-menu-trigger mr-n2">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
        </div>
    </div><!-- .nk-sidebar-element -->
    
    <div class="nk-sidebar-element">
            <div class="nk-sidebar-body" data-simplebar>
                <div class="nk-sidebar-content">
                   
                    <div class="nk-sidebar-widget nk-sidebar-widget-full d-xl-none pt-0">
                        <a class="nk-profile-toggle toggle-expand" data-target="sidebarProfile" href="#">
                            <div class="user-card-wrap">
                                <div class="user-card">
                                    <div class="user-avatar">
                                        <span>AB</span>
                                    </div>
                                    <div class="user-info">
                                        <span class="lead-text">D-TechSolution</span>
                                        <span class="sub-text">info@d-techsolution.com</span>
                                    </div>
                                    <div class="user-action">
                                        <em class="icon ni ni-chevron-down"></em>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="nk-profile-content toggle-expand-content" data-content="sidebarProfile">
                           
                           
                            <ul class="link-list">
                                <li><a href="html/crypto/profile.html"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                <li><a href="html/crypto/profile-security.html"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a></li>
                                <li><a href="html/crypto/profile-activity.html"><em class="icon ni ni-activity-alt"></em><span>Login Activity</span></a></li>
                            </ul>
                            <ul class="link-list">
                                <li><a href="#"><em class="icon ni ni-signout"></em><span>Sign out</span></a></li>
                            </ul>
                        </div>
                    </div><!-- .nk-sidebar-widget -->
                    <div class="nk-sidebar-menu">
                        <!-- Menu -->
                        <ul class="nk-menu">
                            <li class="nk-menu-heading">
                                <h6 class="overline-title">Menu</h6>
                            </li>
                            <li class="nk-menu-item">
                                <a href="<?php echo base_url();?>home/dashboard" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                                    <span class="nk-menu-text">Dashboard</span>
                                </a>
                            </li>
                           
                         
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-files-fill"></em></span>
                                    <span class="nk-menu-text">Advertising</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="<?php echo base_url();?>home/add_advertising" class="nk-menu-link">
                                            <span class="nk-menu-text">Add Data</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="<?php echo base_url();?>home/list_advertising"  class="nk-menu-link">
                                            <span class="nk-menu-text">List Data</span>
                                        </a>
                                    </li>
                                
                                </ul>
                            </li>
                          
                            
                               <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
                                    <span class="nk-menu-text">Users</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    
                                    <li class="nk-menu-item">
                                        <a href="<?php echo base_url();?>home/filter_user_data" class="nk-menu-link">
                                            <span class="nk-menu-text">All Users</span>
                                        </a>
                                        
                                    </li>
                                    
                                
                                    
                                    
                                    <li class="nk-menu-item">
                                        <a href="<?php echo base_url();?>home/all_not_yet_depo" class="nk-menu-link">
                                            <span class="nk-menu-text">Users Not Yet Depo</span>
                                        </a>
                                    </li>
                                
                                </ul>
                            </li>
                            
                            
                            
                            
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-label-alt-fill"></em></span>
                                    <span class="nk-menu-text">Mission</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    
                                    <li class="nk-menu-item">
                                        <a href="#" class="nk-menu-link">
                                            <span class="nk-menu-text">All Mission</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="#" class="nk-menu-link">
                                            <span class="nk-menu-text">Mission Pending</span>
                                        </a>
                                    </li>
                                   
                                </ul>
                            </li>
                            

                            <li class="nk-menu-item">
                                <a href="<?php echo base_url();?>home/all_withdraw" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-arrow-down-c"></em></span>
                                    <span class="nk-menu-text">WD Pending</span>
                                </a>
                            </li>


                            <li class="nk-menu-item">
                                <a href="<?php echo base_url();?>home/wd_success" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-arrow-down-c"></em></span>
                                    <span class="nk-menu-text">WD Success</span>
                                </a>
                            </li>
                              
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-rss"></em></span>
                                    <span class="nk-menu-text">News</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="<?php echo base_url();?>home/add_news" class="nk-menu-link">
                                            <span class="nk-menu-text">Add Data</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="<?php echo base_url();?>home/list_news"  class="nk-menu-link">
                                            <span class="nk-menu-text">List Data</span>
                                        </a>
                                    </li>
                                
                                </ul>
                            </li>
                            
                            <li class="nk-menu-item">
                                <a href="<?php echo base_url();?>home/settings" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-setting-alt"></em></span>
                                    <span class="nk-menu-text">Pengaturan</span>
                                </a>
                            </li>


                        </ul><!-- .nk-menu -->
                    </div>
                    
                    <div class="nk-sidebar-footer">
                        <ul class="nk-menu nk-menu-footer">
                            <li class="nk-menu-item">
                                <a href="#" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-help-alt"></em></span>
                                    <span class="nk-menu-text">Support</span>
                                </a>
                            </li>
                            <li class="nk-menu-item ml-auto">
                                <div class="dropup">
                                    <a href="#" class="nk-menu-link dropdown-indicator has-indicator" data-toggle="dropdown" data-offset="0,10">
                                        <span class="nk-menu-icon"><em class="icon ni ni-globe"></em></span>
                                        <span class="nk-menu-text">English</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                        <ul class="language-list">
                                            <li>
                                                <a href="#" class="language-item">
                                                    <img src="./images/flags/english.png" alt="" class="language-flag">
                                                    <span class="language-name">English</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="language-item">
                                                    <img src="./images/flags/spanish.png" alt="" class="language-flag">
                                                    <span class="language-name">Español</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="language-item">
                                                    <img src="./images/flags/french.png" alt="" class="language-flag">
                                                    <span class="language-name">Français</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="language-item">
                                                    <img src="./images/flags/turkey.png" alt="" class="language-flag">
                                                    <span class="language-name">Türkçe</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul><!-- .nk-footer-menu -->
                    </div><!-- .nk-sidebar-footer -->
                </div><!-- .nk-sidebar-contnet -->
            </div><!-- .nk-sidebar-body -->
        </div><!-- .nk-sidebar-element -->

    
</div>
<!-- sidebar @e -->


