<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Hastane Otomasyon</title>
</head>
<body>
    <header>
        <h2>Hastane Otomasyon</h2>
    </header>

    <div class="tableOuter">
        <h1>Üye Ol</h1>
        <form action="islem.php" method = "post">
            <div class="user">
                <input type="text" name="kullanici_adsoyad" placeholder="Ad Soyad">
            </div>
            <div class="user">
                <input type="text" name="kullanici_tc" placeholder="Tc Kimlik No">
            </div>
            <div class="pass">
                <input name="kullanici_password" type = "password" placeholder="Şifre">
            </div>
            <button type="submit" class="sub" id="giris" name="kullanici_kaydet">Üye Ol</button>
            <br>
        </form>
        <a href="index.php"><button type="submit" class="sub" id="uye">Geri Çık</button></a>
    </div>
    
</body>
</html>