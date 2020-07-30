<?php
namespace App\core;
use App\controllers\BooksController;

class Router
{
    
    protected $routes = [];
    

    public static function load($file){
       
        $router = new static;
        require $file;
        return $router;
    }

    public function define($routes){
        $this->routes = $routes;
    }

    public function direct($uri,$method,$controllerpath="controllers"){
        return $this->callAction(
            ...explode("@",$this->routes[$method][$uri])
        );

    }

    public function get($uri,$controller){
        $this->routes["GET"][$uri] = $controller;
    }
    
    public function post($uri,$controller){
        $this->routes["POST"][$uri] = $controller;
    }

    public function callAction($controller,$action){

        $controller = "App\\controllers\\{$controller}";

        $controller = new $controller;

        if(!method_exists($controller,$action)){
            throw new Exception("Routes Not Found");
        }

        return $controller->$action();
    }
}
