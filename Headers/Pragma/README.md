# What Are "Pragma" Headers?:
"Pragma" headers are used, to prevent older proxy servers, that do not understand the newer "Cache-Control" header, from caching information. These older proxy servers are HTTP version 1.0.

## What Is A "Proxy" Server?:
A "proxy" is any server that is in between your server and the client, such as a VPN, the client may be using.

## Usage:
As a general rule, you should add this header to the top of all pages, to prevent caching, from any VPN, in use, by clients. 

In an ## Apache ## server, it would not hurt to add this header to all pages, with the ".htaccess" file, because different page settings will not affect Pragma headers.

#### ".htaccess" File:
`Header set Pragma "no-cache"`

#### HTML:
```html
<meta http-equiv="Pragma" content="no-cache">
```

#### PHP:
```php
header("Pragma: no-cache");
```
