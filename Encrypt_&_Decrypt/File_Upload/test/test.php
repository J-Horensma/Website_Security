<!---BY: JOEL HORENSMA--->
<!---LAST UPDATED: APRIL 14/2022--->

<div><h1>Choose file to encrypt:</h1></div>
<form method="post" action="test.php" enctype="multipart/form-data">
<input type="file" name="file">
<input type="submit" value="Upload"/>
</form>
<?php
if(!empty($_FILES['file']['tmp_name'])){
    
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

file_put_contents($_FILES['file']['name']."-key.txt","$encryption_key");
file_put_contents($_FILES['file']['name']."-iv.txt","$iv");
file_put_contents("encrypted.".$_FILES['file']['name'],"$encrypted_data");
echo "<div><h1 style='color:blue'>Encrypted file created, in this directory, as: </h1>"."encrypted.".$_FILES['file']['name']."</div>";

/*SET REQUIRED VARIABLES*/"\r\n";
$encryption_key=file_get_contents($_FILES['file']['name']."-key.txt");
$iv=file_get_contents($_FILES['file']['name']."-iv.txt");
$encrypted_data=file_get_contents("encrypted.".$_FILES['file']['name']);

/*DEFINE CIPHER*/"\r\n"; 
$cipher = "aes-256-cbc"; 

/*DECRYPT DATA*/"\r\n"; 
$decrypted_data=openssl_decrypt($encrypted_data, $cipher, $encryption_key, 0, $iv); 
/*DO SOMETHING WITH "$decrypted_data"*/"\r\n";

file_put_contents("decrypted.".$_FILES['file']['name'],"$decrypted_data");
echo "<div><h1 style='color:blue'>Decrypted file created, in this directory, as: </h1>"."decrypted.".$_FILES['file']['name']."</div>";
}
?>
