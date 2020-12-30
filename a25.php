<html>
   <head><title>ass6</title></head>
   <body>
   <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
   Enter a No1.<input type="number" name="name"><br>
    Enter a No2.<input type="number" name="name1"><br>
   <input type="submit" name="submit" value="Submit Form"><br>
</form>
</body>
</html>
<?php
if(isset($_POST['submit'])) 
{ function add($a,$b)
	{
	?>Addition of numbers   <input type="number" value="<?php echo $a+$b ?>">
			 <?php
	}
    $n1= $_POST['name'];
	$n2=$_POST['name1'];
	add($n1,$n2);
	
}
?>