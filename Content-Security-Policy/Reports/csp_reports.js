/*BY: JOEL HORENSMA*/
/*LAST UPDATED: APRIL 11/2022*/
/*THIS SCRIPT COLLECTS A REPORT OF VIOLATED CSP POLICYS*/
/*THIS SCRIPT IS ABLE TO COLLECT DATA FROM ERROR OUTPUT, OF THE CSP.*/
/*SCRIPT CAN BE CALLED WITH A "src" ATTRIBUTE, IN A SCRIPT.*/
/*SCRIPT WILL NOT LOAD, FROM THE SAME PAGE, WHEN CSP IS SET UP, BECAUSE THAT VIOLATES STANDARD CSP.*/
/*USAGE:*/
/*CALL THIS SCRIPT, BEFORE OTHER SCRIPTS, SO IT CAN IDENTIFY PROBLEMS, BEFORE THE PAGE FAILS*/
/*CALL REPORT WITH "violation_report" JS VARIABLE*/
document.addEventListener("securitypolicyviolation", (e) => {
 /*CHECK IF POLICY IS ENFORCED, OR SET TO REPORT ONLY:*/
 var policyEnforced=e.disposition;
 /*CSP POLICY THAT IS SET:*/
 var setPolicy=e.originalPolicy;
 /*CSP POLICY DIRECTIVE THAT WAS VIOLATED:*/
 var violatedPolicy=e.violatedDirective;
 /*VIOLATION TYPE (E.G.: INLINE SCRIPT):*/
 var blockedResourceType=e.blockedURI;
 /*VIOLATION SOURCE (IF FROM ANOTHER SOURCE, IF NOT, THIS WILL BE EMPTY):*/
 var originalSource=e.referrer;
 /*VIOLATION SOURCE FILE PATH (E.G.: https://somesite.com/file.php):*/
 var violationFileSource=e.sourceFile;
 /*VIOLATION SOURCE URI (E.G.: https://somesite.com/file.php?this=1&is=1&a=1&uri=1):*/
 var violationURISource=e.documentURI;
 var violationLineNumber=e.lineNumber;
 var violationColumnNumber=e.columnNumber;
 var blockedResource=e.sample;
 var occurenceStatusCode=e.statusCode;
 
var violation_report='Enforced or report only?: ' + policyEnforced + '\n' +
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
});
