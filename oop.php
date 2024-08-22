<?php
// declare(strict_types=1);
// single class per file is recommended

// require_once "Transaction.php";

// $transaction = new Transaction(100, 'transaction 1');
// $transaction->amount = 15;
// var_dump($transaction);
// $transaction->addTax(8);
// $transaction->applyDiscount(10);
// var_dump($transaction->amount);

// chain methods
// $transaction1 = (new Transaction(100, 'transaction 1'))
//                 ->addTax(8)
//                 ->applyDiscount(10);

// $transaction2 = (new Transaction(200, 'transaction 2'))
//                 ->addTax(8)
//                 ->applyDiscount(15);

// var_dump($transaction1->getAmount(), $transaction2->getAmount());

// destructor = use for clean up
// $amount = (new Transaction(100, 'transaction 1'))
//                 ->addTax(8)
//                 ->applyDiscount(10)
//                 ->getAmount();

// var_dump($amount);

// PHP std class that can be used to create generic objects and also some functions returns instances of std class

// $str = '{"a": 1, "b": 2, "c": 3}';
// $arr = json_decode($str, true); // 1st argument is the variable, 2nd to make assoc array
// var_dump($arr);

// $str = '{"a": 1, "b": 2, "c": 3}';
// $arr = json_decode($str);
// var_dump($arr->a);

// $obj = new \stdClass();
// $obj->a = 1;
// $obj->b = 2;
// var_dump($obj);

// casting 
// $arr = [1,2,3];
// $obj = (object) $arr;
// var_dump($obj->{1});

// null safety operator = read only. When the first layer is null it will ignore the rest of the layer
// $transaction = new Transaction(5, 'Test');
// echo $transaction->customer?->paymentProfile?->id;
// echo $transaction->getCustomer()?->getPaymentProfile()?->id;
