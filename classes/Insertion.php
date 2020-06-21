<?php

require_once "../classes/Database.php";


if(isset($_POST['email']) && !empty($_POST['email'])) {
    $name =  isset($_POST['email'])? $_POST['email'] : '';

}

class Insertion extends Database
{
    /**
     * Insertion constructor.
     */
    public function __construct()
    {
        parent::__construct();

    }


    function insertQuery($name,$email,$subject,$message){
        $data = [
            'CustomerName' => $name,
            'Email' => $email,
            'Subject' => $subject,
            'Message' => $message,
        ];

        $query = "INSERT INTO CustomerQuery (CustomerName,Email,Subject,Message)
         VALUES (:CustomerName,:Email,:Subject,:Message)";
        $stmt= $this->connection->prepare($query);
        $stmt->execute($data);
    }

    function insertSubscriptions($email){
        $data = [
            'CustomerEmail' => $email,
        ];

        $query = "INSERT INTO Suscribers (CustomerEmail)
         VALUES (:CustomerEmail)";
        $stmt= $this->connection->prepare($query);
        $stmt->execute($data);
    }
}