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
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <form method="POST" class="form-horizontal">
                                <div class="card-body">
                                    <h4 class="card-title">Tambah Barang</h4><br>
                                    <div class="form-group row">
                                        <label for="fname" class="col">Kode Barcode</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" name="kode" placeholder="Kode Barcode">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                    	<label class="col">Nama Barang</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" name="barang" placeholder="Nama Barang">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                    	<label class="col">Satuan</label>
                                        <div class="col-md-12">
                                			<select name="satuan" class="select2 form-control custom-select" style="width: 100%; height:36px;">
                                                <option>-Pilih Satuan-</option>
                                                <option>LUSIN</option>
                                                <option>PACK</option>
                                    			<option>PCS</option>
                                    		</select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col">Stok</label>
                                        <div class="col-md-12">
                                            <input type="number" class="form-control" name="stok">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col">Harga Beli</label>
                                        <div class="col-md-12">
                                            <input type="number" class="form-control" name="hbeli" id="harga_beli" onkeyup="sum()">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col">Harga Jual</label>
                                        <div class="col-md-12">
                                            <input type="number" class="form-control" name="hjual" id="harga_jual" onkeyup="sum()">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col">Profit</label>
                                        <div class="col-md-12">
                                            <input type="number" class="form-control" name="profit" id="profit"readonly="" style="background-color: #e7e3e9;">
                                        </div>
                                    </div>
                                    <input type="submit" name="simpan" value="simpan" class="btn btn-primary">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
<?php 
    if (isset($_POST ['simpan'])) {

    $kode = $_POST ['kode'];
    $barang = $_POST ['barang'];
    $satuan = $_POST ['satuan'];
    $stok = $_POST ['stok'];
    $hbeli = $_POST ['hbeli'];
    $hjual = $_POST ['hjual'];
    $profit = $_POST ['profit'];
        
        $sql = $koneksi->query("insert into tb_barang values('','$kode', '$barang', '$satuan', '$hbeli', '$stok', '$hjual', '$profit')");

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

