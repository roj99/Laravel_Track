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

    class VisaCard extends Account{
        public $vat;
        public $card;
        public $exp;
        
        public function __construct($name, $balance,$vat,$card,$exp)
        {
            parent::__construct($name, $balance);
            $this->vat=$vat;
            $this->card=$card;
            $this->exp=$exp;
        }
        #[Override]
        public function addBalance($amount)
        {
            $fee=$amount*0.1;
            $netAmount=$amount-$fee;
            return parent::addBalance($netAmount);
        }
        #[Override]
        public function withDraw($amount)
        {   $fee=$amount*0.1;
            $total=$amount+$fee;
            return parent::withDraw($total);
        }
    }

    class PayPal extends Account{
        public $userNmae;
        public $password;

    public function __construct($name, $balance,$userNmae,$password)
    {
         parent::__construct($name, $balance);
         $this->userNmae=$userNmae;
         $this->password=$password;
    }
    }
    //$result=new Account("Miran",3000);
   // $result2=new Account("sali",5000);
   // var_dump($result->addBalance(500)) ;
    //var_dump($result->withDraw(4000)) ;
    //echo $result->getID()."\n";
    //var_dump($result2->addBalance(100)) ;
    //var_dump($result2->withDraw(4000)) ;
   // echo $result2->getID();
   $visa= new VisaCard("Miran",5000,0.5,"012","14/2/1998");
   var_dump($visa->name);
   var_dump($visa->addBalance(500));
   var_dump($visa->withDraw(500));
?>