<?php
session_start();

if (isset($_SESSION['kereta'])) {
#if (isset($_COOKIE['kereta'])) {
    $kereta = $_SESSION['kereta'];
    #$kereta = $_COOKIE['kereta'];
} else {
    $kereta = 0;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kereta</title>
</head>

<body>
    <h1>Kereta</h1>
    <img src="kereta.jpg" alt="kereta" width="500">
    <form action="kereta-simpan.php" method="post">
        Kuantiti
        <input type="number" value="<?php echo $kereta; ?>" name="kereta">
        <button type="submit">Simpan</button>
    </form>
</body>

</html>