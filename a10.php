<html>
   <head><title>ass6</title></head>
   <body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
   Enter a Number.<input type="text" name="name" value="0"><br>
   <input type="submit" name="submit" value="Submit Form"><br>
</form>
</body>
</html>
<?php
/*if(isset($_POST['submit'])) 
{  $rev=0;
    $n = $_POST['name'];
	while($n>0)
	 {
	   $d=$n%10;
	   $rev=$rev*10+$d;
	   $n=floor($n/10);
	  }
	?>Reverse of number   <input type="number" value="<?php echo $rev ?>">
			 <?php
}*/
if(isset($_POST['submit']))
{
	$n = $_POST['name'];
	/*$num=$n;
	$x=$num;
	$i=0;
	$sum=0;
	while($n>0)
	 {
	   $d=$n%10;
	   $i=$i+1;
	   $n=floor($n/10);
	 }
	 echo $i;
	 while($num>0)
	 {
	   $d=$num%10;
	   $sum+=pow($d,$i);
	   $num=floor($num/10);
	  }
	   echo $sum,pow(9,2);
	  if($sum==$x)
	  echo "palindrome";
	  else
	  echo "not";*/
	  $s=strrev($n);
	  if($s===$n)
	  echo 'palindrome:';
       	
}

?>