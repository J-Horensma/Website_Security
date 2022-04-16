# What Are "Strict-Transport-Security" Headers?:
"Strict-Transport-Security", also known as "HSTS", headers, are used to protect pages, with sensitive data inputs (Like forms), from MITM attacks.

## What is an MITM attack?:
"Man-in-the-middle", also known as "MITM", is a tecnique used by hackers, on the same network as the target, to intercept data from a target.

## How Does A MITM Attack work?:
Before SSL/TLS encryption was common, most websites used HTTP because an SSL/TLS certificate was pricy. This allowed hackers on the same network as a target, to intercept all data, in plain human readable format and steal sensitive information, like login credentials. Later, more websites started using SSL/TLS certificates and all data started being encrypted, when going through the internet also browsers started warning users that a connection was insecure, if the connection was HTTP.

MITM, works, on HTTPS, when a hacker creates a spoofed certificate (They can decrypt), maintaining an HTTPS connection, with the target, so they are not notified by the browser, that the page is HTTP and not secure (The old way). In modern browsers, the browser will notify the user that the page is not secure, anyway (Due to certificate not being verified), but allows a user to continue anyway, even though it's guaranteed, they are being intercepted.

## Usage:
As a general rule, you should place an HSTS header, in the top, of any form, where sensitive data is entered, such as login forms or file upload forms.
It would not hurt to place it in the .htaccess file, in the document root even because the rules are not affected by different types of pages. "max-age", should be set to 1 year, in seconds (31536000), "includeSubDomains", sets HSTS, on subdomains, of the website and preload tells the browser to force HTTPS connection (On first connection call).

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
