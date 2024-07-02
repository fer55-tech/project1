<div class="pages">
  <div data-page="features" class="page no-toolbar no-navbar">
    <div class="page-content">
    
  
     <div id="pages_maincontent">
      
    
      <div class="page_content" style="width: 100%;margin: 0px;margin-top: 0px;padding: 0px;padding-bottom: 15px;">

      


      <ul class="features_list_detailed" style="border-radius: 0px;padding-left: 0px;" >
      

         
          <!-- <p style="font-size:12px;color: #000;text-align: center;margin-top: 20px;font-weight: bold;margin-top: -12px;">Transfer Rekening :</p> -->
         <!--  <li>

             <label style="margin-left: 15px;">BCA</label>
          <input style="width: 100%;margin-left: 0px;margin-bottom: 0px;border:0px #cc6911 solid;border-radius:0px;padding-left: 15px;background: transparent;margin-top: 0px;color:#000;width: auto;font-size: 20px;font-size: 12px;margin-bottom: 8px;" type="text" id="myInput1" readonly value="27777089505632700"  />

            <a style="line-height: 14px;background: #000;max-width: 56px;height: 23px;color: #fff;position: absolute;right: 13px;cursor: pointer;margin-top: 4px;margin-right: 10px;"  class="btn btn-default shadow-sm btn-sm w-100 btn-rounded" onclick="myFunction1()" onmouseout="outFunc1()" id="myTooltip1">Copy</a>
          </li>

          <li>

             <label style="margin-left: 15px;">BRI</label>
          <input style="width: 100%;margin-left: 0px;margin-bottom: 0px;border:0px #cc6911 solid;border-radius:0px;padding-left: 15px;background: transparent;margin-top: 0px;color:#000;width: auto;font-size: 20px;font-size: 12px;margin-bottom: 8px;" type="text" id="myInput2" readonly value="77778089505632700"  />

            <a style="line-height: 14px;background: #000;max-width: 56px;height: 23px;color: #fff;position: absolute;right: 13px;cursor: pointer;margin-top: 4px;margin-right: 10px;"  class="btn btn-default shadow-sm btn-sm w-100 btn-rounded" onclick="myFunction2()" onmouseout="outFunc2()" id="myTooltip2">Copy</a>
          </li>

          <li>

             <label style="margin-left: 15px;">MANDIRI</label>
          <input style="width: 100%;margin-left: 0px;margin-bottom: 0px;border:0px #cc6911 solid;border-radius:0px;padding-left: 15px;background: transparent;margin-top: 0px;color:#000;width: auto;font-size: 20px;font-size: 12px;margin-bottom: 8px;" type="text" id="myInput3" readonly value="777710895056532700"  />

            <a style="line-height: 14px;background: #000;max-width: 56px;height: 23px;color: #fff;position: absolute;right: 13px;cursor: pointer;margin-top: 4px;margin-right: 10px;"  class="btn btn-default shadow-sm btn-sm w-100 btn-rounded" onclick="myFunction3()" onmouseout="outFunc3()" id="myTooltip3">Copy</a>
          </li>

          <li> -->

          <!--    <label style="margin-left: 15px;">BNI</label>
          <input style="width: 100%;margin-left: 0px;margin-bottom: 0px;border:0px #cc6911 solid;border-radius:0px;padding-left: 15px;background: transparent;margin-top: 0px;color:#000;width: auto;font-size: 20px;font-size: 12px;margin-bottom: 8px;" type="text" id="myInput4" readonly value="9011089505632700"  />

            <a style="line-height: 14px;background: #000;max-width: 56px;height: 23px;color: #fff;position: absolute;right: 13px;cursor: pointer;margin-top: 4px;margin-right: 10px;"  class="btn btn-default shadow-sm btn-sm w-100 btn-rounded" onclick="myFunction4()" onmouseout="outFunc4()" id="myTooltip4">Copy</a>
          </li> -->
          
      </ul>
    

      <li class="featured" style="border-radius: 0px;background: #35f5bf;padding: 15px;margin-top: 0px;padding-bottom: 0px;height: 245px;" >
        
        <div style="display: block;border-radius: 10px;border: 2px #fff solid;height: 95px;">
          
          <input style="width: 100%;margin-left: 0px;margin-bottom: 0px;border:0px #cc6911 solid;border-radius:0px;padding-left: 15px;background: transparent;margin-top: 12px;color:#fff;width: auto;font-size: 46px" type="text" id="myInput" readonly value="<?= $depo['amount']+ $depo['uniq_code'];?>"  />

          
       
        </div>
         <a  onclick="myFunction()" onmouseout="outFunc()" id="myTooltip">
       <img style="width: 56px;position: absolute;right: 32px;top: 74px;" src="<?php echo base_url();?>assets/salin.png" alt="logo icon">
     </a>
    

        
      </li> 

      <p style="font-size:47px;color: #000;text-align: center;margin-top: 20px;font-weight: bold;">Lakukan scan barcode dibawah ini</p>
      <img style="width: 425px;margin:0 auto;display: block;margin-top: 15px;border: 2px #000 solid;border-radius: 20px;padding:5px" src="<?php echo base_url();?>assets/qrsroyal.jpeg"> 



     <!--  <div style="margin-bottom: 0px;margin-top: 10px;" >
        <img src="<?php //echo base_url();?>assets/front/product/ic_bca.png" style="width:100px" > 
        <p style="margin-left:118px;font-size:25px;margin-top: -59px;"> Axxxx Axxxx</p>
        <p style="margin-left:15px;margin-left: 118px;font-size:25px;margin-top: -29px;"> 2980994832</p>

      </div>

      <div style="margin-bottom: 20px;margin-top: 10px;" >
        <img src="<?php //echo base_url();?>assets/front/product/ic_hopee.png" style="width:100px" > 
       
        <p style="margin-left:15px;margin-left: 118px;font-size:25px;margin-top: -45px;"> 122087777501532</p>

      </div> -->
      
      </div>

      </div>
      
      
    </div>
  </div>
