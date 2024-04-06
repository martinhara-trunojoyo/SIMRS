<?php 
include"koneksi.php";
$query= "SELECT * FROM dokter;";
$sql=mysqli_query($conn,$query)

?>
<html lang="en">
<head>
  <title>Dokter | SIM RS</title>
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
          <a href="dokter.php" class="list-group-item list-group-item-action active">
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

      <!-- Main Panel -->
      <div class="col-md-10 bg-success "style="display:none;height: 100vh;">
        <div class="card mt-3">
          <div class="card-body ">
            <h5 class="card-title">Dokter</h5>
            <p class="card-text">Selamat datang di halaman Dokter SIM RS Hara Medika.</p>
            <table class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th scope="col"><center>No</center></th>
                    <th scope="col">Id Dokter</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Spesialis</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Lama Bekerja</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    while($result=mysqli_fetch_assoc($sql)){
                  ?>
                      <tr>
                        <th scope="row"><center>
                            <?php echo $result['no_urut']?>
                        </center></th>
                        <td><?php echo $result['id_dokter']?></td>
                        <td><?php echo $result['nama']?></td>
                        <td><?php echo $result['tanggal_lahir']?></td>
                        
                        <td><?php echo $result['jenis_kelamin']?></td>
                        <td><?php echo $result['spesialis']?></td>
                        <td><?php echo $result['alamat']?></td>
                        <td><?php echo $result['mulai_bekerja']?></td>
                        <td>
                          <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i>
                          </button>
                            <a value="ubah_dokter"class="btn btn-warning btn-sm  " type="button" href="dokter_kelola.php?ubah_dokter=<?php echo $result['no_urut'];?>"><i class="fa fa-pencil"></i></a>
                            <a value="hapus_dokter" href="dokter_proses.php?hapus_dokter=<?php echo $result['no_urut']; ?>" name="" type="button" class="btn btn-danger btn-sm " onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="fa fa-trash"></i></a>
                        </td>
                      </tr>
                <?php
                    }
                ?>
                  <!-- tambahkan data pasien lainnya disini -->
                </tbody>
              </table>
            <div>
            <a href="dokter_kelola.php" class="btn btn-primary btn-sm ml-5"><i class="fa fa-plus"></i>
                Tambah Data</a>
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