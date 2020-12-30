<?php
    class submit{
	   public $n11,$n22;
	   function __construct($n1,$n2)
	   {
	      $this->n11=$n1;
		  $this->n22=$n2;
		  }
		  function __destruct()
		  {
		     echo "destroy";
			 }
			 function greater($n1,$n2)
			 {
			      if($this->n11>$this->n22)
			 {?>GREATER VALUE<input type="number" value="<?php echo $this->n11 ?>">
               <?php
			 }
			 else
			 {
			  ?>GREATER VALUE<input type="number" value="<?php echo $this->n22 ?>">
			 <?php
			 }
			 
			 }
	}
			 
      if(isset($_POST["submit"]))
	     
	     { ?>
  <span style="color:red">dggd</span><?php 
   $form=new submit($_POST["n1"],$_POST["n2"]);
		     $form->greater($_POST["n1"],$_POST["n2"]);
		      
			
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