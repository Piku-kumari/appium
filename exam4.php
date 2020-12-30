<?php
$x=10;
$y=20;
function swap($x,$y)
{
  $x=$x+$y;
  $y=$x-$y;
  $x=$x-$y;
  
  echo $x, $y;
  
  }
swap($x,$y);
echo $x,$y;

?>