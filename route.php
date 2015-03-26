<?php
class Rout{

    static function start(){

        $url = strtolower(trim($_SERVER['REQUEST_URI']));
        $parse_url = parse_url($url);
        $path = $parse_url['path'];
        $path = explode("/", $path);
        $controller_name = $path[2];
//        print_r($controller_name);die;

        if($controller_name == ""){
            $controller_name = "main";
        }

        $controller_name ="Controller_".$controller_name;
        $controller_file = strtolower($controller_name).'.php';
        $controller_path = "controllers/".$controller_file;
//        print_r($controller_path);die;

        if(file_exists($controller_path)){
            include_once $controller_path;
        }else{
        }

        $controller = new $controller_name;
    }
}