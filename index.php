<!-- Tambahan Array Basic -->
<!-- <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <style>
        .kotak{width: 50px;height: 50px;background-color: salmon;text-align: center;line-height: 50px;margin: 3px;float: left;}
        .clear{clear:both;}
    </style>
</head>
<body>
    <?php $angka = [[2,1,4],[3,5,5],[5,2,5]]; ?>

    <?php foreach($angka as $a): ?>
        <?php foreach($a as $b): ?>
            <div class="kotak"><?php echo $b; ?></div>
        <?php endforeach; ?>
            <div class="clear"></div>
    <?php endforeach; ?>
</body>
</html> -->


<!--Array Associative  -->
<!-- Definisinya sama seperti array numerik, kecuali
     Key-nya adalah string yang kita buat sendiri
 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php 
        $mahasiswa = [
                        [  "nama"  =>   "Ikhdanul Widad Joban", 
                            "nrp"   =>    "082065278",
                            "email" =>  "jikhdan@gmail.com",
                            "gambar" => "joban.png"],
                        [   "nama"   =>   " Joban", 
                            "nrp"   =>    "082065279",
                            "email" =>  "joban@gmail.com",
                            "gambar" => "joban1.png",
                            "tugas" => [90,80,100]
                        ]                    
                    ];
    ?>

                    <?php foreach( $mahasiswa as $mhs ): ?>
                    <img src="<?= $mhs["gambar"]; ?>" width="100" height="100" alt="">
                        <ul>
                            <li>Nama : <?= $mhs["nama"]; ?></li>
                            <li>Nama : <?= $mhs["nrp"]; ?></li>
                            <li>Nama : <?= $mhs["email"]; ?></li>
                        </ul>
                    <?php endforeach; ?>
</body>
</html>
