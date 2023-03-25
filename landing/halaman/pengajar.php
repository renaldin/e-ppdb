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

<main role="main" class="container">
	<br><br>
	<div class="d-flex align-items-center p-3 my-3 text-black-60 bg-white rounded box-shadow" data-aos="fade-down">
		<img class="mr-3" src="assets/img/logo.png" alt="" width="48" height="48">
		<div class="lh-100">
			<h3 class="mb-0 text-black lh-100"><strong>DAFTAR STAF PENGAJAR</strong></h3>
			<small><?php echo $nama ?></small>
		</div>
	</div>

	<div class="row">
		<?php
		$no = 1;
		$sql = $koneksi->query("select * from tb_pengajar");
		while ($data = $sql->fetch_assoc()) {
		?>
			<div class="col-md-6" data-aos="fade-right">
				<div class="p-3 bg-white rounded box-shadow">
					<div class="media text-muted">
						<img src="assets/img/pengajar/<?php echo $data['foto'] ?>" width="100px" alt="Gambar Kotak Merah" class="mr-2 rounded">
						<p class="media-body small lh-125 border-bottom border-gray">
							<strong class="d-block text-gray-dark"><?php echo $data['nama_lengkap'] ?> (<?php echo $data['jabatan'] ?>)</strong><br>
							Mata Pelajaran : <?php echo $data['mata_pelajaran'] ?>
						</p>
					</div>
				</div>
			</div>
		<?php } ?>
	</div>
</main>

<!--END -->