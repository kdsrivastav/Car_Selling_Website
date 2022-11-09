<?php 
require_once("config.php");
if((isset($_POST['your_name'])&& $_POST['your_name'] !='') && (isset($_POST['your_email'])&& $_POST['your_email'] !=''))
{
 //require_once("contact_mail.php");
$yourName = $db->real_escape_string($_POST['your_name']);
$yourEmail = $db->real_escape_string($_POST['your_email']);
$yourPhone = $db->real_escape_string($_POST['your_phone']);
$comments = $db->real_escape_string($_POST['comments']);
$sql="INSERT INTO contact_form_info (name, email, phone, comments) VALUES ('".$yourName."','".$yourEmail."', '".$yourPhone."', '".$comments."')";
if(!$result = $db->query($sql)){
die('There was an error running the query [' . $db->error . ']');
}
else
{
echo "Thank you! We will contact you soon";
}
}
else
{
echo "Please fill Name and Email";
}
?>