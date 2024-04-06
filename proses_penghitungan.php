<?php
// Mendapatkan nilai dari form
$tanggal_tindakan = $_POST['tanggal_tindakan'];

$lama_rawat_inap = $_POST['lama_rawat_inap'];
$total_obat = $_POST['total_obat'];
$total_laboratorium = $_POST['laboratorium'];

// Menghitung biaya rumah sakit
$biaya_rawat_inap_per_hari = 100000; // Biaya rawat inap per hari
$biaya_obat = 50000; // Biaya obat per item
$biaya_laboratorium = 200000; // Biaya laboratorium

$total_biaya_rawat_inap = $biaya_rawat_inap_per_hari * $lama_rawat_inap;
$total_biaya_obat = $biaya_obat * $total_obat;
$total_biaya_laboratorium = $biaya_laboratorium * $total_laboratorium;

$total_biaya = $total_biaya_rawat_inap + $total_biaya_obat + $total_biaya_laboratorium;

// Tampilkan hasil penghitungan biaya rumah sakit

?>
<html lang="en">
<head>
  <title>Tindakan | SIM RS</title>
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
          <a href="dokter.php" class="list-group-item list-group-item-action ">
            <i class="fas fa-user-md"></i> Dokter
          </a>
          <a href="tindakan.php" class="list-group-item list-group-item-action active">
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

      <!-- Main Panel -->
      <div class="col-md-10 bg-success "style="display:none;height: 100vh;">
        <div class="card mt-3">
          <div class="card-body ">
        <h5 class="card-title text-center pb-3">Total Biaya RS</h5>

        <div class="form-group row">
            <label for="tanggal_tindakan" class="col-sm-4 col-form-label">Tanggal Tindakan:</label>
            <div class="col-sm-8 mb-3 mt-3">
                <input type="text" class="form-control mb-2" id="tanggal_tindakan" name="tanggal_tindakan" readonly value="<?php echo $tanggal_tindakan; ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="lama_rawat_inap" class="col-sm-4 col-form-label">Lama Rawat Inap:</label>
            <div class="col-sm-8 mb-3 mt-3">
                <label class="form-control mb-2"><?php echo $lama_rawat_inap; ?></label>
            </div>
        </div>

        <div class="form-group row">
            <label for="total_obat" class="col-sm-4 col-form-label ">Total Obat:</label>
            <div class="col-sm-8 mb-3 mt-3">
                <label class="form-control mb-2"><?php echo $total_obat; ?></label>
            </div>
        </div>

        <div class="form-group row">
            <label for="laboratorium" class="col-sm-4 col-form-label">Total Laboratorium:</label>
            <div class="col-sm-8 mb-3 mt-3">
                <label class="form-control mb-2"><?php echo $total_laboratorium; ?></label>
            </div>
        </div>

        <div class="form-group row">
            <label for="total_biaya" class="col-sm-4 col-form-label">Total Biaya Keseluruhan:</label>
            <div class="col-sm-8 mb-2 mt-2">
                <label class="form-control mb-5"><?php echo number_format($total_biaya); ?></label>
            </div>
        </div>

      
            <button class="btn btn-primary" onclick="window.print()">Cetak</button>
            <a href="tindakan.php"class="btn btn-danger" >Back</a>
        </div>
       
            
        </div>
    </div>
</div>

