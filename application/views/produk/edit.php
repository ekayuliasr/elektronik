	<div class="new-products">
		<div class="container">
			<h2><?php echo $title; ?></h2>
				<?php echo validation_errors(); ?>
				<?php echo form_open('produk/edit/'.$produk_item['kodebarang']); ?>
				<div class="agileinfo_new_products_grids">
					<div class="col-md-3 agileinfo_new_products_grid">
						<table>
							<tr>
								<td><label for="kodebarang"> Kode Barang </label></td>
								<td><input type="input" name="kodebarang" size="50" value="<?php echo $produk_item['kodebarang'] ?>" /></td>
							</tr>
							<tr>
								<td><label for="namabarang"> Nama Barang </label></td>
								<td><input type="input" name="namabarang" size="50" value="<?php echo $produk_item['namabarang'] ?>" /></td>
							</tr>
							<tr>
								<td><label for="text"> Spesifikasi </label></td>
								<td><textarea name="spesifikasi" rows="3" cols="37.5"><?php echo $produk_item['spesifikasi'] ?></textarea></td>
							</tr>
							<tr>
								<td><label for="harga"> Harga </label></td>
								<td><input type="input" name="harga" size="50" value="<?php echo $produk_item['harga'] ?>" /></td>
							</tr>
							<tr>
								<td><label for="stok"> Stok </label></td>
								<td><input type="input" name="stok" size="50" value="<?php echo $produk_item['stok'] ?>" /></td>
							</tr>
							<tr>
								<td></td>
								<td><input type="submit" name="submit" value="Edit Data Barang" /></td>
							</tr>
						</table>
					</form>
					</div>
				</div>
		</div>
	</div>
