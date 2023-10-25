<?php 

echo 'hanafe';


session_start();

echo 'hanafe';

require "../app/core/init.php";

echo "hanafe";

DEBUG ? ini_set('display_errors', 1) : ini_set('display_errors', 0);

$app = new App;
$app->loadController();

