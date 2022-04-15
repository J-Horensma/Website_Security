<?php
/*THIS SCRIPT DECRYPTS AES 256 BIT CBC ENCRYPTION WITH KEY AND IV, FROM ENCRYPTION PROCESS*/"\r\n";
/*REF: https://www.phpcluster.com/aes-encryption-and-decryption-in-php/*/"\r\n";
/*OPENSSL WORKS BY DEFAULT, IN MODERN PHP VERSIONS*/"\r\n";
/*WORKS WITH USER INPUT VARIABLES, SEE "FILES" SECTION, FOR LOCAL FILE OR FILE UPLOAD DECRYPTION*/"\r\n";
/*THE KEY, IV, AND ENCRYPTED DATA, ARE REQUIRED, BY THIS SCRIPT, SO IT CAN DECRYPT THE DATA*/"\r\n";

/*SET REQUIRED VARIABLES*/"\r\n";
$encryption_key='ENCRYPTION KEY';
$iv='IV';
$encrypted_data='ENCRYPTED DATA';

/*DEFINE CIPHER*/"\r\n"; 
$cipher = "aes-256-cbc"; 

/*DECRYPT*/"\r\n"; 
$decrypted_data=openssl_decrypt($encrypted_data, $cipher, $encryption_key, 0, $iv); 
/*DO SOMETHING WITH "$decrypted_data"*/"\r\n";
?>
