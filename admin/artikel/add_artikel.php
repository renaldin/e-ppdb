<div class="card card-danger">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-plus"></i> Tambah Artikel
		</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">
			<div class="row">

				<div class="col-md-6">
					<div class="form-group">
						<label class="col-form-label">Judul Artikel</label>
						<input type="text" class="form-control" id="judul_artikel" name="judul_artikel" placeholder="Masukkan Judul Artikel" required>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="col-form-label">Gambar</label>
						<input type="file" class="form-control" id="gambar" name="gambar" required>
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label class="col-form-label">Penulis</label>
						<input type="text" class="form-control" id="penulis" name="penulis" placeholder="Masukkan Penulis Artikel" required>
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label class="col-form-label">Tanggal</label>
						<input type="date" class="form-control" id="tanggal" name="tanggal" required>
					</div>
				</div>


				<div class="col-md-12">
					<label class="col-form-label">Artikel</label>
					<textarea name="artikel" id="ckeditor1" cols="30" rows="10" class="form-control" required>Masukkan Artikel</textarea>
				</div>
			</div>
		</div>
		<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-primary">
			<a href="?page=data-artikel" title="Kembali" class="btn btn-secondary">Batal</a>
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
			move_uploaded_file($file_tmp, 'assets/img/artikel/' . $namafile);
			$sql_simpan = "INSERT INTO  tb_artikel (judul_artikel,penulis,tanggal,artikel, gambar) VALUES (
				'" . $_POST['judul_artikel'] . "',
				'" . $_POST['penulis'] . "',
				'" . $_POST['tanggal'] . "',
				'" . $_POST['artikel'] . "',
				'" . $namafile . "')";
			$query_simpan = mysqli_query($koneksi, $sql_simpan);
			mysqli_close($koneksi);
			if ($query_simpan) {
				echo "<script>
					Swal.fire({title: 'Tambah Artikel Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
					}).then((result) => {if (result.value){
						window.location = 'index.php?page=data-artikel';
						}
					})</script>";
			} else {
				echo "<script>
					Swal.fire({title: 'Tambah Artikel Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
					}).then((result) => {if (result.value){
						window.location = 'index.php?page=add-artikel';
						}
					})</script>";
			}
		} else {
			echo "<script>
				Swal.fire({title: 'Tambah Artikel Gagal. Ukuran File Terlalu Besar.',text: '',icon: 'error',confirmButtonText: 'OK'
				}).then((result) => {if (result.value){
					window.location = 'index.php?page=add-artikel';
					}
				})</script>";
		}
	} else {
		echo "<script>
			Swal.fire({title: 'Tambah Artikel Gagal. Ekstensi File Harus JPG/JPEG/PNG.',text: '',icon: 'error',confirmButtonText: 'OK'
			}).then((result) => {if (result.value){
				window.location = 'index.php?page=add-artikel';
				}
			})</script>";
	}
}
?>




<!-- end -->