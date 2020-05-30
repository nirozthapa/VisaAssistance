<?php
require_once "../classes/Database.php";
include "../classes/Insertion.php";



$insertObj = new Insertion();



if(isset($_POST['email']) && !empty($_POST['email'])){
    $to_email =  isset($_POST['email'])? $_POST['email'] : '';
    $insertObj = $insertObj->insertSubscriptions($to_email);
    echo "Suscribed";

}
else
{
    die('unable to suscribe.');
}
?>