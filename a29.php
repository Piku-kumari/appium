<html>
   <head><title>ass6</title></head>
   <body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
   Enter a No1.<input type="number" name="name"><br>
   
   <input type="submit" name="submit" value="Submit Form"><br>
</form>
</body>
</html>
<?php
if(isset($_POST['submit'])) 
{ function fact($a)
	{    
		 if($a==1)
	 return 1 ;
	 else
	return fact(($a-1))*$a;
	
	}
    $n1= $_POST['name'];
	
	$f=fact($n1);
	?>Addition of numbers   <input type="number" value="<?php echo $f ?>">
			 <?php
}
?>