<?php

require_once(__DIR__ . '/config.php');
require_once(__DIR__ . '/poll.php');

try {
  $poll = new \MyApp\Poll();
} catch (Exception $e) {
  echo $e->getMessage();
  exit;
}

if($_SERVER['REQUEST_METHOD'] === 'POST') {
  $poll->post();
}

$err = $poll->getError();
?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Poll</title>
  <link rel="stylesheet" href="./style.css">
</head>
<body>
  <?php if(isset($err)) : ?>
  <div class="error"><?= h($err); ?></div>
  <?php endif; ?>
  <h1>Which do you like best?</h1>
  <form action="" method="POST">
    <div class="row">
      <div class="box" id="box_0" data-id="0"></div>
      <div class="box" id="box_1" data-id="1"></div>
      <div class="box" id="box_2" data-id="2"></div>
      <input type="hidden" id="answer" name="answer" value="">
      <input type="hidden" name="token" value="<?= h($_SESSION['token']); ?>">
    </div>
    <div id="btn">Vote and See Results</div>
  </form>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="./main.js"></script>
</body>
</html>