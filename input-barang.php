<?php include "header.php"; ?>
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="proses-input-barang.php" method="POST">
                <div class="form-group">
                        <label for="barang_id">barang_id</label>
                        <input type="number" name="barang_id"value="<?php echo $row['barang_id']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="jenis_barang">jenis_barang</label>
                        <input type="text" name="jenis_barang"  class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="harga">harga</label>
                        <input type="number" name="harga"  class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="jumlah">jumlah</label>
                        <input type="number" name="jumlah"  class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="total_harga">total_harga</label>
                        <input type="number" name="total_harga"  class="form-control">
                    </div>

                    <input type="submit" name="kirim" value="Simpan" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>

    <?php include "footer.php"; ?>