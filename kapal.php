<?php
session_start();

if (isset($_SESSION['kapal'])) {
    $kapal = $_SESSION['kapal'];
} else {
    $kapal = 0;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kapal</title>
</head>

<body>
    <h1>kapal</h1>
    <img src="kapal.jpg" alt="kapal" width="500">
    <form action="kapal-simpan.php" method="post">
        Kuantiti
        <input type="number" value="<?php echo $kapal; ?>" name="kapal">
        <button type="submit">Simpan</button>
    </form>
</body>

</html>