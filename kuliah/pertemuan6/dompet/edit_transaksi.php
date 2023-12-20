<?php
$id = $_GET['id'];
include('koneksi.php');
$sql = "SELECT * FROM transaksi WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Uang Masuk</title>
    <?php include('_include/head.php');?>
</head>
<body>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col col-lg-7">
                <div class="box">
                    <div class="box-head">
                        <strong>FORM EDIT UANG MASUK</strong>
                    </div>
                    <?php if($row != null){ ?>
                    <form action="aksi_edit_transaksi.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $id;?>" />
                        <div class="p-4">
                            <div class="mb-3">
                                <label for="tanggal" class="form-label">Tanggal <span class="text-danger">*</span></label>
                                <input type="date" class="form-control" id="tanggal" name="tanggal" required value="<?php echo $row['tanggal']; ?>" />
                            </div>
                            <div class="mb-3">
                                <label for="kategori" class="form-label">Kategori <span class="text-danger">*</span></label>
                                <select class="form-control" name="kategori" required>
                                    <option value="">Pilih</option>
                                    <option value="Gaji Rutin" <?php if($row['kategori'] == "Gaji Rutin"){ echo "selected='selected'";}?> >Gaji Rutin</option>
                                    <option value="Bonus" <?php if($row['kategori'] == "Bonus"){ echo "selected='selected'";}?>>Bonus</option>
                                    <option value="Usaha Sampingan" <?php if($row['kategori'] == "Usaha Sampingan"){ echo "selected='selected'";}?>>Usaha Sampingan</option>
                                    <option value="Warisan" <?php if($row['kategori'] == "Warisan"){ echo "selected='selected'";}?>>Warisan</option>
                                    <option value="Uang Kaget" <?php if($row['kategori'] == "Uang Kaget"){ echo "selected='selected'";}?>>Uang Kaget</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="nominal" class="form-label">Nominal <span class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Rp.</span>
                                    <input type="text" class="form-control" aria-describedby="basic-addon1" name="nominal" required value="<?php echo $row['nominal'];?>"/>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="keterangan" class="form-label">Keterangan</label>
                                <textarea name="keterangan" class="form-control" id="keterangan" placeholder="Isi Keterangan"><?php echo $row['keterangan'];?></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="lampiran" class="form-label">Lampiran</label>
                                <input type="file" class="form-control" id="lampiran" name="lampiran" />
                            </div>
                            <div class="pt-3 row">
                                <div class="col">
                                    <button type="submit" class="btn btn-primary w-100">Simpan</button>
                                </div>
                                <div class="col">
                                    <a href="tabel_transaksi.php" class="btn w-100">Batal</a>
                                </div>
                            </div>
                        </div>
                    </form>
                    <?php } else { ?>
                    <div class="p-4">
                        <div class="mb-3">
                            <div class="alert alert-danger" role="alert">
                                Data tidak ditemukan
                            </div>
                        </div>
                        <div class="pt-3 row">
                            <div class="col">
                                <a href="tabel_transaksi.php" class="btn btn-secondary w-100">Kembali</a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>