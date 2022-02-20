<h3><i class="fas fa-medkit mr-2"></i>OBAT</h3><hr>

          <table class="table table-bordered">
            <thead class="table-warning">
              <tr>
                <th>ID PRODUK</th>
                <th>NAMA PRODUK</th>
                <th>HARGA BELI</th>
                <th>HARGA JUAL</th>
                <th>STOCK</th>
              </tr>
            </thead>
            <tbody>
              <?php $ambil=$koneksi->query("SELECT * FROM barang"); ?>
              <?php while ($pecah = $ambil->fetch_assoc()) { ?>
              <tr>
                <td><?php echo $pecah['id_barang']; ?></td>
                <td><?php echo $pecah['nama_barang']; ?></td>
                <td><?php echo $pecah['harga_beli']; ?></td>
                <td><?php echo $pecah['harga_jual']; ?></td>
                <td><?php echo $pecah['stock']; ?></td>
              </tr>
              <?php } ?>
            </tbody>
            </table>