# What Are "Strict-Transport-Security" Headers?:
"Strict-Transport-Security" or "HSTS" headers, are used to protect pages, with sensitive data inputs (Like forms), from MITM attacks, by preventing the page from loading, if the connection has a certificate that is spoofed.

# How Does A MITM Attack work?:
A "Man In The Middle" attack or "MITM", works, on HTTPS, when a middle-man creates a spoofed certificate (They can decrypt), maintaining an HTTPS connection, with the target, so they are not notified by the browser, that the page is HTTP and not secure (The old way). In modern browsers, the browser will notify the user that the page is not secure, anyway (Due to certificate not matching), but allows a user to continue anyway, even though it's guaranteed, they are being intercepted. 
If Strict-Transport-Security headers are set and a spoofed certificate is detected, the page will not allow a user to continue, the page simply does not load, for example, on a login form.
