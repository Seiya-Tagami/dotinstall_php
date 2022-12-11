<?php

require_once(__DIR__ . '/config.php');
require_once(__DIR__ . '/poll.php');

try {
  $poll = new \MyApp\Poll();
} catch (Exception $e) {
  echo $e->getMessage();
  exit;
}

$results = $poll->getResults();

?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Poll Result</title>
  <link rel="stylesheet" href="./style.css">
</head>
<body>
  <h1>Result...</h1>
    <div class="row">
      <?php for ($i = 0; $i < 3; $i++) : ?>
      <div class="box" id="box_<?=h($i); ?>"><?= h($results[$i]); ?></div>
      <?php endfor; ?>
    </div>
    <a href="/"><div id="btn">Go Back</div></a>
</body>
</html>