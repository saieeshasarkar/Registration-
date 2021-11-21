
<?php 
session_start(); 
$Age;
$firstname;
$last_name; 
$number ="020555556654";
$dob = "21/11/2021";
$first_name =$_POST["first_name"];
$last_name =$_POST["last_name"];
$dob=$_POST["dob"];
$blood_group =$_POST["blood_group"];
$baddress =$_POST["address"];
$mobile_number =$_POST["mobile_number"];
$password =$_POST["password"];
$email =$_POST["email"];

echo "thank you for registration<br>";
echo " your unsername is" . $first_name . " " . $last_name;


?>

 