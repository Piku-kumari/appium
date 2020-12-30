<html>
<head><title> reverse</title>
</head>
<body>
   <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
   Enter number <input type="number" name="n" value="0"><br>
   <input type="submit" name="s" ><br>
   
   
   
   </FORM>
</body
</html>

<?php
   if(isset($_POST['s']))
     {
	   $no=$_POST['n'];
	   $d=0;
	   $rev=0;
	   while($no>0)
	   {
	      $d=$no%10;
		  $rev=$rev*10+$d;
		  $no=floor($no/10);
	   }
	   ?>
	   Enter number <input type="number" name="n" value="<?php echo $rev; ?>"><br>
	   <?php
	   }
	   ?>