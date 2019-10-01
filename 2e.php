<?php

$numTablaInicial = 1;
$numTablaFinal = 10;

echo 'Numero inicial '.$numTablaInicial.'<br/>';
echo 'Numero final '.$numTablaFinal.'<br/>'.'<br/>';

for ($contador=$numTablaInicial; $contador<=$numTablaFinal; $contador++){
	echo 'Tabla del '.$contador.'<br/>';
	for ($i=1; $i<=10; $i++){
	echo $contador.'*'.$i.'='.$contador*$i.'<br/>';
	}
	echo '<br/>';
	echo '<br/>';	
}
?>