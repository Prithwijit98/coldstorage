<form action="#" method="get">
    X = <input type="text" name="f"><br> 
    Y = <input type="text" name="s"><br>
 <input type="submit">
</form>

<?php 
$x = $_GET["f"];
$y = $_GET["s"];
$total = pow($x,$y);
?>
Power(x,y) = <?php echo "".$total; ?>