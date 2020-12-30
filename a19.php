<html>
   <head><title>ass6</title></head>
   <body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
   Enter a Name.<input type="text" name="name"><br>
   
   <input type="submit" name="submit" value="Submit Form"><br>
</form>
</body>
</html>
<?php
if(isset($_POST['submit'])) 
{ 
    $n1= $_POST['name'];
	
	$str=strrev($n1);
	if(strcmp($n1,$str)==0)
	{
	  echo "pallindrom";
    }
else
echo "not pallindrom";	
}		
?>