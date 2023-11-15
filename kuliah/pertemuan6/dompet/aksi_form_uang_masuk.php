<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aksi Form Uang Masuk</title>
</head>
<body>
    <form action="aksi_form_uang_masuk.php" method="POST">
        <h2>FORM UANG MASUK</h2>
        <div>
            <label>Tanggal: <?php echo $_POST['tanggal']; ?></label>
        </div>
        <div>
            <label>Kategori: <?php echo $_POST['kategori']; ?></label>
        </div>
        <div>
            <label>Nominal: <?php echo $_POST['nominal']; ?></label>
        </div>
        <div>
            <label>Keterangan: <?php echo $_POST['keterangan']; ?></label>
        </div>
        <div>
            <label>Lampiran</label>
        </div>
        <div>
            <a href="form_uang_masuk.php">Kembali</a>
        </div>
    </form>
</body>
</html>