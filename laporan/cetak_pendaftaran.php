<?php
include "../connect/koneksi.php";

$id_daftar = $_GET['id_daftar'];

$sql_cek = "SELECT * FROM tb_sekolah";
$query_cek = mysqli_query($koneksi, $sql_cek);
$data_cek = mysqli_fetch_array($query_cek, MYSQLI_BOTH); {
?>


	<!DOCTYPE html>
	<html lang="en">

	<head>
		<title>CETAK BUKTI PENDAFTARAN</title>
		<!-- Bootstrap core CSS -->
		<link href="../landing/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	</head>

	<body>
		<div class="row">
			<div class="col-md-2 text-right">
				<img src="../assets/img/logo.png" height="140px" width="140px" alt="Logo E-PPDB">
			</div>
			<div class="col-md-8 text-center">
				<span style="font-size: 25px;"><b>YAYASAN ASSALAFUSH SHOLIHUN</b></span><br>
				<span style="font-size: 25px;"><b><?= $data_cek['nama_sekolah'] ?></b></span>
				<p>
					AKTE NOTARIS : INTAN RUBYATI DEWI,S.H.,M.Kn : 132/16-9-2014 <br>
					<?php echo $data_cek['alamat_sekolah'] ?> <br>
					<span style="color: blue;">E-mail: mi.assalafush@gmail.com</span>
				</p>
			</div>
			<div class="col-md-2"></div>
		</div>
		<hr style="margin-top: -5px;" class="text-bold">
		<hr style="margin-top: -20px;" class="text-bold">
		<br>

	<?php
}

