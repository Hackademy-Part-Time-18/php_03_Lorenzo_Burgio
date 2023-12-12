<?php

$integer1 = 1;
$float1 = 1.1;
$string1 = "ciao";
$boolean1 = true;
$br = "\n";

const INTEGER = 1;
const FLOAT = 1.1;
const STRING = "ciao";
const BOOLEAN = true;


$text = "Marco ";
$text2 = "hai ";
$text3 = "sete ";
$text4 = "? ";
$text5 = "Perché ";
$text6 = '$text2';
$text7 = 'bevuto ';
$text8 = "tutto.";

echo $text.$text2.$text3.$text4.$text5.$text2.$text7.$text8;
echo $br;


$words1 = ['una ',67,'vita ','colle','mi ','rosso',['oscura','era',89,['mezzo ',['cammin ',' Nel ',['selva ','la ',['via ','una ',true]]]],'ritrovai ','per '],'diritta '];
  
$words2 = ['elemento1' => 25.89,'elemento2' => 'nostra ','elemento3' => ['Virgilio',' smarrita','ché ']];

$result = $words1[6][3][1][1].$words1[6][3][0].'del '.$words1[6][3][1][0].'di '.$words2['elemento2'].$words1[2].$words1[4].$words1[6][4].$words1[6][5].$words1[0].$words1[6][3][1][2][0].$words1[6][0].', '.$words2['elemento3'][2].$words1[6][3][1][2][1].$words1[7].$words1[6][3][1][2][2][0].$words1[6][1].$words2['elemento3'][1].'.';

  echo $result.$br;

  //Nel mezzo del cammin di nostra vita mi ritrovai per una selva oscura, 
  //ché la diritta via era smarrita


$x = 10;
$y = 18;
$z = 56.0;
$t = 0.8;

// Blocco da eseguire
$somma = "Somma ".$x + $y;
$sottrazione = "Sottrazione ".$x - $y;
$divisone = "Divisione ".$x / $y;
$moltiplicazione = "Moltiplicazione ".$x * $y;
$modulo = "Resto di Divisione ".$x % $y;

echo $somma.$br.$sottrazione.$br.$divisone.$br.$moltiplicazione.$br.$modulo;

?>