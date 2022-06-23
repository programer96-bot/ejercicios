/*y para n=6 se obtiene:
X____X
_X__X_
__XX__
__XX__
_X__X_
X____X
Si n es igual a cero imprimir "ERROR"
El código para el tamaño de n ya está ahí, puede editarlo para probar con otros
valores y puede hacer clic en el botón de actualización junto a él para volver al
valor original que se utiliza para validar su código durante la prueba. Tenga en
cuenta que el código debe imprimir los resultados exactamente como se muestra
con el fin de que la pregunta sea considerada valida durante la prueba (El
carácter "X" en mayúscula y el guion bajo "_" para los espacios)*/

<?php

	$n = 0;
	$resultado ="";
	
	if ($n == 0){
		
		echo "ERROR";
	}


	for ($i = 0;$i<$n;$i++){
			
		for($j = 0;$j<$n;$j++){
			
			$resultado.=($j==$i||$j==$n-$i-1)?"X":"_";
			
		}
		$resultado.="<br>";
		
	}

		print $resultado;
?>