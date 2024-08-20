<?php

declare(strict_types = 1);

$root = dirname(__DIR__) . DIRECTORY_SEPARATOR;

define('APP_PATH', $root . 'app' . DIRECTORY_SEPARATOR);
define('FILES_PATH', $root . 'transaction_files' . DIRECTORY_SEPARATOR);
define('VIEWS_PATH', $root . 'views' . DIRECTORY_SEPARATOR);

/* YOUR CODE (Instructions in READ.md) */

require APP_PATH . 'App.php';
require APP_PATH . 'helpers.php';


$files = getTransactionFile(FILES_PATH);

$transactions = [];
foreach($files as $file) {
  $transactions = array_merge($transactions, getTransactions($file, 'extractTransactions'));
}

$totals = calculateTotals($transactions);

// prettyPrint($transactions);

// prettyPrint($transactions);
// print_r($transactions);

require VIEWS_PATH . 'transactions.php';