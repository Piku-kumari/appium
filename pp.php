<html>
<head>
<title> ,</title>
</head>
<body>
     <form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
	  enter a mo. <input type="number" value="0" name="n">
	  <input type="submit" value="submit" name="s">
	 </form>
</body>
</html>
<?php 
    if(isset($_REQUEST['s']))
	{
	  $n=$_POST["n"];
	  for($i=2;$i<$n;$i++)
	  {
	     if($n%$i==0)
		 {
		    
		    break;
	     
        }
		}
		if($n==$i)
		echo "prime no";
		else
		echo "not";
		}
?>
