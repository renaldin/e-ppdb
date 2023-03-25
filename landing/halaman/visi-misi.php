<?php
$sql = $koneksi->query("select * from tb_sekolah");
while ($data = $sql->fetch_assoc()) {
	$id_sekolah = $data['id_sekolah'];
	$nama = $data['nama_sekolah'];
	$alamat = $data['alamat_sekolah'];
	$akreditasi = $data['akreditasi'];
	$deskripsi = $data['deskripsi'];
}
?>

<div class="container">
	<!-- Page Heading/Breadcrumbs -->
	<br>
	<br>
	<!-- Intro Content -->
	<div class="row" style="margin-bottom: 300px;">
		<div class="col-md-6" data-aos="zoom-out-up">
			<div class="card">
				<center><img src="landing/vendor/visi.PNG" width="100%" alt="Gambar Visi"></center>
				<div class="card-body">
					<h5 class="card-title"><strong>Visi</strong></h5>
					<p class="card-text">Visi dari penyelenggaraan pendidikan di MI Assalafush Sholihun adalah sebagai berikut :</p>
					1. Cerdas <br>
					2. Inovatif<br>
					3. Berprestasi<br>
					4. Akhlaq Mulia<br>
					5. Terampil dan Unggul Dalam Segara Aspek Ataupun Bidang
				</div>
			</div>
		</div>
		<div class="col-md-6" data-aos="zoom-out-up">
			<div class="card">
				<center><img src="landing/vendor/misi1.PNG" width="100%" alt="Gambar Misi"></center>
				<div class="card-body">
					<h5 class="card-title"><strong>Misi</strong></h5>
					<p class="card-text">Misi dari penyelenggaraan pendidikan di MI Assalafush Sholihun adalah sebagai berikut :</p>
					1. Mengembangkan lembaga pendidikan yang mandiri dan profesional<br>
					2. Mengembangkan minat dan bakat<br>
					3. Mengembangkan kreativitas<br>
					4. Membudayakan baca tulis Al Qur’an dan pengamalannya<br>
					5. Membina Akhlak
				</div>
			</div>
		</div>
	</div>
	<!-- /.row -->
</div>
<!--END -->