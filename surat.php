<?php
// Mendapatkan nilai dari form
$nama=$_POST['nama'];
$poli=$_POST['poli'];
$jamin=$_POST['jamin'];
$dpjp=$_POST['dpjp'];

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
<!DOCTYPE html>
<html>
<head>
	<title>Format Pembiayaan</title>
	<style type="text/css">
		table {
			border-style: double;
			border-width: 3px;
			border-color: white;
		}
		table tr .text2 {
			text-align: right;
			font-size: 13px;
		}
		table tr .text {
			text-align: center;
			font-size: 13px;
		}
		table tr td {
			font-size: 13px;
		}
        #judul{
            text-align:center;
            font-size:14pt;
            font-weight:bold;
            margin-bottom:20px;
        }
        laporan.table{
            border-collapse:collapse;
            border: 10px;
            border-color: black;
           
            
        }
        
        </style>
        

</head>
<body>
	<center>
		<table>
			<tr>
				<td><img src="https://i0.wp.com/rsudibnusina.gresikkab.go.id/wp-content/uploads/2020/04/Palang-hijau.png?w=640&ssl=1" width="90" height="90"></td>
				<td>
				<center>
					<font size="4">DINAS KESEHATAN PROVINSI JAWA BARAT</font><br>
					<font size="5"><b>RS HARA MEDIKA</b></font><br>
					<font size="2">SELALU ADA SELALU BISA</font><br>
					<font size="2"><i>Jln Cut Nya'Dien No. 02 Kode Pos : 68173 Telp./Fax (0331)758005 Tempurejo  Jawa Barat</i></font>
				</center>
				</td>
			</tr>
			<tr>
				<td colspan="2"><hr></td>
			</tr>
		<table width="625">
			<tr>
				<td class="text2"><?php echo $tanggal_tindakan; ?></td>
			</tr>
		</table>
		</table>
		<table>
			<tr class="text2">
				<td>Nama </td>
				<td width="572">: <?php echo $nama ?></td>
			</tr>
			<tr>
				<td>Poli</td>
				<td width="564">: <?php echo $poli ?></td>
			</tr>
            <tr>
				<td>Penjamin</td>
				<td width="564">: <?php echo $jamin ?></td>
			</tr>
		</table>
		<div id="judul" style="font-weight:bold;">RINCIAN BIAYA PASIEN</div>
        <table class="laporan" align="center" style="border: 2px solid black; width: 600px;height:100px;">
        <tr>
            <th style="border: 2px solid black; text-align: center;">No</th>
            <th style="border: 2px solid black;">Tindakan</th>
            <th style="border: 2px solid black;">Harga</th>
            <th style="border: 2px solid black;">Jumlah</th>
            <th style="border: 2px solid black;">Total</th>
        </tr>
        <tr>
            <td style="border: 2px solid black; text-align: center;">1.</td>
            <td style="border: 2px solid black;text-align: center;">Rawat Inap</td>
            <td style="border: 2px solid black;text-align: center;">100.000</td>
            <td style="border: 2px solid black;text-align: center;"><?php echo $lama_rawat_inap ?> hari</td>
            <td style="border: 2px solid black;text-align: center;">Rp. <?php echo $total_biaya_rawat_inap ?></td>
        </tr>
        <tr>
            <td style="border: 2px solid black; text-align: center;">2.</td>
            <td style="border: 2px solid black;text-align: center;">Obat/Terapi</td>
            <td style="border: 2px solid black;text-align: center;">50.000</td>
            <td style="border: 2px solid black;text-align: center;"><?php echo $total_obat ?> Papan</td>
            <td style="border: 2px solid black;text-align: center;">Rp. <?php echo $total_biaya_obat ?></td>
        </tr>
        <tr>
            <td style="border: 2px solid black; text-align: center;">3.</td>
            <td style="border: 2px solid black;text-align: center;">laboratorium</td>
            <td style="border: 2px solid black;text-align: center;">200.000</td>
            <td style="border: 2px solid black;text-align: center;"><?php echo $total_laboratorium ?> </td>
            <td style="border: 2px solid black;text-align: center;">Rp. <?php echo $total_biaya_laboratorium ?></td>
        </tr>
        <tr>
            <td style="border: 2px solid black; text-align: center;"></td>
            <td style="border: 2px solid black;text-align: center;font-weight:bold;">Biaya Akhir</td>
            <td style="border: 2px solid black;text-align: center;"></td>
            <td style="border: 2px solid black;text-align: center;"></td>
            <td style="border: 2px solid black;text-align: center;">Rp. <?php echo $total_biaya?></td>
        </tr>
        
        <!-- Tambahkan baris lain sesuai kebutuhan -->
        </table>
        <br>
		<table width="625">
			<tr>
				<td width="430"><br><br><br><br></td>
				<td class="text" align="center">DPJP<br><br><br><br><?php echo $dpjp?></td>
			</tr>
	     </table>
         <script>window.print();</script>
</body>
</html>
