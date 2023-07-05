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
            if(isset($_SESSION["msg_type"])){
                if($_SESSION["msg_type"]=="failed"){
                    $this->msg_type = $_SESSION["msg_type"];
                    $this->msg_data = $_SESSION["msg_data"];

                    unset($_SESSION['msg_type']);
                }
            }
            $this->user_data = $_SESSION["user_data"];
            $file = substr($file, 1);
            $message = isset($_GET['message']) ? $_GET['message'] : '';
            require_once("views/$file.php");
        }else{
            header("location: login");
        }
    }
}