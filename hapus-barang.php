<?php

$id=$_GET['id'];

include "koneksi.php";

$hapus=$koneksi->query("delete from barang where barang_id='$id'");

if($hapus==true){

    header("location:pesanan.php?pesan=hapusBerhasil");

} else{
    echo "Error";
}


?>