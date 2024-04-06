<!DOCTYPE html>
<html lang="en">
<head>
  <title>Laporan | SIM RS</title>
  <!-- Required meta tags -->
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <script>
  $(document).ready(function(){
    $(".list-group").slideDown(1000);;
  });
  $(document).ready(function(){
    $(".col-md-10").slideDown(1000);;
  });
</script>



</head>
<body>

  <!-- Navigation Bar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="dashboard.php">
      <img class="m-2 mt-1" src="https://i0.wp.com/rsudibnusina.gresikkab.go.id/wp-content/uploads/2020/04/Palang-hijau.png?w=640&ssl=1" width="30" height="30" alt="RS Logo">
      SIM RS Hara Medika
    </a>
  </nav>

  <!-- Main Content -->
  <div class="container-fluid mt-0">
    <div class="row">

      <!-- Left Navigation -->
      <div class="col-md-2 bg-success">
      <div class="list-group mt-3" style="display:none;">
          <a href="dashboard.php" class="list-group-item list-group-item-action ">
            <i class="fas fa-tachometer-alt"></i> Dashboard
          </a>
          <a href="pasien.php" class="list-group-item list-group-item-action">
            <i class="fas fa-users"></i> Pasien
          </a>
          <a href="dokter.php" class="list-group-item list-group-item-action">
            <i class="fas fa-user-md"></i> Dokter
          </a>
          <a href="tindakan.php" class="list-group-item list-group-item-action">
            <i class="fas fa-procedures"></i> Tindakan
          </a>
          <a href="laporan.php" class="list-group-item list-group-item-action active">
            <i class="fas fa-file-medical-alt"></i> Laporan
          </a>
          <a href="index.php" class="list-group-item list-group-item-action">
            <i class="fas fa-user"></i> Logout
          </a>
        </div>
      </div>

      <!-- Main Panel -->
      <div class="col-md-10 bg-success "style="display:none;height: 100vh;">
        <div class="card mt-3 ">
          <div class="card-body ">
              <h5 class="card-title">Laporan</h5>
              <p class="card-text">Selamat datang di halaman Laporan SIM RS Hara Medika.</p>
                <div class="container mt-4">
                  <div class="row">
                    <div class="col-md-4">
                       <div class="card">
                          <div class="card-body">
                            <h5 class="card-title"><i class="fas fa-users fa-lg"></i> Laporan Pasien</h5>
                            <p class="card-text">Laporan Data Pasien Rumah Sakit Hara Medika</p>
                            <a href="laporan_pasien.php" class="btn btn-warning col-md-12" target="_blank">
                            <i class="fa-solid fa-download"></i> Download Disini
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title"><i class="fas fa-user-doctor fa-lg"></i> Laporan Dokter</h5>
                              <p class="card-text">Laporan Data Dokter Rumah Sakit Hara Medika</p>
                              <a href="laporan_dokter.php" class="btn btn-warning col-md-12" target="_blank">
                              <i class="fa-solid fa-download"></i> Download Disini
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title"><i class="fa-regular fa-file" style="color: #000000;" fa-lg></i> Semua Laporan</h5>
                              <p class="card-text">Download Semua Laporan Rumah Sakit Hara Medika</p>
                              <a href="laporan_semua.php" class="btn btn-warning col-md-12" target="_blank">
                              <i class="fa-solid fa-download"></i> Download Disini
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
        </div>
      </div>
</body>
</html>
