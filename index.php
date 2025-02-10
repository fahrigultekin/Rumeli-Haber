<?php
include 'php/includes/ayar.php';

?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anasayfa</title>
    <link rel="icon" href="rumeli.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    
    <style>
        .carousel-inner .carousel-item img {
            width: 100%;         /* Görselin genişliğini %100 yap */
            height: auto;        /* Yüksekliği otomatik olarak ayarla (orantılı şekilde küçülür) */
            max-height: 300px;   /* Maksimum yükseklik 300px, ihtiyaca göre değiştirilebilir */
            object-fit: cover;   /* Görselin orantılı olarak kesilmesini sağlar */
        }
    </style>
</head>
<body>
    <!-- Header -->
    <?php include 'php/includes/header.php'; ?>
    
    <!-- Body -->
    <div class="container mt-5">
        <h3 class="mt-10 text-center"> GÜNDEM</h3>

        <!-- Slider -->
        <div id="newsSlider" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php
                    // haber_onem=1 olan haberleri çekiyoruz
                    $okunanHabercek = $db->prepare("SELECT * FROM haberler WHERE haber_onem=1");
                    $okunanHabercek->execute();
                    
                    $active = 'active'; // İlk slide'ı aktif yapmak için
                    if ($okunanHabercek->rowCount() > 0) {
                        foreach ($okunanHabercek as $row) {
                            echo '<div class="      carousel-item ' . $active . '">
                                    <img src="' . $row['haber_img'] . '" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5><a style="color:white;" href="haber.php?haber=' . $row['haber_id'] . '">' . $row['haber_baslik'] . '</a></h5>
                                    </div>
                                  </div>';
                            $active = ''; // Sonraki slide'lar için active sınıfını kaldır
                        }
                    } else {
                        echo "<p>En çok okunan haberler bulunamadı.</p>";
                    }
                ?>
            </div>
            <!-- Slider kontrolleri -->
            <button  class="carousel-control-prev" type="button" data-bs-target="#newsSlider" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button     class="carousel-control-next" type="button" data-bs-target="#newsSlider" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
<br><br>
<div class="container-fluid">
<?php
$okunanHabercek = $db->prepare("SELECT * FROM haberler WHERE haber_onem=1");
$okunanHabercek->execute();

if ($okunanHabercek->rowCount() > 0) {
    $counter = 0; // Kaçıncı haberi yazdırdığımızı takip etmek için
    echo '<div class="row">'; // Başlangıçta bir satır başlatıyoruz

    foreach ($okunanHabercek as $row) {
        // 4'er 4'er yan yana olması için her bir kartı "col-3" sınıfıyla yapıyoruz
        echo '<div class="col-6 col-sm-6 col-md-3 col-lg-3 d-flex justify-content-center mb-4">
                <div class="card t-card" style="width: 18rem;">
                    <img class="card-img-top" src="'.$row['haber_img'].'" alt="Card image cap" width="150px" height="250px">
                    <div class="card-body">
                        <h5 class="card-title"><a href="haber.php?haber='.$row['haber_id'].'">'.$row['haber_baslik'].'</a></h5>
                    </div>
                </div>
            </div>';

        $counter++;

        // Eğer 4 haber yazdırılmışsa, yeni bir satır başlat
        if ($counter % 4 == 0) {
            echo '</div><div class="row">'; // Satır bitiyor ve yeni bir satır başlıyor
        }
    }

    echo '</div>'; // Son satırın kapanışı
} else {
    echo "<p>En çok okunan haberler bulunamadı.</p>";
}
?>

</div>
    <!-- Footer -->
    <?php include 'php/includes/footer.php'; ?>

    <!-- Bootstrap JS ve Popper.js -->
   

</body>
</html>
