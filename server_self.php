
   <?php
      if(isset($_POST["submit"]))
	     {
		    $n11=$_POST["n1"];
			 $n22=$_POST["n2"];
			
			 if($n11>$n22)
			 {?>GREATER VALUE<input type="number" value="<?php echo $n11 ?>">
			 <?php
			 }
			 else
			 {
			  ?>GREATER VALUE<input type="number" value="<?php echo $n22 ?>">
			 <?php
			 }
		 }
			 ?>
			 <html>
<body>
   <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
   first no. <input type="number" name="n1"><br>
   second no. <input type="number" name="n2"><br>
   <input type="submit" name="submit">
   </form></body>
   </html>
			
		
		