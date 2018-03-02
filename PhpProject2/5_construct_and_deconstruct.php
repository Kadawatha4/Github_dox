
   


<?php

                                                
class ChildClass{
    
    
    
    public $data="hellow world";


        function __destruct() {
        echo 'this is a destruct method';
    }
    
    
    function __construct() {
        echo 'this construct method';
    }

    
    public function getProperty(){
        
        return $this->data;
        
    }


    
}


$yahoo=new ChildClass;
echo '<br>';
$yahoo2=new ChildClass;
echo '<br>';
echo $yahoo->data;



                                          

















































































