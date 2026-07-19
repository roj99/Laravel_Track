<?php

class MATH{
    public $length;
    public $width;

    public function __construct($length,$width)
    {
       $this->length=$length;
       $this->width=$width;
    }
    public function areaFun(){
        return $this->length*$this->width;
    }
     public function perFun(){
          return $this->length*4;
    }
}
$result=new MATH(2,2);
var_dump($result->areaFun());
var_dump($result->perFun());

?>