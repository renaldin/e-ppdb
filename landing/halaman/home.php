<?php
$sql = $koneksi->query("select * from tb_tahun where status='Aktif'");
while ($data = $sql->fetch_assoc()) {
	$tahun = $data['id_tahun'];
}

$sql = $koneksi->query("select * from tb_pengajar where jabatan='Kepala Sekolah'");
while ($data = $sql->fetch_assoc()) {
	$foto = $data['foto'];
}
?>

<div class="container">
	<!-- Page Heading/Breadcrumbs -->
	<br>
	<br>
	<div class="row mb-3">
		<div class="col-md-12" data-aos="zoom-in-up">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="first-slide" src="landing/vendor/11.png" width="100%" alt="First slide">
					</div>
					<div class="carousel-item">
						<img class="second-slide" src="landing/vendor/22.png" width="100%" alt="Second slide">
					</div>
					<div class="carousel-item">
						<img class="third-slide" src="landing/vendor/33.png" width="100%" alt="Third slide">
					</div>
				</div>
				<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Sebelumnya</span>
				</a>
				<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Selanjutnya</span>
				</a>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6" data-aos="zoom-in-right">
			<h3>Prakata Kepala Sekolah</h3>
			<div class="row">
				<div class="col-md-8">
					<div class="card" style="width: 18rem;">
						<div class="card-body">
							<p class="card-text">Assalamualaium Warahmatullahi Wabarokathu, Selamat bergabung di sekolah tercinta MI Assalafush Sholihun.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<img class="card-img-top" src="assets/img/pengajar/<?php echo $foto ?>" width="100%" alt="Gambar Prakata Kepsek">
				</div>
			</div>
			<div class="row mt-3">
				<div class="col-md-12">
					<div class="card">
						<div class="card-body p-4">
							<h4>Call Center :</h4>
							<a href="https://wa.me/<?php echo $no_wa ?>?text=Hallo%20Pak%2FBu!!!%0ASaya%20izin%20bertanya%20perihal%20MI%20Assalafush%20Sholihun." target="_blank">
								<div style="padding: 5px 0;">
									<img src="assets/img/wa.png" width="30px" style="margin-top: -2px;" alt="Whatsapp">&nbsp 083845405765
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6" data-aos="zoom-in-left">
			<div class="row">
				<div class="col-md-12">
					<h3>Informasi Terbaru PPDB</h3>
					<?php
					$sql = $koneksi->query("SELECT * FROM tb_informasi ORDER BY tanggal DESC LIMIT 3");
					while ($data = $sql->fetch_assoc()) {
						$judul = $data['judul_informasi'];
						if (strlen($judul) > 60) {
							$judul = substr($judul, 0, 70) . "...";
						}
						$informasi = $data["informasi"];
						if (strlen($informasi) > 70) {
							$informasi = substr($informasi, 0, 70) . "...";
						}
					?>
						<div class="list-group">
							<a href="?page=modul-baca-informasi&kode=<?php echo $data['id_informasi']; ?>" class="list-group-item list-group-item-action flex-column align-items-start">
								<div class="d-flex w-100 justify-content-left">
									<img src="assets/img/informasi-ppdb/<?php echo $data['gambar'] ?>" width="80px" height="80px" alt="Gambar Informasi">
									<h5 class="mb-1 pl-4"><?php echo $judul; ?></h5>
								</div>
							</a>
						</div>
					<?php
					}
					?>
				</div>
			</div>
			<div class="row mt-2">
				<div class="col-md-12">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-md-9 p-1">
									<h5>Dari mana kamu mengetahui sekolah ini?</h5>
								</div>
								<div class="col-md-3">
									<button type="button" data-toggle="modal" data-target="#jawaban" class="btn btn-danger btn-block">Jawab</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--END -->

<!-- Modal Jawaban -->
<div class="modal fade" id="jawaban" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-xs" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Dari mana kamu mengetahui sekolah ini?</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="" method="POST">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label class="col-form-label">Jawaban</label>
								<select name="jawaban" id="jawaban" class="form-control" required>
									<option value="">-- Pilih Jawban --</option>
									<option value="Teman">Teman</option>
									<option value="Saudara">Saudara</option>
									<option value="Mencari Tahu Sendiri">Mencari Tahu Sendiri</option>
								</select>
							</div>
						</div>
					</div>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
				<input type="submit" name="Kirim" value="Kirim" class="btn btn-danger">
			</div>
			</form>
		</div>
	</div>
</div>

<?php

if (isset($_POST['Kirim'])) {

	$sql_simpan = "INSERT INTO  tb_jawaban (jawaban) VALUES (
				'" . $_POST['jawaban'] . "'
				)";
	$query_simpan = mysqli_query($koneksi, $sql_simpan);
	mysqli_close($koneksi);
	if ($query_simpan) {
		echo "<script>
				Swal.fire({title: 'Jawaban Berhasil Dikirim',text: '',icon: 'success',confirmButtonText: 'OK'
				}).then((result) => {if (result.value){
					window.location = 'welcome.php';
					}
				})</script>";
	} else {
		echo "<script>
				Swal.fire({title: 'Jawaban Gagal Dikirim',text: '',icon: 'error',confirmButtonText: 'OK'
				}).then((result) => {if (result.value){
					window.location = 'welcome.php';
					}
				})</script>";
	}
}
?>