<?php
include('koneksi.php');
$sql = "SELECT * FROM kategori";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Uang Masuk</title>
    <?php include('_include/head.php');?>
</head>
<body>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col col-lg-7">
                <div class="box">
                    <form action="aksi_form_uang_masuk.php" method="POST" enctype="multipart/form-data">
                        <div class="box-head">
                            <strong>FORM UANG MASUK</strong>
                        </div>
                        <div class="p-4">
                            <div class="mb-3">
                                <label for="tanggal" class="form-label">Tanggal <span class="text-danger">*</span></label>
                                <input type="date" class="form-control" id="tanggal" name="tanggal" required />
                            </div>
                            <div class="mb-3">
                                <label for="kategori" class="form-label">Kategori <span class="text-danger">*</span></label>
                                <select class="form-control" name="kategori" required>
                                    <option value="">Pilih</option>
                                    <?php while($row = mysqli_fetch_assoc($result)) { ?>
                                    <option value="<?php echo $row['nama']; ?>"><?php echo $row['nama']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="nominal" class="form-label">Nominal <span class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Rp.</span>
                                    <input type="text" class="form-control" aria-describedby="basic-addon1" name="nominal" required />
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="keterangan" class="form-label">Keterangan</label>
                                <textarea name="keterangan" class="form-control" id="keterangan" placeholder="Isi Keterangan"></textarea>
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
                </div>
            </div>
        </div>
    </div>
</body>
</html>