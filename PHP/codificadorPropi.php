<?php

/*
Funció per codificar deixa l'array ple de números que en realitat són les lletres per representar,
però faré una funció per passar els números a lletres
*/
function codificador($desencriptat, $ip){
    $encriptat = [];
    $comptador = 0;
    for($j = 0; $j < strlen($desencriptat); ++$j) {
        while ($comptador > 8) {
            $comptador = $comptador - 9;
        }
        array_push($encriptat, ord($desencriptat[$j]) + $ip[$comptador]);


        $comptador = $j;
        
    }
    $resultat = implode($encriptat);
    mostrarCodificat($encriptat);
}

/*
Funció per mostrar l'array dels números transformat a lletres, mostra el text codificat
*/
function mostrarCodificat($numeros){
    $charPossible = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $lletres = [];
    foreach($numeros as $v) {
        while($v < 0) {
            $v = $v + 62;
        }
        while($v > 61) {
            $v = $v - 62;
        }
        $lletra = $charPossible[$v];
        array_push($lletres, $lletra);
    }
    foreach($lletres as $v) {
        echo $v;
    }
}

/*
Funció per decodificar la frase encriptada
*/
function decodificador(&$encriptat, $ip){
    $desencriptat = [];
    $comptador = 0;
    for($j = 0; $j < strlen($encriptat); ++$j) {
        while ($comptador > 8) {
            $comptador = $comptador - 9;
        }
        array_push($desencriptat, ord($encriptat[$j]) - $ip[$comptador]);
        $comptador = $j;
        
    }
    mostrarCodificat($desencriptat);
    $resultat = implode($desencriptat);
    echo $resultat;
}


$codi = "Travessa per aqui, que ja veuràs que passa";
echo $ip = $_SERVER['SERVER_NAME'];
$ipSeparada = str_split($ip, 1);
$ipSeparadaNumero = [];
$codiCodificat = [];
foreach($ipSeparada as $v) {
    $numero = ord($v);
    array_push($ipSeparadaNumero, $numero);
}

codificador($codi, $ipSeparadaNumero);
?>
