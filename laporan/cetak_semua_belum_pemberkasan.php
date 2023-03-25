<?php
include "../connect/koneksi.php";

$sql_cek = "SELECT * FROM tb_sekolah";
$query_cek = mysqli_query($koneksi, $sql_cek);
$data_cek = mysqli_fetch_array($query_cek, MYSQLI_BOTH); {

	$sql = $koneksi->query("select * from tb_tahun where status='Aktif'");
	while ($data = $sql->fetch_assoc()) {
		$tahun = $data['id_tahun'];
	}
?>


	<!DOCTYPE html>
	<html lang="en">

	<head>
		<title>CETAK DATA PENDAFTARAN BELUM PEMBERKASAN</title>
	</head>
	<!-- Bootstrap core CSS -->
	<link href="../landing/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<body>
	<?php
}
	?>
	<div class="row">
		<div class="col-md-2 text-right">
			<img src="../assets/img/logo.png" height="140px" width="140px" alt="Logo E-PPDB">
		</div>
		<div class="col-md-8 text-center">
			<span style="font-size: 25px;">YAYASAN ASSALAFUSH SHOLIHUN</span><br>
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
	<center>
		<h4>
			<u>BELUM PEMBERKASAN</u>
		</h4>
	</center>
	<div class="row invoice-info" style="margin-bottom: 5px;">
		<div class="col-md-12">
			<table class="table-striped table-responsive">
				<tr>
					<td width="150px">Tahun Ajaran</td>
					<td width="20px">:</td>
					<td><?= $tahun; ?></td>
					<td rowspan="7"></td>
				</tr>
			</table>
		</div>
	</div>
	<!-- /.row -->

	<!-- Table row -->
	<div class="row">
		<div class="col-md-12 table-responsive">
			<table style="border-collapse: collapse;">
				<tr class="label-success">
					<th style="border: 1px solid; padding: 5px 10px;">No</th>
					<th style="border: 1px solid; padding: 5px 10px;">NIK</th>
					<th style="border: 1px solid; padding: 5px 10px;">Nama Peserta</th>
					<th style="border: 1px solid; padding: 5px 10px;">Tempat, Tanggal Lahir</th>
					<th style="border: 1px solid; padding: 5px 10px;">Jenis Kelamin</th>
					<th style="border: 1px solid; padding: 5px 10px;">Alamat</th>
					<th style="border: 1px solid; padding: 5px 10px;">Waktu Daftar</th>
				</tr>
				<?php
				$no = 1;
				$sql = $koneksi->query("select * from tb_pendaftaran where berkas='Belum'");
				while ($data = $sql->fetch_assoc()) {
				?>
					<tr>
						<td style="border: 1px solid; padding: 5px 10px;"><?= $no++ ?></td>
						<td style="border: 1px solid; padding: 5px 10px;"><?= $data['nik'] ?></td>
						<td style="border: 1px solid; padding: 5px 10px;"><?= $data['nama_lengkap_siswa'] ?></td>
						<td style="border: 1px solid; padding: 5px 10px;"><?= $data['tempat_lh'] ?>, <?= $data['tgl_lh'] ?></td>
						<td style="border: 1px solid; padding: 5px 10px;"><?= $data['jekel'] ?></td>
						<td style="border: 1px solid; padding: 5px 10px;"><?= $data['alamat'] ?></td>
						<td style="border: 1px solid; padding: 5px 10px;"><?= $data['waktu_daftar'] ?></td>
					</tr>
				<?php } ?>
			</table>
		</div>
		<!-- /.col -->
	</div>
	<!-- /.row -->
	<br>
	<br>
	<br>
	<br>
	<br>
	<br> (..................................)
	</h5>
	<script>
		window.print();
	</script>

	<!-- Bootstrap core JavaScript -->
	<script src="../landing/vendor/jquery/jquery.min.js"></script>
	<script src="../landing/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	</body>

	</html>