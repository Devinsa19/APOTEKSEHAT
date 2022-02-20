<h3><i class="fas fa-user-injured mr-2"></i>PASIEN</h3><hr>
        <table class="table table-bordered">
            <thead class="table-warning">
              <tr>
                <th>ID PASIEN</th>
                <th>NAMA PASIEN</th>
                <th>ALAMAT</th>
                <th>TELPON</th>
                <th>KELUHAN</th>
              </tr>
            </thead>
            <tbody>
              <?php $ambil=$koneksi->query("SELECT * FROM pasien"); ?>
              <?php while ($pecah = $ambil->fetch_assoc()) { ?>
              <tr>
                <td><?php echo $pecah['id_pasien']; ?></td>
                <td><?php echo $pecah['nama_pasien']; ?></td>
                <td><?php echo $pecah['alamat_pasien']; ?></td>
                <td><?php echo $pecah['telpon_pasien']; ?></td>
                <td><?php echo $pecah['keluhan']; ?></td>
              </tr>
              <?php } ?>
            </tbody>
          </table>