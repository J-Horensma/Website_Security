# What Are "Pragma" Headers?:
"Pragma" headers are used, to prevent older proxy servers, that do not understand the newer "Cache-Control" header, from caching information. These older servers are HTTP version 1.0. In an apache server, it would not hurt to add this header to all pages, with the ".htaccess" file, because different page settings will not affect Pragma headers.

## Usage:

#### HTML:
```html
<meta http-equiv="Pragma" content="no-cache">
```

#### PHP:
```php
header("Pragma: no-cache");
```
