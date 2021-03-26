<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
 <head>
 <title>Project 3-4: Member Registration</title>
 </head>
 <body>
 <h2>Project 3-4: Member Registration</h2>
<?php
// retrieve details from POST submission
$name = $_POST['name'];
$address = $_POST['address'];
$age = $_POST['age'];
$profession = $_POST['profession'];
$resident = $_POST['resident'];
// validate submitted data
// check name
if (empty($name)) {
  die('ERROR: Please provide your name.');
}
// check address
if (empty($address)) {
  die('ERROR: Please provide your address.');
}
// check age
if (empty($age)) {
  die('ERROR: Please provide your age');
} else if ($age < 18 || $age > 60) {
  die('ERROR: Membership is only open to those between 18 and 60 years.');
}
// check profession
if (empty($profession)) {
  die('ERROR: Please provide your profession.');
}
// check residential status
if (strcmp($resident, 'no') == 0) {
  die('ERROR: Membership is only open to residents.');
}
// if we get this far
// all the input has passed validation
// formulate and send e-mail message
$to = 'linusfernandes@gmail.com';
$from = 'webmaster@some.domain.com';
$subject = 'Application for membership';
$body = "Name: $name\r\nAddress: $address\r\n
  Age: $age\r\nProfession: $profession\r\n
  Residential status: $resident\r\n";
$headers = "From:webmaster@my.domain.com\r\nOrganization:MyOrg Inc.\r\nX-Mailer:PHP";
if(mail($to, $subject, $body, $headers)) {
  echo 'Thank you for your application.';
} else {
  die('ERROR: Mail delivery error');
}
?>
 </body>
</html>
