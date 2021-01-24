<?php 
include('connection.php');
extract($_REQUEST);
if(isset($send))
{
mysqli_query($con,"insert into feedback values('','$n','$e','$mob','$msg')"); 
$msg= "<h4 style='color:green;'>feedback sent successfully</h4>";
}
?>

<footer style="background-color: #393939;">
    <div class="container-fluid">
  <div class="col-sm-4 text-justify">
    <center><img src="image/clipart/himgharlogo.png" height="60px" style="margin-top:5px; display: inline-block;">
      <img src="image/clipart/himghar.png" width="160px"height="40px"style="margin-top:5px;display: inline-block;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br><br>
         </center>
      <center><a href="about.php" class="btn btn-danger"><b>About Us</b></a></center><br>
 <?php
  include('Social icon.php')
?>
  </div>&nbsp;&nbsp;
  <div class="col-sm-4 text-justify">
         <h3 style="color:#cdd51f;">Contact Us</h3>
      <p style="color:white;"><strong>Address:&nbsp;</strong>118, B.N. Chatterjee, Ghoshpara, Hooghly, West Bengal, Pin - 712504</p>
      <p style="color:white;"><strong>Email-Id:&nbsp;</strong>deepankarkumarabcd@gmail.com</p>
      <p style="color:white;"><strong>Contact Us:&nbsp;</strong>(+91) 8017340563</p><br><br><br>
     
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

  </div>
</footer>

<footer class="container-fluid text-center"style="background-color:#000408;height:40px;padding-top:10px;color:#f0f0f0;">
  <p>Website Designed By Deepankar Kumar & Prithwijit Das</p>
</footer>
