<?php 
include('connection.php');
extract($_REQUEST);
if(isset($send))
{
mysqli_query($con,"insert into feedback values('','$n','$e','$mob','$msg')");	
$msg= "<h4 style='color:green;'>feedback sent successfully</h4>";
}
?>
<!-- Footer1 Start Here-->

<footer style="background-color: #393939;">
    <div class="container-fluid">
	<div class="col-sm-4 text-justify">
    <img src="../image/clipart/himgharlogo.png" height="40px" style="margin-top:5px; display: inline-block;">
      <img src="../image/clipart/himghar.png" width="160px"height="40px"style="margin-top:5px;display: inline-block;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         
      <center><a href="../about.php" class="btn btn-danger"><b>About Us</b></a></center><br>
 <?php
  include('Social icon.php')
?>
	</div>&nbsp;&nbsp;
	<div class="col-sm-4 text-justify">
	       <h3 style="color:#cdd51f;">Contact Us</h3>
      <p style="color:white;"><strong>Address:&nbsp;</strong>118, B.N. Chatterjee, Ghoshpara, Hooghly, West Bengal, Pin - 712504</p>
      <p style="color:white;"><strong>Email-Id:&nbsp;</strong>deepankarkumarabcd@gmail.com</p>
      <p style="color:white;"><strong>Contact Us:&nbsp;</strong>(+91) 8017340563</p><br><br><br>
     <center><!--<img src="devlop/img2.png"class="img-responsive"style="width:200px;height:150px;border-radius:100%;">--></center>
	</div>&nbsp;
<div class="col-sm-4 text-center" style="height: 100px;">
      <div class="panel panel-primary">
<div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
    <div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div><script>(function () {
        var setting = {"height":200,"width":803,"zoom":16,"queryString":"Baikunthapur, Tribeni, West Bengal, India","place_id":"ChIJv-kL8lKT-DkR5kdvdMEJRMA","satellite":false,"centerCoord":[22.98824792810172,88.3862459242304],"cid":"0xc04409c1746f47e6","lang":"en","cityUrl":"/india/kalyani-127040","cityAnchorText":"Map of Kalyani, West Bengal, India","id":"map-9cd199b9cc5410cd3b1ad21cab2e54d3","embed_id":"334858"};
        var d = document;
        var s = d.createElement('script');
        s.src = 'https://1map.com/js/script-for-user.js?embed_id=334858';
        s.async = true;
        s.onload = function (e) {
          window.OneMap.initMap(setting)
        };
        var to = d.getElementsByTagName('script')[0];
        to.parentNode.insertBefore(s, to);
      })();</script><a href="https://1map.com/map-embed">1 Map</a></div></div></div>

  <!--Feedback Start Here-->
<!--	<div class="col-sm-4 text-center">
      <div class="panel panel-primary">
        <div class="panel-heading">Feedback</div>
          <div class="panel-body">
            <?php echo @$msg; ?>
      <div class="feedback">
      <form method="post"><br>
        <div class="form-group">
          <input type="text" name="n" class="form-control" id="#"placeholder="Enter Your Name"required>
        </div>
        <div class="form-group">
          <input type="Email" name="e" class="form-control" id="#"placeholder="Email"required>
        </div>
        <div class="form-group">
          <input type="Number" name="mob" class="form-control" id="#"placeholder="Mobile Number"required>
        </div>
        <div class="form-group">
          <textarea type="Text" name="msg" class="form-control" id="#"placeholder="Type Your Massage"required></textarea>
        </div>
          <input type="submit" value="send" name="send" class="btn btn-primary btn-group-justified"required>
      </form>     
        </div>
       </div>
      </div>
    </div>-->

    <!--Feedback Panel Close here-->

  </div>
</footer>
<!--Footer1 Close Here-->

<!--Footer2 start Here-->

<footer class="container-fluid text-center"style="background-color:#000408;height:40px;padding-top:10px;color:#f0f0f0;">
  <p>Develope By AmitVish@ | All Rights Reserved 2019</p>
</footer>

<!--Footer2 start Here-->