<?php
namespace App\controllers;

use App\Models\Books;
use App\core\App;
use App\core\Request;

class BooksController {

    public function index(){
        $books = App::get("database")->selectAll("books","Books");
        view("index",compact("books"));
    }

    public function about(){
        
        view("about");
    }


    public function save(){
        $details = $_POST;
        if(checkArrayIsset($_FILES["coverpage"])){ 
            $details["coverpage"] = fileUpload($_FILES["coverpage"]);
        }
    
        if(checkArrayIsset($_FILES["pub"])){
            $details["pub"] = fileUpload($_FILES["pub"]);
        }
    
        $details["iCreatedAt"]=$details["iUpdatedAt"] = time();
        App::get("database")->insert("books",$details);
    
        redirect();
    }

    public function booksApi(){
        $books = App::get("database")->selectAll("books","Books");
        array_map(function($element){
            $element->coverpage = Request::getURL("/files/".urlencode($element->coverpage));
            $element->pub = Request::getURL("/files/".urlencode($element->pub));
            return $element;
        },$books);
        echo json_encode($books);
    }
}