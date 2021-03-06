/*BY: JOEL HORENSMA*/
/*BY REFERENCE OF THIS DOCUMENTATION: https://developer.mozilla.org/en-US/docs/Web/API/SecurityPolicyViolationEvent*/
/*LAST UPDATED: APRIL 14/2022*/
/*THIS SCRIPT COLLECTS A REPORT OF VIOLATED CSP POLICIES*/
/*THIS SCRIPT IS ABLE TO COLLECT DATA FROM ERROR OUTPUT, OF THE CSP.*/
/*SCRIPT CAN BE SET WITH A "src" ATTRIBUTE, IN A WEBPAGE. "violation_report" HOLDS THE VALUES, FOR THE CSP VIOLATION REPORT.*/
/*SCRIPT WILL NOT LOAD, FROM THE SAME PAGE, WHEN CSP IS SET UP PROPERLY, BECAUSE THAT VIOLATES STANDARD CSP.*/
/*USAGE:*/
/*CALL THIS SCRIPT, BEFORE OTHER SCRIPTS, ON THE PAGE*/
/*CALL WITH "violation_report" JS VARIABLE*/

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
 /*VIOLATION SOURCE URI PATH (E.G.: https://somesite.com/file.php?this=1&is=1&a=1&uri=1):*/
 var violationURISource=e.documentURI;
 /*LINE NUMBER OF VIOLATING RESOURCE (IF INLINE):*/
 var violationLineNumber=e.lineNumber;
  /*FIRST 40 CHARACTER SAMPLE, OF VIOLATING RESOURCE (IF INLINE):*/
 var violationSample=e.sample;
 /*HTTP STATUS CODE OF VIOLATION OCCURRENCE:*/
 var occurenceStatusCode=e.statusCode;
 
 var violation_report=
'CSP set to "enforce" or "report"?: ' + policyEnforced + '\n' +
'CSP in place: ' + setPolicy + '\n' +
'Violated policy: ' + violatedPolicy + '\n' +
'Violation type: ' + blockedResourceType + '\n' +
'Violation source IP/Domain: ' + originalSource + '\n' +
'Violation source file path: ' + violationFileSource + '\n' +
'Violation URI source path: ' + violationURISource + '\n' +
'Line number of page violation: ' + violationLineNumber + '\n' +
'Sample of policy violating resource contents: ' + violationSample + '\n' +
'HTTP status code, of policy violation occurrence: ' + occurenceStatusCode + '\n';

alert(violation_report);
});
