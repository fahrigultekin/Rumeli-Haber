<?php
include 'php/includes/ayar.php';
error_reporting(E_ALL);
ini_set("display_errors", 1);
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ekip Üyelerimiz</title>
    <link rel="icon" href="rumeli.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/header.css">
</head>

<body>
    <!-- Header -->
    <?php include 'php/includes/header.php'; ?>

    <div class="container shadow" style="font-family: 'Times New Roman', Times, serif;" >
    <br><br><br><br>
    <h4 style="font-size: 50px;">Ekip Üyelerimiz</h4>
    <p style="font-size: 28px;">
        <ul style="font-size: 30px;">
            <b><li>Kerem Ayaz</li></b>
            <p>Kurucu</p>
            <p>Yazılımcı</p>
            <p>Tasarımcı</p>
            <b><li>Fahri Gültekin</li></b>
            <p>Kurucu</p>
            <p>Yazılımcı</p>
            <p>Tasarımcı</p>
            <b><li>Emir Ahmet Yıldız</li></b>
            <p>Kurucu</p>
            <p>Yazılımcı</p>
            <p>Tasarımcı</p>
        </ul>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </div>
    <!-- Footer -->
    <?php include 'php/includes/footer.php'; ?>
</body>

</html>