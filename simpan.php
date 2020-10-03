<?php
include 'koneksi.php';
$nama_produk = $_POST['nama_produk'];
$keterangan = $_POST['keterangan'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];
$total = $_POST['total'];
$simpan = mysqli_query($kon, "INSERT INTO produk (nama_produk,keterangan,harga,jumlah,total) VALUES ('$nama_produk','$keterangan','$harga','$jumlah','$total')");
if ($simpan == true) {
    echo "<script>alert('Data berhasil ditambah.');window.location='index.php';</script>";
}
?>