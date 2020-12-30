<?php
$arr=array(1,2,3,4,5);
$x=3;
$pos=0;
for($i=0;$i<5;$i++)
{
  if($x==$arr[$i])
  {
    $pos=$i;
	break;
	}
	}
	echo $pos;
for($i=$pos;$i<4;$i++)
{
  $arr[$i]=$arr[$i+1];
  }
  for($i=0;$i<4;$i++)
{
  echo $arr[$i]."<br>";
}
?>