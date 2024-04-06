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
  $tanggal_tindakan='';
  if(isset($_GET['tindak'])){
    $no_id=$_GET['tindak'];
    
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
      <!-- Main Panel -->
      <div class="col-md-10 bg-success "style="display:none;">
        <div class="card mt-3">
          <div class="card-body ">
            <h5 class="card-title text-center pb-3"> Input Data Tindakan</h5>
            <div class="container">
            <form method="POST" action="surat.php">
            <input type="hidden" value="<?php echo"$no_id"?> " name="no_id">
            <div class="form-group">
                  <label for="no_rekam_medis">No. Rekam Medis:</label>
                  <input name="rm" type="text" class="form-control" id="no_rekam_medis" placeholder="Masukkan nomor rekam medis" name="no_rekam_medis" value="<?php echo $no_rekam_medis ?>" readonly>
                </div>
                <div class="form-group">
                  <label for="penjamin">Penjamin:</label>
                  <select name="jamin" class="form-control" id="penjamin" >
                    <option value="UMUM" <?php if ($jamin == 'UMUM') echo 'selected'; ?>>UMUM</option>
                    <option value="ASURANSI" <?php if ($jamin == 'ASURANSI') echo 'selected'; ?>>Asuransi</option>
                    <option value="BPJS" <?php if ($jamin == 'BPJS') echo 'selected'; ?>>BPJS</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="nama">Nama:</label>
                  <input value="<?php echo $nama ?>" name="nama" type="text" class="form-control" id="nama" placeholder="Masukkan nama pasien" name="nama" >
                </div>
                <div class="form-group">
                  <label for="tanggal_lahir">Tanggal Lahir:</label>
                  <input value="<?php echo $tanggal_lahir ?>" name="tl" type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" >
                </div>
                <div class="form-group">
                  <label for="jenis_kelamin">Jenis Kelamin:</label>
                  <select name="jk" id="gender" class="form-control" disabled>
                    <option value="LAKI-LAKI" <?php if ($jk == 'LAKI-LAKI') echo 'selected'; ?>>Laki-laki</option>
                    <option value="PEREMPUAN" <?php if ($jk == 'PEREMPUAN') echo 'selected'; ?>>Perempuan</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="alamat">Alamat:</label>
                  <input value="<?php echo $alamat ?>" name="alamat" type="text" class="form-control" id="alamat" placeholder="Masukkan alamat pasien" name="alamat" readonly>
                </div>
                <div class="form-group">
                  <label for="poli">Poli:</label>
                      <select class="form-control" id="poli" name="poli" >
                          <option value="JANTUNG" <?php if ($poli == 'JANTUNG') echo 'selected'; ?>>Jantung</option>
                          <option value="PARU" <?php if ($poli == 'PARU') echo 'selected'; ?>>Paru</option>
                          <option value="MATA" <?php if ($poli == 'MATA') echo 'selected'; ?>>Mata</option>
                          <option value="GIGI" <?php if ($poli == 'GIGI') echo 'selected'; ?>>Gigi</option>
                      </select>
                  </div>
                <div class="form-group">
                  <label for="dpjp">DPJP:</label>
                  <input value="<?php echo $dpjp ?>" name="dpjp" type="text" class="form-control" id="dpjp" placeholder="Masukkan nama dokter DPJP" name="dpjp" readonly>
                </div>
            <div class="form-group">
                <label for="tanggal_tindakan">Tanggal Tindakan:</label>
                <input type="date" class="form-control" id="tanggal_tindakan" name="tanggal_tindakan">
            </div>

                <div class="form-group">
                    <label for="lama_rawat_inap">Lama Rawat Inap:</label>
                    <input type="number" class="form-control" id="lama_rawat_inap" name="lama_rawat_inap" placeholder="Masukkan lama rawat inap" required>
                </div>
                <div class="form-group">
                    <label for="total_obat">Total Obat:</label>
                    <input type="number" class="form-control" id="total_obat" name="total_obat" placeholder="Masukkan total obat" required>
                </div>
                <div class="form-group">
                    <label for="laboratorium">Total Laboratorium:</label>
                    <input type="number" class="form-control" id="laboratorium" name="laboratorium" placeholder="Masukkan hasil laboratorium" required>
                </div>
                <button type="submit" name="aksi" value="tindak" class="btn btn-primary px-4 mt-3"> 
        <i class="fa fa-floppy-disk"></i>Tambahkan Data
    </button>
    <a target="_blank"href="tindakan.php" class="btn btn-danger px-4 mt-3"> <i class="fa fa-reply"></i> Batal</a>
            </form>
            
