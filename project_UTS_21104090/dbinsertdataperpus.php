<?php

if(isset($_POST["txNIM"])){
     include_once("dbkoneksi2.php");

     $nim = $_POST["txNIM"];
     $nama = $_POST["txNAMA"];
     $namabuku = $_POST["txNAMABUKU"];
     $tglpinjam = $_POST["txTGLPINJAM"];
     $tglkembali = $_POST["txTGLKEMBALI"];
     $jk = $_POST["txJK"];
     $jur = $_POST["txJUR"];
     $passs = $_POST["txPASSS"];

     $sqlINSERT = "INSERT INTO peminjaman(NIM, NAMA, NAMABUKU, JURUSAN, JK, TGLPINJAM, TGLKEMBALI, PASSCODE) VALUES
     ('".$nim."','".$nama."','".$namabuku."','".$jur."','".$jk."','".$tglpinjam."','".$tglkembali."','".$passs."');";

    //echo "SQL: ". $sqlINSERT . "<br>";

     $hsl = mysqli_query($cnn, $sqlINSERT);

     if($hsl){
         echo "Insert Data sukses<br>";
     }else{
         echo "Insert Data gagal<br>";
     }

     mysqli_close($cnn);
}