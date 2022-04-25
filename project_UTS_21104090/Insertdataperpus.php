<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah data Peminjam</title>
</head>
<body>
    
    <h3>Tambah Data Peminjam</h3>
    <form action="dbinsertdataperpus.php" method="POST">

        NIM
        <div>
        <input type="text" name="txNIM">
        </div>
        NAMA
        <div>
        <input type="text" name="txNAMA">
        </div>
        JUDUL BUKU
        <div>
        <input type="text" name="txNAMABUKU">
        </div>
        Jenis Kelamin
        <div>
            <select name="txJK">
                <option value="L">Laki-Laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>
        TGL PINJAM
        <div>
            <input type="date" name="txTGLPINJAM">
        </div>
         TGL KEMBALI
        <div>
            <input type="date" name="txTGLKEMBALI">
        </div>
        Jurusan
        <div>
        <select name="txJUR">
            <option value="Akutansi">Akutansi</option>
            <option value="Ekonomi">Ekonomi</option>
        </select>
        </div>
        Passcode
        <div>
            <input type="password" name="txPASSS">
        </div>

        <div>
            <button type="submit">Simpan Data</button>
        </div>
    </form>

</body>
</html>