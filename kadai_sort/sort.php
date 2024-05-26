<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP基礎編</title>
</head>
<body>
  <p>
  <?php

      // 配列の宣言
      $nums = [15, 4, 18, 23, 10];

      function sort_2way($array, $order) {
          // ソート順に応じてメッセージを出力
          if ($order === 'asc') {
              echo "昇順でソート <br>";
              sort($array);
          } elseif ($order === 'desc') {
              echo "降順でソート <br>";
              rsort($array);
          }
          
          // ソートされた配列を出力
          foreach ($array as $num) {
              echo "{$num} <br>";
          }
      }

      // 関数の呼び出し（昇順でソート）
      sort_2way($nums, 'asc');

      ?>
    









  </p>
  
</body>
</html>