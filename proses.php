
<!DOCTYPE html>
<html>
<head>
    <title>Latihan7 TSI_B</title>
</head>
<body>
<?php
$nama_produk = $_POST['nama_produk'];
$keterangan = $_POST['keterangan'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];

$total = $jumlah * $harga;
?>
        <fieldset>
<form action="simpan.php" method="POST">
        <legend>Latihan7</legend>
        <p>
            <label>Nama Produk :</label>
            <input type="text" name="nama_produk" value="<?php echo $nama_produk ?>" readonly/>
        </p>
        <p>
            <label>Keterangan :</label>
            <input type="text" name="keterangan" value="<?php echo $keterangan ?>" readonly/>
        </p>
        <p>
            <label>Harga :</label>
            <input type="text" name="harga" value="<?php echo $harga ?>" readonly/>
        </p>
        <p>
            <label>Jumlah :</label>
            <input type="text" name="jumlah" value="<?php echo $jumlah ?>" readonly/>
        </p>
                <p>
            <label>Total :</label>
            <input type="text" name="total" value="<?php echo $total ?>" readonly/>
        </p>

        <p>
            <input type="submit" name="submit" value="Simpan" />
<button><a href="index.php" style="text-decoration: none;">KEMBALI</a></button>
        </p>
    </form>
        </fieldset>

</body>
</html>