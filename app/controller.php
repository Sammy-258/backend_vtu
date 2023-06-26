<?php

require_once("model/user.php");

class controller
{
    protected $pdo;
    protected $user_data;

    public function __construct(){
        $this->pdo = new PDO('mysql:host=localhost;dbname=vtu','root','');
    }

    public function login($file, $data){
        $student = new user($this->pdo);
        $student = $student->login($data);

        if($student){
            session_start();
            $_SESSION["user_data"]=$student;
            $this->user_data=$_SESSION["user_data"];
            if(isset($this->user_data)){
                header("location: dashboard");
            }
        }else{
            
        }

    }

    public function logout($file, $data){
        session_start();

        if(isset($_SESSION["user_data"])){
            unset($_SESSION["user_data"]);
        }

        session_destroy();
        header("location: login");
    }
}