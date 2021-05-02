<?php
session_start();
$kereta = $_POST['kereta'];
$_SESSION['kereta'] = $kereta;
#setcookie('kereta', $kereta, time() + (60 * 60 * 24 * 7));
header('location: index.php');
