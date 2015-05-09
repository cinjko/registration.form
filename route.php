<?php
class Rout{

    static function start(){

        $url = Rout::clearString($_SERVER['REQUEST_URI']);
        $url = parse_url($url);
        $path = $url['path'];
        $path = explode("/", $path);
        $i = strpos($path[2], ".");
        $rout = $path[2];

        if (!empty($rout) && $rout !== "index.php"){
            $controller_name = substr($rout, 0, $i);
        } else {
            $controller_name = "main";
        }

        $controller_name ="Controller_".$controller_name;
        $controller_file = strtolower($controller_name).'.php';
        $controller_path = "controllers/".$controller_file;

        if(file_exists($controller_path)){
            include_once $controller_path;
        }else{
            echo "Такого файла не існує!";
        }

        $controller = new $controller_name;
//        print_r($controller);die;

    }

    static function clearString($str) {

        $result = strip_tags(strtolower(trim($str)));
        return $result;

    }
}