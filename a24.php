<html>
   <head><title>ass6</title></head>
   <body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
   Enter a string.<input type="text" name="name"><br>
   
   <input type="submit" name="submit" value="Submit Form"><br>
</form>
</body>
</html>
<?php
if(isset($_POST['submit'])) 
{ 
    $n1= $_POST['name'];
	
	$str=strrev($n1);
	?>Reverse of String   <input type="text" value="<?php echo $str; ?>">
			 <?php
	}
	
?>