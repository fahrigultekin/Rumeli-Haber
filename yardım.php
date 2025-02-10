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
    <title>Yardım</title>
    <link rel="icon" href="rumeli.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/header.css">
</head>

<body>
    <!-- Header -->
    <?php include 'php/includes/header.php'; ?>


    

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        form {
            max-width: 400px;
            margin: auto;
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input { 
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            padding: 10px 15px;
            background-color: #0080FF;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
       
    </style>
</head>

    <body>
       
        <form id="iletişim">
            <label for="isim">Adı:</label>
            <input type="text" id="isim" name="isim" placeholder="Adınız"  required=""  >
    
            <label for="soyad">Soyad:</label>
            <input type="soyad" id="soyadı" name="soyad"  placeholder="Soyadınız" required="">
            
            <label for="eposta">E-posta:</label>
            <input type="eposta" id="eposta" name="eposta" placeholder="E-postanız" required="">
    
            <label for="numara">Telefon Numarası:</label>
            <input type="numara" id="numara" name="numara" pattern="[0-9]{10}" placeholder="10 haneli telefon" required=""> <br><br>
            
            <label for="mesaj">Mesaj:</label>
            <textarea style="width: 400px; height: 200px;" id="mesaj" name="mesaj" placeholder="Mesajınızı Girin" required></textarea><br><br>
         

            <button type="submit">Gönder</button>
            <button type="reset">Sıfırla</button>
<br><br><br>

        </form>
    
    </body>

</html>














     <!-- Footer -->
     <?php include 'php/includes/footer.php'; ?>
</body>

</html>