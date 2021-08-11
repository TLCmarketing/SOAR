<?php

$EmailFrom = "submission@tlcstudenthousing.com";
//$EmailTo = "christian.young42@gmail.com";
$EmailTo = "marketing@tlcproperties.com";
$Subject = "TLC 55 Plus Submission";
$Name = Trim(stripslashes($_POST["name"]));
$Email = Trim(stripslashes($_POST["email"]));
$Property = Trim(stripslashes($_POST["property"]));
$Phone = Trim(stripslashes($_POST["phone"]));

// $servername = "160.153.48.193";
// $username = 'revelSubmit';
// $password = 'K+Tf+y5XNqAT';
// $dbname = "revelFormSubmissions";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// $sql = "INSERT INTO tlc55Plus (name, email, phone, interested) VALUES ('".$Name."', '".$Email."', '".$Phone."', '".$Property."')";

// if ($conn->query($sql) === TRUE) {
//     $postData['sql'] =  "New record created successfully";
// } else {
//     $postData['sql'] = "Error: " . $sql . "<br>" . $conn->error;
// }

// $conn->close();

// prepare email body text
$Body = "<html><body>";
$Body .= "<table rules='all' cellpadding='10' style='border-color: #ececec;'>";
$Body .= "<tr><td><strong>Name:</strong> </td><td>" . $Name . "</td></tr>";
$Body .= "<tr><td><strong>Email:</strong> </td><td>" . $Email . "</td></tr>";
$Body .= "<tr><td><strong>Phone:</strong> </td><td>" . $Phone . "</td></tr>";
$Body .= "<tr><td><strong>Property:</strong> </td><td>" . $Property . "</td></tr>";
$Body .= "</table>";
$Body .= "</body></html>";

$Headers  = 'MIME-Version: 1.0' . "\r\n";
$Headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$Headers .= 'To:' .$EmailTo. "\r\n";
$Headers .= 'From: '. $EmailFrom . "\r\n";

$success = mail($EmailTo, $Subject, $Body, $Headers);

// redirect to success page
if ($success){
  $postData['json'] = 'success';
  echo json_encode($postData);
}
else{
  //print "<meta http-equiv=\"refresh\" content=\"0;URL=contact.html?error\">";
}
?>