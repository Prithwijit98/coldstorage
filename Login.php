<?php 
session_start();
error_reporting(1);
if($_SESSION['create_account_logged_in']!="")
{
header('location:Booking Form.php');
}
error_reporting(1);
require('connection.php');
extract($_REQUEST);
if(isset($login))
{
  if($eid=="" || $pass=="")
  {
  $error= "<h4 style='color:red'>fill all details</h4>";  
  }   
  else
  {
  $sql=mysqli_query($con,"select * from create_account where email='$eid' && password='$pass' ");
    if(mysqli_num_rows($sql))
    {
    $_SESSION['create_account_logged_in']=$eid;  
    header('location:Profile.php'); 
    }
    else
    {
    $error= "<h4 style='color:red'>Invalid login details</h4>"; 
    } 
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Himghar | CD Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="css/style.css"rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Akronim|Libre+Baskerville" rel="stylesheet">
</head>
<body style="margin-top:50px;">
<?php
include('Menu Bar.php')
?>
<div class="container-fluid" style="background-color: #cacfce"><!-- Primary Id-->
  <div class="container">
    <div class="row"><br>
      <div class="col-sm-4"></div>
        <div class="col-sm-4 text-center"style="box-shadow:2px 2px 2px;border-radius:50px; background-color:#000008;"><br>

        	<h1 align="center"><b><font style="font-family: 'Libre Baskerville', serif;font-size: 34px;text-shadow:3px 3px #000;">Commodity Dealer Login</font></b></h1>
          <img src="image/clipart/user.png"alt="Bird" width="200" height="170"style="padding-top:30px;">
          <?php echo @$error; ?>
          <form method="post"><br>
              <div class="form-group">
                <input type="Email" class="form-control"name="eid"placeholder="Email Id" autocomplete="off"required >
              </div>
            <div class="form-group">
                <input type="Password" class="form-control"name="pass"placeholder="Password" autocomplete="off"required>
            </div>
          <input type="submit" value="Login" name="login" class="btn btn-primary btn-group btn-group-justified"required><br>
          <div class="form-group " style="color: white;" >
                <a href="Forgot account.php" class="gg">Forget Account</a>&nbsp; <b>|</b>&nbsp; 
                <a href="Registation form.php" class="gg">Create an Account</a>
            </div>
      	</form><br>
        </div>
    </div><br>
  </div>
</div>
<?php
include('Footer.php')
?>
</body>
</html>
