# What Are "Cache-Control" Headers?:
"Cache-Control" headers are used, to prevent proxy servers, from caching information.

## What Is A "Proxy" Server?:
A "proxy" is any server that is in between your server and the client, such as a VPN, the client may be using.

## Usage:
As a general rule, you should add this header to the top of all pages, to prevent caching, from any VPN, in use, by clients. 

#### Apache Server:
Add this header to all pages, with the ".htaccess" file, because different page settings will not affect Cache-Control headers.

#### ".htaccess" File:
`Header set Cache-Control "no-cache"`

#### HTML:
```html
<meta http-equiv="Cache-Control" content="no-cache">
```

#### PHP:
```php
header("Cache-Control: no-cache");
```
