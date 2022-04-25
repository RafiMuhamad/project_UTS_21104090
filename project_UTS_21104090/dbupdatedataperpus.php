<?php
    include_once("dbkoneksi2.php");
    
    if(isset($_POST["txNIM"])){
        $nim = $_POST["txNIM"];
        $nama = $_POST["txNAMA"];
        $namabuku = $_POST["txNAMABUKU"];
        $tglpinjam = $_POST["txTGLPINJAM"];
        $tglkembali = $_POST["txTGLKEMBALI"];
        $jk = $_POST["txJK"];
        $jur = $_POST["txJUR"];
        $passs = $_POST["txPASSS"];
        $nimlama = $_POST["txNIMLAMA"];

        $sql = "UPDATE peminjaman SET 
            NIM='$nim', 
            NAMA='$nama',
            NAMABUKU='$namabuku',
            TGLPINJAM = '$tglpinjam',
            TGLKEMBALI = '$tglkembali',
            JK = '$jk',
            JURUSAN = '$jur',
            PASSCODE = '$passs'
            WHERE NIM='$nimlama';";
        
            //echo "DEBUG: ".$sql;

        $hsl = mysqli_query($cnn, $sql);
        mysqli_close($cnn);
    }
    header("location: tampildataperpus.php");