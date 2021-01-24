<?php
session_start();
error_reporting(1);
require('../connection.php');
extract($_REQUEST);
if(isset($save))
{
  $sql= mysqli_query($con,"select * from coldstorages where email='$email' ");
  if(mysqli_num_rows($sql))
  {
  $msg= "<h1 style='color:red'> account already exists</h1>";    
  }
  else
  {

    

  $sql="INSERT INTO coldstorages(cname,cpan,cgst,type,description,intpic,extpic,oname,adhar,pan,address,email,mobile,password,propic) VALUES ('$cname','$cpan','$cgst','$desc','$ipic','$epic','$fname','$aadhar','$pan','$addr','$email','$mobi','$passw','$ppic');";
      #$sql="insert into create_account(name,email,password,mobile,address,gender,country,pictrure) values('$fname','$email','$Passw','$mobi','$addr','$gend','$countr','$pict')";
   if(mysqli_query($con,$sql))
   {
   $msg= "<h1 style='color:green'>Data Saved Successfully</h1>"; 
   header('location:Login.php'); 
   }
  }
}
?>
<!DOCTYPE html>

<!--

  INSERT INTO `coldstorages` (`slno`, `cname`, `cpan`, `cgst`, `type`, `description`, `intpic`, `extpic`, `oname`, `adhar`, `pan`, `address`, `email`, `mobile`, `password`, `propic`) VALUES ('1', 'Kalyani Himghar', 'DFGTY6783R', 'FG678JY56RT9234', 'Potato', 'This is a well-managed cold store. A cool store or cold store is a large refrigerated room or building designed for storage of goods in an environment below the outdoor temperature. Products needing refrigeration include fruit, vegetables, seafood and meat. Cold stores are often located near shipping ports used for import/export of produce.', 'img1.jpg', 'img1.jpg', 'Prithwijit Das', '640100932728', 'GKOPD3856H', 'A11/285, Kalyani, Nadia', 'prithwijitd99@gmail.com', '9874944298', '0e311e5b9704f28b4e8557e8fa3fbe7d', 'img1.jpg');

  -->


<html lang="en">
<head>
  <title>Himghar|Cold Storage Regn.</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="css/style.css"rel="stylesheet"/>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai" rel="stylesheet">
</head>
<body style="margin-top:50px;">
  <?php 
include('Menu Bar.php');
  ?>
<div class="container-fluid"style="background-color:#cacfce;color:#000;"> <!-- Primary Id-->
  <div class="container">
    <div class="row">
      <center><h1 style="background-color:#cacfce; border-radius:10px;display:inline-block;"><b><font color="#080808">Register Cold Storage</font></b></h1></center>
       <center><?php echo @$msg;?></center><br>
      <div class="col-sm-2"></div>
      <div class="col-sm-6 ">
        <form class="form-horizontal" action="#" method="post">
        <div class="form-group">

            <div class="control-label col-sm-5"><h4>Company Name :</h4></div>
          <div class="col-sm-7">
              <br><input type="text" name="cname" class="form-control"placeholder="Enter Your Name"required>
          </div>
        </div>

        <div class="form-group">
            <div class="control-label col-sm-5"><h4>Company PAN No :</h4></div>
          <div class="col-sm-7">
              <br><input type="text" name="cpan" class="form-control"placeholder="Enter Your Company PAN Number"required>
          </div>
        </div>

        <div class="form-group">
            <div class="control-label col-sm-5"><h4>Company GST No :</h4></div>
          <div class="col-sm-7">
              <br><input type="text" name="cgst" class="form-control"placeholder="Enter Your Company PAN Number"required>
          </div>
        </div>

        <div class="form-group">
            <div class="control-label col-sm-5"><h4>Description :</h4></div>
          <div class="col-sm-7">
              <br><input type="text" name="desc" class="form-control"placeholder="Enter the commodities you deal with"required>
          </div>
           </div>

          <div class="form-group">
            <div class="control-label col-sm-5"><h4 id="top">Interior pic :</h4></div>
          <div class="col-sm-7">
              <br><input type="file" name="ipic"accept="image/*"required>
          </div>
        </div>

          <div class="form-group">
            <div class="control-label col-sm-5"><h4 id="top">Exterior pic :</h4></div>
          <div class="col-sm-7">
              <br><input type="file" name="epic" accept="image/*"required>
          </div>
        </div>

    <div class="form-group">
        <div class="control-label col-sm-5"><h4>Owner Name :</h4></div>
          <div class="col-sm-7">
              <br><input type="text" name="fname" class="form-control"placeholder="Enter Your Name"required>
          </div>
        </div>

        <div class="form-group">
            <div class="control-label col-sm-5"><h4>Aadhar No :</h4></div>
          <div class="col-sm-7">
              <br><input type="tel" name="aadhar" pattern="[0-9]{12}" class="form-control"placeholder="Enter Your Aadhar Number"required>
          </div>
        </div>

        <div class="form-group">
            <div class="control-label col-sm-5"><h4>PAN No :</h4></div>
          <div class="col-sm-7">
              <br><input type="text" name="pan" class="form-control"placeholder="Enter Your PAN Number"required>
          </div>
        </div>


        <div class="form-group">
            <div class="control-label col-sm-5"><h4>Address :</h4></div>
          <div class="col-sm-7">
              <br><textarea  name="addr" class="form-control"required></textarea>
          </div>
        </div>


        <div class="form-group">
            <div class="control-label col-sm-5"><h4>Email-Id :</h4></div>
          <div class="col-sm-7">
              <br><input type="email" name="email" class="form-control"placeholder="Enter Your Email-id" autocomplete="off"required>
          </div>
        </div>

        <div class="form-group">
            <div class="control-label col-sm-5"><h4>Mobile No :</h4></div>
          <div class="col-sm-7">
              <br><input type="tel" name="mobi" pattern="[0-9]{10}" class="form-control"placeholder="Enter Your Mobile Number"required>
          </div>
        </div>

        <div class="form-group">
            <div class="control-label col-sm-5"><h4>Password :</h4></div>
          <div class="col-sm-7">
              <br><input type="password" name="passw" class="form-control"placeholder="Enter Your Password"autocomplete="off"required>
          </div>
        </div>



        

        

          <!--<div class="form-group">
            <div class="control-label col-sm-5"><h4>Country :</h4></div>
          <div class="col-sm-7">
            <select name="countr" class="form-control"required>
              <option>India</option>
              <option>Pakistan</option>
              <option>China</option>
            </select>
        </div>
        </div>-->

        <div class="form-group">
            <div class="control-label col-sm-5"><h4 id="top">Profile pic :</h4></div>
          <div class="col-sm-7">
              <br><input type="file" name="ppic"accept="image/*"required>
          </div>

          <div class="row">
            <div class="col-sm-6"style="text-align:right;"><br>
            <input type="submit" value="Submit" name="save"class="btn btn-success btn-group-justified"required style="color:#fff;font-family: 'Baloo Bhai', cursive; font-size: 20px; height:40px;background-color: #4ea349;"/>
          </div>

          </div>
          </div>
        </form>
        </div>
      </div>
        <div class="col-sm-4">
        </div>
    </div>
  </div>
</div>
<?php
    include('Footer.php')
?>
</body>
</html>
