# What Are "Content-Security-Policy" Headers?:
"Content-Security-Policy", also known as "CSP", headers, are a set of directives, that can be added to the server's "Content security policy", for the page, for legitimate sources of resources, such as scripts, CSS, iframes, etc., for the page.
CSP headers, can prevent a page body, from loading, if they detect a policy breach, and are important for preventing attacks, such as, XSS, phishing pages, with keyloggers and an iframe to the actual website login, or any attack involving alteration or usage, of resources, on a page, from an untrusted source.

## Usage:

#### ".htaccess" File:
`Header set Content-Security-Policy "RESURCE-src SERVER_DOMAIN SERVER_SUBDOMAINS TRUSTED_DOMAINS"`

## HTML:

```html
<meta http-equiv="Content-Security-Policy" content="RESURCE-src SERVER_DOMAIN SERVER_SUBDOMAINS TRUSTED_DOMAINS"/>
```

#### PHP:

```php
header("Content-Security-Policy: RESURCE-src SERVER_DOMAIN SERVER_SUBDOMAINS TRUSTED_DOMAINS);
```

#### For currently supported directives, visit:

https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Content-Security-Policy

https://developer.mozilla.org/en-US/docs/Web/HTTP/CSP
