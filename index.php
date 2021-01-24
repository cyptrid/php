<?php
// Super Global = typenya array associative
// $_GET
// $_POST
// $_REQUEST
// $_SESSION
// $_COOKIE
// $_SERVER
// $_ENV

// Variable Scope / Lingkup Variable
// $x = 10;
// function tampilX(){
//     global $x;
//     echo $x;
// }
// tampilX();
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
    <ul>
        <?php foreach( $mahasiswa as $mhs ): ?>
            <li>
                <a href="test.php?name=<?= $mhs["nama"]; ?>"><?= $mhs["nama"]; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html> -->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_POST</title>
</head>
    <body>
        <form action="test1.php" method="post">
            Masukkan Nama : <input type="text" name="nama">
            <button type="submit" name="submit">Kirim</button>
        </form>
    </body>
</html> -->

<!-- Latihan Membuat Sistem Login -->
<?php 
                // cek apakah tombol submit sudah ditekan / belum
                    if( isset($_POST["login"]) ){
                // cek username dan password
                    if( $_POST["username"] == "admin" && $_POST["password"] == "123"){
                // jika benar, redirect ke halaman latihan.php
                    header("Location: latihan.php");
                    exit;
                    }else{
                // jika salah, tampilkan kesalahan
                    $error = true;
                }
            }
            ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
</head>
<body>
           
            <?php if( isset($error) ): ?>
                <p syle="color:red font-style:italic">Username / Password Salah! </p>
            <?php endif; ?>
        <ul>
            <form action="" method="post">
                <li>
                    <label for="username">Username : </label>
                    <input type="text" name="username" id="username">
                </li> 
                <li>
                    <label for="password">Password : </label>
                    <input type="password" name="password" id="password">
                </li> 
               <li>
               <button type="submit" name="login">Login</button>
               </li>
            </form>
        </ul>
</body>
</html>