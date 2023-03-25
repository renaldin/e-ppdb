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
	<div class="row" style="margin-bottom: 100px;">
		<div class="col-md-12" data-aos="zoom-out-up">
			<center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63346.75630202306!2d107.93741067910155!3d-7.106024699999992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68b5560e69038b%3A0xd4ca6dfe9d014e39!2sMI%20Assalafush%20Sholihun!5e0!3m2!1sid!2sid!4v1645445948579!5m2!1sid!2sid" width="90%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></center>
		</div>
	</div>
	<!-- /.row -->
</div>
<!--END -->