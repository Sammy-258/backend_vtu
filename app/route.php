<?php

class Route
{
    public static function handle($method="", $path="", $controller="", $action=null)
    {
        $current_method=$_SERVER["REQUEST_METHOD"];
        $current_URI=$_SERVER["REQUEST_URI"];

        if($current_method!== $method){
            return false;
        }else{
            $parent="/BACKEND_VTU";
            $pattern='#^'.$parent.$path.'$#siD';
            if(preg_match($pattern,$current_URI)){
                if($path==="/login" && $method==='POST'){
                    require_once "$controller.php";
                    $controller = new $controller;
                    $controller->$action($path, $_POST);

                    exit();
                }elseif ($path==="/logout" && $method==='GET') {
                    require_once "$controller.php";
                    $controller = new $controller;
                    $controller->$action($path, $_POST);

                    exit();
                }else{
                    require_once("controller/$controller.php");
                    $controller = new $controller;
                    $controller->$action($path,$_POST);
                    exit();
                }
            }
        }
    }


    public static function get($path="", $controller="", $action="")
    {
        return self::handle('GET',$path,$controller,$action);
    }

    public static function post($path="", $controller="", $action="")
    {
        return self::handle('POST',$path,$controller,$action);
    }

}