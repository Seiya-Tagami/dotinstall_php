<?php

$dice1 = mt_rand(1, 6);
$dice2 = mt_rand(1, 6);

$zorome = ($dice1 == $dice2) ? true : false;

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>サイコロ</title>
</head>

<body>
  <h1>サイコロ</h1>
  <p>サイコロの目は「<?= $dice1; ?>」「<?= $dice2; ?>」でした！
    <?php if ($zorome == true) : ?>
      ゾロ目です！
    <?php endif ?>
  </p>
  <p><a href="<?= $_SERVER["SCRIPT_NAME"]; ?>">もう一度！</a></p>
</body>

</html>