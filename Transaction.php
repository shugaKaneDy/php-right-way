<?php
// when using strict type you should intialized the properties

// add the return $this and : Transaction to enable method chaining

declare(strict_types=1);
// class Transaction {
//   // public float $amount;
//   // public string $description;
  
//   private float $amount;
//   private string $description;
  
//   public function __construct(float $amount, string $description) {
//     $this->amount = $amount;
//     $this->description = $description;
//   }

//   public function addTax(float $rate): Transaction {
//     $this->amount += $this->amount * $rate / 100;
//     return $this;
//   }

//   public function applyDiscount(float $rate): Transaction {
//     $this->amount -= $this->amount * $rate / 100;
//     return $this;
//   }

//   public function getAmount() {
//     return $this->amount;
//   }

//   // destructors
//   public function __destruct() {
//     echo 'Destruct' . $this->description . '<br />';
//   }
// }


// constructor Property Prmotion - Null Safety 
// class Transaction {
//   public function __construct(
//     private float $amount,
//     private string $description
//   ) {
//   }
// }

// class Transaction {
//   public function __construct(
//     private float $amount,
//     private ?string $description = null
//   ) {
//     echo $this->amount;
//   }
// }

// null safe operator
// class Transaction {
//   public function __construct(
//     private float $amount,
//     private string $description
//   ) {

//   }
// }