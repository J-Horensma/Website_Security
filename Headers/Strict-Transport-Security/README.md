# What Are "Strict-Transport-Security" Headers?:
"Strict-Transport-Security", also known as "HSTS", headers, are used to protect pages, with sensitive data inputs (Like forms), from MITM attacks.

## What Is A MITM Attack?:
"Man-in-the-middle", also known as "MITM", is a technique used by hackers, on the same network as a target, to intercept data from that target.

## How Does A MITM Attack Work?:

#### HTTP:
Before SSL/TLS encryption was common, most websites used HTTP because an SSL/TLS certificate was pricey. This allowed hackers on the same network as a target, to intercept all data, in plain human readable format and steal sensitive information, like login credentials. Later, more websites started using SSL/TLS certificates and all data started being encrypted, when going through the internet, also, browsers started warning users that a connection was insecure, if the connection is HTTP.

#### HTTPS:
MITM, works, on HTTPS, when a hacker creates a spoofed certificate (They can decrypt), maintaining an HTTPS connection, with the target, so they are not notified by the browser, that the page is HTTP and not secure (The old way). In modern browsers, the browser will notify the user that the page is not secure, anyway (Due to certificate not being verified), but allows a user to continue anyway.

## Usage:
As a general rule, you should place an HSTS header, in the top, of any form, where sensitive data is entered, such as login forms or file upload forms.

"max-age", should be set to 1 year, in seconds (31536000), "includeSubDomains", sets HSTS, on subdomains, of the website, and preload tells the browser to force HTTPS connection (On first connection call).

#### Apache Server:
Add this header to all pages, with the ".htaccess" file, because different page settings will not affect Strict-Transport-Security headers, unless you do not have SSL/TLS transport encryption set up.

#### ".htaccess" File:
`Header set Strict-Transport-Security "max-age=31536000; includeSubDomains; preload" env=HTTPS`

#### HTML:

```html
<meta http-equiv="Strict-Transport-Security" content="max-age=31536000; includeSubDomains; preload"/>
```

#### PHP:
```php
header("Strict-Transport-Security: max-age=31536000; includeSubDomains; preload");
```
