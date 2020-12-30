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
	echo "DIVISION IS   ";
	switch($n)
	{ 
	  case $n>75:
	    echo '"DISTINCTION"';
		  break;
	  case $n>60:
	    echo '"FIEST DIVISION"';
		  break;
	  case $n>45:
	    echo '"SECOND DIVISION"';
		  break;
      case $n>33:
	    echo '"THIRD DIVISION"';
		   break;
      case $n<33:
	    echo '"FAIL"';
           break;  		
        		
		
	  }
	  
}
?>