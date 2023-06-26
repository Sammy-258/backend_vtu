<?php

require_once("app/controller.php");

class ViewController extends controller
{
    public function Publicshow($file){
        $file=substr($file, 1);
        require_once("views/$file.php");
    }

    public function PrivateShow($file){
        session_start();

        if(isset($_SESSION["user_data"])){
            $this->user_data = $_SESSION["user_data"];
            $file = substr($file, 1);
            $message = isset($_GET['message']) ? $_GET['message'] : '';
            require_once("view/$file.php");
        }else{
            header("location: login");
        }
    }
}