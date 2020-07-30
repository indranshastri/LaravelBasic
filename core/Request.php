<?php
namespace App\core;

class Request 
{
    
    public static function uri(){
        $app = App::get("config");
        
        return trim(
                str_replace(
                    "/".$app["app"]["rootfolder"]."/",
                    "",
                    parse_url($_SERVER["REQUEST_URI"],PHP_URL_PATH)
                ),"/");
        
      
    }

    public static function method(){
        return $_SERVER["REQUEST_METHOD"];
    }

    public static function getURL($path=""){
        $app = require "config.php";
        $path = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]"."/".$app["app"]["rootfolder"].$path;
        return $path;
    }
    
}

