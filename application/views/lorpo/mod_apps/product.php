

<!-- Header -->
  <header class="header header-fixed">
    <div class="container">
      <div class="header-content">
        <div class="left-content">
          <a href="javascript:void(0);" class="back-btn">
            <i class="icon feather icon-chevron-left"></i>
          </a>
        </div>
        <div class="mid-content">
          <h6 class="title">Asset</h6>
        </div>
        <div class="right-content">
          <a href="javascript:void(0);">
            <i class="icon feather icon-more-vertical-"></i>
          </a>
        </div>
      </div>
    </div>
  </header>

<!-- Page Content Start -->
  <div class="page-content space-top" style="margin-top: 20px;padding: 15px;">
    <div class="container">
      <div class="profile-area">
       <div class="row">
           <div class="col-12">
               <!-- Product Item list Start -->
               <div class="product-items-list" id="tab">
                   <ul>
                       <?php foreach ($depo as $row) { 
                        if($row['status']=='Pending'){
                            $status = 'Belum Deposit';
                        }else{
                            $status = '<span style="color:green">Sudah Deposit</span>';
                        }
                        
                       
                          // $date = $row['date'].' '.$row['time'] ;
                           $dateexp = date("Y-m-d", strtotime(" +".$row['periode']." days", strtotime($row['date'])));//tambah satu hari dari tanggal terakhir masuk bonus di tbl profit
                           $dateexp1 = date('m/d/Y', strtotime($dateexp));
                           // echo $dateexp1;
                        ?>
                       <li>
                           <div class="product-items">
                            <?php if($row['status'] =='Pending'){?>
                               <a href="<?php echo base_url();?>package/invoice/<?= $row['id_depo'];?>">
                                   <div class="media media-80 me-2">
                                       <img src="<?php echo base_url();?>assets/front/product/<?= $row['file'];?>" alt="">
                                   </div>
                               </a>
                           <?php }else{ ?>
                            <a href="#">
                                <div class="media media-80 me-2">
                                    <img src="<?php echo base_url();?>assets/front/product/<?= $row['file'];?>" alt="">
                                </div>
                            </a>                          
                            <?php } ?>
                               <a href="#">    
                                   <div class="product-content">
                                       <h6 class="title"><?= $row['title'];?></h6>
                                       
                                       <div class="product-footer">
                                          
                                           <span class="price">
                                               <!-- <del>$1500</del> -->
                                              IDR <?= format_rupiah($row['amount']);?>
                                           </span>
                                       </div>
                                         <p style="margin-bottom: 0px"><?= $status;?></p>
                                         <?php if($row['status'] != 'Pending'){ ?>
                                         <span style="font-size: 12px;">Expire: <p style="margin-bottom:0px;float: right;margin-right: 57px;font-size: 12px;margin-top: 3px" class="exp1"> <?= $dateexp1;?></p> </span>
                                         
                                         <div class="desc" style="margin-bottom: 0px;font-size: 12px;color: #0b82eb;">Masa Aktif : <span class="demo"></span> </div>
                                     <?php } ?>
                                   </div>
                               </a>
                             
                           </div>
                       </li>
                   <?php } ?>
                     
                   </ul>
               </div>
               <!-- Product Item list End -->
           </div>
       </div>
         
      </div>
    </div>
  </div>
  <!-- Page Content End -->

  <script>
  

    var exp = document.getElementById('tab').getElementsByClassName('exp1');

    var x = document.getElementById('tab').getElementsByClassName('demo');


    function test(){
      var   now = new Date();
      for (i = 0; i<exp.length; i++){
        var  e = new Date( exp[i].innerHTML);
        var  timeDiff = e.getTime() - now.getTime();
        var seconds = Math.floor(timeDiff / 1000);
        var minutes = Math.floor(seconds / 60);
        var hours   = Math.floor(minutes / 60);
        var days    = Math.floor(hours   / 24);
        hours %=24;
        minutes %=60;
        seconds %=60;
        x[i].innerHTML =  days  + "d " +  hours + "h " + minutes + "m " + seconds +"s";
      //var timer = setTimeout('test()', 1000);   
      }

      //for (i=0; i<x.length; i++){
      //x[i].innerHTML = days  + " " +  hours + " " + minutes + " " + seconds;
      //}
    }
    setInterval(function(){ test();; }, 1000);
  </script>
