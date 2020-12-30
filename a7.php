<html>
   <head><title>ass6</title></head>
   <body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
   Enter a Number.<input type="number" name="name"><br>
   <input type="submit" name="submit" value="Submit Form"><br>
</form>
</body>
</html>
<?php
if(isset($_POST['submit'])) 
{ 
    $n = $_POST['name'];
	echo "even nos are<br>";
	$sum=0;
    for($i=2;$i<=$n;$i+=2)
	   $sum+=$i;
	  echo $sum."<br>";
}
?>