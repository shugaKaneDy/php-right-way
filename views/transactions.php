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
      <table class="table table-striped table-bordered text-center">
        <thead>
          <tr>
            <th scope="col">Date</th>
            <th scope="col">Check #</th>
            <th scope="col">Description</th>
            <th scope="col">Amount</th>
          </tr>
        </thead>
        <tbody>
          <?php if(! empty($transactions)): ?>
            <?php foreach($transactions as $transaction): ?>
              <tr>
                <td><?= formatDate($transaction['date']) ?></td>
                <td><?= $transaction['checkNumber'] ?></td>
                <td><?= $transaction['description'] ?></td>
                <td>
                  <?php if ($transaction['amount'] < 0): ?>
                    <span class="text-danger">
                      <?= formatDollarAmount($transaction['amount']) ?>
                    </span>
                  <?php elseif ($transaction['amount'] > 0): ?> 
                    <span class="text-success">
                      <?= formatDollarAmount($transaction['amount']) ?>
                    </span>
                  <?php else: ?>
                    <?= formatDollarAmount($transaction['amount']) ?>
                  <?php endif ?>
                </td>
              </tr>
            <?php endforeach ?>
          <?php endif ?>
        </tbody>
        <tfoot>
          <tr>
            <th colspan="3">Total Income</th>
            <td><?= formatDollarAmount($totals['totalIncome'] ?? 0)?></td>
          </tr>
          <tr>
            <th colspan="3">Total Expense</th>
            <td><?= formatDollarAmount($totals['totalExpense'] ?? 0)?></td>
          </tr>
          <tr>
            <th colspan="3">Total Net</th>
            <td><?= formatDollarAmount($totals['netTotal'] ?? 0)?></td>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>