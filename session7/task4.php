<?php
    class Account{
        public $id;
        public $name;
        public $balance;
        public static $count=1;
        public function __construct($name,$balance)
        {   $this->id=self::$count++;
            $this->name=$name;
            $this->balance=$balance;
        }
        public function addBalance($amount){
            $this->balance += $amount;
            return $this->balance;
        }
        public function withDraw($amount){
            if($amount>$this->balance){
                return "Balance Not available" ;
            }
           $this->balance-=$amount;
           return $this->balance;
        }
        public function getID(){
           return $this->id;
        }
    }
    $result=new Account("Miran",3000);
    $result2=new Account("sali",5000);
    var_dump($result->addBalance(500)) ;
    var_dump($result->withDraw(4000)) ;
    echo $result->getID()."\n";
    var_dump($result2->addBalance(100)) ;
    var_dump($result2->withDraw(4000)) ;
    echo $result2->getID();
?>