</div>

<script>
  function myFunction() {
    var copyText = document.getElementById("myInput");
    copyText.select();
    copyText.setSelectionRange(0, 99999);
    document.execCommand("Copy");
    
    var tooltip = document.getElementById("myTooltip");
    // tooltip.innerHTML = "Copied ";
  }

  function outFunc() {
    var tooltip = document.getElementById("myTooltip");
    // tooltip.innerHTML = "Copied";
  }

  function myFunction1() {
    var copyText = document.getElementById("myInput1");
    copyText.select();
    copyText.setSelectionRange(0, 99999);
    document.execCommand("Copy");
    
    var tooltip = document.getElementById("myTooltip1");
    tooltip.innerHTML = "Copied ";
  }

  function outFunc2() {
    var tooltip = document.getElementById("myTooltip2");
    tooltip.innerHTML = "Copied";
  }

  function myFunction2() {
    var copyText = document.getElementById("myInput2");
    copyText.select();
    copyText.setSelectionRange(0, 99999);
    document.execCommand("Copy");
    
    var tooltip = document.getElementById("myTooltip2");
    tooltip.innerHTML = "Copied ";
  }

  function outFunc2() {
    var tooltip = document.getElementById("myTooltip2");
    tooltip.innerHTML = "Copied";
  }

  function myFunction3() {
    var copyText = document.getElementById("myInput3");
    copyText.select();
    copyText.setSelectionRange(0, 99999);
    document.execCommand("Copy");
    
    var tooltip = document.getElementById("myTooltip3");
    tooltip.innerHTML = "Copied ";
  }

  function outFunc3() {
    var tooltip = document.getElementById("myTooltip3");
    tooltip.innerHTML = "Copied";
  }

  function myFunction4() {
    var copyText = document.getElementById("myInput4");
    copyText.select();
    copyText.setSelectionRange(0, 99999);
    document.execCommand("Copy");
    
    var tooltip = document.getElementById("myTooltip4");
    tooltip.innerHTML = "Copied ";
  }

  function outFunc4() {
    var tooltip = document.getElementById("myTooltip4");
    tooltip.innerHTML = "Copied";
  }
</script>

