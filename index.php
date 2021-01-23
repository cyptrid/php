<!-- Menambahkan elemen baru pada array -->
<?php 
$hari = array("Senin", "Selasa", "Rabu");
$hari[] = "Kamis";
$hari[] = "Jumat";
var_dump($hari);
?>


<!-- menampilkan array ke user dengan pengulangan -->
<!-- for / foreach -->
<!-- Contoh 1 -->
<!-- <?php 
    $angka = [2,1,4,3,5,5,2,5,2,5];
?>
<html lang="en">
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
    <?php for( $i = 0; $i < count($angka); $i++ ): ?>
        <div class="kotak"><?php echo $angka[$i]; ?></div>
    <?php endfor; ?>

    <div class="clear"></div>

    <?php foreach($angka as $a): ?>
        <div class="kotak"><?php echo $a; ?></div>
    <?php endforeach; ?>
</body>
</html> -->


<!-- Contoh 2 -->
<?php $mahasiswa = [
["ikhdan", "042065278", "Sistem Informasi", "jikhdan@gmail.com"],
["joban", "042065279", "Teknik Informasi", "joban@gmail.com"]];
?>
<html lang="en">
<head>
    <title>PHP</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
       <?php foreach( $mahasiswa as $mhs ): ?>
    <ul>
        <li><?= $mhs[0]; ?></li>
        <li><?= $mhs[1]; ?></li>
        <li><?= $mhs[2]; ?></li>
        <li><?= $mhs[3]; ?></li>
    </ul>
       <?php endforeach; ?>
</body>
</html>