<?php  
	$color = array('white', 'green', 'red');  
	foreach ($color as $i)  
	{  
		echo "$i, ";  
	}  
	sort($color);  
	echo "<ul>";  
	foreach ($color as $a)  
	{  
		echo "<li>$a</li>";  
	}  
	echo "</ul>";  
?> 
