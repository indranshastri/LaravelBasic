<?php

class Connection 
{
    public static function make($database){
        try {
            extract($database);
            return  new PDO("{$dbDns}:host={$dbHost};dbname={$dbName}",$dbUser,$dbPassword,$dbOptions);
        } catch (PDOException $ex) {
            dd("Could not connect",$ex);
        }
    }
}
