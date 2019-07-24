<div class="card">
    <div class="card-body">
        <h5 class="card-title">Basic Datatable</h5>
        <div class="table-responsive">
            <table id="zero_config" class="table table-striped table-bordered">
                <thead>
                    <tr>
                    	<th>No</th>
                        <th>Kode</th>
                        <th>Nama Barang</th>
                        <th>Satuan</th>
                        <th>Stok</th>
                        <th>Harga Beli</th>
                        <th>Harga Jual</th>
                        <th>Profit</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                	<?php
                		$no = 1;
                	    $sql = $koneksi->query("select * from tb_barang");

                        while ($data=$sql->fetch_assoc()) {
                    ?>
                	<tr>
                        <td><?php echo $no++;?></td>
                        <td><?php echo $data['kode_barcode'];?></td>
                        <td><?php echo $data['nama_barang'];?></td>
                        <td><?php echo $data['satuan'];?></td>
                        <td><?php echo $data['stok'];?></td>
                        <td><?php echo $data['harga_beli'];?></td>
                        <td><?php echo $data['harga_jual'];?></td>
                        <td><?php echo $data['profit'];?></td>
                        <td>
                            <a href="?page=barang&aksi=ubah&id=<?php echo $data['id_barang'] ?>" class="btn btn-dark" ><i class="m-r-10 mdi mdi-table-edit" width="30"></i>EDIT</a> 
                            <a href="" class="btn btn-danger" ><i class="m-r-10 mdi mdi-delete"></i>  HAPUS</a>
                        </td>
                    </tr>
                                        <?php } ?>
                </tbody>
              </table>
              <a href="?page=barang&aksi=tambah" class="btn btn-primary">Tambah</a>

        </div>
    </div>
</div>
