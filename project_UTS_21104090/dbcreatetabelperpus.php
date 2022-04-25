<?php

    include_once("dbkoneksi2.php");
    $sql = "CREATE TABLE peminjaman(
        NIM varchar(8) PRIMARY KEY,
        NAMA varchar(30),
        NAMABUKU varchar(30),
        JURUSAN varchar(20),
        JK varchar(1),
        TGLPINJAM date,
        TGLKEMBALI date,
        PASSCODE varchar(10)
    );";

    $hsl = mysqli_query($cnn, $sql);

    if($hsl){
        echo "Pembuatan tabel <strong>peminjaman</strong> sukses<br>";
    }else{
        echo "Pembuatan tabel <strong>peminjaman</strong> Gagal<br>";
    }
    mysqli_close($cnn);

