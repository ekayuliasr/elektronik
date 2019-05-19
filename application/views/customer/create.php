	<div class="new-products">
		<div class="container">
			<h3> <?php echo $title; ?> </h3>
			<?php echo validation_errors(); ?>
			<?php echo form_open('customer/create'); ?>

			<div class="agileinfo_new_products_grids">
				<div class="col-md-3 agileinfo_new_products_grid">
						<table>
							<tr>
								Id Customer
								<input type="input" name="id_customer" size="40" />
							</tr>
							<tr>
								Nama
								<input type="input" name="nama" size="40" /></td>
							</tr>
							<tr>
								Telp 
								<input type="input" name="telp" size="40" />
							</tr>
							<tr>
								Alamat
								<textarea name="alamat" rows="2" cols="37.5"></textarea>
							</tr>
							<tr>
								<input type="submit" name="submit" value="Tambah data baru"/>
							</tr>
						</table>
					</form> 
					</div>
				</div>
				
			</div>
		</div>
	</div>
	

	