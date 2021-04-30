<?php
session_start();
$wakaf = $_POST['wakaf'];
$_SESSION['wakaf'] = $wakaf;
header('location: index.php');
