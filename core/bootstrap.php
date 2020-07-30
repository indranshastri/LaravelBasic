<?php
use App\core\App;
define("BASEDIR",dirname(__DIR__));

App::bind("config", require "config.php");


App::bind("database", new QueryBuilder(
    Connection::make(App::get("config")["database"])
));

function view($name,$data=[]){
    extract($data);

    return require "app/views/{$name}.views.php";
}

function redirect($path=""){
    $config = APP::get("config");
    $rootfolder = $config["app"]["rootfolder"];
    header("Location: /{$rootfolder}/{$path}");
}

