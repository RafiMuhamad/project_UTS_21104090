<?php
    include_once("dbkoneksi2.php");

    if(isset($_GET["n"])){
        $sql = "DELETE FROM peminjaman WHERE NIM='".$_GET["n"]."'";
        $hsl = mysqli_query($cnn, $sql);
    }
    mysqli_close($cnn);
    header("location: tampildataperpus.php");