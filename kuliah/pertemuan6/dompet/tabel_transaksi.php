<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Transaksi</title>
    <?php include('_include/head.php');?>
</head>
<body>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col col-lg-7">
                <div class="box">
                    <div class="box-head">
                        <strong>TABEL TRANSAKSI</strong>
                    </div>
                    <div class="pt-2">
                        <a href="form_uang_masuk.php" class="btn btn-primary">Tambah Uang Masuk</a>
                    </div>
                    <div class="p-4">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>Tgl.</th>
                                    <th>Kategori</th>
                                    <th>Nominal</th>
                                    <th>Ket.</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    include('koneksi.php');
                                    $i = 1;
                                    $sql = "SELECT * FROM transaksi";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        while($row = mysqli_fetch_assoc($result)) {

                                ?>
                                <tr>
                                    <td><?php echo $i++; ?></td>
                                    <td><?php echo $row['tanggal'] ?></td>
                                    <td><?php echo $row['kategori']?></td>
                                    <td><?php echo $row['nominal']?></td>
                                    <td><?php echo $row['keterangan']?></td>
                                    <td>
                                        <a href="edit_transaksi.php?id=<?php echo $row['id']?>" class="btn btn-sm btn-warning">Edit</a>
                                        <a href="hapus_transaksi.php?id=<?php echo $row['id']?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Hapus</a>
                                    </td>
                                </tr>
                                <?php
                                        }
                                    } else {
                                        echo "0 results";
                                    }
                                    mysqli_close($conn);
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>