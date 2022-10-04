<!DOCTYPE html>
<html lang="ca">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>Calculadora</title>
</head>

<body>

    <div class="container">
        <form name="calc" class="calculator" method="post">
            <input type="text" class="value" readonly name="resultat" value="<?php
            echo agafarValors();
            ?>" />
            <span class="num"><input type="submit" name="valor" value="("></span>
            <span class="num"><input type="submit" name="valor" value=")"></span>
            <span class="num"><input type="submit" name="valor" value="sin"></span>
            <span class="num"><input type="submit" name="valor" value="cos"></span>
            <span class="num clear"><input type="submit" name="valor" value="C"></span>
            <span class="num"><input type="submit" name="valor" value="/"></span>
            <span class="num"><input type="submit" name="valor" value="*"></span>
            <span class="num"><input type="submit" name="valor" value="7"></span>
            <span class="num"><input type="submit" name="valor" value="8"></span>
            <span class="num"><input type="submit" name="valor" value="9"></span>
            <span class="num"><input type="submit" name="valor" value="-"></span>
            <span class="num"><input type="submit" name="valor" value="4"></span>
            <span class="num"><input type="submit" name="valor" value="5"></span>
            <span class="num"><input type="submit" name="valor" value="6"></span>
            <span class="num plus"><input type="submit" name="valor" value="+"></span>
            <span class="num"><input type="submit" name="valor" value="1"></span>
            <span class="num"><input type="submit" name="valor" value="2"></span>
            <span class="num"><input type="submit" name="valor" value="3"></span>
            <span class="num"><input type="submit" name="valor" value="0"></span>
            <span class="num"><input type="submit" name="valor" value="00"></span>
            <span class="num"><input type="submit" name="valor" value="."></span>
            <span class="num equal"><input type="submit" name="valor" value="="></span>
        </form>
    </div>
</body>

<?php
function agafarValors() {
    if(isset($_POST["resultat"])) {
        $boto = $_POST["valor"];
        if(comprovarNumero($boto)) {
            $operacio = $_POST["resultat"];
        } if($boto == "C") {
            return $operacio="";
        } elseif($boto == "=") {
            return operar($operacio);
        } elseif($_POST["resultat"]=="INF" || $_POST["resultat"]=="ERROR") {
            $operacio = "";
            return $boto;
        } else {
            return $operacio.$boto;
        }
    }
    
    
}

//La funció serveix per calcular l string concatenat
function operar($operacio) {
    try {
        eval("\$operacio = "."round(".$operacio.",4);");
        return $operacio; 
    } catch(DivisionByZeroError $e) {
        return "INF";
    } catch(Error $e){
        return "ERROR";
    } 
}

//Comprova que el valor introduit sigui un número o símbol de calculadora
function comprovarNumero($numero){
    if(str_contains("00123456789=C/*-+.sincos()", $numero)) {
        return true;
    } else {
        return false;
    }
}

?>