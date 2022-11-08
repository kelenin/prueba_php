<?php

$vacas=array('1'=>40,'2'=>35,'3'=>43,'4'=>28,'5'=>12,'6'=>13);
$resultados=$vacas[1]+$vacas[4]+$vacas[5]+$vacas[6];

$pesokgvacas=array('1'=>360,'2'=>250,'3'=>400,'4'=>180,'5'=>50,'6'=>90);
$resultadosps=$pesokgvacas[1]+$pesokgvacas[4]+$pesokgvacas[5]+$pesokgvacas[6];


echo "Seleccion de las vacas: 1, 4, 5, 6<br>";

echo "Peso Kg: ".$resultadosps." kg de 700kg <br>";

echo "Maxima Produccion: ".$resultados." Litros<br><br>";


$vacas2=array('1'=>30,'2'=>34,'3'=>28,'4'=>45,'5'=>31,'6'=>50,'7'=>29,'8'=>1);
$resultados2=$vacas2[2]+$vacas2[3]+$vacas2[4]+$vacas2[5]+$vacas2[6];

$pesokgvacas2=array('1'=>223,'2'=>243,'3'=>100,'4'=>200,'5'=>200,'6'=>155,'7'=>300,'8'=>150);
$resultadosps2=$pesokgvacas2[2]+$pesokgvacas2[3]+$pesokgvacas2[4]+$pesokgvacas2[5]+$pesokgvacas2[6];

echo "Seleccion de las vacas: 2,3,4,5,6,7,8,9<br>";

echo "Peso Kg: ".$resultadosps2." kg de 1000 kg <br>";

echo "Maxima Produccion: ".$resultados2." Litros<br><br>";


$vacas3=array('1'=>45,'2'=>50,'3'=>34,'4'=>39,'5'=>29,'6'=>40,'7'=>30,'8'=>52,'9'=>31,'10'=>1);
$resultados3=$vacas3[1]+$vacas3[2]+$vacas3[3]+$vacas3[4]+$vacas3[5]+$vacas3[6]+$vacas3[8]+$vacas3[9];

$pesokgvacas3=array('1'=>340,'2'=>355,'3'=>223,'4'=>243,'5'=>130,'6'=>240,'7'=>260,'8'=>155,'9'=>302,'10'=>130);
$resultadosps3=$pesokgvacas3[1]+$pesokgvacas3[2]+$pesokgvacas3[3]+$pesokgvacas3[4]+$pesokgvacas3[5]+$pesokgvacas3[6]+$pesokgvacas3[8]+$pesokgvacas3[9];

echo "Seleccion de las vacas: 1,2,3,4,5,6,8,9<br>";

echo "Peso Kg: ".$resultadosps3." kg de 2000 kg <br>";

echo "Maxima Produccion: ".$resultados3." Litros";





?>