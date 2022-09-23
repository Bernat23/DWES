<?php
/*
*Funció que rep un número positiu o zero i s'encarrega
*de calcular el seu factorial
* Retorna un enter
*/
function factorial(int $numero):int {
    if($numero < 2){
        return 1;
    } else {
        return $numero * factorial($numero - 1);
    }
}

/*
*Funció que rep un array, si l'array està omplert amb 
* o zero crida la funció factorial, passant-li un número,
* si és així retorna un array amb tots els resultats
*Si l'array no està omplert amb només números positius o zero retorna false 
*/
function factorialArray(array $numeros) :bool|array {
    foreach($numeros as $numero) {
        if(is_int($numero) == false || $numero < 0){
            return false;
        } 
        else if($numero >= 0){
        $resultat[] = factorial($numero); 
        }
    }
    return $resultat;
}

$numeros = array(6, 5, 0,9,5,4,6);
print_r(factorialArray($numeros));
?>
