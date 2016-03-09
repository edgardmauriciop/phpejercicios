<?php
$auntores=array("Steinbeck","Kafka","Tolkien","Dickens");
$milibro=array("Titulo"=>"The Grapes of Wrath","autor"=>"John Steinbeck","anioPub"=>1939);
echo $autores[2]; // Muestra Tolkien
echo $autores; //Muestra Array (pho no muestra arreglos)
echo $milibro[1]; //Muestra undefined offset (indice sin definir)
echo $milibro["autor"]; //Muesta John Steinbeck
echo print_r($milibro); //Muestra el arreglo
?>
