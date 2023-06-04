<?php include 'header.php';?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Hastane Otomasyon</title>
</head>
<body>
    <table>
        <tr>
            <th>Hastane</th>
            <th>Klinik</th>
            <th>Doktor</th>
            <th>İl</th>
            <th>Tarhi</th>
        </tr>

        <?php 
        $randevu_sor = $db->prepare("SELECT * FROM randevu
        INNER JOIN kullanici ON randevu.randevu_hasta_id = kullanici.kullanici_id WHERE kullanici_tc =:kullanici_tc");
        $randevu_sor->execute([
            'kullanici_tc' => $_SESSION['userkullanici_tc']
        ]);
        while ($kullanici_cek = $randevu_sor-> fetch(PDO::FETCH_ASSOC)) {
        ?>

        <tr>
            <td><?php echo $kullanici_cek['randevu_hastane'];?></td>
            <td><?php echo $kullanici_cek['randevu_klinik'];?></td>
            <td><?php echo $kullanici_cek['randevu_doktor'];?></td>
            <td><?php echo $kullanici_cek['randevu_sehir'];?></td>
            <td><?php echo $kullanici_cek['randevu_hastane'];?></td>
        </tr>
        <?php } ?>  
    </table>
    
</body>
</html>