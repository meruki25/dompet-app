<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="form_action.php">
        <div>
            <label>Tanggal</label>
            <input type="date" name="tanggal" />
        </div>
        <div>
            <label>Kategori</label>
            <select name="kategori">
                <option value="Gaji Rutin">Gaji Rutin</option>
                <option value="Bonus">Bonus</option>
            </select>
        </div>
        <div>
            <label>Nominal</label>
            <input type="text" name="nominal" />
        </div>
        <div>
            <label>Keterangan</label>
            <textarea name="keterangan"></textarea>
        </div>
        <div>
            <label>Lampiran</label>
            <input type="file" name="lampiran" />
        </div>
        <div>
            <button type="submit">SIMPAN</button>
        </div>
    </form>
</body>
</html>