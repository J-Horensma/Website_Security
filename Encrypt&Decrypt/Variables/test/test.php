<div><h1>Enter some text to encrypt:ncrypt:</h1></div>
<form method="post" action="test.php">
<input type="text" name="plain_text">
<input type="submit" value="submit">
</form>
<?php
if(!empty($_POST['plain_text']){
echo "<div><h1>Encrypted Text:</h1></div>";
data=$_POST['plain_text'];
}
