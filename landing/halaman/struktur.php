<?php
$sql = $koneksi->query("select * from tb_sekolah");
while ($data = $sql->fetch_assoc()) {
	$id_sekolah = $data['id_sekolah'];
	$nama = $data['nama_sekolah'];
	$alamat = $data['alamat_sekolah'];
	$akreditasi = $data['akreditasi'];
	$deskripsi = $data['deskripsi'];
}

// Kepala Sekolah
$sql = $koneksi->query("select * from tb_pengajar where jabatan='Kepala Sekolah'");
while ($data = $sql->fetch_assoc()) {
	$kepala_ra = $data['nama_lengkap'];
}

// TAS
$sql = $koneksi->query("select * from tb_pengajar where jabatan='TU'");
while ($data = $sql->fetch_assoc()) {
	$tas = $data['nama_lengkap'];
}

// Bendahara
$sql = $koneksi->query("select * from tb_pengajar where jabatan='Bendahara'");
while ($data = $sql->fetch_assoc()) {
	$bendahara = $data['nama_lengkap'];
}

// Guru Kelas 1
$sql = $koneksi->query("select * from tb_pengajar where nama_lengkap='Eti Rohaeti'");
while ($data = $sql->fetch_assoc()) {
	$guru_kelas_1 = $data['nama_lengkap'];
}
// Guru Kelas 2
$sql = $koneksi->query("select * from tb_pengajar where nama_lengkap='Heksa Kurnia, S.Pd.I'");
while ($data = $sql->fetch_assoc()) {
	$guru_kelas_2 = $data['nama_lengkap'];
}
// Guru Kelas 3
$sql = $koneksi->query("select * from tb_pengajar where nama_lengkap='Sirli Nuradilah'");
while ($data = $sql->fetch_assoc()) {
	$guru_kelas_3 = $data['nama_lengkap'];
}
// Guru Kelas 4
$sql = $koneksi->query("select * from tb_pengajar where nama_lengkap='Eneng Siti Barokah,S.Pd.I'");
while ($data = $sql->fetch_assoc()) {
	$guru_kelas_4 = $data['nama_lengkap'];
}
// Guru Kelas 5
$sql = $koneksi->query("select * from tb_pengajar where nama_lengkap='Leli Hayati, S.Pd.I'");
while ($data = $sql->fetch_assoc()) {
	$guru_kelas_5 = $data['nama_lengkap'];
}
// Guru Kelas 6
$sql = $koneksi->query("select * from tb_pengajar where nama_lengkap='Yani Suryani, S.Pd'");
while ($data = $sql->fetch_assoc()) {
	$guru_kelas_6 = $data['nama_lengkap'];
}
?>

<div class="container">
	<!-- Page Heading/Breadcrumbs -->
	<br>
	<br>
	<!-- Intro Content -->
	<center>
		<h3 data-aos="fade-up"><strong>STRUKTUR ORGANISASI</strong><br><?php echo $nama ?></h3>
	</center>
	<div class="row" style="margin-bottom: 50px;" data-aos="fade-up">
		<div class="col-lg-4"></div>
		<div class="col-lg-4" align="center">
			<img class="rounded-circle" src="assets/img/struktur/peserta.jpg" alt="Generic placeholder image" width="140" height="140">
			<h4>Drs. Ana Karmana</h4>
			<h6>Ketua Yayasan</h6>
		</div><!-- /.col-lg-3 -->
		<div class="col-lg-4"></div>
	</div><!-- /.row -->
	<div class="row" style="margin-bottom: 50px;" data-aos="fade-up">
		<div class="col-lg-4"></div>
		<div class="col-lg-4" align="center">
			<img class="rounded-circle" src="assets/img/struktur/APIP.jpeg" alt="Generic placeholder image" width="140" height="140">
			<h4><?php echo $kepala_ra ?></h4>
			<h6>Kepala Sekolah MI</h6>
		</div><!-- /.col-lg-4 -->
		<div class="col-lg-2"></div>
	</div><!-- /.row -->
	<div class="row" style="margin-bottom: 50px;" data-aos="fade-up">
		<div class="col-lg-2"></div>
		<div class="col-lg-4" align="center">
			<img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
			<h4><?php echo $tas ?></h4>
			<h6>TAS</h6>
		</div><!-- /.col-lg-4 -->
		<div class="col-lg-4" align="center">
			<img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
			<h4><?php echo $tas ?></h4>
			<h6>Bendahara</h6>
		</div><!-- /.col-lg-4 -->
		<div class="col-lg-2"></div>
	</div><!-- /.row -->
	<div class="row" style="margin-bottom: 50px;" data-aos="fade-up">
		<div class="col-lg-3" align="center">
			<img class="rounded-circle" src="assets/img/struktur/Eti_Rohaeti.jpg" alt="Generic placeholder image" width="140" height="140">
			<h4><?php echo $guru_kelas_1 ?></h4>
			<h6>Guru Kelas 1</h6>
		</div><!-- /.col-lg-3 -->
		<div class="col-lg-3" align="center">
			<img class="rounded-circle" src="assets/img/struktur/HEKSA.jpg" alt="Generic placeholder image" width="140" height="140">
			<h4><?php echo $guru_kelas_2 ?></h4>
			<h6>Guru Kelas 2</h6>
		</div><!-- /.col-lg-3 -->
		<div class="col-lg-3" align="center">
			<img class="rounded-circle" src="assets/img/struktur/SIRLI.jpg" alt="Generic placeholder image" width="140" height="140">
			<h4><?php echo $guru_kelas_3 ?></h4>
			<h6>Guru Kelas 3</h6>
		</div><!-- /.col-lg-3 -->
		<div class="col-lg-3" align="center">
			<img class="rounded-circle" src="assets/img/struktur/ENENG.jpeg" alt="Generic placeholder image" width="140" height="140">
			<h4><?php echo $guru_kelas_4 ?></h4>
			<h6>Guru Kelas 4</h6>
		</div><!-- /.col-lg-3 -->
	</div><!-- /.row -->
	<div class="row" style="margin-bottom: 50px;" data-aos="fade-up">
		<div class="col-lg-3"></div>
		<div class="col-lg-3" align="center">
			<img class="rounded-circle" src="assets/img/struktur/Leli.jpeg" alt="Generic placeholder image" width="140" height="140">
			<h4><?php echo $guru_kelas_5 ?></h4>
			<h6>Guru Kelas 5</h6>
		</div><!-- /.col-lg-3 -->
		<div class="col-lg-3" align="center">
			<img class="rounded-circle" src="assets/img/struktur/yanii.jpeg" alt="Generic placeholder image" width="140" height="140">
			<h4><?php echo $guru_kelas_6 ?></h4>
			<h6>Guru Kelas 6</h6>
		</div><!-- /.col-lg-3 -->
		<div class="col-lg-3"></div>
	</div><!-- /.row -->
	<div class="row" style="margin-bottom: 50px;" data-aos="fade-up">
		<div class="col-lg-4"></div>
		<div class="col-lg-4" align="center">
			<img class="rounded-circle" src="assets/img/struktur/peserta.jpg" alt="Generic placeholder image" width="140" height="140">
			<h4>Peserta Didik</h4>
		</div><!-- /.col-lg-3 -->
		<div class="col-lg-4"></div>
	</div><!-- /.row -->
</div>
<!--END -->