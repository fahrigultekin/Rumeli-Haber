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
    <title>Siyaset</title>
    <link rel="icon" href="rumeli.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/header.css">
</head>
<body>
    <!-- Header -->
    <?php include 'php/includes/header.php'; ?>

    <!-- Body -->
    <div class="container mt-5">
        <!-- Son Haberler -->
        <div class="row">
            <h2>Son Haberler</h2>
            <?php
                // Son 8 haber (spor kategorisinde)
                $habercek = $db->prepare("SELECT * FROM haberler WHERE haber_kategori='siyaset' LIMIT 8");
                $habercek->execute();
                foreach ($habercek as $row) {
                    echo '<div class="col-6 col-sm-6 col-md-3 col-lg-3 d-flex justify-content-center mb-4">
                        <div class="card t-card" style="width: 18rem;">
                            <img class="card-img-top" src="'.$row['haber_img'].'" alt="Card image cap" width="150px" height="250px">
                            <div class="card-body">
                                <h5 class="card-title"><a href="haber.php?haber='.$row['haber_id'].'">'.$row['haber_baslik'].' </a></h5>
                            </div>
                        </div>
                    </div>';
                }
            ?>
        </div>
        <div class="row">
            <h3 class="mt-5">En Çok Okunanlar</h3>
            <?php
                $okunanHabercek = $db->prepare("SELECT * FROM haberler WHERE haber_kategori='siyaset' ORDER BY haber_okunmasayisi DESC LIMIT 8");
                $okunanHabercek->execute();
                if ($okunanHabercek->rowCount() > 0) {
                    foreach ($okunanHabercek as $row) {
                        echo '<div class="col-6 col-sm-6 col-md-3 col-lg-3 d-flex justify-content-center mb-4">
                            <div class="card t-card" style="width: 18rem;">
                                <img class="card-img-top" src="'.$row['haber_img'].'" alt="Card image cap" width="150px" height="250px">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="haber.php?haber='.$row['haber_id'].'">'.$row['haber_baslik'].' </a></h5>
                                </div>
                            </div>
                        </div>';
                    }
                } else {
                    echo "<p>En çok okunan haberler bulunamadı.</p>";
                }
                
            ?>
             </div>
        <div class="row">
            <h3 class="mt-5">Tüm Haberler</h3>
            <?php
                $okunanHabercek = $db->prepare("SELECT * FROM haberler WHERE haber_kategori='siyaset' ");
                $okunanHabercek->execute();
                
                if ($okunanHabercek->rowCount() > 0) {
                    foreach ($okunanHabercek as $row) {
                        echo '<div class="col-6 col-sm-6 col-md-3 col-lg-3 d-flex justify-content-center mb-4">
                            <div class="card t-card" style="width: 18rem;">
                                <img class="card-img-top" src="'.$row['haber_img'].'" alt="Card image cap" width="150px" height="250px">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="haber.php?haber='.$row['haber_id'].'">'.$row['haber_baslik'].' </a></h5>
                                </div>
                            </div>
                        </div>';
                    }
                } else {
                    echo "<p>En çok okunan haberler bulunamadı.</p>";
                }
                
            ?>
        </div>
        </div>

    <!-- Footer -->
    <?php include 'php/includes/footer.php'; ?>
</body>
</html>
