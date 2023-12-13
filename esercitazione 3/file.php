<?php

$password = readline("Inserisci una Password.. ");

function ProvaprimaRegola($password) {

  If (strlen($password) >= 8){

  return true;

 };

 return false;

};

$primaRegola = ProvaprimaRegola($password);

function ProvasecondaRegola($password){

  for ($i = 0 ; $i < strlen($password) ; $i++){

    if (is_numeric($password[$i])){

      return true;
      
    };
    
  }
  
  return false;
 

};

$secondaRegola = ProvasecondaRegola($password);

function ProvaterzaRegola($password){
  
  for ($i = 0 ; $i < strlen($password) ; $i++){

    if (ctype_upper($password[$i])){

      return true;
      
    };
    
  }
  
  return false;


}

$terzaRegola = ProvaterzaRegola($password);

function ProvaquartaRegola($password){

  for ($i = 0 ; $i < strlen($password) ; $i++){

    if (preg_match('/[^A-Za-z0-9]/',$password)){

      return true;
    
    };
    
  }
  
  return false;

}

$quartaRegola = ProvaquartaRegola($password);

// function checkPassword(){
//   $password = readline("Inserisci una Password.. ");

//   if(ProvaprimaRegola($password) && ProvasecondaRegola($password) && ProvaterzaRegola($password) && ProvaquartaRegola($password)){

//     echo "La Password è valida";
//   } else {

//     echo "La password è Invalida";
//   }

// }
// checkPassword();

function verificaPassword($password) {
  
  
  if (strlen($password) < 8) {
      return "Errore: La password deve contenere almeno 8 caratteri.";
  }
  
  if (!preg_match('/[A-Z]/', $password)) {
      return "Errore: La password deve contenere almeno un carattere maiuscolo.";
  }

  if (!preg_match('/[^A-Za-z0-9]/',$password)) {
      return "Errore: La password deve contenere almeno un carattere speciale.";
  }

  if (!preg_match('/[0-9]/', $password)) {
      return "Errore: La password deve contenere almeno un numero.";
  }

  return "La password è valida.";
};

echo verificaPassword($password)

?>
