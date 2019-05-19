<!-- new-products -->
	<div class="new-products">
		<div class="container">
			<h3> <?php echo $title; ?> </h3>
			<?php echo validation_errors(); ?>
			<?php echo form_open('transaksi/create'); ?>	
			<div class="agileinfo_new_products_grids">
				<div class="col-md-3 agileinfo_new_products_grid">
					<div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">					
						<table>
							<tr>
								<td><label for="id_customer"> Id Customer </label></td>
								<td><input type="input" name="id_customer" size="50" /></td>
							</tr>
							<tr>
								<td><label for="kodebarang"> Kode Barang </label></td>
								<td><input type="input" name="kodebarang" size="50" /></td>
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
	</div>
	


	