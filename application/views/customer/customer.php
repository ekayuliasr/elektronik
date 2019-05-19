<!-- new-products -->
	<div class="new-products">
		<div class="container">
			<h3> <?php echo $title; ?> </h3>
			<div class="agileinfo_new_products_grids">
				<nav class="navbar navbar-default">
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav">
						<li><a href="<?php echo site_url('customer/create'); ?>"" class="act"> Tambah Data Customer </a></li>	
					</ul>
				</div>
				</nav>
					<table class="table table-striped">
						<thead>
							<tr>
								<th> Id Customer </th>
								<th> Nama </th>
								<th> Telp </th>
								<th> Alamat </th>
								<th> Action </th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($customer as $customer_item): ?>
								<tr>
									<td><?php echo $customer_item['id_customer']; ?></td>
									<td><?php echo $customer_item['nama']; ?></td>
									<td><?php echo $customer_item['telp']; ?></td>
									<td><?php echo $customer_item['alamat']; ?></td>
									<td>
										<a href="<?php echo site_url('customer/edit/'.$customer_item['id_customer']); ?>"> Edit </a> |
										<a href="<?php echo site_url('customer/delete/'.$customer_item['id_customer']) ?>"onClick="return confirm('Are you sure you want to delete?')"> Delete </a>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>				
			</div>
		</div>
	</div>
	
