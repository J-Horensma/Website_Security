/*WHEN A FILE IS UPLOADED TO A SERVER, UNLIKE USUAL INPUT,*/"\r\n";
/*INSTEAD OF BEING STORED IN THE "$_POST['name']" VARIABLE,*/"\r\n";
/*IT'S STORED IN A TEMP FOLDER, ON THE SERVER (BY STANDARD AND DEFAULT).*/"\r\n";
/*THE TEMP FILE NAME IS DEFINED BY THE "$_FILES['tmp_name']"*/"\r\n";

/*SET DATA VARIABLE, FROM THE TEMP FOLDER*/
$file_data=file_get_contents($_FILES['file']['tmp_name']);
