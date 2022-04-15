<?php
/*SET REPORT SCRIPT*/"\r\n";

/*SET CONTENT SECURITY POLICY*/"\r\n";
if(isset($_SERVER['HTTPS'])) {
$csp_self_domain="https://".$_SERVER['SERVER_NAME'];
$csp_self_subdomains="https://".$csp_self_domain;
}
else{
$csp_self_domain="http://".$_SERVER['SERVER_NAME'];
$csp_self_subdomains="http://".$csp_self_domain;
}
/*SET "Content-Security-Policy" HEADER*/"\r\n";
header("Content-Security-Policy: default-src $csp_self_domain $csp_self_subdomains $csp_trusted");

?>
