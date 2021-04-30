<?php
session_start();

if (isset($_SESSION['wakaf'])) {
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
    <title>wakaf</title>
</head>

<body>
    <h1>wakaf</h1>
    <img src="wakaf.jpg" alt="wakaf" width="500">
    <form action="wakaf-simpan.php" method="post">
        Kuantiti
        <input type="number" value="<?php echo $wakaf; ?>" name="wakaf">
        <button type="submit">Simpan</button>
    </form>
</body>

</html>