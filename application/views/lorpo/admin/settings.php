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
    <meta name="author" content="Agen Gold Profesional">
    <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/front/img/favicon.png">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">


    <!-- Style -->
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
   
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/admin/css/dashlite.css?ver=1.4.0">
    <link id="skin-default" rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/admin/css/theme.css?ver=1.4.0">
</head>
    
  <body class="nk-body npc-crypto has-sidebar has-sidebar-fat ui-clean ">
      <div class="nk-app-root">
          <!-- main @s -->
          <div class="nk-main ">


            <?php include 'menu.php' ;?>

            <!-- wrap @s -->
            <div class="nk-wrap ">
                <?php include 'header.php' ;?>   
                <?php include 'setting_wd.php' ;?>   
                <?php include 'footer.php' ;?>      
                
                 
                
            </div>
            <!-- wrap @e -->
          </div>
        </div>


    <script src="<?php echo base_url(); ?>assets/backend/admin/js/bundle.js?ver=1.4.0"></script>
    <script src="<?php echo base_url(); ?>assets/backend/admin/js/scripts.js?ver=1.4.0"></script>
    <script src="<?php echo base_url(); ?>assets/backend/admin/js/charts/chart-crypto.js?ver=1.4.0"></script>
    
  </body>
</html>
<?php } ?>
