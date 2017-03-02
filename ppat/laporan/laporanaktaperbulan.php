<?php include '../../koneksi/koneksi.php';
	session_start();
	$bulan = $_POST['bulan'];

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>LAPORAN BULANAN PEMBUATAN AKTA OLEH PPAT</title>
	
</head>
<body onload="window.print()">

			<table>
				<tr>
					<td style="width: 100px;">Nama P.P.A.T</td>
					<td>:</td>
					<td><?php echo $_SESSION['namalengkap']; ?></td>
					<td style="width:1050px; "></td>
					<td><p align="right" style=" ">Kepada Yth,</p></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td>:</td>
					<td style="width:200px; ">Jln. Taman Siswa</td>
					<td></td>
					<td style="width:650px; "><p align="right">1.Kepala Kantor Pertahanan Kabupaten Cirebon</p></td>
				</tr>
				<tr>
					<td>NPWP</td>
					<td>:</td>
					<td><?php echo $_SESSION['NPWP']; ?></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>Daerah Kerja</td>
					<td>:</td>
					<td><b>KABUPATEN CIREBON</b></td>
				</tr>
			</table>
	
			<center>
				<h3  style="margin-left:300px;">LAPORAN BULANAN PEMBUATAN AKTA OLEH PPAT</h3>
				<h4  style="margin-left: 300px;">Bulan <?php include'bulan.php'; ?> 2016</h4>
			</center>

			<center>
				<table border="1"> 
					
					<tr>
						<th rowspan ="2"><center>NO URUT</center></th>
				    	<th colspan ="2"><center>AKTA</center></th>
				        <th rowspan ="2"><center>BENTUK <BR>PEMBUATAN HUKUM</center></th>
				        <th colspan ="2"><center>NAMA ALAMAT DAN NPWP</center></th>
				        <th rowspan ="2"><center>JENIS <BR>DAN NOMOR HAK</center></th>
				        <th rowspan ="2"><center>LETAK <BR>TANAH<BR> DAN BANGUNAN</center></th>
				        <th colspan ="2"><center>LUAS (M2)</center></th>
				        <th rowspan ="2"><center>HARGA TRANSAKSI<br> PEROLEHAN<br> PENGALIHAN HAK (Rp.000)</center></th>
				        <th colspan="2"><center>SPPT PBB</center></th>
				        <th colspan="2"><center>SPP</center></th>
				        <th colspan="2"><center>D BPHTB</center></th>
				        <th colspan="1"><center>Ket.</center></th>
				   </tr>
				    <tr>
				    	<td>NOMOR</td> 
				        <td>TANGGAL</td>
				        <td><center>PIHAK YANG <BR>MENGALIHKAN/ <BR>MEMBERIKAN</center></td>
				        <td><center>PIHAK YANG <BR>MENERIMA </center></td>
				        <td><center>TANAH</center></td>
				        <td><center>BANGUNAN</center></td>
				        <td><center>NOP/<br>TAHUN</center></td>
				        <td><center>NJOP <br> (Rp.00)</center></td>
				        <td><center>TGL</center></td>
				        <td><center>(Rp.00)</center></td>
				        <td><center>TGL</center></td>
				        <td><center>(Rp.00)</center></td>
				        <td></td>
				        
				    </tr>
				    <tr>
				    	<?php for ($i=1; $i <= 18; $i++) { 
				    		echo "<td><center>".$i."</center></td>";
				    	} ?>

				        
				    </tr>
				    <?php 
				    	$no = 1;
				    	$query = mysql_query("SELECT * FROM ppat  where month(tanggalinput)= '".$bulan."' order by idppat DESC");
				    	while ($row = mysql_fetch_array($query)) {
				    		 $konverttanggal = jin_date_str($row['tanggalinput']);
				    		 $konverttanggalssp = jin_date_str($row['tgl_ssp']);
				    		 $konverttanggalbphtb = jin_date_str($row['tgl_bphtb']);
				    		 
				    		echo "<tr>
				    				<td><center>".$no++."</center></td>
				    				<td>".$row['noakta']."</td>
				    				<td>".$konverttanggal."</td>
				    				<td>".$row['jenisakta']."</td>
				    				<td>".$row['namapemohon'].", ".$row['alamatpemohon']."</td>
				    				<td>".$row['namapenerima'].", ".$row['alamatpenerima']."</td>
				    				<td></td>
				    				<td>".$row['alamattanah']."</td>
				    				<td>".$row['luastanah']."</td>
				    				<td>".$row['luasbangunan']."</td>
				    				<td>".$row['harga']."</td>
				    				<td>".$row['tahun']."/".$row['NOP']."</td>
				    				<td>".$row['NJOP']."</td>
				    				<td>".$konverttanggalssp."</td>
				    				<td>".$row['jumlah_ssp']."</td>
				    				<td>".$konverttanggalbphtb."</td>
				    				<td>".$row['jumlah_bphtb']."</td>
				    				<td>".$row['keterangan']."</td>
				    				
				    			  </tr>
				    			 ";
				    	}

				     ?>
				</table>
			</center>
</body>
</html>