<?php

defined('DB_SERVER') ? null : define("DB_SERVER", "localhost");
defined('DB_USER')   ? null : define("DB_USER", "root");
defined('DB_PASS')   ? null : define("DB_PASS", "123456");
defined('DB_NAME')   ? null : define("DB_NAME", "php_market");

$con=mysqli_connect(DB_SERVER, DB_USER, DB_PASS,DB_NAME);
?>
