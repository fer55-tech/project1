    <div class="menubar-area footer-fixed rounded-0 border-top">
        <div class="toolbar-inner menubar-nav">
            <a href="<?php echo base_url();?>home/dashboard" class="nav-link <?php if($this->uri->segment(2)=='dashboard'){echo"active";}?>">
                <img style="width: 25px" src="<?php echo base_url();?>assets/front/product/ic_home.png">
                <span>Home</span>
            </a>
            <a href="<?php echo base_url();?>product" class="nav-link <?php if($this->uri->segment(1)=='product'){echo"active";}?>">
                 <img style="width: 25px" src="<?php echo base_url();?>assets/front/product/ic_contrak.png">
                <span>Asset</span>
            </a>
            <a href="<?php echo base_url();?>home/download_apk" class="nav-link ">
                 <img style="width: 40px" src="<?php echo base_url();?>assets/front/product/ic_download.png">
                <span></span>
            </a>
            <a href="<?php echo base_url();?>pages/dompetku" class="nav-link <?php if($this->uri->segment(2)=='dompetku'){echo"active";}?>">
                 <img style="width: 25px" src="<?php echo base_url();?>assets/front/product/ic_rekaman.png">
                <span>Catatan</span>
            </a>
            <a href="<?php echo base_url();?>pages/information " class="nav-link <?php if($this->uri->segment(2)=='profil'){echo"active";}?>">
                 <img style="width: 25px" src="<?php echo base_url();?>assets/front/product/ic_information.png">
                <span>Information</span>
            </a>
        </div>
    </div>
    <!-- Menubar -->
   