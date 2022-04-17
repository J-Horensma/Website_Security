# What Are Headers?:
HTTP headers, are loaded, by the browser, before the page content. Headers are sent by HTTP requests. The headers load, in the browser, before the page content, therefor, if a broken header directive, is detected, the page content can be stopped, or an error can be captured for analysis. This can prevent the execution, of the broken directive, or allow monitoring of security breaches, if set up properly.

## USAGE:
To set up headers, you can set them universally through the website, by adding the headers, and their directives, to the ".htaccess" file, in the "document root" (Main) directory, of the server, or, you can set them on a page by page basis, at the top of each page, giving different permissions to each page.

## ".htaccess" File:

`Header set HEADER_NAME "DIRECTIVES"`

## HTML:
```html
<html>
  
<head>

<meta http-equiv="HEADER_NAME" content="DIRECTIVES">

</head>
  
<!---BODY OF PAGE--->
  
</html>
```

## PHP:
```php
<?php

header("HEADER_NAME: DIRECTIVES");

/*BODY OF PAGE*/"\r\n";

?>
```
