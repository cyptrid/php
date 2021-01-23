<!-- Built-in Function = fungsi yang sudah di sediakan oleh php  -->
<!-- User-Defined Function = fungsi yang dibuat sendiri -->

<!-- functions
    Date / Time 
    time()
    date()
    mktime()
    strtotime()

    String
    strlen() = menghitung panjang sebuah sting
    strcmp() = membandingkan 2 buah string
    exlode() = memecah string menjadi array
    htmlspecialchars() = mengamankan dari hacker

    utility
    var_dump() = mencetak isi variable, array, object
    isset() = mengecek apakah variable sudah di buat / belum
    empty() = mengecek apakah variable ada isinya / tidak   
    die() = memberhentikan program
    sleep() = memberhentikan sementara
 -->


 <!-- User-Defined Function -->
 <!-- membuat fungsi sendiri -->
 <?php 
  function salam($waktu = "Datang", $nama = "Admin"){
     return "Selamat $waktu, $nama";}
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>PHP</title>
 </head>
 <body>
     <h1><?php echo salam("pagi", "Joban"); ?></h1>
 </body>
 </html>