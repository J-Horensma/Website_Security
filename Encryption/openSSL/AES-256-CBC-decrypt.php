<?php
$encryption_key='ENCRYPTION KEY';
$iv='IV';
$encrypted_data='ENCRYPTED DATA';

/*DEFINE CIPHER*/"\r\n"; 
$cipher = "aes-256-cbc"; 

/*DECRYPT*/"\r\n"; 
$decrypted_data=openssl_decrypt($encrypted_data, $cipher, $encryption_key, 0, $iv); 
/*DO SOMETHING WITH $decrypted_data*/"\r\n";
?>
