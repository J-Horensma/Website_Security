<?php
/*SET REPORT SCRIPT*/"\r\n";
echo "<script src='js/csp_report.js'></script>";
/*SET CONTENT SECURITY POLICY*/"\r\n";
if(isset($_SERVER['HTTPS'])) {
$csp_self_domain="https://".$_SERVER['SERVER_NAME'];
$csp_self_subdomains="https://".$csp_self_domain;
}
else{
$csp_self_domain="http://".$_SERVER['SERVER_NAME'];
$csp_self_subdomains="http://".$csp_self_domain;
}
echo "<script>alert('This script works inline, because its before the header.');</script>";
/*SET "Content-Security-Policy" HEADER*/"\r\n";
header("Content-Security-Policy: default-src $csp_self_domain $csp_self_subdomains $csp_trusted");
echo "<script>alert('This script does not work inline, because its after the header.');</script>";
?>
