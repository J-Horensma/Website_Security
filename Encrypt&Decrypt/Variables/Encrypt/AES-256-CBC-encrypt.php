<?php
/*THIS SCRIPT ENCRYPTS DATA, WITH AES 256 BIT CBC ENCRYPTION (GOVERNMENT GRADE)*/
/*REF: https://www.phpcluster.com/aes-encryption-and-decryption-in-php/*/"\r\n";
/*OPENSSL WORKS BY DEFAULT, IN MODERN PHP VERSIONS*/"\r\n";
/*WORKS WITH USER INPUT VARIABLES, SEE "FILES" SECTION, FOR LOCAL FILE OR FILE UPLOAD ENCRYPTION*/"\r\n";
/*THE KEY AND IV, ARE REQUIRED BY THE DECRYPTION SCRIPT, SO IT CAN DECRYPT THE ENCRYPTED DATA*/"\r\n";

/*SET VARIABLE FOR DATA TO ENCRYPT*/"\r\n";
$data='TEXT OR FILE TO ENCRYPT';

/*DEFINE CIPHER*/"\r\n"; 
$cipher="aes-256-cbc"; 

/*GENERATE A 256 BIT ENCRYPTION KEY*/"\r\n"; 
$encryption_key=openssl_random_pseudo_bytes(32); 
/*SAVE $encryption_key SOMEWHERE*/"\r\n";

/*GENERATE AN IV*/"\r\n"; 
$iv_size=openssl_cipher_iv_length($cipher); 
$iv=openssl_random_pseudo_bytes($iv_size); 
/*SAVE $iv SOMEWHERE*/"\r\n";

/*ENCRYPT DATA*/"\r\n";  
$encrypted_data=openssl_encrypt($data, $cipher, $encryption_key, 0, $iv); 
/*SAVE $encrypted_data SOMEWHERE*/"\r\n";
?>
