<?php 
include 'php/includes/ayar.php'; 
$link = isset($_GET['haber']) ? (int)$_GET['haber'] : 0;
if ($link <= 0) {
    echo "Geçersiz haber ID'si.";
    exit;
}

try {
    $haberbilgi = $db->prepare("SELECT * FROM haberler WHERE haber_id = ?");
    $haberbilgi->execute([$link]);
    if ($haberbilgi->rowCount() > 0) {
        $row = $haberbilgi->fetch(PDO::FETCH_ASSOC);
        $goruntulenme = $db->prepare("UPDATE haberler SET haber_okunmasayisi = haber_okunmasayisi + 1 WHERE haber_id = ?");
        $goruntulenme->execute([$link]);

        if ($goruntulenme->rowCount() > 0) {
        } else {
            echo "Görüntülenme sayısı arttırılamadı. Hata oluştu.";
        }
    } else {
        echo "Bu ID'ye ait haber bulunamadı.";
        exit;
    }
} catch (PDOException $e) {
    echo "Hata: " . $e->getMessage();
    exit;
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($row['haber_baslik']); ?></title>
    <link rel="icon" href="rumeli.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/header.css">
    <style>
        body {
            text-align: center;
        }
        .haber_metin {
            font-family: verdana;
            font-size: 20px;
            text-align: justify;
        }
        .container {
            width: 100%;
        }
        .haber_baslik {
            font-size: 2.5rem;
            text-align: center;
        }
        .haber_aciklama {
            font-size: 1.8rem;
            text-align: justify;
        }

        /* Responsive düzenlemeler */
        @media (max-width: 768px) {
            .haber_baslik {
                font-size: 2rem;
            }
            .haber_aciklama  {
                font-size: 1.5rem;
            }
        }

        @media (max-width: 576px) {
            .haber_baslik {
                font-size: 1.5rem;
            }
            .haber_aciklama {
                font-size: 1.2rem;
            }
        }
    </style>
</head>
<body>

<?php include 'php/includes/header.php'; ?>

<div class="container haber mt-5">
    <div class="row mt-5 mb-5">
        <div class="col-2"></div>
        <div class="col-12 col-sm-9 col-md-8 text-center">
            <h2 class="haber_baslik"><?php echo htmlspecialchars($row['haber_baslik']); ?></h2><br>
        </div>
        <div class="col-2"></div>
    </div>
    <div class="row mt-5 mb-5">
    <div class="col-2"></div>
        <div class="col-12 col-sm-9 col-md-8 text-center">
        <h4 class="haber_aciklama"><?php echo htmlspecialchars($row['haber_aciklama']); ?></h4><br>
        </div>
        <div class="col-2"></div>
    </div>
    
    <!-- Duyarlı Resim -->
     <div class="row mt-5 mb-5 ">
        <div class="col text-center">
        <img style="align-item:center;" class="img-fluid " src="<?php echo htmlspecialchars($row['haber_img']); ?>" alt="News Image"><br><br>
        </div>
     </div>
    
    <!-- Haber Metni -->
     <div class="row mt-5 mb-5">
     <div class="col-2"></div>
        <div class="col-12 col-sm-9 col-md-8 text-center">
        <p class="haber_metin" ><?php echo nl2br(htmlspecialchars($row['haber_metin'])); ?></p>
        </div>
        <div class="col-2"></div>
     </div>
    
     <div class="row mt-5 mb-5 ">
     <div class="col-2"></div>
        <div class="col-12 col-sm-9 col-md-8 text-center">
        <p class="haber_okunmasayisi">Okunma Sayısı: <?php echo htmlspecialchars($row['haber_okunmasayisi']); ?> <br> Haber Tarihi:<?php echo htmlspecialchars($row['haber_tarih']); ?> </p>
        </div>
        <div class="col-2"></div>
     </div>
    
</div>

<?php include 'php/includes/footer.php'; ?>

</body>
</html>
