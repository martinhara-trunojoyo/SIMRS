<?php 
include "koneksi.php";
// Query untuk menghitung jumlah pasien
$query1 = "SELECT COUNT(*) as total FROM pasien";
$result = mysqli_query($conn, $query1);
$data = mysqli_fetch_assoc($result);
$jumlah_pasien = $data['total'];
$query2 = "SELECT COUNT(*) as total2 FROM dokter";
$result2 = mysqli_query($conn, $query2);
$data2 = mysqli_fetch_assoc($result2);
$jumlah_dokter = $data2['total2'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard SIM RS</title>
  <!--  meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="https://i0.wp.com/rsudibnusina.gresikkab.go.id/wp-content/uploads/2020/04/Palang-hijau.png?w=640&ssl=1"type="image/x-icon">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS & JS-->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/bootstrap.bundle.min.js"></script>
  <!-- fontawesome -->
  <link rel="stylesheet" href="fontawesome/css/all.min.css">
  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
    $(document).ready(function(){
      $(".list-group").slideDown(1000);;
    });
    $(document).ready(function(){
      $(".col-md-10").slideDown(1000);;
    });
  </script>
  <!-- JQuery -->
</head>
<body>
<!-- Start Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="dashboard.php">
    <img class="m-2 mt-1" src="https://i0.wp.com/rsudibnusina.gresikkab.go.id/wp-content/uploads/2020/04/Palang-hijau.png?w=640&ssl=1" width="30" height="30" alt="RS Logo">
    SIM RS Hara Medika
  </a>
</nav>
<!-- End of Navigation Bar -->
<!-- Start Left Navigation -->
<div class="container-fluid mt-0">
  <div class="row">
    <div class="col-md-2 bg-success">
      <div class="card mt-3">
        <div class="card-body ">
          <div class="list-group " style="display:none;">
            <a href="dashboard.php" class="list-group-item list-group-item-action active">
              <i class="fas fa-tachometer-alt"></i> Dashboard
            </a>
            <a href="pasien.php" class="list-group-item list-group-item-action">
              <i class="fas fa-users"></i> Pasien
            </a>
            <a href="dokter.php" class="list-group-item list-group-item-action ">
              <i class="fas fa-user-md"></i> Dokter
            </a>
            <a href="tindakan.php" class="list-group-item list-group-item-action">
              <i class="fas fa-procedures"></i> Tindakan
            </a>
            <a href="laporan.php" class="list-group-item list-group-item-action">
              <i class="fas fa-file-medical-alt"></i> Laporan
            </a>
            <a href="index.php" class="list-group-item list-group-item-action">
              <i class="fas fa-user"></i> Logout
            </a>
          </div>
        </div>
      </div>
    </div>
<!--End Of Left Navigation  -->
<!-- Start Main Panel -->
    <div class="col-md-10 bg-success "style="display:none;height: 100vh;">
      <div class="card mt-3">
        <div class="card-body ">
          <h5 class="card-title">Dashboard</h5>
          <p class="card-text">Selamat datang di halaman dashboard SIM RS Hara Medika.</p>
            <div class="container mt-3">
              <div class="row">
                <div class="col-md-4">
                  <div class="card ">
                    <div class="card-body ">
                      <h5 class="card-title"><i class="fas fa-users fa-lg"></i> 
                        Pasien
                      </h5>
                      <p class="card-text">Pasien Rumah Sakit Hara Medika</p>
                      <a href="pasien.php" class="btn btn-dark  col-md-12 ">
                        <?php echo "Jumlah pasien saat ini <br>  " . $jumlah_pasien; ?>
                      </a>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card">
                  <div class="card-body">
                      <h5 class="card-title"><i class="fas fa-user-doctor fa-lg"></i> Dokter</h5>
                      <p class="card-text">Dokter Rumah Sakit Hara Medika</p>
                      <a href="pasien.php" class="btn btn-danger  col-md-12 ">
                        <?php echo "Jumlah dokter saat ini <br>  " . $jumlah_dokter; ?>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title"><i class="fas fa-file fa-lg"></i> Laporan</h5>
                      <p class="card-text">Laporan Tersedia</p>
                      <a href="laporan.php" class="btn btn-danger  col-md-12 "> 
                        Download <br>
                        Disini
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- End Of Main Panel -->
<!-- Lanjutkan Kodingan Disini!!!! -->
</body>
</html>
