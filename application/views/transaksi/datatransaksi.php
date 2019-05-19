<!-- new-products -->
  <div class="new-products">
    <div class="container">
      <h3> <?php echo $title; ?> </h3>
      <div class="agileinfo_new_products_grids">
        <nav class="navbar navbar-default">
        <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo site_url('transaksi/create'); ?>"" class="act">
             Tambah Transaksi </a></li> 
            <li><a href="<?php echo site_url('transaksi/transaksi'); ?>"" class="act"> 
            Edit dan Hapus Transaksi </a></li>
          </ul>
        </div>
      </nav>
          <table class="table table-striped">
              <thead>
                <tr><th> No </th>
                    <th> ID Customer </th>
                    <th> Nama Customer </th>
                    <th> Kode Barang </th>
                    <th> Nama Barang </th>
                    <th> Harga </th>   
                </tr>
              </thead>
              <tbody>
                <?php 
                $no=1; 
                foreach ($join3 as $row) { ?>
                <tr>
                <td><?php echo $no++;?></td>
                <td><?php echo $row->id_customer;?></td>
                <td><?php echo $row->nama;?></td>
                <td><?php echo $row->kodebarang;?></td>
                <td><?php echo $row->namabarang;?></td>
                <td><?php echo $row->harga;?></td>
                </tr>
                  <?php } ?>
              </tbody>
          </table>        
      </div>
    </div>
  </div>
  
