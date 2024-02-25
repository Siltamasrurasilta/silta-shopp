<?php

$id=$_POST['barang_id'];
$jenis_barang=$_POST['jenis_barang'];
$harga=$_POST['harga'];
$jumlah=$_POST['jumlah'];
$total_harga=$_POST['total_harga'];

include "koneksi.php";

$simpan=$koneksi->query("insert into barang(barang_id,jenis_barang,harga,jumlah,total_harga) 
                        values ('$barang_id', '$jenis_barang', '$harga', '$jumlah', '$total_harga')");

if($simpan==true){

    header("location:tampil-barang.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>