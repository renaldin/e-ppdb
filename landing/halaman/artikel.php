<?php

// pagination
// konfigurasi
$jumlahDataPerHalaman = 3;
$query = mysqli_query($koneksi, "SELECT * FROM tb_artikel");
$jumlahData = mysqli_num_rows($query);
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

$sql = $koneksi->query("SELECT * FROM tb_artikel ORDER BY tanggal DESC LIMIT $awalData, $jumlahDataPerHalaman");
?>

<div class="container">
	<br>
	<br>

	<div class="row">
		<?php
		while ($data = $sql->fetch_assoc()) {
			$judul = $data['judul_artikel'];
			if (strlen($judul) > 50) {
				$judul = substr($judul, 0, 50) . "...";
			}
			$artikel = $data["artikel"];
			if (strlen($artikel) > 70) {
				$artikel = substr($artikel, 0, 70) . "...";
			}
		?>
			<div class="col-md-4" data-aos="zoom-in-up">
				<div class="card mb-3">
					<center><img style="width: 60%; height: 200px;" src="<?php echo $data['gambar'] ? 'assets/img/artikel/' . $data['gambar'] : 'assets/img/artikel/default.png' ?>" alt="Gambar Artikel" class="card-img-top"></center>
					<div class="card-body">
						<p class="" style="min-height: 100px;">
							<b><?php echo $judul ?></b>
						</p>
						<span class="badge"><i class="fas fa-tags"></i> <?php echo $data['tanggal'] ?></span>
					</div>
					<div class="card-footer">
						<div align="right">
							<a href="?page=modul-baca-artikel&kode=<?php echo $data['id_artikel']; ?>" class="btn btn-danger"><i class="fa fa-book"></i> Baca</a>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>
	</div>

	<!-- Pagination -->
	<div class="row" style="margin-bottom: 280px;">
		<div class="col-md-12">
			<nav aria-label="...">
				<ul class="pagination">

					<?php if ($halamanAktif > 1) : ?>
						<li class="page-item">
							<a class="page-link" href="?page=modul-artikel&halaman=<?php echo $halamanAktif - 1 ?>" tabindex="-1">Sebelumnya</a>
						</li>
					<?php endif; ?>

					<?php for ($i = 1; $i <= $jumlahHalaman; $i++) : ?>
						<?php if ($i == $halamanAktif) : ?>
							<li class="page-item active">
								<a class="page-link" href="?page=modul-artikel&halaman=<?php echo $i ?>"><?php echo $i; ?> <span class="sr-only">(current)</span></a>
							</li>
						<?php else : ?>
							<li class="page-item"><a class="page-link" href="?page=modul-artikel&halaman=<?php echo $i ?>"><?php echo $i; ?></a></li>
						<?php endif; ?>
					<?php endfor; ?>

					<?php if ($halamanAktif < $jumlahHalaman) : ?>
						<li class="page-item">
							<a class="page-link" href="?page=modul-artikel&halaman=<?php echo $halamanAktif + 1 ?>">Selanjutnya</a>
						</li>
					<?php endif; ?>

				</ul>
			</nav>
		</div>
	</div>

</div>


<!-- Pagination -->