<?php

function prettyArray($array) {
  echo "<pre>";
  print_r($array);
  echo "</pre>";
}

$allTransaction = [];
$income = 0;
$expense = 0;
$netTotal = 0;

$transaction1 = [
  [date("01-01-2021"), "Transaction1", 155.90],
  [date("01-02-2021"), "Transaction2", -50.24],
  [date("01-03-2021"), "Transaction3", 88.21],
];

$transaction2 = [
  [date("02-01-2021"), "Transaction1", 450],
  [date("02-02-2021"), "Transaction2", 199.99],
  [date("02-03-2021"), "Transaction3", -349],
];

$allTransaction = array_merge($transaction1, $transaction2);

foreach($allTransaction as $transaction) {
  if ($transaction[2] > 0) {
    $income += $transaction[2];
  }

  if ($transaction[2] < 0) {
    $expense += $transaction[2];
  }
}
$netTotal = $income + $expense;


// print_r($transaction1);
// echo "<br/>";
// print_r($transaction2);
// echo "<br/>";
// prettyArray($allTransaction);
// echo "<br/>";
// echo $income;
// echo "<br/>";
// echo $expense;
// echo "<br/>";
// echo $netTotal;




?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

  <h1 class="text-center my-3">Expense tracking</h1>
  <div class="container">
    <div class="mb-3">
      <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Date</th>
          <th scope="col">Description</th>
          <th scope="col">Amount</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($allTransaction as $transaction) {
          ?>
          <tr>
            <td><?= date('F d, Y', strtotime($transaction[0])) ?></td>
            <td><?= $transaction[1]; ?></td>
            <td><?= '$ ' . $transaction[2] ?></td>
          </tr>
  
          <?php
        }
  
        ?>
      </tbody>
      </table>
    </div>
    <div>
      <p class="fw-bold text-primary">Income: $<?= $income ?></p>
      <p class="fw-bold text-primary">Expense: $<?= $expense ?></p>
      <p class="fw-bold text-primary">Net Total: $<?= $netTotal ?></p>
    </div>
  </div>

  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>