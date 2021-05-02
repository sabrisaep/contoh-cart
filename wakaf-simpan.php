<?php
session_start();
$wakaf = $_POST['wakaf'];
$_SESSION['wakaf'] = $wakaf;
#setcookie('wakaf', $wakaf, time() + (60 * 60 * 24 * 7));
header('location: index.php');
