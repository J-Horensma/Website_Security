# What Are Headers?:
HTTP headers are loaded, by the browser, before the page content. Headers are sent by http requests. The headers load, in the browser, before the page content, therefor, if a broken header directive, is detected, the page content can be stopped, or an error can be captured for analysis. This can prevent the execution, of the broken directive, or allow monitoring of security breaches, if set up properly.

## USAGE:
To set up headers, you can set them universally through the website, by adding the headers, and their directives, to the ".htaccess" file, in the "document root" (Main) directory, of the server, or, you can set them on a page by page basis, at the top of each page, giving different permissions to each page.

## ".htaccess" File:
`# PREVENT MITM, ON CLIENTS:`

`Header set Strict-Transport-Security "max-age=31536000 includeSubDomains env=HTTPS preload"`
---------------------------------------------------------------------------------------------
`# CONTROL SERVER ACCESS (CORS):`

`Header set Access-Control-Allow-Origin: "ALLOWED_SERVERS"`


`# CONTROL PAGE ACCESS (CSP):`

## PHP:
```php
<?php
header("Header-Name: DIRECTIVE_1; DIRECTIVE_2; ETC");
?>
```
