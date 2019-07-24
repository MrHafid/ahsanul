<script>
    function sum() {
     var harga_beli = document.getElementById('harga_beli').value;
     var harga_jual = document.getElementById('harga_jual').value;
     var result = parseInt(harga_jual) - parseInt(harga_beli);
     if (!isNaN(result)) {
      document.getElementById('profit').value = result;
     }
    }
</script>


<?php 

        $kode = $_GET['id'];
        $sql = $koneksi->query("select * from tb_barang where id_barang ='$kode'");
        $tampil = $sql->fetch_assoc();

 ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <form method="POST" class="form-horizontal">
                                <div class="card-body">
                                    <h4 class="card-title">Ubah Barang</h4><br>
                                    <div class="form-group row">
                                        <label for="fname" class="col">Id Barang</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" name="id_barang" value="<?php echo $tampil['id_barang']; ?>" placeholder="Kode Barcode">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col">Kode Barcode</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" name="kode_barcode" value="<?php echo $tampil['kode_barcode']; ?>" placeholder="Kode Barcode">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                    	<label class="col">Nama Barang</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" name="nama_barang" value="<?php echo $tampil['nama_barang']; ?>" placeholder="Nama Barang">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                    	<label class="col">Satuan</label>
                                        <div class="col-md-12">
                                			<select name="satuan" class="select2 form-control custom-select" style="width: 100%; height:36px;">
                                                <option>-Pilih Satuan-</option>
                                                <option value="LUSIN" <?php if($tampil['satuan'] == 'LUSIN') { ?> selected="selected"<?php } ?> >LUSIN</option>
                                                <option value="PACK" <?php if($tampil['satuan'] == 'PACK') { ?> selected="selected"<?php } ?> >PACK</option>
                                    			<option value="PCS" <?php if($tampil['satuan'] == 'PCS') { ?> selected="selected"<?php } ?> >PCS</option>
                                    		</select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col">Stok</label>
                                        <div class="col-md-12">
                                            <input type="number" class="form-control" name="stok" value="<?php echo $tampil['stok']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col">Harga Beli</label>
                                        <div class="col-md-12">
                                            <input type="number" class="form-control" name="harga_beli" id="harga_beli" onkeyup="sum()" value="<?php echo $tampil['harga_beli']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col">Harga Jual</label>
                                        <div class="col-md-12">
                                            <input type="number" class="form-control" name="harga_jual" id="harga_jual" onkeyup="sum()" value="<?php echo $tampil['harga_jual']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col">Profit</label>
                                        <div class="col-md-12">
                                            <input type="number" class="form-control" name="profit" id="profit"readonly="" style="background-color: #e7e3e9;" value="<?php echo $tampil['profit']; ?>">
                                        </div>
                                    </div>
                                    <input type="submit" name="simpan" value="simpan" class="btn btn-primary">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
<?php 
    if (isset($_POST['simpan'])) {
    $id_barang = $_POST ['id_barang'];
    $kode_barcode = $_POST ['kode_barcode'];
    $nama_barang = $_POST ['nama_barang'];
    $satuan = $_POST ['satuan'];
    $harga_beli = $_POST ['harga_beli'];
    $stok = $_POST ['stok'];
    $harga_jual = $_POST ['harga_jual'];
    $profit = $_POST ['profit'];
        
        $sql = mysqli_query($koneksi,"UPDATE tb_barang SET kode_barcode='$kode_barcode', nama_barang='$nama_barang', satuan='$satuan', harga_beli='$harga_beli', stok='$stok', harga_jual='$harga_jual', profit='$profit' WHERE id_barang='$id_barang'");

               if ($sql) {
            ?>
                <script type="text/javascript">
                    alert ("Berhasil ditambahkan");
                    window.location.href="?page=barang";
                </script>
            <?php
        }
     
    }

 ?>

