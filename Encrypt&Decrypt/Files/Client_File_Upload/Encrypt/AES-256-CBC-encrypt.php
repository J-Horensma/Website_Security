<?php
/*WHEN A FILE IS UPLOADED TO A SERVER, UNLIKE USUAL INPUT,*/"\r\n";
/*INSTEAD OF BEING STORED IN THE "$_POST['name']" VARIABLE,*/"\r\n";
/*IT'S STORED IN A TEMP FILE, ON THE SERVER (BY STANDARD AND DEFAULT).*/"\r\n";
/*THE TEMP FILE NAME IS DEFINED BY THE "$_FILES['name']['tmp_name']"*/"\r\n";

/*SET VARIABLE, FOR DATA TO ENCRYPT, FROM THE TEMP FILE CONTENTS*/"\r\n";
$data=file_get_contents($_FILES['file']['tmp_name']);

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
/*SAVE "$encrypted_data" SOMEWHERE*/"\r\n";
?>
