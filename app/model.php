<?php

class model
{
    protected $pdo;
    protected $table;

    public function __construct($pdo){
        $this->pdo = $pdo;
    }

    public function login($data){
        $email = $data["email"];
        $password =$data["password"];

        $stn = $this->pdo->prepare("SELECT * FROM $this->table WHERE email = '$email' AND password = '$password'");
        $stn->execute();
        $result = $stn->fetch(PDO::FETCH_ASSOC);

        return $result;
    }
}