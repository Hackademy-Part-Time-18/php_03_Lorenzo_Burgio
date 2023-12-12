<?php


$users = [
  ['name' => 'Pietro', 'surname' => 'Pacciani', 'gender' => 'NB'],
  ['name' => 'Gesualdo', 'surname' => 'Lomonaco', 'gender' => 'Maschio'],
  ['name' => 'Ermenegildo', 'surname' => 'Rigamonti', 'gender' => 'Femmina'],
  ['name' => 'Arnaldo', 'surname' => 'Pascarella', 'gender' => 'NB'],
 ];

 foreach($users as $persona){

  if ($persona['gender'] === "Maschio"){

    echo "Buongiorno Sig.".$persona['name']." ".$persona['surname']."\n";

  } else if ($persona['gender'] === "Femmina"){

    echo "Buongiorno Sig.ra ".$persona['name']." ".$persona['surname']."\n";

  } else {

    echo "Buongiorno ".$persona['name']." ".$persona['surname']."\n";

  }
 }

 $numeri = [11,21,56,144,256,111,25,7,9,4];

 foreach($numeri as $numb){

  if($numb % 2 === 0){

    echo $numb. ' è pari.'."\n";

  } else {

    echo $numb. ' è dispari.'."\n";

  }
 }

$init = 0;

//  while($init <= 100){

//   if ( $init % 15 == 0 ) { 
//     echo "HACKDEMY"."\n";  
//     } else if ( $init % 5 == 0 ) { 
//       echo "JAVASTRIPT"."\n";
//     } else if ( $init % 3 == 0) { 
//       echo "PHP"."\n";
//     }

//   echo $init."\n";
//   $init++;

//  }

 while($init <= 100){

  switch($init){
    case $init % 15 == 0 :
      echo "HACKDEMY"."\n";
      break;
    case $init % 5 == 0 :
      echo "JAVASCRIPT"."\n";
       break;
    case $init % 3 == 0 :
      echo "PHP"."\n";
      break;
    default :
    echo $init."\n";
  }
  $init++;
 }

//  while($init <= 10){

//   echo $init."\n";
//   $init++;
//  }

//  for ($init = 0 ; $init <= 10 ; $init++) {

//   echo $init."\n";
  

//  }

// $numb = 0;

// do {
//   echo $numb."\n";
//   $numb++;
// }while($numb <= 10);

$numb = 0;

// for ($numb = 10 ; $numb >= 0 ; $numb--){

//   echo $numb."\n";

// }

// while($numb >= 0){

//   echo $numb."\n";
//    $numb--;

// }

// do {
//   echo $numb."\n";
//   $numb--;
// }while($numb >= 0);

while ($numb <=30){

  switch($numb){
    case  $numb < 18:
      echo "Insufficiente"."\n";
      break;
    case $numb < :
      echo "JAVASCRIPT"."\n";
       break;
    case $init % 3 == 0 :
      echo "PHP"."\n";
      break;
    default :
    echo $init."\n";
  }
  $numb++;
}






?>