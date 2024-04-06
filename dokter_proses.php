<?php 
include "koneksi.php";
if (isset($_POST['aksi'])) {
    if ($_POST["aksi"] == "add_dokter") {
        $id_dokter = $_POST['id_dokter'];
        $nama = $_POST['nama'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $spesialis = $_POST['spesialis'];
        $alamat = $_POST['alamat'];
        $lama_bekerja = $_POST['lama_bekerja'];
        // Menambahkan data ke tabel pasien
        $query = "INSERT INTO dokter VALUES (null,'$id_dokter','$nama',  '$tanggal_lahir', '$jenis_kelamin','$spesialis', '$alamat', '$lama_bekerja')";
                  
        $sql = mysqli_query($conn, $query);

        if ($sql) {
            header("location: dokter.php");
        } else {
            echo "$query";
        }
    
    } else if ($_POST["aksi"] == 'edit_dokter') {
        $no_urut = $_POST['no_id'];

        $id_dokter = $_POST['id_dokter'];
        $nama = $_POST['nama'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $spesialis = $_POST['spesialis'];
        $alamat = $_POST['alamat'];
        $lama_bekerja = $_POST['lama_bekerja'];
    
        // Mengupdate data pada tabel pasien
        $query = "UPDATE dokter SET id_dokter='$id_dokter', nama='$nama', tanggal_lahir='$tanggal_lahir', jenis_kelamin='$jenis_kelamin',spesialis='$spesialis', alamat='$alamat', mulai_bekerja='$lama_bekerja' WHERE no_urut='$no_urut';";
        $sql = mysqli_query($conn, $query);
    
        if ($sql) {
            header("location: dokter.php");
        } else {
            echo "$query";
        }
    }
    
    
}




if (isset($_GET['hapus_dokter'])) {
    $id_dokter = mysqli_real_escape_string($conn, $_GET['hapus_dokter']);
    $query = "DELETE FROM dokter WHERE no_urut='$id_dokter';";
    $sql = mysqli_query($conn, $query);
    if ($sql) {
        $query_reset = "ALTER TABLE dokter AUTO_INCREMENT = 1;";
        $sql_reset = mysqli_query($conn, $query_reset);
        if ($sql_reset) {
            // Mengurutkan nomor id
            $query_sort = "SET @count := 0; UPDATE dokter SET no_urut = @count:= @count + 1; ALTER TABLE dokter AUTO_INCREMENT = 1;";
            $sql_sort = mysqli_multi_query($conn, $query_sort);
            if ($sql_sort) {
                header("location: dokter.php");
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
