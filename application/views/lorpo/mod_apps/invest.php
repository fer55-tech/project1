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
        <h6 class="title">Detail Toko</h6>
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
<div class="page-content p-b50">
  <div class="container p-0">

    <div class="container">
      <div class="dz-product-detail"  style="margin-top:50px">

        <div class="cart-box">
          <div class="dz-media">
            <img src="<?php echo base_url();?>assets/front/product/<?= $depo_package['file'];?>" alt="">
          </div>
          <div class="cart-content">
            <h6 class="title mb-1"><a href="#"><?= $depo_package['title'];?></a></h6>
            <span class="font-12 brand-tag">Keuntungan anda akan masuk otomatis 1 x 24 jam setiap hari</span>
            <div class="cart-footer">
              <h6 class="price mb-0">Rp <?= format_rupiah($depo_package['amount']);?></h6>

            </div>
          </div>
        </div>


        <ul class="list-group">
          <li class="list-group-item">
            <span class="title">Produk</span>
            <span><?= $depo_package['title'];?></span>
          </li>
          <li class="list-group-item">
            <span class="title">Profit</span>
            <span><?= format_rupiah($depo_package['comission']);?></span>
          </li>
          
        </ul>
        <div class="divider border"></div>
        <h6>Catatan</h6>
        
          <p>Dapatkan profit setiap hari, modal anda akan kembali setelah masa kontrak selesai</p>
      
      </div>
    </div>
  </div>
</div>
<!-- Footer Start -->
<div class="footer fixed bg-white border-top">
   <form action="<?php echo base_url();?>package/doTopup" method="POST" >
  <div class="container py-2">
    <div class="total-cart">
      <div class="price-area">
        <h3 class="price">Rp <?= format_rupiah($depo_package['amount']);?></h3>

      </div>

      <input type="hidden" name="id_package" value="<?= $depo_package['id_package'];?>" >
      <input type="hidden" name="package_name" value="<?= $depo_package['title'];?>" >
      <input type="hidden" name="amount" value="<?= $depo_package['amount'];?>" >
      <input type="hidden" name="profit" value="<?= $depo_package['comission'];?>" >
      <input type="hidden" name="toko" value="<?= $depo_package['toko'];?>" >
      <button type="submit" class="btn btn-primary">Deposit</button>
    </div>
  </div>
</form>
</div>
  <!-- Footer End -->