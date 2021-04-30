<?php
session_start();

if(isset($_SESSION['kereta'])) {
    $kereta = $_SESSION['kereta'];
} else {
    $kereta = 0;
}

if(isset($_SESSION['kapal'])) {
    $kapal = $_SESSION['kapal'];
} else {
    $kapal = 0;
}

if(isset($_SESSION['wakaf'])) {
    $wakaf = $_SESSION['wakaf'];
} else {
    $wakaf = 0;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Cart</title>
</head>
<body>
    <h1>Senarai Pesanan</h1>

    <table border="1">
        <tr>
            <th>Bil</th>
            <th>Item</th>
            <th>Kuantiti</th>
        </tr>
        <tr>
            <td>1</td>
            <td><a href="kereta.php">Kereta</a></td>
            <td align="center"><?php echo $kereta; ?></td>
        </tr>
        <tr>
            <td>2</td>
            <td><a href="kapal.php">Kapal</a></td>
            <td align="center"><?php echo $kapal; ?></td>
        </tr>
        <tr>
            <td>3</td>
            <td><a href="wakaf.php">Wakaf</a></td>
            <td align="center"><?php echo $wakaf; ?></td>
        </tr>
    </table>
</body>
</html>
