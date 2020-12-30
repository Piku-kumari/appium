<?php
  $n=rand(1,5);
  echo $n;
  switch($n)
	{ 
	  case $n==5:
	    echo '<img src="image/car.jpg">';
		  break;
	  case $n==4:
	    echo '<img src="image/cat1.jpg">';
		  break;
	  case $n==3:
	    echo '<img src="image/paint1.jpg">';
		  break;
      case $n==2:
	    echo '<img src="image/cat.jpg">';
		   break;
      case $n==1:
	    echo '<img src="image/paint2.jpg">';
           break;  		
        		
		
	  }
 ?>