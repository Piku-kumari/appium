<?php
   echo "loop with continue"; 
    for($i=1;$i<10;$i++){
	  if($i%2==0){
	    continue;
	}
  echo $i."  ";
}
echo "loop with break";
for($i=1;$i<10;$i++){
	  if($i==5){
	    break;
	}
  echo $i."  ";
}
?>  