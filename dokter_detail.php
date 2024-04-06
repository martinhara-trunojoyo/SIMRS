<?php
  include 'koneksi.php';
  $no_urut='';
  $id_dokter='';
  $nama='';
  $tanggal_lahir='';
  $jenis_kelamin='';
  $spesialis='';
  $alamat='';
  $mulai_bekerja='';
  if(isset($_GET['detail'])){
    $no_id=$_GET['detail'];
    
    $query="SELECT * FROM dokter WHERE no_urut='$no_id';";
    $sql=mysqli_query($conn, $query);

    $result=mysqli_fetch_assoc($sql);

    $id_dokter=$result['id_dokter'];
    $nama=$result['nama'];
    $tanggal_lahir=$result['tanggal_lahir'];
    $jenis_kelamin=$result['jenis_kelamin'];
    $alamat=$result['alamat'];
    $spesialis=$result['spesialis'];
    $alamat=$result['alamat'];
    $mulai_bekerja=$result['mulai_bekerja'];
  }
?>
<!DOCTYPE html>

<html lang="en">
<head>
  <title>dokter | SIM RS</title>
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
<!-- End Of Navbar -->
<!-- Start Left Navigation -->
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
      </div>
    </div>
<!-- Main Panel -->
    <div class="col-md-10 bg-success "style="display:none;height: 100vh;">
      <div class="card mt-3">
        <div class="card-body ">
          <h5 class="card-title text-center pb-3"> Detail Data Dokter</h5>
            <div class="container">
              <form method="POST" action="proses.php">
                <input  type="hidden" value="<?php echo"$no_urut"?> " name="no_id">
                <div class="form-group">
                  <label for="no_rekam_medis">Id Dokter:</label>
                  <input name="id_dokter" type="text" class="form-control" id="id_dokter" placeholder="Masukkan id dokter"  value="<?php echo"$id_dokter"  ?> "readonly>
                </div>
                <div class="form-group">
                    <label  for="nama">Nama:</label>
                    <input value="<?php echo"$nama"?>" name="nama" type="text" class="form-control" id="nama" placeholder="Masukkan nama dokter" name="nama" readonly>
                </div>
                <div class="form-group">
                    <label for="tanggal_lahir">Tanggal Lahir:</label>
                    <input value="<?php echo"$tanggal_lahir"?>"name="tanggal_lahir" type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" readonly>
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin:</label>
                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" disabled>
                        <option <?php if(isset($jk) && $jk=='LAKI-LAKI') {echo "selected";} ?> value="LAKI-LAKI">Laki-laki</option>
                        <option <?php if(isset($jk) && $jk=='PEREMPUAN') {echo "selected";} ?> value="PEREMPUAN">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                  <label for="spesialis">Spesialis:</label>
                  <select name="spesialis" id="spesialis" class="form-control" disabled>
                      <option <?php if(isset($spesialis) && $spesialis=='PENYAKIT DALAM') {echo "selected";} ?> value="PENYAKIT DALAM">Penyakit Dalam</option>
                      <option <?php if(isset($spesialis) && $spesialis=='PARU') {echo "selected";} ?> value="PARU">Paru</option>
                      <option <?php if(isset($spesialis) && $spesialis=='JANTUNG') {echo "selected";} ?> value="JANTUNG">Jantung</option>
                      <option <?php if(isset($spesialis) && $spesialis=='MATA') {echo "selected";} ?> value="MATA">Mata</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="alamat">Alamat:</label>
                  <input value="<?php echo"$alamat"?>"name="alamat"type="text" class="form-control" id="alamat" placeholder="Masukkan alamat dokter" name="alamat" readonly>
                </div>
                <div class="form-group">
                    <label for="dpjp">Lama Bekerja:</label>
                    <input value="<?php echo"$mulai_bekerja"?>"name="lama_bekerja" type="date" class="form-control" id="lama_bekerja" placeholder="Masukkan lama bekerja" name="lama_bekerja" readonly>
                </div>
          </form>
</body>
</html>
      <?php
        if(isset($_GET['detail'])){
        ?>
            
            <a href="dokter.php" class="btn btn-danger px-4 mt-3"> <i class="fa fa-reply"></i> Kembali</a>
        <?php
        } 
      ?>
      
