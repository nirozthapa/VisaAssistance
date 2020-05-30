<?php

class Insertion extends Database
{

    /**
     * Insertion constructor.
     */
    public function __construct()
    {
        parent::__construct();

    }

    function insertSubscriptions(){
        $sql = "INSERT INTO Subscriptions (Name , Email, PhoneNumber)
         VALUES ('John', 'hello@example.com',123)";
        $statement = $this->connection->query($sql);
        $categories = $statement->execute();

        return $categories;
    }

}