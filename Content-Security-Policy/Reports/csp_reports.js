/*BY: JOEL HORENSMA*/"\r\n;
/*THIS SCRIPT COLLECTS A REPORT OF VIOLATED CSP POLICYS*/
/*SCRIPT CAN BE CALLED WITH A SRC ATTRIBUTE*/
document.addEventListener("securitypolicyviolation", (e) => {
 var policyEnforced=e.disposition;
 var setPolicy=e.originalPolicy;
 var violatedPolicy=e.violatedDirective;
 var blockedResourceType=e.blockedURI;
 var originalSource=e.referrer;
 var violationFileSource=e.sourceFile;
 var violationURISource=e.documentURI;
 var violationLineNumber=e.columnNumber;
 var violationColumnNumber=e.columnNumber;
 var blockedResource=e.sample;
 var occurenceStatusCode=e.statusCode;
 
var violation_report='Enforce or report?: ' + policyEnforced + '\n' +
'Policy: ' + setPolicy + '\n' +
'Violated policy: ' + violatedPolicy + '\n' +
'Violation type: ' + blockedResourceType + '\n' +
'Violation source: ' + originalSource + '\n' +
'Violation file source: ' + violationFileSource + '\n' +
'Violation URI source: ' + violationURISource + '\n' +
'Line of page violation: ' + violationLineNumber + '\n' +
'Column of page violation: ' + violationColumnNumber + '\n' +
'Blocked resource: ' + blockedResource + '\n' +
'Occurrence status code: ' + occurenceStatusCode + '\n';
alert(violation_report);
});
