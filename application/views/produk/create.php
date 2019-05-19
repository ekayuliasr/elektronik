	<div class="new-products">
		<div class="container">
			<h3> <?php echo $title; ?> </h3>

			<?php echo validation_errors(); ?>

			<?php echo form_open('produk/create'); ?>

			<div class="agileinfo_new_products_grids">
				<div class="col-md-3 agileinfo_new_products_grid">
						<table>
							<tr>
								<td><label for="kodebarang"> Kode </label></td>
								<td><input type="input" name="kodebarang" size="40" /></td>
							</tr>
							<tr>
								<td><label for="namabarang"> Nama </label></td>
								<td><input type="input" name="namabarang" size="40" /></td>
							</tr>
							<tr>
								<td><label for="spesifikasi"> Spesifikasi </label></td>
								<td><textarea name="spesifikasi" rows="3" cols="37.5"></textarea></td>
							</tr>
							<tr>
								<td><label for="harga"> Harga </label></td>
								<td><input type="input" name="harga" size="40" /></td>
							</tr>
							<tr>
								<td><label for="stok"> Stok </label></td>
								<td><input type="input" name="stok" size="40" /></td>
							</tr>
							<tr>
								<td></td>
								<td><input type="submit" name="submit" value="Tambah data baru"/></td>
							</tr>
						</table>
					</form> 
					</div>
				</div>
				
			</div>
		</div>
	</div>
	

	