<?php
class Rout{

    static function start(){

        $controller_name = "main";


        $controller_name ="controller_".$controller_name;
        $controller_file = $controller_name.'.php';
        $controller_path = "controller/".$controller_file;

        if(file_exists($controller_path)){
            include_once $controller_path;
        }else{
            require_once "controllers/main.php";
        }
    }
}