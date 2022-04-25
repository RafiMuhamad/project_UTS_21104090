<?php
    if(isset($_GET["n"])){
        $nim = $_GET["n"];
        $sql = "SELECT NIM, NAMA, NAMABUKU, JURUSAN, JK, TGLPINJAM,TGLKEMBALI, PASSCODE FROM peminjaman WHERE NIM='".$nim."';";
        $hsl = mysqli_query($cnn, $sql);
        $h = mysqli_fetch_array($hsl);
    }
