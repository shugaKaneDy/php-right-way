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

