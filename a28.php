<html>
   <head><title>ass6</title></head>
   <body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
   Enter a No1.<input type="number" name="name"><br>
   Enter a No2.<input type="number" name="name1"><br>
   Enter a No3.<input type="number" name="name2"><br>
   <input type="submit" name="submit" value="Submit Form"><br>
</form>
</body>
</html>
<?php
if(isset($_POST['submit'])) 
{ 
    $n1= $_POST['name'];
	$n2=$_POST['name1'];
	$n3=$_POST['name2'];
	      if($n1>$n2&&$n1>$n3)
		     $max=$n1;
		  else if($n3>$n2)
		     $max=$n3;
		  else
		     $max=$n2;
	?>
Greatest of numbers   <input type="number" value="<?php echo $max ?>">
<?php
}
?>