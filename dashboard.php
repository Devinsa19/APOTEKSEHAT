<?php
$data_pasien = $koneksi->query("SELECT * FROM pasien");
$jumlah_pasien = mysqli_num_rows($data_pasien);

$data_suplier = $koneksi->query("SELECT * FROM suplier");
$jumlah_suplier = mysqli_num_rows($data_suplier);

$data_barang = $koneksi->query("SELECT * FROM barang");
$jumlah_barang = mysqli_num_rows($data_barang);

?>

<h4 class="font-weight-bold ml-3"><i class="fas fa-tachometer-alt mr-3"></i>DASHBOARD</h4><hr>
  <div class="row">

      <div class="col-md-4">
      <div class="card ml-3 bg-info text-white" style="width: 18rem;">
        <div class="card-body">
          <h5 class=""><i class="fas fa-user-injured mr-2"></i>BANYAK PASIEN </h5>
          <div class="display-4 font-weight-bold"> <?php echo $jumlah_pasien; ?> </div>
          <a href="index.php?halaman=pasien"><p class="text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
        </div>
        </div>
      </div>

      <div class="col-md-4">
      <div class="card ml-3 bg-danger text-white" style="width: 18rem;">
        <div class="card-body">
          <h5 class=""><i class="fas fa-user-tie mr-2"></i>BANYAK SUPLIER </h5>
          <div class="display-4 font-weight-bold"> <?php echo $jumlah_suplier; ?> </div>
          <a href="index.php?halaman=suplier"><p class="text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
        </div>
        </div>
      </div>

      <div class="col-md-4">
      <div class="card ml-3 bg-success text-white" style="width: 18rem;">
        <div class="card-body">
          <h5 class=""><i class="fas fa-medkit mr-2"></i>BANYAK BARANG </h5>
          <div class="display-4 font-weight-bold"> <?php echo $jumlah_barang; ?> </div>
          <a href="index.php?halaman=barang"><p class="text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
        </div>
        </div>
      </div>

  </div>

<br>



<h4 class="font-weight-bold ml-3"><i class="fas fa-users-cog mr-3"></i>PROFILE DEVELOPER</h4><hr>
        <div class="row">

        <!-- CECEP -->
          <div class="col">
             <div class="card mb-3 bg-warning text-dark" style="max-width: 540px;">
              <div class="row no-gutters">
                <div class="col-md-4">
                  <img src="img/Cecep1x1.jpg" class="card-img mt-4" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">CECEP BAGUS S D KA</h5>
                    <p class="card-text">NIM    : 4611419021 <br>Asal : Lampung <br>Birthday : 13-06-2001 </p>

                    <div class="icon ml-5">
                      <h5>
                        <a href="https://instagram.com/cecepbgs_"><i class="fab fa-instagram text-dark"></i></a>
                        <a href="https://web.facebook.com/cecepka05"><i class="fab fa-facebook-square ml-2 text-dark"></i></a>
                        <i class="fab fa-whatsapp ml-2 text-dark"> </i>
                      </h5>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>

          <!--RONI-->
          <div class="col">
            <div class="card mb-3 bg-warning text-dark" style="max-width: 540px;">
              <div class="row no-gutters">
                <div class="col-md-4">
                  <img src="img/RONI.png" class="card-img mt-4" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">RONI HAMONANGAN</h5>
                    <p class="card-text">NIM : 4611419001 <br>Asal : Bekasi <br>Birthday  : 18-08-2001</p>

                    <div class="icon ml-5">
                      <h5>
                        <a href="https://instagram.com/ronihmnngnn"><i class="fab fa-instagram text-dark"></i></a>
                        <a href="https://www.facebook.com/roni.hamonangan.3/"><i class="fab fa-facebook-square ml-2 text-dark"></i></a>
                        <a href="https://wa.me/082295595781"></a><i class="fab fa-whatsapp ml-2 text-dark"></i>                       
                      </h5>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
        <!--MEIMEIN-->
          <div class="col">
            <div class="card mb-3 bg-warning text-dark" style="max-width: 540px;">
              <div class="row no-gutters">
                <div class="col-md-4">
                  <img src="img/meidika.png" class="card-img mt-4" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">MEIDIKA BAGUS S</h5>
                    <p class="card-text">NIM   : 4611419009 <br>Asal : Karangayar <br>Birthday : 14-05-2001 </p>

                    <div class="icon ml-5">
                      <h5>
                        <a href="https://instagram.com/meidikabs_"><i class="fab fa-instagram text-dark"></i></a>
                        <a href="https://web.facebook.com/meidika.bagus"><i class="fab fa-facebook-square ml-2 text-dark"></i></a>
                        <a href="https://wa.me/08568845141"></a><i class="fab fa-whatsapp ml-2 text-dark"></i>
                      </h5>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>

          <!--DEPI-->
          <div class="col">
            <div class="card mb-3 bg-warning text-dark" style="max-width: 540px;">
              <div class="row no-gutters">
                <div class="col-md-4">
                  <img src="img/devi.jpg" class="card-img mt-4" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">DEVI NURUL ANISA</h5>
                    <p class="card-text">NIM   : 4611419013 <br>Asal : Tegal <br>Birthday : 19-12-2000</p>
                    
                    <div class="icon ml-5">
                      <h5>
                        <a href="https://instagram.com/devinsa19"><i class="fab fa-instagram text-dark"></i></a>
                        <a href="https://www.facebook.com/devi.anisa.5249"><i class="fab fa-facebook-square ml-2 text-dark"></i></a>
                        <a href="https://wa.me/082223041410"></a><i class="fab fa-whatsapp ml-2 text-dark"></i>
                      </h5>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>