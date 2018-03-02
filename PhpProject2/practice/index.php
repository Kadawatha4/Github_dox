<?php


class oneClass{


   private $x="dhanushka gayan";

    public function root(){

        return $this->x;

    }


}


class twoClass extends oneClass{







}


$xxx= new twoClass();

echo $xxx->root();






























































