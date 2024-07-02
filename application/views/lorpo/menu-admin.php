<footer class="footer">
       <div class="container">
           <ul class="nav nav-pills nav-justified">
               <li class="nav-item">
                   <a class="nav-link <?php if($this->uri->segment(2)=='withdrawal'){echo"active";}?>" href="<?php echo base_url();?>pages/withdrawal">
                       <span>
                          <img style="width: 30px" src="<?php echo base_url();?>assets/front/img/penarikan.png">
                           <span class="nav-text">Penarikan</span>
                       </span>
                   </a>
               </li>
               <li class="nav-item">
                   <a class="nav-link <?php if($this->uri->segment(1)=='product'){echo"active";}?>" href="<?php echo base_url();?>product">
                       <span>
                            <img style="width: 30px" src="<?php echo base_url();?>assets/front/img/produk.png">
                           <span class="nav-text">Produk</span>
                       </span>
                   </a>
               </li>
               <li class="nav-item centerbutton">
                   <a href="<?php echo base_url();?>home/dashboard" class="nav-link" id="centermenubtn">
                     <img style="width: 60px" src="<?php echo base_url();?>assets/front/img/home.png">
                   </a>
               </li>
               <li class="nav-item">
                   <a class="nav-link <?php if($this->uri->segment(1)=='package'){echo"active";}?> " href="<?php echo base_url();?>package">
                       <span>
                            <img style="width: 30px" src="<?php echo base_url();?>assets/front/img/alat.png">
                           <span class="nav-text">Peralatanku</span>
                       </span>
                   </a>
               </li>
               
           </ul>
       </div>
   </footer>