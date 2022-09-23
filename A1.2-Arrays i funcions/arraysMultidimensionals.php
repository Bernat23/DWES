<?php

/*
*La funció rep un número n, amb el qual crea un array quadrat de nxn
*amb una diagonal de * i el triangle inferior omplert amb aleatoris,
*la superior amb la suma de columna i fila i retorna la matriu
*/
function crearMatriu(int $mida):array {
    $matriu= [[]];
    for($i = 0; $i < $mida; $i++){
        for($j = 0; $j < $mida; $j++){
            if($i == $j) {
                $matriu[$i][$j] = "*";
            } else if($i < $j) {
                $matriu[$i][$j] = $i + $j;
            } else {
                $matriu[$i][$j] =rand(10,20);
            }
        }
    }
    return $matriu;
}

/*
*Rep una matriu i la representa amb el format de taula de HTML
*/
function mostraMatriu(array $matriu){
    echo ("<table>");
    for($i = 0; $i < count($matriu); $i++){
        echo "<tr> ";
        for($j = 0; $j < count($matriu[0]); $j++){
           echo "<td>".$matriu[$i][$j]."</td>"; 
        }
        echo "</tr> ";
    }
    echo("</table>");
}

/*
*Rep una matriu i torna la matriu trasposada
*/
function transposaMatriu(array $matriu):array{
    $matriuTrasposada= [[]];
    for($i = 0; $i < count($matriu[0]); $i++){
        for($j = 0; $j < count($matriu); $j++){
            $matriuTrasposada[$i][$j] = $matriu[$j][$i];
        }
    }
    return $matriuTrasposada;
} 

$mida = 4;
$matriu = [[]];
$trasposa = [[]];
$matriu = crearMatriu($mida);
mostraMatriu($matriu);
mostraMatriu(transposaMatriu($matriu));
?>