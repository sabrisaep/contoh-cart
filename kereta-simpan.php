<?php
session_start();
$kereta = $_POST['kereta'];
$_SESSION['kereta'] = $kereta;
header('location: index.php');
