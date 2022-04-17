# What Are "Content-Security-Policy" Headers?:
"Content-Security-Policy", also known as "CSP", headers, are a set of directives, that can be added to the server's "Content Security Policy", for the page, for legitimate sources of resources, such as scripts, CSS, iframes, etc.

CSP headers, can prevent a resource, from loading, if they detect a policy breach, and are important for preventing attacks, such as, XSS, phishing pages, with keyloggers and an iframe to the actual website login, or any attack involving alteration or usage, of resources, on a page, from an untrusted source.

## Usage:
The Content Security Policy, can be deployed in report only mode, so reports are sent of a breach, but the page still loads.
To use report only mode, replace "Content-Security-Policy" with "Content-Security-Policy-Report-Only".

#### ".htaccess" File:
`Header set Content-Security-Policy "RESURCE-src SERVER_DOMAIN SERVER_SUBDOMAINS"`

#### HTML:
```html
<meta http-equiv="Content-Security-Policy" content="RESURCE-src SERVER_DOMAIN SERVER_SUBDOMAINS"/>
```

#### PHP:
```php
header("Content-Security-Policy: RESURCE-src SERVER_DOMAIN SERVER_SUBDOMAINS");
```

# DIRECTIVES:

## default-src:
The "default-src" directive, is a default for most directives and should be set to the URL, of the website (Should be HTTPS to force it) and the subdomains should be set with a `*`, like so: "https://*.website_name.com".

To set default-src, use:

`default-src DOMAIN_NAME *DOMAIN_NAME`

# Included In default-src:

## connect-src:
The "connect-src" directive, is used to restrict the URLs that can be loaded, using script interfaces.

To set connect-src, use:

`connect-src DOMAIN_NAME *DOMAIN_NAME`

## frame-src:
The "frame-src" directive, is used to restrict URLs that can be used, in iframes, on the page.
The "child-src" directive, is the same as this directive, only one is needed, if specifying, none-self, when default-src is set.

To set frame-src, use:

`frame-src DOMAIN_NAME *DOMAIN_NAME`

# Not included In default-src:

## upgrade-insecure-requests:
The "upgrade-insecure-requests" directive, is used to upgrade HTTP links, on the page, to HTTPS requests.

## base-uri:
The "base-uri" directive, is used to control what URLs a base element can use. 

To set base-uri, use:

`base-uri DOMAIN_NAME *.DOMAIN_NAME`

## frame-ancestors:
The "frame-ancestors" directive, is used to resrict URLs that can load the page, within an iframe, on that URLs domain.
If frame-ansestors is set to:

`frame-ancestors 'none'`

Then the directive is the same as "X-Fram-Options DENY" headers. For this reason, X-Frame-Options headers are not needed.
It's important to block iframes, on all secure forms, to prevent phishing, with iframes.

# Lacking Browser Support:

`report-to`

# Depricated:

`block-all-mixed-content`

`report-to`

`referrer`

#### For currently supported directives, visit:

https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Content-Security-Policy

https://developer.mozilla.org/en-US/docs/Web/HTTP/CSP
