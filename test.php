<!-- cek apakah tidak ada data di $_GET -->
<?php if(!isset($_GET["name"]) ){
    // redirect / balikan kembali 
    header("Location: index.php");
    exit;
}; ?>

<?= $_GET["name"]; ?>
