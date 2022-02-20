<?php
session_start();
$koneksi = new mysqli("localhost","root","","apotek6"); 
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Fontawsome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="profilstyle.css">

    <title>ADMIN PAGE</title>
  </head>
  <body>
    
    <!--NAVBAR-->
    <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
      <a class="navbar-brand" href="#"><b> <i class="fas fa-clinic-medical ml-2 mr-1"></i> APOTEK KELOMPOK 7</b></a>
     
        <form class="form-inline my-2 my-lg-0 ml-auto">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        <div class="icon ml-4">
          <h5>

            <i class="fas fa-envelope mr-3" data-toggle="tooltip" title="Inbox"></i>
            <i class="fas fa-bell mr-3"  data-toggle="tooltip" title="Notification"></i>
            <a class="text-dark" href="index.php?halaman=logout"><i class="fas fa-sign-out-alt mr-3" data-toggle="tooltip" title="sign out"></i></a>

          </h5>
        </div>

      </div>
    </nav>

    <div class="row no-gutters mt-5">
      <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">

        <ul class="nav flex-column ml-3 mb-5">
          <li class="nav-item">
            <a class="nav-link active text-white" href="index.php"><i class="fas fa-tachometer-alt mr-2"></i>Dashboard</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="index.php?halaman=obat"><i class="fas fa-medkit mr-2"></i>Obat</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="index.php?halaman=pasien"><i class="fas fa-user-injured mr-2"></i>Pasien</a><hr class="bg-secondary">
          </li>
        </ul>
      </div>

<!-- ISI -->
      <div class="col-md-10 p-5 pt-2">
       <?php 
       if (isset($_GET['halaman']))
       {
         if ($_GET['halaman']=='pasien'){
           include 'pasien.php';
         }
         elseif ($_GET['halaman']=='obat'){
          include 'obat.php';
        }
        elseif ($_GET['halaman']=='resep'){
          include 'resep.php';
        }
        elseif ($_GET['halaman']=='suplier'){
          include 'suplier.php';
        }
        elseif ($_GET['halaman']=='barangmasuk'){
          include 'barangmasuk.php';
        }
        elseif ($_GET['halaman']=='barangkeluar'){
          include 'barangkeluar.php';
        }
        elseif ($_GET['halaman']=='tambahbarang'){
          include 'tambahbarang.php';
        }
        elseif ($_GET['halaman']=='tambahpasien'){
          include 'tambahpasien.php';
        }
        elseif ($_GET['halaman']=='tambahresep'){
          include 'tambahresep.php';
        }
        elseif ($_GET['halaman']=='tambahsuplier'){
          include 'tambahsupllier.php';
        }
        elseif ($_GET['halaman']=='tambahmasuk'){
          include 'tambahmasuk.php';
        }
        elseif ($_GET['halaman']=='tambahkeluar'){
          include 'tambahkeluar.php';
        }
        elseif ($_GET['halaman']=='hapusbarang'){
          include 'hapusbarang.php';
        }
        elseif ($_GET['halaman']=='hapusresep'){
          include 'hapusresep.php';
        }
        elseif ($_GET['halaman']=='hapussuplier'){
          include 'hapussuplier.php';
        }
        elseif ($_GET['halaman']=='hapuspasien'){
          include 'hapuspasien.php';
        }
        elseif ($_GET['halaman']=='ubahbarang'){
          include 'ubahbarang.php';
        }
        elseif ($_GET['halaman']=='ubahsuplier'){
          include 'ubahsuplier.php';
        }
        elseif ($_GET['halaman']=='ubahpasien'){
          include 'ubahpasien.php';
        }
        elseif ($_GET['halaman']=='ubahresep'){
          include 'ubahresep.php';
        }
        elseif ($_GET['halaman']=='hapusmasuk'){
          include 'hapusmasuk.php';
        }
        elseif ($_GET['halaman']=='ubahmasuk'){
          include 'ubahmasuk.php';
        }
        elseif ($_GET['halaman']=='hapuskeluar'){
          include 'hapuskeluar.php';
        }
        elseif ($_GET['halaman']=='ubahkeluar'){
          include 'ubahkeluar.php';
        }
        elseif ($_GET['halaman']=='logout'){
          include 'logout.php';
        }
        

       }
       else {
         include 'dashboard.php';
       }

       ?>
      </div>
    </div>

    <!--FOOTER-->
          
    <div class="copyright bg-warning text-dark text-center font-weight-bold p-1">
      <p>Develop by Kelompok 7 SBD Rombel 1 <i class="far fa-copyright"></i> 2020</p>
    </div>

    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="admin.js"></script>


  </body>
</html>