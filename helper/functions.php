<?php

function dd($val){
    echo "<pre>";
    print_r($val);
    echo "<pre>";
    exit;
}

function vdd($val){
    echo "<pre>";
    var_dump($val);
    echo "<pre>";
    exit;
}

function checkArrayIsset($var){
    return (isset($var) && !empty($var));
}

function fileUpload($file){
        $errors= array();
        $file_name = str_replace(" ","_",$file['name']);
        $file_size = $file['size'];
        $file_tmp = $file['tmp_name'];
       
        
        if($file_size > 2097152) {
           $errors[]='File size must be excately 2 MB';
        }
        
        if(empty($errors)==true) {
            move_uploaded_file($file_tmp,BASEDIR."/files/".$file_name);
            return $file_name;
        }else{
           dd($errors);
        }
 
}