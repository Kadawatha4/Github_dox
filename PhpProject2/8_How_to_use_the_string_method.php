<?php  

/**
* 
*/



class NewClass{

public $data="youtube youtube";
public $error="google google" .__CLASS__. "google";




public function __toString()

{

echo "yahoo yahoo ";
return $this->error;

}

 public function getProperty()
{
return $this->data;
}



}

$object=new NewClass;
echo $object;









































































