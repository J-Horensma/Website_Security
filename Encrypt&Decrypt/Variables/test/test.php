<div><h1>Enter some text to encrypt:ncrypt:</h1></div>
<form method="post" action="test.php">
<input type="text" name="plain_text">
<input type="submit" value="submit">
</form>
<?php
if(!empty($_POST['plain_text']){
/*SET "$data" VARIABLE*/"\r\n";
$data=$_POST['plain_text'];

/*DEFINE CIPHER*/"\r\n"; 
$cipher="aes-256-cbc"; 

/*GENERATE A 256 BIT ENCRYPTION KEY*/"\r\n"; 
$encryption_key=openssl_random_pseudo_bytes(32); 

/*GENERATE AN IV*/"\r\n"; 
$iv_size=openssl_cipher_iv_length($cipher); 
$iv=openssl_random_pseudo_bytes($iv_size); 

/*ENCRYPT DATA*/"\r\n";  
$encrypted_data=openssl_encrypt($data, $cipher, $encryption_key, 0, $iv); 
 
echo "<div><h1>Encrypted text: $encrypted_data</h1></div>";

/*SET VARIABLES*/"\r\n";
$encryption_key=$encryption_key;
$iv=$iv;
$encrypted_data=$encrypted_data;

/*DEFINE CIPHER*/"\r\n"; 
$cipher = "aes-256-cbc"; 

/*DECRYPT*/"\r\n"; 
$decrypted_data=openssl_decrypt($encrypted_data, $cipher, $encryption_key, 0, $iv); 

echo "<div><h1>Decrypted text: $decrypted_data</h1></div>";
}
