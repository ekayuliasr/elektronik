<!-- new-products -->
	<div class="new-products">
		<div class="container">
			<h3>Products</h3>
			<div class="agileinfo_new_products_grids">
				<?php foreach ($produk as $produk_item): ?>

				<div class="col-md-3 agileinfo_new_products_grid">
					<div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
						<div class="hs-wrapper hs-wrapper1">
								
						<h3><a href="single.html"><?php echo $produk_item['namabarang']; ?></a></h3>
						<div class="simpleCart_shelfItem">
							<p> Kode Barang : <?php echo $produk_item['kodebarang']; ?><br>
								Spesifikasi :<br>
									<?php echo $produk_item['spesifikasi']; ?><br>
								Rp.<?php echo $produk_item['harga']; ?><br>
								Stok :		  <?php echo $produk_item['stok']; ?></p>
								
							</form>
						</div>  
						</div>
					</div>
					
				</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
	
