<?php 
session_start();
error_reporting(1);
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Himghar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
  <link href="css/style.css"rel="stylesheet"/>
</head> 
<body style="margin-top:50px;background-color: #cacfce;">
  <?php
      include('Menu Bar.php')
  ?>
  
<div id="myCarousel" class="carousel slide" data-ride="carousel" > 
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
	   <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
   

    <div class="carousel-inner" role="listbox">
      <?php
		$i=1;
	  $sql=mysqli_query($con,"select * from slider");
		while($slider=mysqli_fetch_assoc($sql))
		{
		$slider_img=$slider['image'];
		$slider_cap=$slider['caption'];
		$path="image/Slider/$slider_img";	
			if($i==1)
			{	
		?>
	  <div class="item active" style="height: 384px;">
        <img src="<?php echo $path; ?>" alt="Image" >
        <div class="carousel-caption">
			<h2><?php echo $slider_cap; ?></h2>
		</div>      
      </div>
		<?php 
		} 
		else 
			{
			?>	
		<div class="item" style="height: 384px;">
        <img src="<?php echo $path; ?>" alt="Image">
        <div class="carousel-caption">
        <h2><?php echo $slider_cap; ?></h2>
		</div>      
      </div>	
				
		<?php	} ?>
	  
	  
		<?php $i++; } ?>
      
	  
    </div>

    
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a> 
  
   
</div> 
 <div class="container-fluid"id="red" style="background-color: #cacfce;"><!--Id Is Red--> 
<div class="container text-center">    
  <h1 style="color:#d87a00;">Welcome To <font style="color:#d87a00;"><b>Himghar</b></font></h1><hr style="color:#215c10"><br>
  <div class="row">
    <div class="hov">
   
	
	<?php 
	$sql=mysqli_query($con,"select * from coldstorages");
	while($r_res=mysqli_fetch_assoc($sql))
	{
	?>


<div class="col-sm-4" style="color:#215c10">
      <img src="image/extpic/<?php echo $r_res['extpic']; ?>"class="img-responsive thumbnail"alt="Image"id="img1"> <!--Id Is Img-->
      <h4  style="color:#215c10; font-family: 'Abril Fatface', cursive;
      text-align:center;
      size:15px;">[ <?php echo $r_res['type']; ?> ]</h4>
      <p class="text-justify"><?php echo substr($r_res['description'],0,100)."..."; ?></p><br>
      <a href="room_details.php?room_id=<?php echo $r_res['slno']; ?>" class="btn btn-danger text-center">Read more</a><br><br>


    </div>
	<?php } ?>
  </div>
  </div>
</div>
</div>

<?php
  include('Footer.php')
?>
</body>
</html>


<!--

  INSERT INTO `coldstorages` (`slno`, `cname`, `cpan`, `cgst`, `type`, `description`, `intpic`, `extpic`, `oname`, `adhar`, `pan`, `address`, `email`, `mobile`, `password`, `propic`) VALUES ('1', 'Kalyani Himghar', 'DFGTY6783R', 'FG678JY56RT9234', 'Potato', 'This is a well-managed cold store. A cool store or cold store is a large refrigerated room or building designed for storage of goods in an environment below the outdoor temperature. Products needing refrigeration include fruit, vegetables, seafood and meat. Cold stores are often located near shipping ports used for import/export of produce.', 'img1.jpg', 'img1.jpg', 'Prithwijit Das', '640100932728', 'GKOPD3856H', 'A11/285, Kalyani, Nadia', 'prithwijitd99@gmail.com', '9874944298', '0e311e5b9704f28b4e8557e8fa3fbe7d', 'img1.jpg');

  -->