$sql_tampil = "select * from tb_pendaftaran where id_daftar='$id_daftar'";
$query_tampil = mysqli_query($koneksi, $sql_tampil);
$no = 1;
while ($data = mysqli_fetch_array($query_tampil, MYSQLI_BOTH)) {
	?>

		<center>
			<h4>
				<u>DATA PENDAFTARAN PESERTA</u>
			</h4>
		</center>
		<p>Telah terdata sebagai Peserta Didik Baru pada
			<?= $data_cek['nama_sekolah']; ?>, dengan data sebagai berikut :
		</p>
		<table border="0" cellspacing="0" height="200px" style="width: 75%">
			<tbody>
				<tr>
					<td>1</td>
					<td>Nama Lengkap / Panggilan Peserta</td>
					<td>:</td>
					<td>
						<?php echo $data['nama_lengkap_siswa']; ?> / <?php echo $data['nama_panggilan_siswa']; ?>
					</td>

				</tr>
				<tr>
					<td>2</td>
					<td>NISN</td>
					<td>:</td>
					<td>
						<?php echo $data['nisn']; ?>
					</td>

				</tr>
				<tr>
					<td>3</td>
					<td>NIK</td>
					<td>:</td>
					<td>
						<?php echo $data['nik']; ?>
					</td>

				</tr>
				<tr>
					<td>4</td>
					<td>Tempat. Tanggal Lahir</td>
					<td>:</td>
					<td>
						<?php echo $data['tempat_lh']; ?>
						/
						<?php echo $data['tgl_lh']; ?>
					</td>
				</tr>
				<tr>
					<td>5</td>
					<td>Jenis Kelamin</td>
					<td>:</td>
					<td>
						<?php echo $data['jekel']; ?>
					</td>
				</tr>
				<tr>
					<td>6</td>
					<td>Agama</td>
					<td>:</td>
					<td>
						<?php echo $data['agama']; ?>
					</td>
				</tr>
				<tr>
					<td>7</td>
					<td>Kewarganegaraan</td>
					<td>:</td>
					<td>
						<?php echo $data['kewarganegaraan']; ?>
					</td>
				</tr>
				<tr>
					<td>8</td>
					<td>Alamat</td>
					<td>:</td>
					<td>
						<?php echo $data['alamat']; ?>
					</td>
				</tr>
				<tr>
					<td></td>
					<td>Desa / Kode Pos</td>
					<td>:</td>
					<td>
						<?php echo $data['desa']; ?> / <?php echo $data['kode_pos']; ?>
					</td>
				</tr>
				<tr>
					<td></td>
					<td>Kecamatan</td>
					<td>:</td>
					<td>
						<?php echo $data['kecamatan']; ?>
					</td>
				</tr>
				<tr>
					<td></td>
					<td>Kabupaten</td>
					<td>:</td>
					<td>
						<?php echo $data['kabupaten']; ?>
					</td>
				</tr>
				<tr>
					<td></td>
					<td>Provinsi</td>
					<td>:</td>
					<td>
						<?php echo $data['provinsi']; ?>
					</td>
				</tr>
				<tr>
					<td>9</td>
					<td>No Kartu Keluarga</td>
					<td>:</td>
					<td>
						<?php echo $data['no_kk']; ?>
					</td>
				</tr>
				<tr>
					<td>10</td>
					<td>Identitas Orang Tua / Wali</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td>Nama Ayah/Wali</td>
					<td>:</td>
					<td><?php echo $data['nama_ayah'] ?></td>
				</tr>
				<tr>
					<td></td>
					<td>NIK</td>
					<td>:</td>
					<td><?php echo $data['nik_ayah'] ?></td>
				</tr>
				<tr>
					<td></td>
					<td>Pendidikan Formal</td>
					<td>:</td>
					<td><?php echo $data['pendidikan_ayah'] ?></td>
				</tr>
				<tr>
					<td></td>
					<td>Pekerjaan</td>
					<td>:</td>
					<td><?php echo $data['kerja_ayah'] ?></td>
				</tr>
				<tr>
					<td></td>
					<td>Penghasilan Per Bulan</td>
					<td>:</td>
					<td><?php echo $data['penghasilan_ayah'] ?></td>
				</tr>
				<tr>
					<td></td>
					<td>No. Handphone</td>
					<td>:</td>
					<td><?php echo $data['telepon_ayah'] ?></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td>Nama Ibu/Wali</td>
					<td>:</td>
					<td><?php echo $data['nama_ibu'] ?></td>
				</tr>
				<tr>
					<td></td>
					<td>NIK</td>
					<td>:</td>
					<td><?php echo $data['nik_ibu'] ?></td>
				</tr>
				<tr>
					<td></td>
					<td>Pendidikan Formal</td>
					<td>:</td>
					<td><?php echo $data['pendidikan_ibu'] ?></td>
				</tr>
				<tr>
					<td></td>
					<td>Pekerjaan</td>
					<td>:</td>
					<td><?php echo $data['kerja_ibu'] ?></td>
				</tr>
				<tr>
					<td></td>
					<td>Penghasilan Per Bulan</td>
					<td>:</td>
					<td><?php echo $data['penghasilan_ibu'] ?></td>
				</tr>
				<tr>
					<td></td>
					<td>No. Handphone</td>
					<td>:</td>
					<td><?php echo $data['telepon_ibu'] ?></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>11</td>
					<td>Bertempat Tinggal Pada</td>
					<td>:</td>
					<td><?php echo $data['bertempat_tinggal'] ?></td>
				</tr>
				<tr>
					<td>12</td>
					<td>Berkebutuhan Khusus</td>
					<td>:</td>
					<td><?php echo $data['berkebutuhan_khusus'] ?></td>
				</tr>
				<tr>
					<td>13</td>
					<td>Jumlah Saudara</td>
					<td>:</td>
					<td><?php echo $data['jumlah_saudara_kandung'] ?> Kandung, <?php echo $data['jumlah_saudara_tiri'] ?> Tiri, <?php echo $data['jumlah_saudara_angkat'] ?> Angkat</td>
				</tr>
				<tr>
					<td>14</td>
					<td>Bahasa Sehari-hari</td>
					<td>:</td>
					<td><?php echo $data['bahasa_sehari_hari'] ?></td>
				</tr>
				<tr>
					<td>15</td>
					<td>Golongan Darah</td>
					<td>:</td>
					<td><?php echo $data['gol_darah'] ?></td>
				</tr>
				<tr>
					<td>16</td>
					<td>Tinggi / Berat Badan</td>
					<td>:</td>
					<td><?php echo $data['tinggi_badan'] ?> cm / <?php echo $data['berat_badan'] ?> kg</td>
				</tr>
				<tr>
					<td>17</td>
					<td>Jarak Rumah - Madrasah</td>
					<td>:</td>
					<td><?php echo $data['jarak_rumah'] ?></td>
				</tr>
				<tr>
					<td>18</td>
					<td>Alat Transportasi Ke Sekolah</td>
					<td>:</td>
					<td><?php echo $data['alat_transportasi'] ?></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>19</td>
					<td>Data Sekolah Jenjang Sebelumnya</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td>Asal Murid</td>
					<td>:</td>
					<td><?php echo $data['asal_murid'] ?></td>
				</tr>
				<tr>
					<td></td>
					<td>Nama Lembaga</td>
					<td>:</td>
					<td><?php echo $data['nama_lembaga'] ?></td>
				</tr>
				<tr>
					<td></td>
					<td>Status Lembaga</td>
					<td>:</td>
					<td><?php echo $data['status_lembaga'] ?></td>
				</tr>
				<tr>
					<td></td>
					<td>NPSN / NSM</td>
					<td>:</td>
					<td><?php echo $data['npsn'] ?> / <?php echo $data['nsm'] ?></td>
				</tr>
				<tr>
					<td></td>
					<td>Alamat Lembaga</td>
					<td>:</td>
					<td><?php echo $data['alamat_lembaga'] ?></td>
				</tr>
				<tr>
					<td></td>
					<td>Desa / Kode Pos</td>
					<td>:</td>
					<td>
						<?php echo $data['desa_lembaga']; ?> / <?php echo $data['kode_pos_lembaga']; ?>
					</td>
				</tr>
				<tr>
					<td></td>
					<td>Kecamatan</td>
					<td>:</td>
					<td>
						<?php echo $data['kecamatan_lembaga']; ?>
					</td>
				</tr>
				<tr>
					<td></td>
					<td>Kabupaten</td>
					<td>:</td>
					<td>
						<?php echo $data['kabupaten_lembaga']; ?>
					</td>
				</tr>
				<tr>
					<td></td>
					<td>Provinsi</td>
					<td>:</td>
					<td>
						<?php echo $data['provinsi_lembaga']; ?>
					</td>
				</tr>
				<tr>
					<td></td>
					<td>No. Ijazah RA/TK</td>
					<td>:</td>
					<td>
						<?php echo $data['no_ijazah_ra_tk']; ?>
					</td>
				</tr>
				<tr>
					<td></td>
					<td>Tanggal Ijazah</td>
					<td>:</td>
					<td>
						<?php echo $data['tanggal_ijazah']; ?>
					</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>20</td>
					<td>Masuk Menjadi Murid Pindahan</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td>Asal Murid</td>
					<td>:</td>
					<td><?php echo $data['asal_murid_pindahan'] ?></td>
				</tr>
				<tr>
					<td></td>
					<td>Nama Lembaga</td>
					<td>:</td>
					<td><?php echo $data['nama_lembaga_pindahan'] ?></td>
				</tr>
				<tr>
					<td></td>
					<td>Status Lembaga</td>
					<td>:</td>
					<td><?php echo $data['status_lembaga_pindahan'] ?></td>
				</tr>
				<tr>
					<td></td>
					<td>NPSN / NSM</td>
					<td>:</td>
					<td><?php echo $data['npsn_pindahan'] ?> / <?php echo $data['nsm_pindahan'] ?></td>
				</tr>
				<tr>
					<td></td>
					<td>Alamat Lembaga</td>
					<td>:</td>
					<td><?php echo $data['alamat_lembaga_pindahan'] ?></td>
				</tr>
				<tr>
					<td></td>
					<td>Desa / Kode Pos</td>
					<td>:</td>
					<td>
						<?php echo $data['desa_lembaga_pindahan']; ?> / <?php echo $data['kode_pos_lembaga_pindahan']; ?>
					</td>
				</tr>
				<tr>
					<td></td>
					<td>Kecamatan</td>
					<td>:</td>
					<td>
						<?php echo $data['kecamatan_lembaga_pindahan']; ?>
					</td>
				</tr>
				<tr>
					<td></td>
					<td>Kabupaten</td>
					<td>:</td>
					<td>
						<?php echo $data['kabupaten_lembaga_pindahan']; ?>
					</td>
				</tr>
				<tr>
					<td></td>
					<td>Provinsi</td>
					<td>:</td>
					<td>
						<?php echo $data['provinsi_lembaga_pindahan']; ?>
					</td>
				</tr>
			</tbody>
		</table>
		<br>
		<br>
		<p>Berikut Dokumen Berkas Yang Dilampirkan Oleh Peserta</p>
		<table border="0" cellspacing="0" height="80">
			<tr>
				<td style="padding-left: 10px;"></td>
				<td style="padding-left: 10px;" width="300px">Foto</td>
				<td style="padding-left: 10px;">:
					<?php if ($data['foto']) {
						echo "Terlampir";
					} else {
						echo "Tidak Terlampir";
					} ?>
				</td>
			</tr>
			<tr>
				<td style="padding-left: 10px;"></td>
				<td style="padding-left: 10px;" width="300px">Kartu Kelurga</td>
				<td style="padding-left: 10px;">:
					<?php if ($data['kartu_keluarga']) {
						echo "Terlampir";
					} else {
						echo "Tidak Terlampir";
					} ?>
				</td>
			</tr>
			<tr>
				<td style="padding-left: 10px;"></td>
				<td style="padding-left: 10px;" width="300px">Akte Kelahiran</td>
				<td style="padding-left: 10px;">:
					<?php if ($data['akte_kelahiran']) {
						echo "Terlampir";
					} else {
						echo "Tidak Terlampir";
					} ?>
				</td>
			</tr>
			<tr>
				<td style="padding-left: 10px;"></td>
				<td style="padding-left: 10px;" width="300px">KTP Orang Tua/Wali</td>
				<td style="padding-left: 10px;">:
					<?php if ($data['ktp_ayah'] && $data['ktp_ibu']) {
						echo "Terlampir";
					} else {
						echo "Tidak Terlampir";
					} ?>
				</td>
			</tr>
			<tr>
				<td style="padding-left: 10px;"></td>
				<td style="padding-left: 10px;" width="300px">Ijazah RA/TK</td>
				<td style="padding-left: 10px;">:
					<?php if ($data['ijazah_paud']) {
						echo "Terlampir";
					} else {
						echo "Tidak Terlampir";
					} ?>
				</td>
			</tr>
			<tr>
				<td style="padding-left: 10px;"></td>
				<td style="padding-left: 10px; " width="300px">kartu KKS/KPS/PKH/KIP (Tida Wajib)</td>
				<td style="padding-left: 10px;">:
					<?php if ($data['kartu']) {
						echo "Terlampir";
					} else {
						echo "Tidak Terlampir";
					} ?>
				</td>
			</tr>
		</table>
		<br> Waktu Pendaftaran :
		<?php echo $data['waktu_daftar']; ?>
		<div class="row">
			<div class="col-md-4 text-center">
				<h5>
					Panitia Penerima
					<br>
					<br>
					<br>
					<br>
					<br>
					<br> (..................................)
				</h5>
			</div>
			<div class="col-md-4"></div>
			<div class="col-md-4 text-center">

			</div>
		</div>

	<?php } ?>

	<script>
		window.print();
	</script>
	<!-- Bootstrap core JavaScript -->
	<script src="../landing/vendor/jquery/jquery.min.js"></script>
	<script src="../landing/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	</body>

	</html>