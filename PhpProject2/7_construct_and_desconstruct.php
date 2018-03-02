<?php


class NewClass{
    

 public function __destruct(){
    
    echo "<br>";
    echo "buddha dhamma";//third time echo in destruct

   }



    public $data=" i am a property";//send echo in public variable


  public function __construct() {

      
        echo 'This class has been instantiated';
        echo "<br>";//first echo in construct method

    }



    public function setNewProperty($newdata){
        
        $this->data=$newdata;
        
    }
    
    
    public function getProperty(){
        return $this->data;
    }
    
    
 
    
    
}





$object=new NewClass;
$xxx=new NewClass;
echo $object->getProperty();

































































































