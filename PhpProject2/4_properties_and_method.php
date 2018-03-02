<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->




<?php



class ChildClass{
    
    
    
    public $data="hellow world";


    public function setNewData($newdata){
        
        $this->data=$newdata;
        
    }

    



    public function getProperty(){
        
        return $this->data;
        
    }







    
    
}


$yahoo=new ChildClass;
$yahoo2=new ChildClass;

//first section
echo $yahoo->getProperty();
echo '<br>';
//second section
$yahoo->setNewData("This is a user call");
echo $yahoo->getProperty();
//third section
echo '<br>';
$yahoo->setNewData("object oriented programme");
echo $yahoo->getProperty();


























