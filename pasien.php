<!-- Start Koneksi ke database  -->
<?php 
include"koneksi.php";
$query= "SELECT * FROM pasien;";
$sql=mysqli_query($conn,$query)
?>
<!-- End Of Koneksi Ke Database -->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pasien | SIM RS</title>
  <link rel="shortcut icon" href="https://i0.wp.com/rsudibnusina.gresikkab.go.id/wp-content/uploads/2020/04/Palang-hijau.png?w=640&ssl=1"type="image/x-icon">
  <!-- meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS & JS-->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/bootstrap.bundle.min.js"></script>
  <!-- fontawesome -->
  <link rel="stylesheet" href="fontawesome/css/all.min.css">
  <!-- jquery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
    $(document).ready(function(){
      $(".list-group").slideDown(1000);;
    });
    $(document).ready(function(){
      $(".col-md-10").slideDown(1000);;
    });
  </script>
  <!-- datatables -->
  <link rel="stylesheet" href="datatables/datatables.css">
  <script src="datatables/datatables.js"></script>
</head>
<!-- Script of Data Tables -->
<script type="text/javascript">
  $(document).ready(function () {
      $('#dt').DataTable();
  }); 
</script>
<!-- End of Script of Data Tables -->
<body>
<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="dashboard.php">
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
            <a href="pasien.php" class="list-group-item list-group-item-action active">
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
<!-- End Of Left Navigation -->
<!-- Start Main Panel -->
      <div class="col-md-10 bg-success "style="display:none;;">
        <div class="card mt-3">
          <div class="card-body table-responsive ">
            <h5 class="card-title">Pasien</h5>
            <p class="card-text">Selamat datang di halaman Pasien SIM RS Hara Medika.</p>
              <div class="card ">
                <div class="card-body mt-3">
                <table id='dt'class="table table-bordered table-hover">
                    <thead class="table-responsive">
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
                            <!-- Aksi R U D -->
                            <td style="margin-left: 10px; margin-top: 10px;">
                              <a href="detail_pasien.php?detail=<?php echo $result['no_id']; ?>" value="lihat" type="button" class="btn btn-primary btn-sm ">
                                <i class="fa fa-eye"></i> 
                              </a>
                              <a value="ubah" class="btn btn-warning btn-sm mt-1" type="button" href="kelola.php?ubah=<?php echo $result['no_id']; ?>">
                                <i class="fa fa-pencil"></i> 
                              </a>
                              <a value="hapus" href="proses.php?hapus=<?php echo $result['no_id']; ?>" name="" type="button" class="btn btn-danger btn-sm mt-1" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                <i class="fa fa-trash"></i> 
                              </a>
                            </td>
                            <!-- end of aksi R U D-->
                          </tr>
                      <?php
                          }
                      ?>
                    <!-- tambahkan data pasien lainnya disini -->
                  </tbody>
                </table>
              </div>
            </div>
              <div>
                <a href="dokter_kelola.php" class="btn btn-primary btn-sm ml-5 mt-3"><i class="fa fa-plus"></i>
                    Tambah Data
                </a>
              </div>
            </div>
        </div>
      </div>
    </div>
</body>