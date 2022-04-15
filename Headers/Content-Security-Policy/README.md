# What Are "Content-Security-Policy" Headers?:
"Content-Security-Policy" headers, are a set of directives for legitimate sources of resources, such as scripts, CSS, iframes, etc., for the page.
They are important for preventing attacks, such as XSS, phishing pages, with keyloggers and an iframe to the actual website login, or any attack involving alteration or usage, of resources, on a page, from an untrusted source.

## "Content-Security-Policy" Headers, Can Be Set, Like So:
In HTML code:

`<head>`

`<meta http-equiv="Content-Security-Policy" content="RESURCE-src SERVER_DOMAIN SERVER_SUBDOMAINS TRUSTED_DOMAINS">`

`</head>`

In PHP code:

`header("Content-Security-Policy: RESURCE-src SERVER_DOMAIN SERVER_SUBDOMAINS TRUSTED_DOMAINS);`

For currently supported directives, visit:

[https://developer.mozilla.org/en-US/docs/Web/HTTP/CSP](https://developer.mozilla.org/en-US/docs/Web/HTTP/CSP "Currently supported directives")
