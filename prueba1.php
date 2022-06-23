<?php

	/*Escribir un programa en PHP que imprima una X construida a base de la letra X y
	utilizar el carácter de subrayado como espacio. El tamaño de la x se basa en una
	variable n que indicará el tamaño de la letra para imprimir (en una matriz de n x n).
	Por ejemplo, para n = 5 se obtiene:*/
	
	
	$n = 5;
	$cont = 0;
	$cont2 = 0;
	
	
	
	if ($n == 0){
		
		echo "error";
	}
	for ($i = 1;$i<=$n;$i++){
		
		for($j = 1;$j<= $n; $j++){
			
			if ((($j == $n || $j == 1)&&($i == 1 || $i == 5))||(($j == 2 || $j == 4)&&($i == 2 || $i ==4))||($j == 3 && $i ==3)){
				echo "X";
			}
			else{
				
				echo "_";
				
			}
			
			
		}
			echo "<br>";
	}


?>