<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'paging_php');

error_reporting(E_ALL & ~E_NOTICE);

try {
  $dbh = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME,DB_USER,DB_PASSWORD);
} catch(PDOException $e) {
  echo $e->getMessage();
  exit;
};

// $sql = "select * from comments";

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>コメント一覧</title>
</head>
<body>
  <h1>コメント一覧</h1>
</body>
</html>