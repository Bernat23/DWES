<?php
/*
Funció per girar les lletres de 3 en 3 
*/
function decrypt($girar) {
    $dividit = str_split($girar, 3); 
    $arrayGirat = [];
    foreach($dividit as $v) {
        $girat = abecedariAlReves($v);
        array_push($arrayGirat ,strrev($girat));
    }
    $resultat = implode($arrayGirat);
    return $resultat;


}

/*
Funció per canviar la seva lletra per la contraria a l'abecedari també mira si és una lletra
*/
function abecedariAlReves($girar) {
    $lletres = str_split($girar, 1);
    $arri = [];
    foreach($lletres as $p) {
        if(ctype_alpha($p)){
            $lletra = ord($p);
            $lletra = 122 - $lletra + 97;
            $p = chr($lletra);
        }
        array_push($arri, $p);
    }
    $gira = implode($arri);
    return $gira;

        //$lletres
         //substr_replace($girar[$i], 'z' - $girar[$i] + 'a', $girar);
}
/*function decrypt($spm){
    $dividit = str_split($spm, 3);
    $dag = [];
    foreach($dividit as $p) {
        array_push($dag, strrev($p));
    }

    $final = str_split($, 1);
    foreach($dag as $j) {

    }
    $resolt = [];
    foreach($final as $v) {
        $lletra = ord($v);
        $lletra = 122 - $lletra + 97;
        $v = chr($lletra);
        array_push($resolt, $v);
    }
    return $resolt;
}*/




$sp = "kfhxivrozziuortghrvxrrkcrozxlwflrh";
$mr = " hv ovxozwozv vj o vfrfjvivfj h vmzvlo e hrxvhlmov oz ozx.vw z xve hv loqvn il hv lmnlg izxvwrhrvml ,hv b lh mv,rhhv mf w zrxvlrh.m";



echo decrypt($sp);
echo "<br>";
echo decrypt($mr);


?>