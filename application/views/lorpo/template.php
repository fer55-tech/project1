
<?php 
if ($this->session->level_login==''){
    redirect(base_url());
}else{
?>

<!DOCTYPE html>

<html lang="en"  data-x="html" data-x-toggle="html-overflow-hidden" >


<head>
  <!-- Required meta tags -->

  <title>TechnoGym</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="https://ik.imagekit.io/bqo7pjket/logo.png?updatedAt=1719290009344">

  <!-- Google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600&amp;display=swap" rel="stylesheet">

  <link href="<?php echo base_url();?>assets/front/css/vendors.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/front/css/main.css" rel="stylesheet">

   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('a.close').click(function(eve){
        
        eve.preventDefault();
        $(this).parents('div.popup').fadeOut('slow');
      });
    });
  </script>

    <style type="text/css">
 
  
       div.popup{
         position:fixed;
         top:0;
         bottom:0;
         left:0;
         right:0;
         width:100%;
         height:100%;
         z-index: 10000;
         background: rgba(0,0,0,.8);
       }
       
       div#box{
         margin:20% auto;
         
         padding: 15px;
         -webkit-box-shadow:0 0 15px #000;
         -moz-box-shadow:0 0 15px #000;
         box-shadow:0 0 15px #000;
       }
       
       a.close{
         text-decoration:none;
         color:#fff;
         margin:10px 5px 0 0;
         float:right;
         font-size:20px;
       }
    
     .kefu{
     width: 65px;
     height: 65px;
     position: fixed;
     z-index: 10;
     right: 22px;
     bottom: 66px;
     transition: all 1s;
     opacity: 1;
     transform: translateX(0);
     z-index: 80;
     font-weight: bold;
     }
     .kefu1{
     width: 65px;
     height: 65px;
     position: fixed;
     z-index: 10;
     right: 0px;
     bottom: 125px;
     transition: all 1s;
     opacity: 1;
     transform: translateX(0);
     z-index: 80;
     font-weight: bold;
     }
 </style>

</head>

<body style="background:#000033">
  <!--  <div class="preloader js-preloader">
    <div class="preloader__wrap">
      <div class="preloader__icon">
        <svg width="38" height="37" viewBox="0 0 38 37" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g clip-path="url(#clip0_1_41)">
            <path d="M32.9675 13.9422C32.9675 6.25436 26.7129 0 19.0251 0C11.3372 0 5.08289 6.25436 5.08289 13.9422C5.08289 17.1322 7.32025 21.6568 11.7327 27.3906C13.0538 29.1071 14.3656 30.6662 15.4621 31.9166V35.8212C15.4621 36.4279 15.9539 36.92 16.561 36.92H21.4895C22.0965 36.92 22.5883 36.4279 22.5883 35.8212V31.9166C23.6849 30.6662 24.9966 29.1071 26.3177 27.3906C30.7302 21.6568 32.9675 17.1322 32.9675 13.9422V13.9422ZM30.7699 13.9422C30.7699 16.9956 27.9286 21.6204 24.8175 25.7245H23.4375C25.1039 20.7174 25.9484 16.7575 25.9484 13.9422C25.9484 10.3587 25.3079 6.97207 24.1445 4.40684C23.9229 3.91841 23.6857 3.46886 23.4347 3.05761C27.732 4.80457 30.7699 9.02494 30.7699 13.9422ZM20.3906 34.7224H17.6598V32.5991H20.3906V34.7224ZM21.0007 30.4014H17.0587C16.4167 29.6679 15.7024 28.8305 14.9602 27.9224H16.1398C16.1429 27.9224 16.146 27.9227 16.1489 27.9227C16.152 27.9227 23.0902 27.9224 23.0902 27.9224C22.3725 28.8049 21.6658 29.6398 21.0007 30.4014ZM19.0251 2.19765C20.1084 2.19765 21.2447 3.33365 22.1429 5.3144C23.1798 7.60078 23.7508 10.6649 23.7508 13.9422C23.7508 16.6099 22.8415 20.6748 21.1185 25.7245H16.9322C15.2086 20.6743 14.2994 16.6108 14.2994 13.9422C14.2994 10.6649 14.8706 7.60078 15.9075 5.3144C16.8057 3.33365 17.942 2.19765 19.0251 2.19765V2.19765ZM7.28053 13.9422C7.28053 9.02494 10.3184 4.80457 14.6157 3.05761C14.3647 3.46886 14.1273 3.91841 13.9059 4.40684C12.7425 6.97207 12.102 10.3587 12.102 13.9422C12.102 16.7584 12.9462 20.7176 14.6126 25.7245H13.2259C9.33565 20.6126 7.28053 16.5429 7.28053 13.9422Z" fill="#3554D1" />
          </g>

          <defs>
            <clipPath id="clip0_1_41">
              <rect width="36.92" height="36.92" fill="white" transform="translate(0.540039)" />
            </clipPath>
          </defs>
        </svg>
      </div>
    </div>

    <div class="preloader__title">GoTrip</div>
  </div> --> 

  <main>

    <?php include "main-header.php";?>


   <?php echo $contents; ?>



   <!--  <footer class="footer -type-1 bg-green-1" style="max-width:460px;width:100%;margin:0 auto;">
      <div class="container">
        

        <div class="py-20 border-top-white-15">
          <div class="row justify-between items-center y-gap-10">
            <div class="col-auto">
              <div class="row x-gap-30 y-gap-10">
                <div class="col-auto">
                  <div class="d-flex items-center">
                    © 2024 Monera All rights reserved.
                  </div>
                </div>

              </div>
            </div>

            <div class="col-auto">
              <div class="row y-gap-10 items-center">
                

                <div class="col-auto">
                  <div class="d-flex x-gap-20 items-center">
                    <a href="#"><i class="icon-facebook text-14"></i></a>
                    <a href="#"><i class="icon-twitter text-14"></i></a>
                    <a href="#"><i class="icon-instagram text-14"></i></a>
                    <a href="#"><i class="icon-linkedin text-14"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer> -->

  </main>


  <!-- JavaScript -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAz77U5XQuEME6TpftaMdX0bBelQxXRlM"></script>
  <script src="<?php echo base_url();?>assets/front/unpkg.com/%40googlemaps/markerclusterer%402.5.3/dist/index.min.js"></script>
  <script src="<?php echo base_url();?>assets/front/js/vendors.js"></script>
  <script src="<?php echo base_url();?>assets/front/js/main.js"></script>

</body>

</html>

<?php } ?>