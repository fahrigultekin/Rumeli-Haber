<?php
include 'php/includes/ayar.php';

// Form verilerini alıyoruz
$name = $_POST['isim'];
$surname = $_POST['soyad'];
$eposta = $_POST['eposta'];
$number = $_POST['numara'];
$mesaj = $_POST['mesaj'];

// Tarih bilgisini alıyoruz
$date = date("Y-m-d H:i:s");

// Veritabanına veri eklemek için SQL sorgusunu hazırlıyoruz
$mesajekle = $db->prepare("INSERT INTO yardim (`kullanici_adi`, `kullanici_soyad`, `kullanici_eposta`, `kullanici_telefon`, `kullanici_mesaj`, `mesaj_date`) 
                           VALUES ('$name', '$surname', '$eposta', '$number', '$mesaj', '$date')");

// Sorguyu çalıştırıyoruz
if ($mesajekle->execute()) {
    echo "<script>
            alert('Mesajınız başarıyla gönderildi!');
            window.location.href = 'index.php';
          </script>";
} else {
    echo "<script>
            alert('Mesaj gönderilemedi, lütfen tekrar deneyin.');
            window.location.href = 'index.php';
          </script>";
}

// Veritabanı bağlantısını kapatıyoruz
$mesajekle->close();
?>
