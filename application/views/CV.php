<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Curriculum Vitae</title>
	<style type="text/css">
		h2 {
			text-align: center;		
		}
		hr{
					
			width: 60%;
		}
		table{

			width: 90%;
		}
		tr{
			text-align: center;
		}
	</style>
</head>
<body>
	<h1 align="center">CURRICULUM VITAE</h1><hr size="5" color="black">
	<h2>Profil</h2>
	
	<table border="1" align="center">
		<tr>
			<td>Nama</td>
			<td><?php echo $nama; ?></td>
			<td rowspan="8">
				<img src="http://localhost/kursus/alteration_lv3/asset/Foto.jpg" width="300px" height="400px">
			</td>
		</tr>	
		<tr>
			<td>Tempat Lahir</td>
			<td><?php echo $tempat; ?></td>
		</tr>	
		<tr>
			<td>Tanggal Lahir</td>
			<td><?php echo $tanggal; ?></td>
		</tr>	
		<tr>
			<td>Jenis Kelamin</td>
			<td><?php echo $jenis; ?></td>
		</tr>	
		<tr>
			<td>Kebangsaan</td>
			<td><?php echo $bangsa; ?></td>
		</tr>	
		<tr>
			<td>Alamat</td>
			<td><?php echo $alamat; ?></td>
		</tr>	
		<tr>
			<td>Nomor Telepon</td>
			<td><?php echo $HP; ?></td>
		</tr>	
		<tr>
			<td>Email</td>
			<td><?php echo $email; ?></td>
		</tr>
	</table>
	<hr color="green">
	<h2>Pendidikan Formal</h2>
	<table border="1" align="center">
		<tr>
			<td>Universitas</td>
			<td>Fakultas</td>
			<td>Jurusan</td>
			<td>IP</td>
			<td>Derajat</td>
			<td>Perioda</td>
		</tr>
		<tr>
			<td>ITB</td>
			<td>STEI</td>
			<td>Teknik Telekomunikasi</td>
			<td>-</td>
			<td>Mengundurkan Diri</td>
			<td>2007-2013</td>
		</tr>
		<tr>
			<td>ISTN</td>
			<td>FTI</td>
			<td>Teknik Elektro</td>
			<td>3.60</td>
			<td>S1</td>
			<td>2013-2015</td>
		</tr>
	</table>
	<hr color="green">
	<h2>Pendidikan Non-Formal</h2>
	<table border="1" align="center">
		<tr>
			<td>Nama</td>
			<td>Penyelenggara</td>
			<td>Tempat</td>
			<td>Tahun</td>
		</tr>
		<tr>
			<td>Scanlating</td>
			<td>Genshiken ITB</td>
			<td>ITB</td>
			<td>2005</td>
		</tr>
		<tr>
			<td>Leadership Training</td>
			<td>Forum Pengembangan Generasi Muda Al-Irsyad</td>
			<td>Graha Wisata Remaja TMII Jakarta</td>
			<td>2006</td>
		</tr>
		<tr>
			<td>Web Developer Newbie</td>
			<td>Alter Studio Indonesia</td>
			<td>Alter Studio Indonesia cabang Depok</td>
			<td>2018</td>
		</tr>
	</table>

	<hr color="green">
	<h2>Kerja Praktek</h2>
	<table border="1" align="center">
		<tr>
			<td>Perusahaan</td>
			<td>Tahun</td>
			<td>Tempat</td>
		</tr>
		<tr>
			<td>PT. Kereta Api Indonesia (Persero)</td>
			<td>2014</td>
			<td>Stasiun Bogor</td>
		</tr>
	</table>

	<hr color="green">
	<h2>Pengalaman Berorganisasi</h2>
	<table border="1" align="center">
		<tr>
			<td>Organisasi</td>
			<td>Perioda</td>
			<td>Tanggung Jawab</td>
			<td>Posisi</td>
		</tr>
		<tr>
			<td>Pasopati ITB (Klub Panahan)</td>
			<td>2007-2013</td>
			<td>Pengawas Latihan dan Aktivitas</td>
			<td>Kepala Divisi Latihan</td>
		</tr>
		<tr>
			<td>Parkour Bandung</td>
			<td>2007-2009</td>
			<td>-</td>
			<td>Anggota</td>
		</tr>
		<tr>
			<td>Genshiken ITB</td>
			<td>2007-2010</td>
			<td>-</td>
			<td>Anggota</td>
		</tr>
	</table>

	<hr color="green">
	<h2>Pengalaman Penyelenggara Event</h2>
	<table border="1" align="center">
		<tr>
			<td>Namatd>
			<td>Tahun</td>
			<td>Tanggung Jawab</td>
			<td>Posisi</td>
		</tr>
		<tr>
			<td>Ganesha Open ITB (Kompetisi Panahan Nasional)</td>
			<td>2010</td>
			<td>Memastikan kompetisi berjalan dengan lancar</td>
			<td>Kepala Divisi Lapangan</td>
		</tr>
		<tr>
			<td>Alumni Leadership Training</td>
			<td>2006-2007</td>
			<td>Memastikan setiap alumni tetap saling berhubungan satu sama lain</td>
			<td>Kepala Daerah Jawa Barat dan Jakarta</td>
		</tr>
	</table>

	<hr color="green">
	<h2>Keterampilan</h2>
	<table border="1" align="center">
		<tr>
			<td>Keterampilan</td>
			<td>Deskripsi</td>
		</tr>
		<tr>
			<td>Bahasa Indonesia</td>
			<td>Aktif</td>
		</tr>
		<tr>
			<td>Bahasa Inggris</td>
			<td>Pasif</td>
		</tr>
		<tr>
			<td>Dokumentasi Komputer</td>
			<td>Microsoft Office</td>
		</tr>
		<tr>
			<td>Coding Komputer</td>
			<td>HTML dan CSS</td>
		</tr>
		<tr>
			<td>Desain dan Simulasi Antena</td>
			<td>ANSYS HFSS</td>
		</tr>
	</table>
	

</body>
</html>