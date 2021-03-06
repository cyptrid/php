<?php 
session_start();
    // cek session
    if( !isset($_SESSION["login"])  ){
        header("Location: login.php");
        exit;
    }
    // memanggil function berisi koneksi ke database
   require 'functions.php';
    
    // pagination
    // konfigurasi
    $jumlahDataPerHalaman = 2;
    $jumlahData = count(query("SELECT * FROM mahasiswa"));
    $jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
    $halamanAktif = ( isset($_GET["halaman"]) ) ? $_GET["halaman"] : 1;
    $awalData = ( $jumlahDataPerHalaman * $halamanAktif) - $halamanAktif;

    $mahasiswa =  query("SELECT * FROM mahasiswa LIMIT $awalData, $jumlahDataPerHalaman");

//    tombol cari ditekan
    if( isset($_POST["cari"]) ){
        $mahasiswa = cari($_POST["keyword"]);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
<a href="logout.php" class="logout">Logout</a> | <a href="cetak.php" target="_blank">cetak</a>
        <h1>Daftar Mahasiswa</h1>
        <a href="tambah.php">Tambah Data Mahasiswa</a>

        <br><br>
            <form action="" method="post">
                <input type="text" name="keyword" size="40" id="keyword" placeholder="masukkan keyword pencarian">
                <button type="submit" name="cari" id="tombol-cari">Cari</button>
                <img src="img/loader1.gif" class="loader" style="width:30px; position:absolute; top:145px; z-index:-1; display:none; ">
        <br>
        <br>
        
        <!-- Navigasi -->
        <?php if( $halamanAktif > 1 ): ?>
            <a href="?halaman=<?= $halamanAktif - 1 ?>">&laquo;</a>
        <?php endif; ?>

        <?php for($i = 1; $i <= $jumlahHalaman; $i++): ?>
            <?php if( $i == $halamanAktif ) : ?>
            <a href="?halaman=<?= $i; ?>" style="font-weight:bold; color:red;"><?= $i; ?></a>
            <?php else: ?>
            <a href="?halaman=<?= $i; ?>"><?= $i; ?></a>
            <?php endif; ?>
        <?php endfor; ?>

        <?php if( $halamanAktif < $jumlahHalaman ): ?>
            <a href="?halaman=<?= $halamanAktif + 1 ?>">&raquo;</a>
        <?php endif; ?>

        <br>
        <br>
        </form>

        <div id="container">
        <table border="1" cellpadding="10" cellspacing="0">
                <tr>
                    <th>No.</th>
                    <th>Aksi</th>
                    <th>Gambar</th>
                    <th>NRP</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Jurusan</th>
                </tr>
            <?php $i = 1; ?>
        <?php foreach ( $mahasiswa as $row ): ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td>
                        <a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a> |
                        <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">Hapus</a>
                    </td>
                    <td>
                        <img src="img/<?= $row["gambar"]; ?>" width="50" height="50" alt="">
                    </td>
                    <td><?= $row["nrp"]; ?></td>
                    <td><?= $row["nama"]; ?></td>
                    <td><?= $row["email"]; ?></td>
                    <td><?= $row["jurusan"]; ?></td>
                </tr>
            <?php $i++ ?>
        <?php endforeach; ?>    
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>
</html>