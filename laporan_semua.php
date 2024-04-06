<?php
include "koneksi.php";
$query= "SELECT * FROM pasien;";
$sql=mysqli_query($conn,$query);
$query1= "SELECT * FROM dokter;";
$sql2=mysqli_query($conn,$query1)
?>
<style>
    #judul{
        text-align:center;
        font-size:14pt;
        font-weight:bold;
        margin-bottom:20px;
    }
    table{
        border-collapse:collapse;
    }
    th{
        padding:5px;
        text-align:center;
    }
    td{
        padding-left:5px;
        padding-right:5px;
    }
</style>

<div id="judul">LAPORAN DATA PASIEN</div>

<table border="1" align="center">
    <tr>
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
              </tr>
</tr>
<tr>
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
                    
                    <?php
                }
            ?>
</tr>
</table>


<br>
<br>
<br>
<div id="judul">LAPORAN DATA DOKTER</div>

<table border="1" align="center">
<tr>
                        <th scope="col"><center>No</center></th>
                        <th scope="col">Id Dokter</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Spesialis</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Lama Bekerja</th>
                      </tr>
<tr>
<?php
                        while($result=mysqli_fetch_assoc($sql2)){
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
                    
                    <?php
                }
            ?>
</tr>
</table>
<script>window.print();</script>







