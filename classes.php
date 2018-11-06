<?php

abstract class Customer {

  // priavte -> can access within a class
  // protected -> can access from the class who extends the class
  // public -> can access anywhere

   protected   $id = 1;
   protected   $name;
   protected   $email;
   protected   $balance;

   // will run anytime class is instantiated
   public function __construct($id, $name, $email, $balance) {
        $this->id      = $id;
        $this->name    = $name;
        $this->email   = $email;
        $this->balance = $balance;
    //  echo 'The Constructor Ran...';
   }

   abstract public function getEmail();

  //  public function getCustomer($id) {
  //    $this->id = $id;
  //    return 'Imran Rafique';
  //  }


  //  public function __destruct() {
  //    echo 'The Destructor Ran...';
  //  }

 }

 class Subscriber extends Customer {
   public $plan;
   public function __construct($id, $name, $email, $balance, $plan) {
    parent::__construct($id, $name, $email, $balance);
    $this->plan = $plan;
  }

  public function getEmail() {
    return $this->email;
  }
}

 $customer = new Subscriber(1, 'Imran Rafique', 'Comunit@live.com', 500, 'Free');
 echo $customer->getEmail();
//  echo $customer->getCustomer(45);


?>