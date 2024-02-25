<?php

$id=$_POST['barang_id'];
$jenis_barang=$_POST['jenis_barang'];
$harga=$_POST['harga'];
$jumlah=$_POST['jumlah'];
$total_harga=$_POST['total_harga'];

include "koneksi.php";

$simpan=$koneksi->query("update barang set barang_id ='$id', jenis_barang='$jenis_barang', harga='$harga', jumlah='$jumlah', total_harga=$total_harga where barang_id='$id'"); 
                       
if($simpan==true){

    header("location:tampil-barang.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>