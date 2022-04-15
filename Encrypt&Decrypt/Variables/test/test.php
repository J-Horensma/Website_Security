<div><h1>Enter some text to encrypt:ncrypt:</h1></div>
<form method="post" action="test.php">
<input type="text" name="plain_text">
<input type="submit" value="submit">
</form>
<?php
if(!empty($_POST['plain_text']){
data=$_POST['plain_text'];

/*DEFINE CIPHER*/"\r\n"; 
$cipher="aes-256-cbc"; 

/*GENERATE A 256 BIT ENCRYPTION KEY*/"\r\n"; 
$encryption_key=openssl_random_pseudo_bytes(32); 
/*SAVE $encryption_key SOMEWHERE, LIKE IN A DB*/"\r\n";

/*GENERATE AN IV*/"\r\n"; 
$iv_size=openssl_cipher_iv_length($cipher); 
$iv=openssl_random_pseudo_bytes($iv_size); 
/*SAVE $iv SOMEWHERE, LIKE IN A DB*/"\r\n";

/*ENCRYPT DATA*/"\r\n";  
$encrypted_data=openssl_encrypt($data, $cipher, $encryption_key, 0, $iv); 
/*SAVE $encrypted_data SOMEWHERE, FOR LATER DECRYPTION*/"\r\n"; 
echo "<div><h1>Encrypted Text: $encrypted_data</h1></div>";
}
