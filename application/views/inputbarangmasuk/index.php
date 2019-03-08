
<div class="container">
	<?php if( $this->session->flashdata('flash') ) : ?>
	<div class"row mt-3">
		
	</div>
		<divc class="col-md-6">
			<div class="alert alert-success alert-dismissible fade show" role="alert">
			  Data Barang Masuk<strong>berhasil</strong> <?=$this->session->flashdata('flash'); ?>
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>
			
		</div>

	<?php endif; ?>
	<div class="row mt-3">
		<div class="col-md-6">
			<a href="<?= base_url() ?>barangmasuk/tambah" class="btn btn-primary">Input Barang Masuk</a>
		</div>
		
	</div>
	
	<div class="row mt-3">
		<div class="col-md-12">
			<h3>Daftar Barang Masuk</h3>  
			<input type="search" name="search"><input type="submit" name="submit">
			<table class="table">
				<?php 
					// $this->table->set_template($template);
					$this->table->set_heading('barcode','namaproduk','kategori','jumlah','namasuplier','tanggal');

					echo $this->table->generate($barangmasuk);
					//Memanggil $data['barangmasuk'] di controller, setelah itu tulis di autoload $autoload['model'] = array('barangmasuk_model');

					echo $this->pagination->create_links();

				 ?>
			</table>
			<h3>Daftar Barang Keluar</h3><br>
			<table class="table">
				<?php 
					// $this->table->set_template($template);
					$this->table->set_heading('barcode','namaproduk','kategori','jumlah','namasuplier','tanggal');

					echo $this->table->generate($barangkeluar);
					//Memanggil $data['barangmasuk'] di controller, setelah itu tulis di autoload $autoload['model'] = array('barangmasuk_model');
				 ?>
			</table>


			<table class="table">
				  <thead class="thead-dark">
				    <tr>
				      <th scope="col">Barcode</th>
				      <th scope="col">Nama Produk</th>
				      <th scope="col">Kategori</th>
				      <th scope="col">Jumlah</th>
				      <th scope="col">Nama Suplier</th>
				      <th scope="col-md-6">Tanggal Masuk</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <!-- <th scope="row">1</th> -->
				      <th>
						    <?php 
							foreach ($barangmasuk as $bm) : ?>
							 <li class="list-group-item"><?php echo $bm['barcode']; ?>
							 	<a href="<?php echo base_url();  ?>barangmasuk/hapus/<?=$bm['barcode'] ?>"class="badge badge-danger float-right" onclick="return confirm('yakin?');"> Hapus </a>
							 </li>
							<?php endforeach; ?>

				      </th>
				      <td>
				      	<?php 
							foreach ($barangmasuk as $bm) : ?>
							 <li class="list-group-item"><?php echo $bm['namaproduk'] ?></li>
							<?php endforeach; ?></td>
				      <td>
				      	<?php 
							foreach ($barangmasuk as $bm) : ?>
							 <li class="list-group-item"><?php echo $bm['kategori'] ?></li>
							<?php endforeach; ?></td>
				      </td>
				      <td>
				      	<?php 
							foreach ($barangmasuk as $bm) : ?>
							 <li class="list-group-item"><?php echo $bm['jumlah'] ?></li>
							<?php endforeach; ?></td>
				      </td>
				      <td>
				      	<?php 
							foreach ($barangmasuk as $bm) : ?>
							 <li class="list-group-item"><?php echo $bm['namasuplier'] ?></li>
							<?php endforeach; ?></td>
				      </td>
				      <?php 
							foreach ($barangmasuk as $bm) : ?>
							 <li class="list-group-item"><?php echo $bm['tanggal'] ?></li>
							<?php endforeach; ?></td>
				    </tr>
				   
				    </tr>
				  </tbody>
				</table>

				
							
		</div>
		
	</div>


</div>