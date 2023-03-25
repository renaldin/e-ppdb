<?php

if (isset($_GET['kode'])) {
	$sql_cek = "SELECT * from tb_artikel WHERE id_artikel='" . $_GET['kode'] . "'";
	$query_cek = mysqli_query($koneksi, $sql_cek);
	$data_cek = mysqli_fetch_array($query_cek, MYSQLI_BOTH);
}
?>

<div class="container">
	<div class="card card-danger mt-5" style="margin-bottom: 300px;">
		<div class="card-header bg-white" data-aos="zoom-in-up">
			<h2><?= $data_cek['judul_artikel'] ?></h2>
		</div>
		<div class="card-body p-4" data-aos="zoom-in-right">
			<?= $data_cek['artikel'] ?>
		</div>
		<div class="card-footer bg-white" data-aos="zoom-in-left">
			<p>Penulis : <?= $data_cek['penulis'] ?></p>
			<p>Tanggal Publikasi : <?= $data_cek['tanggal'] ?></p>
		</div>
	</div>
</div>