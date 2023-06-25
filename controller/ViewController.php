<?php

require_once("app/controller.php");

class ViewController extends controller
{
    public function Publicshow($file){
        $file=substr($file, 1);
        require_once("views/$file.php");
    }
}