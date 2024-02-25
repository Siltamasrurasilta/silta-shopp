<?php include "header.php"; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="proses-edit-barang.php" method="POST">
                <?php
                $id=$_GET['id'];
                include "koneksi.php";
                $tampil=$koneksi->query("select * from barang order by barang_id");
                $row=$tampil->fetch_assoc();
                ?>
                    <div class="form-group">
                        <label for="barang_id">barang_id</label>
                        <input type="hidden" name="barang_id" value="<?php echo $row['barang_id']?>" class="form-control">
                        <input type="number" name="barang_id"value="<?php echo $row['barang_id']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="jenis_barang">jenis_barang</label>
                        <input type="text" name="jenis_barang" value="<?php echo $row['jenis_barang']?>" class="form-control">
                        </div>

                        <div class="form-group">
                        <label for="harga">harga</label>
                        <input type="text" name="harga" value="<?php echo $row['harga']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="jumlah">jumlah</label>
                        <input type="text" name="jumlah"  value="<?php echo $row['jumlah']?>" class="form-control">
                    </div>

                    
                    <div class="form-group">
                        <label for="total_harga">total_harga</label>
                        <input type="text" name="total_harga" value="<?php echo $row['total_harga']?>" class="form-control">
                    </div>

                    <input type="submit" name="kirim" value="UBAH" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>

<?php include "footer.php"; ?>