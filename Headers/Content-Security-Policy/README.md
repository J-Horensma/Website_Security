# What Are "Content-Security-Policy" Headers?:
"Content-Security-Policy", also known as "CSP", headers, are a set of directives, that can be added to the server's "Content Security Policy", for the page, for legitimate sources of resources, such as scripts, CSS, iframes, etc.

CSP headers, can prevent a resource, from loading, if they detect a policy breach, and are important for preventing attacks, such as, XSS, phishing pages, with keyloggers and an iframe to the actual website login, or any attack involving alteration or usage, of resources, on a page, from an untrusted source.

## Usage:
The Content Security Policy, can be deployed in report only mode, so reports are sent of a breach, but the page still loads.
To use report only mode, replace "Content-Security-Policy" with "Content-Security-Policy-Report-Only".

#### ".htaccess" File:
`Header set Content-Security-Policy "RESURCE-src SERVER_DOMAIN SERVER_SUBDOMAINS TRUSTED_DOMAINS"`

#### HTML:
```html
<meta http-equiv="Content-Security-Policy" content="RESURCE-src SERVER_DOMAIN SERVER_SUBDOMAINS TRUSTED_DOMAINS"/>
```

#### PHP:
```php
header("Content-Security-Policy: RESURCE-src SERVER_DOMAIN SERVER_SUBDOMAINS TRUSTED_DOMAINS);
```

## DIRECTIVES:

#### Default SOURCE:
The default source is a default for most directives and should be set to the URL, of the website (Should be HTTPS to force it) and the subdomains should be set with a `*`, like so: "https://*.website_name.com".

To set the default-src use:

`deafault-src DOMAIN_NAME *DOMAIN_NAME TRUSTED_DOMAINS`

#### Base URI:
`base-uri`

#### For currently supported directives, visit:

https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Content-Security-Policy

https://developer.mozilla.org/en-US/docs/Web/HTTP/CSP
