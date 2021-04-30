<?php
session_start();
$kapal = $_POST['kapal'];
$_SESSION['kapal'] = $kapal;
header('location: index.php');
