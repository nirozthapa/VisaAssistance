<?php
require_once "../classes/Database.php";
include "../classes/Insertion.php";

//$insertObj = new Insertion();
//$insertObj = $insertObj->insertSubscriptions();


if(isset($_POST['email']) && !empty($_POST['email'])){
  $name =  isset($_POST['name'])? $_POST['name'] : '';
  $to_email =  isset($_POST['email'])? $_POST['email'] : '';
  $subject =  isset($_POST['subject'])? $_POST['subject'] : '';
  $message =  isset($_POST['message'])? $_POST['message'] : '';
  $headers = 'From: noreply@nirojinc.com';
  mail($to_email,$subject,$message,$headers);
  echo "Message sent successfully";




}
else
{
  die('UNABLE TO SEND THE EMAIL.');
}
?>
