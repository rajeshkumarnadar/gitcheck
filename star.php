<?php




$m=6;
  for($i=1;$i<=$m ;$i++ ) {  
    
     for($j=$m ; $j>$i ; $j--) {
    	echo '&nbsp;&nbsp;&nbsp;';
  	}
  	 for($k=1 ; $k<=$i ; $k++) {
    		echo '*&nbsp;';
    }
    for($l=1;$l<$j;$l++){
    		echo '*&nbsp;';
    }

      echo "<br>";


  }

 
 


  



    ?>