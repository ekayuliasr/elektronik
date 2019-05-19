	<div class="new-products">
		<div class="container">
			<h2><?php echo $title; ?></h2>
				<?php echo validation_errors(); ?>
				<?php echo form_open('transaksi/edit/'.$transaksi_item['id_customer']); ?>
				<div class="agileinfo_new_products_grids">
					<div class="col-md-3 agileinfo_new_products_grid">
						<table>
							<tr>
								ID Customer
								<input type="input" name="id_customer" size="50" value="<?php echo $transaksi_item['id_customer'] ?>" />
							</tr>
							<tr>
								Kode Barang
								<input type="input" name="kodebarang" size="50" value="<?php echo $transaksi_item['kodebarang'] ?>" />
							</tr>
							<tr>
								<input type="submit" name="submit" value="Edit Data Transaksi" />
							</tr>
						</table>
					</form>
					</div>
				</div>
		</div>
	</div>
