<?php
    include_once("dbkoneksi2.php");
    include_once("dbbdperpus.php");
    if($h["JK"]=="L"){
        $seLaki = " selected";
        $sePerempuan = "";
    }else{
        $seLaki = "";
        $sePerempuan = " selected";
    }
    if($h["JURUSAN"]=="Akutansi"){
        $seAK = " selected";
        $seEkonomi = "";
    }else{
        $seAK = "";
        $seEkonomi= " selected";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Peminjam</title>
</head>
<body>

<h3>Edit Data Peminjam</h3>
    <form action="dbupdatedataperpus.php" method="POST">
        <input type="hidden" name="txNIMLAMA" value="<?=$h["NIM"];?>">
        NIM
        <div>
        <input type="text" name="txNIM" value="<?=$h["NIM"];?>">
        </div>
        NAMA
        <div>
        <input type="text" name="txNAMA" value="<?=$h["NAMA"];?>">
        </div>
        JUDUL BUKU
        <div>
        <input type="text" name="txNAMABUKU" value="<?=$h["NAMABUKU"];?>">
        </div>
       
        JENIS
        <div>
            <select name="txJK">
                <option value="L"<?=$seLaki;?>>Laki-Laki</option>
                <option value="P"<?=$sePerempuan;?>>Perempuan</option>
            </select>
        </div>
        TGL PINJAM
        <div>
            <input type="date" name="txTGLPINJAM" value="<?=$h["TGLPINJAM"]?>">
        </div>
        TGL KEMBALI
        <div>
            <input type="date" name="txTGLKEMBALI" value="<?=$h["TGLKEMBALI"]?>">
        </div>
        Jurusan
        <div>
        <select name="txJUR">
            <option value="Akutansi"<?=$seAK;?>>Akutansi</option>
            <option value="Ekonomi"<?=$seEkonomi;?>>Ekonomi</option>
        </select>
        </div>
        Passcode
        <div>
            <input type="password" name="txPASSS" value="<?=$h["PASSCODE"]?>">
        </div>

        <div>
            <button type="submit">Simpan Data</button>
        </div>
    </form>

</body>
</html>