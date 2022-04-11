<?php
/*REF: https://www.phpcluster.com/aes-encryption-and-decryption-in-php/*/"\r\n";
$data='TEXT OR FILES TO ENCRYPT';

/*DEFINE CIPHER*/"\r\n"; 
$cipher="aes-256-cbc"; 

/*CREATE A 256 BIT ENCRYPTION KEY*/"\r\n"; 
$encryption_key=openssl_random_pseudo_bytes(32); 
/*SAVE $encryption_key SOMEWHERE, LIKE IN A DB*/"\r\n";

/*GENERATE AN IV*/"\r\n"; 
$iv_size=openssl_cipher_iv_length($cipher); 
$iv=openssl_random_pseudo_bytes($iv_size); 
/*SAVE $iv SOMEWHERE, LIKE IN A DB*/"\r\n";

/*ENCRYPT DATA*/"\r\n";  
$encrypted_data=openssl_encrypt($data, $cipher, $encryption_key, 0, $iv); 

/*SAVE ENCRYPTED DATA SOMEWHERE*/"\r\n";
?>
