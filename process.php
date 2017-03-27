<?php 
var_dump($_POST);
var_dump($_GET);

$name = $_POST["name"];
$email = $_POST["email"];
$details = $_POST['details'];



echo "<pre>";
$html_body = "";
$html_body .= "NAME: " .  $name . "\n";
$html_body .= "EMAIL: " . $email . "\n";    
$html_body .= "DETAILS: " . $details . "\n";

echo $html_body;
echo "</pre>";
// echo "Hello World!";

// TODO: Send Email
// header("location:thanks.php");


?>

