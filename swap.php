<?php
  function f1(&$a,&$b)
     {
	    $a=$a+$b;
		$b=$a-$b;
		$a=$a-$b;
		echo $a,$b;
	 }
	 $a1=4;
	 $b1=7;
f1($a1,$b1);
 echo $a1,$b1;
 echo str_repeat("jk",6);
 echo ucwords("gfg ghy gfy gfy");
?>	 
<html>
male<input type="radio" id="male" name="gender" value ="male">
female	<input type="radio" id="fmale" name="gender" value ="fmale">
male<input type="radio" id="male" name="gender1" value ="male">
female	<input type="radio" id="fmale" name="gender" value ="fmale">
<select id="pp">
<option value="2">fjned</option>
<option value="3">fj</option>
<option value="4">fjn</option>
<option value="5">fjned</option>
</select>
</html>	
