<div><h1>Enter some text to encrypt:</h1></div>
<form method="post" action="test.php">
<input type="text" name="plain_text">
<input type="submit" value="submit">
</form>
<?php
if(!empty($_POST['plain_text'])){

/*SET VARIABLE FOR DATA TO ENCRYPT*/"\r\n";
$data=$_POST['plain_text'];

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
 
echo "<div><h1 style='color:blue'>Encrypted text: </h1>$encrypted_data</div>";

/*SET REQUIRED VARIABLES*/"\r\n";
$encryption_key=$encryption_key;
$iv=$iv;
$encrypted_data=$encrypted_data;

/*DEFINE CIPHER*/"\r\n"; 
$cipher = "aes-256-cbc"; 

/*DECRYPT DATA*/"\r\n"; 
$decrypted_data=openssl_decrypt($encrypted_data, $cipher, $encryption_key, 0, $iv); 
/*DO SOMETHING WITH "$decrypted_data"*/"\r\n";
 
echo "<div><h1 style='color:blue'>Decrypted text: </h1>$decrypted_data</div>";
}
?>
