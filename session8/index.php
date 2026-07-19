<?php

class Person{
    public $name;
    public $age;

    public function __construct($name,$age)
    {   $this->name=$name;
        $this->age=$age;
        echo "Hi i am Parent"."\n";
    }

    public function sayHello(){
        echo "Hello"."\n";
    }
}

class User extends Person{
    public $userName;
    public $password;
}

class Empolye extends Person{
    public  $salary;

    public function __construct($name,$age,$salary)
    {   parent:: __construct($name,$age);
        $this->salary=$salary;
        echo "Hi I am Son"."\n";
    }
    public function getMyage(){
        parent::sayHello();
        return $this->name;
    }
    public function f2(){
        $this->getMyage();
    }
}

/*$emp1=new Empolye("memo",28,2000);
$emp1->sayHello();*/

function myFun(Person $person){
    echo $person->name;
}
myFun(new Empolye("memo",28,2000));


?>