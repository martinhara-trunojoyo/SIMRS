<?php 
include "koneksi.php";

if (isset($_POST['aksi'])) {
    if ($_POST["aksi"] == "add") {
        $no_rekam_medis = $_POST['rm'];
        $penjamin = $_POST['jamin'];
        $nama = $_POST['nama'];
        $tanggal_lahir = $_POST['tl'];
        $jenis_kelamin = $_POST['jk'];
        $alamat = $_POST['alamat'];
        $poli = $_POST['poli'];
        $dpjp = $_POST['dpjp'];

        // Menambahkan data ke tabel pasien
        $query = "INSERT INTO pasien VALUES (null,'$no_rekam_medis','$nama', '$penjamin',  '$tanggal_lahir', '$jenis_kelamin', '$alamat', '$poli', '$dpjp')";
                  
        $sql = mysqli_query($conn, $query);

        if ($sql) {
            header("location: pasien.php");
        } else {
            echo "$query";
        }
    
    } else if ($_POST["aksi"] == 'edit') {
        $no_id = $_POST['no_id'];
        $no_rekam_medis = $_POST['rm'];
        
        $nama = $_POST['nama'];
        $penjamin = $_POST['jamin'];
        $tanggal_lahir = $_POST['tl'];
        $jenis_kelamin = $_POST['jk'];
        $alamat = $_POST['alamat'];
        $poli = $_POST['poli'];
        $dpjp = $_POST['dpjp'];
    
        // Mengupdate data pada tabel pasien
        $query = "UPDATE pasien SET no_rekam_medis='$no_rekam_medis', nama='$nama', penjamin='$penjamin', tanggal_lahir='$tanggal_lahir', jenis_kelamin='$jenis_kelamin', alamat='$alamat', poli='$poli', dpjp='$dpjp' WHERE no_id='$no_id';";
        $sql = mysqli_query($conn, $query);
    
        if ($sql) {
            header("location: pasien.php");
        } else {
            echo "$query";
        }
    }
    
    
}




if (isset($_GET['hapus'])) {
    $id_pasien = mysqli_real_escape_string($conn, $_GET['hapus']);
    $query = "DELETE FROM pasien WHERE no_id='$id_pasien';";
    $sql = mysqli_query($conn, $query);
    if ($sql) {
        $query_reset = "ALTER TABLE pasien AUTO_INCREMENT = 1;";
        $sql_reset = mysqli_query($conn, $query_reset);
        if ($sql_reset) {
            // Mengurutkan nomor id
            $query_sort = "SET @count := 0; UPDATE pasien SET no_id = @count:= @count + 1; ALTER TABLE pasien AUTO_INCREMENT = 1;";
            $sql_sort = mysqli_multi_query($conn, $query_sort);
            if ($sql_sort) {
                header("location: pasien.php");
            } else {
                echo "Gagal mengurutkan nomor id.";
            }
        } else {
            echo "Gagal mereset nomor id.";
        }
    } else {
        echo "$query";
    }
}

?>
