<?php 
include"koneksi.php";
$query= "SELECT * FROM pasien;";
$sql=mysqli_query($conn,$query)
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tindakan | SIMRS</title>
  <link rel="shortcut icon" href="https://i0.wp.com/rsudibnusina.gresikkab.go.id/wp-content/uploads/2020/04/Palang-hijau.png?w=640&ssl=1"type="image/x-icon">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS & JS-->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/bootstrap.min.js"></script>
  <!-- fontawesome -->
  <link rel="stylesheet" href="fontawesome/css/all.min.css">
  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-0">
  <a class="navbar-brand" href="#">
      <img class="m-2 mt-1" src="https://i0.wp.com/rsudibnusina.gresikkab.go.id/wp-content/uploads/2020/04/Palang-hijau.png?w=640&ssl=1" width="30" height="30" alt="RS Logo">
      SIM RS Hara Medika
  </a>
</nav>
<!-- Left Navigation -->
<div class="container-fluid mt-0">
  <div class="row">
    <div class="col-md-2 bg-success">
      <div class="card mt-3">
        <div class="card-body ">
          <div class="list-group " style="display:none;">
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
      </div>
    </div>
<!-- main -->
<div class="col-md-10 bg-success "style="display:none;height: 100vh;">
    <div class="card mt-3 mb-3">
      <div class="card-body table-responsive ">
        <h5 class="card-title">Tindakan</h5>
        <p class="card-text">Selamat datang di halaman Tindakan SIM RS Hara Medika. <br> Silahkan Pilih Pasien</p>
        <table class="table table-bordered table-hover table-responsive">
            <thead>
              <tr>
                <th scope="col"><center>No</center></th>
                <th scope="col">No Rekam Medis</th>
                <th scope="col">Penjamin</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Poli</th>
                <th scope="col">DPJP</th>
                
                <th scope="col">Aksi</th>

              </tr>
            </thead>
            <tbody>
              <?php
                while($result=mysqli_fetch_assoc($sql)){
              ?>
                  <tr>
                    <th scope="row"><center>
                        <?php echo $result['no_id']?>
                    </center></th>
                    <td><?php echo $result['no_rekam_medis']?></td>
                    <td><?php echo $result['penjamin']?></td>
                    <td><?php echo $result['nama']?></td>
                    
                    <td><?php echo $result['alamat']?></td>
                    <td><?php echo $result['tanggal_lahir']?></td>
                    <td><?php echo $result['jenis_kelamin']?></td>
                    <td><?php echo $result['poli']?></td>
                    <td><?php echo $result['dpjp']?></td>
                   
                    <td style="margin-left: 10px; margin-top: 10px;text-align:center">
                      
                      <a value="tindak" class="btn btn-warning btn-sm mt-1 mb-1" type="button" href="kelola_tindakan.php?tindak=<?php echo $result['no_id']; ?>">
                        <i class="fa fa-pencil"></i> 
                      </a>
                      
                    </td>


                  </tr>
            <?php
                }
            ?>
              <!-- tambahkan data pasien lainnya disini -->
            </tbody>
          </table>
        
    </div>
  </div>
</div>

</div>
</div>
<script>
  $(document).ready(function(){
    $(".list-group",).slideDown(1000);;
  });

  $(document).ready(function(){
    $(".col-md-10").slideDown(1000);;
  });
</script>
</body>