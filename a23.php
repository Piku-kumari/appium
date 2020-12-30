<html>
   <head><title>ass6</title></head>
   <body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Please Enter submit button to include file a10.php <input type="submit" name="submit" value="Submit Form"><br>
</form>
</body>
</html>
<?php
if(isset($_POST['submit'])) 
{ 
 include("a10.php");
 }
 ?>