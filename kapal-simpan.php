<?php
session_start();
$kapal = $_POST['kapal'];
$_SESSION['kapal'] = $kapal;
#setcookie('kapal', $kapal, time() + (60 * 60 * 24 * 7));
header('location: index.php');
