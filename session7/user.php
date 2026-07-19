<?php

class USER{
    public $name;
    private $age;
    public static $count=0;

    public function __construct($name,$age)
    {  self:: $count++;
       $this->name=$name;
       $this->age=$age;
    }
    public function sayHello(){
        //var_dump("Hello");
        var_dump($this->name);
    }
     public function getAge(){
        return $this->age;
    }
    public function setAge($age){
        $this->age=$age;
    }
    public static function add($x,$y){
        var_dump($x+$y);
    }

}
$sami=new USER("Sami",20);
$rita=new USER("Rita",30);
/*$sami->name="Sami";
$sami->age=20;
$rita->name="Rita";
$rita->age="15";*/
//var_dump($sami->name);
//$sami->sayHello();
//$rita->sayHello();
$sami->setAge(20);
//var_dump($sami->getAge());
var_dump(USER::$count);
USER::add(3,5);
?>