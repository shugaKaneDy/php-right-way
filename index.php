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