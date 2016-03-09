<?php
$operador=readline("¿Que operacion desea realizar?"."\n"."1=suma; 2=Resta; 3=Division; 4=Multimplicacion"." :");
$num=readline("Ingrese el primer numero: ");
$num2=readline("Ingrese el segundo numero: ");

switch ($operador) {
	case 1:
		$suma=$num+$num2;
		echo "La suma de los numero es: ".$suma."\n";
		break;
	case 2:
		$resta=$num-$num2;
		echo "La resta de los numeros es: ".$resta."\n";
		break;
	case 3:
		$div=$num/$num2;
		echo "La division de los numero es: ".$div."\n";
		break;
	case 4:
		$mult=$num*-$num2;
		echo "La multimplicacion de los numeros es: ".$mult."\n";
		break;
	default:
		echo "No selecciono ninguna operacion valida";
		break;
}
?>

