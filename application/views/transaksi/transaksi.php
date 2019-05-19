<!-- new-products -->
	<div class="new-products">
		<div class="container">
			<h3> <?php echo $title; ?> </h3>
			<div class="agileinfo_new_products_grids">
				<nav class="navbar navbar-default">
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav">
						<li><a href="<?php echo site_url('transaksi/create'); ?>"" class="act"> Tambah Transaksi </a></li></ul>
				</div></nav>
					<table class="table table-striped">
						<thead>
							<tr>
								<th> Id Customer </th>
								<th> Kode Barang </th>
								<th> Action </th>
							</tr>				
						</thead>
						<tbody>
							<?php foreach ($transaksi as $transaksi_item): ?>
								<tr>
									<td><?php echo $transaksi_item['id_customer']; ?></td>
									<td><?php echo $transaksi_item['kodebarang']; ?></td>
									<td>
										<a href="<?php echo site_url('transaksi/edit/'.$transaksi_item['id_customer']) ?>"> Edit </a> |
										<a href="<?php echo site_url('transaksi/delete/'.$transaksi_item['id_customer']) ?>"onClick="return confirm('Are you sure you want to delete?')"> Delete </a>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
			</div>
		</div>
	</div>
	
