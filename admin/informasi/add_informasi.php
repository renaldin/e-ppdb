<div class="card card-danger">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-plus"></i> Tambah Informasi PPDB
		</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">
			<div class="row">

				<div class="col-md-6">
					<div class="form-group">
						<label class="col-form-label">Judul Informasi</label>
						<input type="text" class="form-control" id="judul_informasi" name="judul_informasi" placeholder="Masukkan Judul Informasi" required>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="col-form-label">Tanggal Informasi</label>
						<input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Masukkan Tanggal Informasi" required>
					</div>
				</div>

				<div class="col-md-12">
					<div class="form-group">
						<label class="col-form-label">Gambar</label>
						<input type="file" class="form-control" id="gambar" name="gambar" required>
					</div>
				</div>


				<div class="col-md-12">
					<label class="col-form-label">Informasi</label>
					<textarea name="informasi" id="ckeditor1" cols="30" rows="10" class="form-control" required>Masukkan Informasi</textarea>
				</div>
			</div>
		</div>
		<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-primary">
			<a href="?page=data-informasi" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php

if (isset($_POST['Simpan'])) {
	$ekstensi_diperbolehkan    = array('png', 'jpg', 'jpeg');
	$nama = $_FILES['gambar']['name'];
	$namafile = time() . $nama;
	// $ext = pathinfo($nama, PATHINFO_EXTENSION);
	// $random = crypt($nama, time());
	$x = explode('.', $nama);
	$ekstensi = strtolower(end($x));
	$ukuran    = $_FILES['gambar']['size'];
	$file_tmp = $_FILES['gambar']['tmp_name'];
	// $pathdb = $random . '.' . $ext;

	if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
		if ($ukuran < 1044070) {
			move_uploaded_file($file_tmp, 'assets/img/informasi-ppdb/' . $namafile);
			$sql_simpan = "INSERT INTO  tb_informasi (id_sekolah,judul_informasi,informasi,tanggal, gambar) VALUES (
				'123',
				'" . $_POST['judul_informasi'] . "',
				'" . $_POST['informasi'] . "',
				'" . $_POST['tanggal'] . "',
				'" . $namafile . "')";
			$query_simpan = mysqli_query($koneksi, $sql_simpan);
			mysqli_close($koneksi);
			if ($query_simpan) {
				echo "<script>
					Swal.fire({title: 'Tambah Artikel Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
					}).then((result) => {if (result.value){
						window.location = 'index.php?page=data-informasi';
						}
					})</script>";
			} else {
				echo "<script>
					Swal.fire({title: 'Tambah Artikel Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
					}).then((result) => {if (result.value){
						window.location = 'index.php?page=data-informasi';
						}
					})</script>";
			}
		} else {
			echo "<script>
				Swal.fire({title: 'Tambah Artikel Gagal. Ukuran File Terlalu Besar.',text: '',icon: 'error',confirmButtonText: 'OK'
				}).then((result) => {if (result.value){
					window.location = 'index.php?page=data-informasi';
					}
				})</script>";
		}
	} else {
		echo "<script>
			Swal.fire({title: 'Tambah Artikel Gagal. Ekstensi File Harus JPG/JPEG/PNG.',text: '',icon: 'error',confirmButtonText: 'OK'
			}).then((result) => {if (result.value){
				window.location = 'index.php?page=data-informasi';
				}
			})</script>";
	}
}
?>
<!-- end -->