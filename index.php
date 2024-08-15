<?php

echo "Hello World!";


// Referencing
echo "<br/>";
$x = 10;
$y = &$x;
$x = 100;
echo $x, ', ', $y;

// Constants
echo "<br/>";
define('STATUS_PAID', 'paid');
echo STATUS_PAID;

const STATUS_PAID_CONST = 'paid';
echo STATUS_PAID_CONST;

//Variable Variables
echo "<br/>";
$foo = 'bar';
$$foo = 'baz';
echo $foo, $bar;

// integers 0 -0 = false
// floats 0.0 -0.0 = false
// '' = false
// '0' = false
// [] = false
// null = false
// var_dump = to check the datatype

// type cast
// (string) - Converts to data type String
// (int) - Converts to data type Integer
// (float) - Converts to data type Float
// (bool) - Converts to data type Boolean
// (array) - Converts to data type Array
// (object) - Converts to data type Object
// (unset) - Converts to data type NULL

echo "<br/>";
$x = 200_000_00;
echo $x;
// int can use hexadecimal binary etc

// don't trust the floats for comaparison

// String
// '' = you can't use variables
// "" = you can use variables
// Heredoc = called the variable
echo "<br/>";
$text = <<<TEXT
Line 1 $x
Line 2 $y
Line 3
TEXT;
// echo $text;
echo nl2br($text);

// Nowdoc = variable cannot be called
echo "<br/>";
$text = <<<'TEXT'
Line 1 $x
Line 2 $y
Line 3
TEXT;
// echo $text;
echo nl2br($text);

echo "<br/>";
$programmingLanguages = ['PHP', "Java", 'Python'];
$programmingLanguages[] = "C++";
// echo $programmingLanguages[1][-1];
echo "<pre>";
print_r($programmingLanguages);
echo "</pre>";
//unset() destroy the variable. can also remove data from array

echo "<br/>";
$x = "Hello";
$x .= "World";
echo $x;

// strlen() = for sting
// count() = for arrays
// implode() = adds the arrays

echo "<br/>";
$paymentStatus = 'paid';

switch($paymentStatus) {
  case 'paid':
    echo "Paid";
    break;
  
  case 'declined':
  case 'rejected':
    echo "Payment Declined";
    break;
  
  case 'pending':
    echo "Payment Pending";
    break;
  
  default:
    echo "Unknown Payment Status";
}
// sleep(number of seconds)

// match expression = has strict comparison. switch ==, match ===
echo "<br/>";
match($paymentStatus) {
  'paid' => print 'Paid', 
  'declined' => print 'Payment Declined', 
  'rejected' => print 'Payment Declined', 
  'pending' => print 'Payment Pending',  
  default => print 'Unknown Payment Status',

};

$paymentStatusDisplay = match($paymentStatus) {
  'paid' => 'Paid', 
  'declined', 'rejected' => 'Payment Declined', 
  'pending' => 'Payment Pending',  
  default => 'Unknown Payment Status',
};

echo "<br/>" . $paymentStatusDisplay;

// ob_start();
// include 'partials/nav.php';
// $nav = ob_get_clean();
// $nav = str_replace('About', 'About Us', %nav);
// echo $nav

// functions
echo "<br/>";
echo "<br/>";
// strict type function
// function foo(): int {
//   return 1;
// }
// void = nothing to expect in return = default null
// function foo(): void {
//   return;
// }
// nullable = can return null if there is no value
// function foo(): ?int {
//   return null;
// }
// multiple strict type = can used mixed that accepts multiple data types
// function foo(): int|float {
//   return 1;
//   return 1.5;
// }

// declare(strict_types=1);
// function parameter
// splat/spread operator
// function sum(...$numbers): int|float {
//   // $sum = 0;
//   // foreach($numbers as $number) {
//   //   $sum += $number;
//   // }
//   // return $sum;
//   return array_sum($numbers);
// }
// echo sum(10,20,30.5);

// capture passed arguments
// function foo(int $x, int $y) {
//   if ($x % $y === 0) {
//     return $x/$y;
//   }

//   return $x;
// }

// $x = 6;
// $y = 3;
// echo foo(y: $y, x: $x);
// setcookie(name: 'foo', value: 'bar', httponly: true);

// scope
// global $x = makes it global
// $GLOBALS['x'] = access the clobal variable when using function

// is_callable() = meaning can be called from the word itself

// anonymous function
// $sum = function (int|float ...$numbers) {
//   return array_sum($numbers);
// };
// echo $sum(1,2,3,4);

// callback function and callback data types
// $array1 = [1,2,3,4];
// $array2 = array_map(function($element) {
//   return $element * 2;
// }, $array1);

// echo "<pre>";
// print_r($array1);
// print_r($array2);
// echo "</pre>";

// arrow function = can only have single line expression

// $array1 = [1,2,3,4];

// $array2 = array_map(fn($number) => $number * $number, $array1);

// echo "<pre>";
// print_r($array2);
// echo "</pre>";

// $currentTime = time();

// echo $currentTime . "<br/>";
// echo $currentTime + 5 * 24 * 60 * 60 . "<br/>";
// echo $currentTime - 60 * 60 * 24 . "<br/>";

// echo date('m/d/Y g:ia') . "<br/>";
// echo date('m/d/Y g:ia', $currentTime + 5 * 24 * 60 * 60) . "<br/>";
// echo date('m/d/Y g:ia', $currentTime - 60 * 60 * 24) . "<br/>";

// date_default_timezone_set('Asia/Manila');
// echo date_default_timezone_get() . "<br/>";

// echo date('m/d/Y g:ia') . "<br/>";
// echo date('m/d/Y g:ia', $currentTime + 5 * 24 * 60 * 60) . "<br/>";
// echo date('m/d/Y g:ia', $currentTime - 60 * 60 * 24) . "<br/>";

// strtotime('2021-01-08 07:00:00'); = returns int
// date('m/d/Y g:ia', strtotime('2021-01-08 07:00:00')); = returns date
// date('m/d/Y g:ia', strtotime('tommorow')); = returns date
// date('m/d/Y g:ia', strtotime('first/second/last/...etc day of february 2020')); = returns date
// print_r(date_parse($date));
// print_r(date_parse_from_format('m/d/Y g:ia', $date));

// array_chunk($items, 2, true); = 1st array, 2nd length, 3rd preserved keys
// array_combine()
// array_filter() = $even = array_filter($array, fn($number) => $number % 2 === 0, ARRAY_FILTER_USE_KEY);
// array_values(); = will filter out falsy values
// array_keys();
// array_map();
// array_merge();
// array_reduce();
// array_search(); key, array
// in_array(); key, array
// array_diff();
// asort(); = sort array
// ksort(); = sort key
// array destructure
// $array = [1,2,3,4];
// // list($a, $b, $c, $d) = $array;
// [$a, $b, $c, $d] = $array;
// echo $a . ' ' . $b . ' ' . $c . ' ' . $d . '<br />';