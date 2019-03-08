
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="card">
			  <h5 class="card-header">Input Barang Masuk</h5>
			  <div class="card-body">
			  	<?php if( validation_errors()): ?>
			  	<div class="alert alert-danger" role="alert">
			  	<?= validation_errors(); ?>
			    </div>
				<?php endif;?>
			    <form action="" method="post">
				 
				 <div class="form-group">
				    <label for="barcode">Barcode</label>
				    <input type="text" class="form-control" id="barcode" name="barcode">
				  </div>  
				  <div class="form-group">
				    <label for="namaproduk">Nama Produk</label>
				    <input type="text" class="form-control" id="namaproduk" name="namaproduk">
				  </div>  
				  <div class="form-group">
				    <label for="kategori">Kategori</label>
				    <select class="form-control" id="kategori" name="kategori">
				      <option value="benih">Benih</option>
				      <option value="pupuk">Pupuk</option>
				      <option value="peralatantani">Peralatan Tani</option>
				      <option value="tanaman">Tanaman</option>
				    </select>
				  </div>
				  <div class="form-group">
				    <label for="jumlah">Jumlah</label>
				    <input type="text" class="form-control" id="jumlah" name="jumlah">
				  <div class="form-group">
				    <label for="pilihsuplier">Pilih Suplier</label>
				    <select class="form-control" id="pilihsuplier" name="pilihsuplier">
				      <option value="pt">PT</option>
				      <option value="kelompoktani">Kelompok Tani</option>
				      <option value="individu">individu</option>
				      <option value="bptp">BPTP</option>

				    </select>
				  </div>
				  <div class="form-group">
				    <label for="namasuplier">Input Nama Suplier</label>
				    <input type="text" class="form-control" id="namasuplier" name="namasuplier">
				  </div>  
				  <div class="form-group">
				    <label for="tanggal">Tanggal</label>
				    <input type="date" class="form-control" id="tanggal" name="tanggal">
				  </div> 
				  <button type="submit" name="tambah" class="btn btn-primary float-right">Tambahkan</button> 
			</form>
			  </div>
			</div>
			
			
		</div>
	</div>
