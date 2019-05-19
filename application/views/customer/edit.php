	<div class="new-products">
		<div class="container">
			<h2><?php echo $title; ?></h2>
				<?php echo validation_errors(); ?>
				<?php echo form_open('customer/edit/'.$customer_item['id_customer']); ?>
				<div class="agileinfo_new_products_grids">
					<div class="col-md-3 agileinfo_new_products_grid">
						<table>
							<tr>
								Id Customer
								<input type="input" name="id_customer" size="50" value="<?php echo $customer_item['id_customer'] ?>" />
							</tr>
							<tr>
								Nama 
								<input type="input" name="nama" size="50" value="<?php echo $customer_item['nama'] ?>" />
							</tr>
							<tr>
								No Telp
								<input type="input" name="telp" size="50" value="<?php echo $customer_item['telp'] ?>" />
							</tr>
							<tr>
								Alamat
								<textarea name="alamat" rows="3" cols="37.5"><?php echo $customer_item['alamat'] ?></textarea>
							</tr>
							<tr>
								<input type="submit" name="submit" value="Edit Data Customer" />
							</tr>
						</table>
					</form>
					</div>
				</div>
		</div>
	</div>


