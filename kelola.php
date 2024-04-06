<!DOCTYPE html>
<?php
  include 'koneksi.php';
  $no_id='';
  $nama='';
  $no_rekam_medis='';
  $jamin='';
  $tanggal_lahir='';
  $jk='';
  $alamat='';
  $poli='';
  $dpjp='';
  if(isset($_GET['ubah'])){
    $no_id=$_GET['ubah'];
    
    $query="SELECT * FROM pasien WHERE no_id='$no_id';";
    $sql=mysqli_query($conn, $query);

    $result=mysqli_fetch_assoc($sql);

    $no_rekam_medis=$result['no_rekam_medis'];
    $jamin=$result['penjamin'];
    $nama=$result['nama'];
    $tanggal_lahir=$result['tanggal_lahir'];
    $jk=$result['jenis_kelamin'];
    $alamat=$result['alamat'];
    $poli=$result['poli'];
    $dpjp=$result['dpjp'];
  }
?>
<html lang="en">
<head>
  <title>Pasien | SIM RS</title>
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
</head>
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
      <div class="list-group mt-3" style="display:none;">
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
    <!-- Main Panel -->
    <div class="col-md-10 bg-success "style="display:none;height: 100vh;">
      <div class="card mt-3">
        <div class="card-body ">
          <h5 class="card-title text-center pb-3"> Input Data Pasien</h5>
            <div class="container">
              <form method="POST" action="proses.php">
                <input type="hidden" value="<?php echo"$no_id"?> " name="no_id">
                <div class="form-group">
                  <label for="no_rekam_medis">No. Rekam Medis:</label>
                  <input name="rm" type="text" class="form-control" id="no_rekam_medis" placeholder="Masukkan nomor rekam medis" name="no_rekam_medis" value="<?php echo"$no_rekam_medis"  ?>">
                </div>
                <div class="form-group">
                  <label for="penjamin">Penjamin:</label>
                    <select value="<?php echo"$jamin"?>" name="jamin" class="form-control" id="penjamin" name="penjamin">
                      <option value="UMUM">UMUM</option>
                      <option value="ASURANSI">Asuransi</option>
                      <option value="BPJS">BPJS</option>
                    </select>
                </div>
                <div class="form-group">
                  <label  for="nama">Nama:</label>
                  <input value="<?php echo"$nama"?>" name="nama" type="text" class="form-control" id="nama" placeholder="Masukkan nama pasien" name="nama">
                </div>
                <div class="form-group">
                  <label for="tanggal_lahir">Tanggal Lahir:</label>
                  <input value="<?php echo"$tanggal_lahir"?>"name="tl" type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
                </div>
                <div class="form-group">
                  <label for="jenis_kelamin">Jenis Kelamin:</label>
                  <select name="jk" id="gender" class="form-control">
                      <option <?php if(isset($jk) && $jk=='LAKI-LAKI') {echo "selected";} ?> value="LAKI-LAKI">Laki-laki</option>
                      <option <?php if(isset($jk) && $jk=='PEREMPUAN') {echo "selected";} ?> value="PEREMPUAN">Perempuan</option>
                  </select>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat:</label>
                    <input value="<?php echo"$alamat"?>"name="alamat"type="text" class="form-control" id="alamat" placeholder="Masukkan alamat pasien" name="alamat">
                </div>
                <div class="form-group">
                  <label for="poli">Poli:</label>
                  <select class="form-control" id="poli" name="poli">
                      <option <?php if($poli=='JANTUNG') {echo "selected";} ?> value="JANTUNG">Jantung</option>
                      <option <?php if($poli=='PARU') {echo "selected";} ?> value="PARU">Paru</option>
                      <option <?php if($poli=='MATA') {echo "selected";} ?> value="MATA">Mata</option>
                      <option <?php if($poli=='GIGI') {echo "selected";} ?> value="GIGI">Gigi</option>
                  </select>
                </div>
              <div class="form-group">
                <label for="dpjp">DPJP:</label>
                <input value="<?php echo"$dpjp"?>"name="dpjp" type="text" class="form-control" id="dpjp" placeholder="Masukkan nama dokter DPJP" name="dpjp">
              </div>
              <div class="">
              <?php
if(isset($_GET['ubah'])){
?>
    <button type="submit" name="aksi" value="edit" class="btn btn-primary px-4 mt-3"> 
        <i class="fa fa-floppy-disk"></i> Simpan Perubahan
    </button>
    <a href="pasien.php" class="btn btn-danger px-4 mt-3"> <i class="fa fa-reply"></i> Batal</a>
<?php
} else{
?>
    <button type="submit" name="aksi" value="add" class="btn btn-primary px-4 mt-3"> 
        <i class="fa fa-floppy-disk"></i>Tambahkan Data
    </button>
    <a href="pasien.php" class="btn btn-danger px-4 mt-3"> <i class="fa fa-reply"></i> Batal</a>
<?php
} 
?>
