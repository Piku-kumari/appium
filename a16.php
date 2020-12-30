<html>
   <head><title>ass6</title></head>
   <body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
   Enter a Name.<input type="text" name="name"><br>
    Enter a Name.<input type="text" name="name1"><br>
   <input type="submit" name="submit" value="Submit Form"><br>
</form>
</body>
</html>
<?php
if(isset($_POST['submit'])) 
{ 
    $n1= $_POST['name'];
	$n2=$_POST['name1'];
	$name=$n1.$n2;
	echo "concatenation of two string is ".$name;
}
?>