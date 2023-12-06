<?php
include('koneksi.php');
$sql = "INSERT INTO transaksi (tanggal, kategori, nominal, keterangan, lampiran, tanggal_input) 
            VALUES ('".$_POST['tanggal']."', '".$_POST['kategori']."', '".$_POST['nominal']."', '".$_POST['keterangan']."', '', '".date('Y-m-d H:i:s')."')";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Uang Masuk</title>
    <?php include('_layout/head.php'); ?>
</head>
<body>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col col-lg-7">
                <div class="container-md">
                    <div class="main-box">
                        <form action="aksi_form_uang_masuk.php" method="POST">
                            <div class="head">
                                <strong>FORM UANG MASUK</strong>
                            </div>
                            <div class="form-box">
                                <form action="aksi_form_uang_masuk.php" method="POST">
                                    <?php if ($conn->query($sql) === TRUE) { ?>
                                    <div class="alert alert-success" role="alert">
                                        New record created successfully
                                    </div>
                                    <?php } else { ?>
                                    <div class="alert alert-danger" role="alert">
                                        Error: <?php echo $sql . "<br>" . $conn->error; ?>
                                    </div>
                                    <?php } ?>
                                    <div class="row mb-3">
                                        <label class="col-3">Tanggal</label>
                                        <label class="col-9">: <?php echo $_POST['tanggal']; ?></label>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-3">Kategori</label>
                                        <label class="col-9">: <?php echo $_POST['kategori']; ?></label>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-3">Nominal</label>
                                        <label class="col-9">: <?php echo $_POST['nominal']; ?></label>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-3">Keterangan</label>
                                        <label class="col-9">: <?php echo $_POST['keterangan']; ?></label>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-3">Lampiran</label>
                                        <label class="col-9"></label>
                                    </div>
                                    <div>
                                        <a href="form_uang_masuk.php" class="btn btn-secondary">Kembali</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>