<!-- new-products -->
	<div class="new-products">
		<div class="container">
			<h3> <?php echo $title; ?> </h3>
			<div class="agileinfo_new_products_grids">
				<nav class="navbar navbar-default">
			        <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
			          <ul class="nav navbar-nav">
			            <li><a href="<?php echo site_url('produk/create'); ?>"" class="act"> Tambah Data Produk </a></li> 
			          </ul>
			        </div>
			    </nav>
					<table class="table table-striped">
						<thead>
							<tr>
								<th> Kode Barang </th>
								<th> Nama Barang </th>
								<th> Spesifikasi </th>
								<th> Harga </th>
								<th> Stok </th>
								<th> Action </th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($produk as $produk_item): ?>
								<tr>
									<td><?php echo $produk_item['kodebarang']; ?></td>
									<td><?php echo $produk_item['namabarang']; ?></td>
									<td><?php echo $produk_item['spesifikasi']; ?></td>
									<td><?php echo $produk_item['stok']; ?></td>
									<td><?php echo $produk_item['harga']; ?></td>
									<td>
										<a href="<?php echo site_url('produk/edit/'.$produk_item['kodebarang']); ?>"> Edit </a> |
										<a href="<?php echo site_url('produk/delete/'.$produk_item['kodebarang']) ?>"onClick="return confirm('Are you sure you want to delete?')"> Delete </a>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>				
			</div>
		</div>
	</div>
	
