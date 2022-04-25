<?php

    include_once("dbkoneksi.php");
    if($cnn){
        $sql = "CREATE DATABASE perpustakaan;";

        $hsl = mysqli_query($cnn,$sql);
        if($hsl){
            echo "Database perpustakaan <strong>sukses</strong> dibuat<br>";
        }else{
            echo "Database perpustakaan <strong>gagal</strong> dibuat<br>";
        }
        mysqli_close($cnn);
    }