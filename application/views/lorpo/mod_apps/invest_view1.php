<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
/* Modals
----------------------------------------------*/
a.link {cursor:help;text-decoration:underline;}
a.link.btn {border-color #d900ae;text-decoration none;}
a.link:hover {background-color: #0085a6; color: #fff; text-decoration:none;}

[data-ml-modal] {
  position:fixed;
/*  top:0;*/
  bottom:0;
  left:0;
  right:0;
  overflow-x:hidden;
  overflow-y:auto;
  -webkit-overflow-scrolling:touch;
  z-index:999;
  width:0;
  height:0;
  opacity:0;
}
[data-ml-modal]:target {
  width:auto;
  height:auto;
  opacity:1;
  -webkit-transition:  opacity 1s ease;
  transition: opacity 1s ease;
}
[data-ml-modal]:target .modal-overlay {
  position:fixed;
/*  top:0;*/
  bottom:0;
  left:0;
  right:0;
  cursor:pointer;
  background-color:#000;
  background-color:rgba(0, 0, 0, 0.7);
  z-index:1;
}
[data-ml-modal] .modal-dialog {
  border-radius:6px;
  box-shadow:0 11px 15px -7px rgba(0, 0, 0, 0.2), 0 24px 38px 3px rgba(0, 0, 0, 0.14), 0 9px 46px 8px rgba(0, 0, 0, 0.12);
  position:relative;
  width: 90%;
  max-width:660px;
  max-height:70%;
  margin:10% auto;
  overflow-x:hidden;
  overflow-y:auto;
  z-index:2;
}
.modal-dialog-lg {max-width:820px !important;}

[data-ml-modal] .modal-dialog > h3 {
  background-color:#eee;
  border-bottom:1px solid #b3b3b3;

  margin:0;
  padding:0.8em 56px .8em 27px; 
}
[data-ml-modal] .modal-content {background:#fff; padding:23px 27px;}
[data-ml-modal] .modal-close {
    position:absolute;
  top:13px;
  right:13px;

  background-color:#fff;
  border-radius:50%;
  height:40px;
  width:40px;
  

  text-align:center;
  -webkit-transition: all .3s ease-in-out;
    transition: all .3s ease-in-out;
}
[data-ml-modal] .modal-close:hover {background-color:#0085a6; color:#fff; cursor:pointer;}
[data-ml-modal] p:first-child, [data-ml-modal] p:last-child {margin:0;}
@media (max-width:767px) {
  [data-ml-modal] .modal-dialog {margin:20% auto;}
}
/* End Modals ------------------------------*/

/* General*/

*, *:before, *:after {
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
      box-sizing: border-box;
}

a {
  color:#0085a6;
  text-decoration: none;
  outline: 0;
  -webkit-transition  all .3s ease-in-out;
  -moz-transition  all .3s ease-in-out;
  -o-transition  all .3s ease-in-out;
  transition all .3s ease-in-out;
}
a:hover {
  color:#0085a6;
  text-decoration: none;
}
.center {text-align:center !important;}
.btn {
    display: inline-block;
    margin-bottom: 0;
    font-weight: normal;
    text-align: center;
    vertical-align: middle;
    touch-action: manipulation;
    cursor: pointer;
    background-image: none;
    border: 2px solid transparent;
    white-space: normal;
    padding: 3px 14px;
    font-size: 18px;
    border-radius: 3px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
.btn-default {border-color: #0085a6;}
a.btn-default:hover {background-color:#0085a6; color:#fff;}
pre {overflow:auto;font-size:1em;}

#linear {background-image: linear-gradient(to bottom, #BF953F, #FCF6BA); }

</style>

<section class="header__container container" style="padding-top: 120px;">
    <div data-anim-wrap class="container" style="background: #000044;width: 100%;height:auto; padding-top: 12px;padding-bottom: 12px;margin-top: 15px;color: #fff;border-radius: 15px;box-shadow: 0 12px 16px 0 rgba(0,0,0,0.15), 0 17px 50px 0 rgba(0,0,0,0.10);">
    <div class="row">
      <h5 style="font-family: arial;text-align: center">Silakan Pilih Paket Anda</h5><hr style="color:gold">
       <?php 
              foreach ($depo_package as $row  ) { ?>
      <div class="col-6 col-lg-3" style="margin-top: 10px;line-height: 1">
          <center>
            <img style="width:100px; border: 1px gold solid" src="<?= $row->file ?>"><br><br>
            <span style="color:gold;font-weight: bold;font-family: arial;font-size: 14px;"><?= $row->title ;?></span><br>
            <span style="color:gold;background-color: #000;font-family: arial;font-size: 14px">Rp. <?= $row->amount ;?> </span><br><br>
            <span style="font-family: arial;font-size: 12px;color: #fff">Masa Aktif : <?= $row->periode ;?> Hari </span><br>
            <span style="font-family: arial;font-size: 12px;color: #fff">Profit Harian : Rp. <?= $row->comission ;?> </span><br><br>
            <a href="#modal-10<?= $row->id_package;?>"  style="width: auto;border-radius: 8px;padding: 4px 10px;font-size: 12px;color: #000" class=" text-white" id="linear"><i class="fa fa-shopping-cart"> Checkout</i></a>
          </center>
            
      <hr>
      </div>

      <div data-ml-modal id="modal-10<?= $row->id_package;?>">
        <form action="<?php echo base_url();?>invest/doInvest" method="POST" >
        <a href="#!" class="modal-overlay"></a>
        <div class="modal-dialog modal-dialog-lg">
          <a href="#!" class="modal-close">&times;</a>
          
          <div class="modal-content" style="line-height: 1">
            <p style="font-family: arial;font-size: 13px">Anda akan melakukan pembelian paket : </p><br>
            <h4 style="font-family: arial;font-size: 16px;color: #000"><?= $row->title;?></h4>
            <p style="font-family: arial;font-size: 15px;color: #000">Rp. <?= $row->amount;?></p>
            <hr style="color: #000">
            <p style="font-family: arial;font-size: 13px;">Masa Akif : <?= $row->periode;?> Hari </p>
            <p style="font-family: arial;font-size: 13px;">Profit Harian : <?= $row->comission;?> </p>
            <input type="hidden" name="package_id" value="<?= $row->id_package;?>">

            <button type="submit" style="margin-top: 20px;width: 100%;border-radius: 30px;margin-bottom: 20px;" class="button -md -light-1 bg-dark-1 text-white"><i class="fa fa-shopping-cart"> Pesan Sekarang </i></button>
          </div>
        </div>
      </form>
      </div>


      <?php } ?>
    </div>

    </div>
</section>

 <!-- <section class="header__container container" style="padding-top: 120px;">
    <div data-anim-wrap class="container" style="background: #000044;width: 100%;height:auto; padding-top: 12px;padding-bottom: 12px;margin-top: 15px;color: #fff;border-radius: 15px;box-shadow: 0 12px 16px 0 rgba(0,0,0,0.15), 0 17px 50px 0 rgba(0,0,0,0.10);">

    <h4 style="font-family: arial">Silakan Pilih Paket Anda</h4><hr style="color:gold">

    <table style="width: 100%;font-family: calibri;">

       <?php 
              foreach ($depo_package as $row  ) { ?>

      <tr>
        <td rowspan="4" width="30%"> <center><img style="width:100px" src="<?php echo base_url();?>assets/package.jpeg"> </center></td>
        <td style="padding: 0px;line-height: 1;padding-top: 15px;width:30%"> <span style="color:gold;font-weight: bold;"><?= $row->title ;?></span></td>
        <td></td>
      </tr>

      <tr>
        <td style="padding: 0px;line-height: 1;">Harga Produk : <span style="color:gold;">Rp <?= $row->amount ;?> </span></td>
        <td></td>
      </tr>

      <tr>
        <td style="padding: 0px;line-height: 1;">Masa Aktif : <span style="color: gold"> <?= $row->periode ;?> Hari </span></td>
        <td></td>
      </tr>
      <tr>
       
        <td style="padding: 0px;line-height: 1;">Profit Harian : <span style="color:gold;">Rp. <?= $row->comission ;?> </span></td>
        <td><a href="#modal-10<?= $row->id_package;?>"  style="width: auto;border-radius: 8px;padding: 4px 10px;font-size: 12px;" class=" text-white" id="linear">Beli</a></td>
      </tr>

      <tr>
        <td colspan="3" style="border-bottom: 1px gold solid;padding: 5px 0px;"></td>
      </tr>


      <div data-ml-modal id="modal-10<?= $row->id_package;?>">
        <form action="<?php echo base_url();?>invest/doInvest" method="POST" >
        <a href="#!" class="modal-overlay"></a>
        <div class="modal-dialog modal-dialog-lg">
          <a href="#!" class="modal-close">&times;</a>
          
          <div class="modal-content newspaper">
            <p>Anda akan melakukan pembelian paket : </p>
            <h4><?= $row->title;?></h4>
            <p>Harga Produk : <?= $row->amount;?></p>
            <p>Masa Akif : <?= $row->periode;?> Hari </p>
            <p>Profit Harian : <?= $row->comission;?> </p>
            <input type="hidden" name="package_id" value="<?= $row->id_package;?>">

            <button type="submit" style="margin-top: 20px;width: 100%;border-radius: 30px;margin-bottom: 20px;" class="button -md -blue-1 bg-blue-1 text-white">Lakukan Sekarang</button>
          </div>
        </div>
      </form>
      </div>



    <?php } ?>


    

      
    </table>
  
  

 </div>
</section>
 -->



