<?php

$stringEncriptat = "Hola, mon";


$cipher = "aria-128-cfb8";

$iv_length = openssl_cipher_iv_length($cipher);
$opcio = 0;
  
$encrypt = '1234567891011121';

$encriptaContrasenya = "Bernat";
  
// Use openssl_encrypt() function to encrypt the data
$encriptacio = openssl_encrypt($stringEncriptat, $cipher,
            $encriptaContrasenya, $opcio, $encrypt);

echo $encriptacio . "\n";
  
// Non-NULL Initialization Vector for decryption
$decrypt = '1234567891011121';
  
// Store the decryption key
$decriptaContrasenya = "Bernat";
  
// Use openssl_decrypt() function to decrypt the data
$desencriptat=openssl_decrypt ($encriptacio, $cipher, 
$decriptaContrasenya, $opcio, $decrypt);
  
// Display the decrypted string
echo "Decrypted String: " . $desencriptat;
  

?>