<!-- Font Awesome CDN Link -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

<header class="header">
    <div id="headerlogo" class="container">
        <div class="row align-items-center">

            <!-- Sosyal Medya İkonları -->
            <div class="col-12 col-md-4 d-flex justify-content-center mb-3 mb-md-0 d-none d-md-block">
                <a href="https://www.instagram.com/rumeliunv/"><i class="fa-brands fa-instagram fa-2xl shadow-lg" style="color:red;"></i>&nbsp;</a>
                <a href="https://www.youtube.com/@rumeliunv"><i class="fa-brands fa-youtube fa-2xl shadow-lg" style="color:red;"></i>&nbsp;</a>
                <a href="https://www.facebook.com/RumeliUNV?locale=tr_TR"><i class="fa-brands fa-facebook fa-2xl shadow-lg" style="color:red;"></i></a>
            </div>

            <!-- Logo -->
            <div class="col-9 col-md-3 text-center mb-3 mb-md-0">
                <a href="index.php">
                    <img id="logo" src="assets/icons/logohaber.png" alt="Logo" class="img-fluid" style="max-width: 100%; height: auto;">
                </a>
            </div>

            <!-- Para Birimi Bilgisi -->
            <div class="h-25 mt-5 col-4 col-md-5 text-center d-none d-md-block">
                <div style="font-size: 16px;">
                    <strong>Dolar:</strong>
                       <?php
                        $apiKey = "c8ae9604953f3d6248a9048";
                        $apiUrl = "https://v6.exchangerate-api.com/v6/c8ae9604953f3d6248a9048a/latest/USD";
                        
                        $response = file_get_contents($apiUrl);
                        $data = json_decode($response, true);
                        
                        if ($data['result'] == 'success') {
                            $usdToTry = $data['conversion_rates']['TRY'];
                            echo $usdToTry;
                        } else {
                            echo "Veri alınırken bir hata oluştu.";
                        }
                        ?>
                    

                    <strong>Euro:</strong>
                       <?php
                        $apiKey = "c8ae9604953f3d6248a9048";
                        $apiUrl = "https://v6.exchangerate-api.com/v6/c8ae9604953f3d6248a9048a/latest/EUR";
                        
                        $response = file_get_contents($apiUrl);
                        $data = json_decode($response, true);
                        
                        if ($data['result'] == 'success') {
                            $eurToTry = $data['conversion_rates']['TRY'];
                            echo $eurToTry;
                        } else {
                            echo "Veri alınırken bir hata oluştu.";
                        }
                        ?>
                    

                    <strong>Japon Yeni:</strong>
                        <?php
                        $apiKey = "c8ae9604953f3d6248a9048";
                        $apiUrl = "https://v6.exchangerate-api.com/v6/c8ae9604953f3d6248a9048a/latest/JPY";
                        
                        $response = file_get_contents($apiUrl);
                        $data = json_decode($response, true);
                        
                        if ($data['result'] == 'success') {
                            $jpyToTry = $data['conversion_rates']['TRY'];
                            echo $jpyToTry;
                        } else {
                            echo "Veri alınırken bir hata oluştu.";
                        }
                        ?>
                    

                    <strong>Sterlin:</strong>
                        <?php
                        $apiKey = "c8ae9604953f3d6248a9048";
                        $apiUrl = "https://v6.exchangerate-api.com/v6/c8ae9604953f3d6248a9048a/latest/GBP";
                        
                        $response = file_get_contents($apiUrl);
                        $data = json_decode($response, true);
                        
                        if ($data['result'] == 'success') {
                            $gbpToTry = $data['conversion_rates']['TRY'];
                            echo $gbpToTry;
                        } else {
                            echo "Veri alınırken bir hata oluştu.";
                        }
                        ?>
                
                </div>
            </div>
        </div>
    </div>
</header>
    <!-- Haber Katagori Sayfaları -->
    <div class="container-fluid shadow p-3 text-white text-center d-none d-md-block" id="headline">
        <div class="container">
    
            <a href="index.php" class="headerlink">Anasayfa</a>
            <a href="siyaset.php" class="headerlink">Siyaset</a>
            <a href="dünya.php" class="headerlink">Dünya</a>
            <a href="spor.php" class="headerlink">Spor</a>
            <a href="teknoloji.php" class="headerlink">Teknoloji</a>
            <a href="sondakika.php" class="headerlink">Son Dakika</a>
        </div>
        
        
    </div>
   
</header>
