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
                                <div class="mb-3">
                                    <label for="tanggal" class="form-label">Tanggal</label>
                                    <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                                </div>
                                <div class="mb-3">
                                    <label for="kategori" class="form-label">Kategori</label>
                                    <select class="form-control" id="kategori" name="kategori" required>
                                        <option value="">Pilih</option>
                                        <option value="Gaji Rutin">Gaji Rutin</option>
                                        <option value="Bonus">Bonus</option>
                                        <option value="Usaha Sampingan">Usaha Sampingan</option>
                                        <option value="Warisan">Warisan</option>
                                        <option value="Uang Kaget">Uang Kaget</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="nominal" class="form-label">Nominal</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">Rp</span>
                                        <input type="text" class="form-control" name="nominal" aria-describedby="basic-addon1" required>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="kategori" class="form-label">Keterangan</label>
                                    <textarea class="form-control" id="kategori" name="keterangan" placeholder="Isi Keterangan"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="kategori" class="form-label">Lampiran</label>
                                    <input type="file" class="form-control" id="kategori" name="lampiran"/>
                                </div>
                                <div class="mt-4 row">
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-primary col-12">Simpan</button>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="index.php" class="btn col-12">Batal</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>