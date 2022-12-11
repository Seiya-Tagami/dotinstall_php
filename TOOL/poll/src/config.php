<?php

ini_set('display_errors', 1);

define('DSN', 'mysql:host=db;dbname=poll_php');
define('USER', 'root');
define('PASSWORD', 'root');

session_start();

require_once(__DIR__ . '/functions.php');

