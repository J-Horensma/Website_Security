<?php
/*SET REPORT SCRIPT*/"\r\n";
echo "<script src='js/csp_report.js'></script>";

/*SET CONTENT SECURITY POLICY*/"\r\n";
$domain=$_SERVER['SERVER_NAME'];
if(isset($_SERVER['HTTPS'])) {
$csp_self_domain="https://".$_SERVER['SERVER_NAME'];
/*www, WILL BE TREATED AS A SUBDOMAIN*/"\r\n";
$csp_self_subdomains="*".$domain;
}
else{
$csp_self_domain="http://".$_SERVER['SERVER_NAME'];
$csp_self_subdomains="*".$domain;
}

/*SET "Content-Security-Policy" HEADER*/"\r\n";
header("Content-Security-Policy: default-src $csp_self_domain $csp_self_subdomains $csp_trusted");

/*REMOVE THE BELOW STYLE ATTRIBUTE TO NOT TRIGGER A CSP REPORT, BECAUSE IT IS INLINE (ON THE PAGE), IT WILL TRIGGER CSP, DUE TO THE POSSIBILITY OF IT BEING ALTERED, CLIENT END*/"\r\n";

echo "<body style='color:blue'>The page loaded!</body>";
?>
