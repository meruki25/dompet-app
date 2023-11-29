<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Uang Masuk</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;500;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style/mystyle.css" media="screen"/>
</head>
<body>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col col-lg-7">
                <div class="box">
                    <form action="aksi_form_uang_masuk.php" method="POST">
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
                                    <option value="Gaji Rutin">Gaji Rutin</option>
                                    <option value="Bonus">Bonus</option>
                                    <option value="Usaha Sampingan">Usaha Sampingan</option>
                                    <option value="Warisan">Warisan</option>
                                    <option value="Uang Kaget">Uang Kaget</option>
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
                                    <a href="#" class="btn w-100">Batal</a>
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