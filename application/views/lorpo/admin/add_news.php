<?php 
if ($this->session->level_login==''){
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
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/backend/favicon/favicon.png">
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




                <!-- content @s -->
                <div class="nk-content nk-content-fluid">
                    <div class="container-xl wide-lg">
                        <div class="nk-content-body">
                           <div class="nk-block-head-content">
                               <div class="nk-block-head-sub"><a class="back-to" href="<?php echo base_url();?>home/dashboard"><em class="icon ni ni-arrow-left"></em><span>Dashboard</span></a></div>
                               <h5 class="nk-block-title fw-normal">Add News</h5>
                               
                           </div>


                            <div class="nk-block nk-block-lg">

                               <div class="card card-bordered card-preview" style="margin-top: 20px" >
                                            <div class="card-inner" style="padding-bottom: 40px" >
                                                <div class="preview-block">

                                                  <div class="row gy-4">
                                                    
                                                    <div class="col-sm-12">

                                                     <?php 
                                                      
                                                        echo form_open('home/add_news');?>
                                                      
                                                        <div class="form-group">
                                                            <label class="form-label" for="default-1-02">Title</label>
                                                            <input type="text" name="title" class="form-control" id="default-1-02" required >
                                                        </div>

                                                        <div class="form-group">
                                                                <label class="form-label" for="default-textarea">Content</label>
                                                                <div class="form-control-wrap">
                                                                    <textarea class="form-control" name="content" id="default-textarea" rows="9" required ></textarea>
                                                                </div>
                                                            </div>


                                                        </div>




                                                      <button type="submit" name="submit" style="margin-left:15px;margin-top: 15px" class="btn btn-primary">Submit</button>

                                                      <button type="reset" onclick="self.history.back()" style="margin-left:15px;margin-top: 15px;" class="btn btn-danger">Cancel</button>

                                                    </form>
                                                  </div>

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
    
  </body>
</html>
<?php } ?>
