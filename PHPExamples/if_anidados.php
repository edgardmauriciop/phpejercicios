<?php
$nombre=readline("Ingrese su nombre: ");
$edad=readline("Ingrese una edad: ");
if ($edad>60){
	echo "Es un anciano, ".$nombre."\n";
}else if ($edad>18){
	echo "Tiene barba, ".$nombre."\n";
}else{
	echo "Es chinito, ".$nombre."\n";
}
?>
