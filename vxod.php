<?php 
require_once('db.php');
$login = $_POST["login"];
$password = $_POST["password"];

if ($login == 'user12' && $password == 'guth171')
  {
  session_start();
  $_SESSION['admin'] = true;
  $script = 'adminpanel.php';
  }
else
$script = 'redaktor.html';
header("Location: $script");


