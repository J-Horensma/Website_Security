# What Are "Content-Security-Policy" Headers?:
"Content-Security-Policy", also known as "CSP", headers, are a set of directives, that can be added to the server's "Content Security Policy", for the page, listing legitimate sources of resources, such as scripts, CSS, iframes, etc. 

The CSP is the client webpage security.

CSP headers, can prevent a resource, from loading, if they detect a policy breach, and are important for preventing attacks, such as, XSS, phishing pages, with keyloggers and an iframe to the actual website login, or any attack involving alteration or usage, of resources, on a page, from an untrusted source.

## Usage:
The Content Security Policy, can be deployed in report only mode, so reports are sent of a breach, but the page still loads.
To use report only mode, replace "Content-Security-Policy" with "Content-Security-Policy-Report-Only".

#### Apache Server:
In the most practical and secure example, the Content Security Policy will have a default-src set to the website's server and all resources outside the website's server, should be specified, on the page. Forms that submit sensitive information should be sandboxed, or have frame-ancestors set to 'none', to prevent phishing.

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

# Directives (By Most Practical & Secure Relevance):

## default-src:
The "default-src" directive, is a default for most directives and should be set to the URL, of the website (Should be HTTPS to force it) and the subdomains should be set with a `*`, like so: "https://*.website_name.com".

To set default-src, use:

`default-src DOMAIN_NAME *DOMAIN_NAME`

# Included In default-src:
NOTE: In the most practical and secure example, in Apache, you would set `dafault-src DOMAIN_NAME *DOMAIN_NAME` in the ".htaccess" file, for that reason the following are only needed for a page, if resources, for the page, have sources outside the website's server.

## script-src:
The "script-src" directive, is used to restrict the URLs that can load scripts, on the page.

If script-src, is set to:

`script-src DOMAIN_NAME *DOMAIN_NAME`, it's preferred over `X-XSS-Protection` headers, making them unneccessary.

REF: https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/X-XSS-Protection

To set script-src, use:

`script-src DOMAIN_NAME *DOMAIN_NAME`

## connect-src:
The "connect-src" directive, is used to restrict the URLs that can be loaded, using script interfaces.

To set connect-src, use:

`connect-src DOMAIN_NAME *DOMAIN_NAME`

## style-src:
The "style-src" directive, is used to restrict the URLs that can load CSS, on the page.

To set style-src, use:

`style-src DOMAIN_NAME *DOMAIN_NAME`

## frame-src:
The "frame-src" directive, is used to restrict URLs that can be used, in iframes, on the page.

The "child-src" directive, is the same as this directive, only one is needed, if specifying, none-self, when default-src is set.

To set frame-src, use:

`frame-src DOMAIN_NAME *DOMAIN_NAME`

# Not included In default-src:

## upgrade-insecure-requests:
The "upgrade-insecure-requests" directive, is used to upgrade HTTP links, on the page, to HTTPS requests.

To set upgrade-insecure-requests, use:

`upgrade-insecure-requests`

## base-uri:
The "base-uri" directive, is used to control what URLs a base element can use. 

To set base-uri, use:

`base-uri DOMAIN_NAME *.DOMAIN_NAME`

## sandbox:
The "sandbox" directive, is the preferred method for login pages, over "frame-ancestors", because it not only blocks iframes, it also blocks scripts, plugins, and popups, while maintaining a strict same origin policy.

To set sandbox, in a login form, use:

`sandbox allow-forms`

For other values to the sandbox directive, visit:

https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Content-Security-Policy/sandbox

## frame-ancestors:
The "frame-ancestors" directive, is used to resrict URLs that can load the page, within an iframe, on that URLs domain.

If frame-ansestors is set to:

`frame-ancestors 'none'`

Then the directive is the same as "X-Fram-Options DENY" headers. For this reason, X-Frame-Options headers are not needed.
It's important to block iframes, on all secure forms, to prevent phishing, with iframes.

# Lacking Browser Support:

`navigate-to`

`report-to`

`report-sample`

`prefetch-src`

# Impractical Or Unneccessary Directives:

`script-src-elem` and `script-src-attr`

are irrellivant because in the most practical and secure example, in Apache, you would have the default script-src set to the website's server anyway.

`style-src-elem` and `style-src-attr`

are irrellivant because in the most practical and secure example, in Apache, you would have the default style-src set to the website's server anyway.

# Depricated:

`block-all-mixed-content`

`report-uri`

`referrer`

`plugin-types`

`require-sri-for`

#### For The Complete List Of Currently Supported Directives, Visit:

https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Content-Security-Policy
