<?php
namespace App\Models;

class Books 
{
    public $id,$title,$author,$shortDescription,$longDescription,$isbn,$coverpage,$pub,$iCreatedAt,$iUpdateAt;

    public function coverpage(){
        return  getURL("files/".$this->coverpage);
    }

    
}
