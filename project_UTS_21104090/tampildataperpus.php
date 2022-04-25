<?php

    include_once("dbkoneksi2.php");

    $sql = "SELECT NIM, NAMA, NAMABUKU, JURUSAN, JK, TGLPINJAM,TGLKEMBALI,  PASSCODE FROM peminjaman;";

    $hsl = mysqli_query($cnn, $sql);

    echo "<table>
            <theader>
                <tr>    
                <th>No</th>
                <th>NIM</th>
                <th>NAMA</th>
                <th>JUDULBUKU</th>
                <th>Jurusan</th>
                <th>JenisKelamin</th>
                <th>TGLPINJAM</th>
                <th>TGLKEMBALI</th>
                <th>Passcode</th>
                <th><a href='Insertdataperpus.php'>TambahData</a></th>
                </tr>
            </theader>
            <tbody>";
            $no =1;
            while($h = mysqli_fetch_Array($hsl) ){
                if($h["JK"]=="L"){
                    $jk = "Laki-Laki";
                }else{
                    $jk = "Perempuan";
                }
                echo "    <tr> 
                    <td>".$no."</td>
                    <td>".$h["NIM"]."</td>
                    <td>".$h["NAMA"]."</td>
                    <td>".$h["NAMABUKU"]."</td>
                    <td>".$h["JURUSAN"]."</td>
                    <td>".$jk."</td>
                    <td>".$h["TGLPINJAM"]."</td>
                    <td>".$h["TGLKEMBALI"]."</td>
                    <td>".$h["PASSCODE"]."</td>
                    <td><a href='editdataperpus.php?n=".$h["NIM"]."'>Edit</a> | <a href='hpsdataperpus.php?n=".$h["NIM"]."'>Delete</a></td>
                </tr>";
                $no++;
            }
    echo "        </tbody>
    </table>";
