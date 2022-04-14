<?php
$data=$_POST['plain_text'];

?>
<form method="post" action="encrypt.php">
<input type="hidden" name="encrypted_text" value="<?php echo ?>">
<input type="submit" value="submit">
<div>
<a href="test.php">Go back</a>
<a href="decrypt.php">Decrypt</a>
</div>
</form>
