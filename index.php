<!DOCTYPE html>
<html>
<head>
    <title>Latihan7 TSI_B</title>
</head>
<body>
    <form action="proses.php" method="POST">
        <fieldset>
        <legend>Latihan7</legend>
        <p>
            <label>Nama Produk :</label>
            <input type="text" name="nama_produk" placeholder="Nama Produk..." />
        </p>
        <p>
            <label>Keterangan :</label>
            <input type="text" name="keterangan" placeholder="Keterangan..." />
        </p>
        <p>
            <label>Harga :</label>
            <input type="text" name="harga" placeholder="Harga..." />
        </p>
        <p>
            <label>Jumlah :</label>
            <input type="text" name="jumlah" placeholder="Jumlah..." />
        </p>
        <p>
            <input type="submit" name="submit" value="Proses" />
            <input type="reset" name="reset" value="Reset" />
        </p>
        </fieldset>
    </form>
</body>
</html>