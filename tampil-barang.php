<?php include "header.php"; ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <h1>Silta Shop</h1>
        <?php 

if(@$_GET['pesan']=="inputBerhasil"){

?>
        <div class="alert alert-success">
        Penyimpanan Berhasil!
        </div>
<?php

}

?>


<?php 

if(@$_GET['pesan']=="hapusBerhasil"){

?>
        <div class="alert alert-success">
        Data Berhasil Dihapus!
        </div>
<?php

}

?>

<?php 

if(@$_GET['pesan']=="editBerhasil"){

?>
        <div class="alert alert-success">
        Perubahan Berhasil!
        </div>
        <?php

}

?>
    

        <table id="dataTables" class="table table-bordered">
        <thead>
            <tr>
                <th>barang_id</th><th>jenis_barang</th><th>harga</th><th>jumlah</th><th>total_harga</th>
                <th>
                <a href="input-barang.php">
                    <button class="btn btn-info glyphicon glyphicon-plus"></button>
                    </a>
                </th>
            </tr> 
        </thead> 
        <tbody>
        <?php

        include "koneksi.php";
        $sql=$koneksi->query("select * from barang order by barang_id ASC");

        while($row= $sql->fetch_assoc()){
        ?>

            <tr>
                <td><?php echo $row['barang_id']?></td>
                <td><?php echo $row['jenis_barang']?></td>
                <td><?php echo $row['harga']?></td>
                <td><?php echo $row['jumlah']?></td>
                <td><?php echo $row['total_harga']?></td>
                <td>

            

                </td>
            </tr>

        <?php    
        }
        ?>
        </tbody>
        </table>
        </div>
    </div>
</div>


<?php include "footer.php"; ?>