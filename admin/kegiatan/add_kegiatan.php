<div class="card card-danger">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-plus"></i> Tambah Kegiatan
		</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">
			<div class="row">

				<div class="col-md-6">
					<div class="form-group">
						<label class="col-form-label">Nama Kegiatan</label>
						<input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan" placeholder="Masukkan Nama Kegiatan" required>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="col-form-label">Gambar</label>
						<input type="file" class="form-control" id="gambar" name="gambar" required>
					</div>
				</div>
			</div>
		</div>
		<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-primary">
			<a href="?page=data-kegiatan" title="Kembali" class="btn btn-secondary">Batal</a>
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
			move_uploaded_file($file_tmp, 'assets/img/kegiatan/' . $namafile);
			$sql_simpan = "INSERT INTO  tb_kegiatan (nama_kegiatan,gambar) VALUES (
				'" . $_POST['nama_kegiatan'] . "',
				'" . $namafile . "')";
			$query_simpan = mysqli_query($koneksi, $sql_simpan);
			mysqli_close($koneksi);
			if ($query_simpan) {
				echo "<script>
					Swal.fire({title: 'Tambah Kegiatan Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
					}).then((result) => {if (result.value){
						window.location = 'index.php?page=data-kegiatan';
						}
					})</script>";
			} else {
				echo "<script>
					Swal.fire({title: 'Tambah Kegiatan Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
					}).then((result) => {if (result.value){
						window.location = 'index.php?page=add-kegiatan';
						}
					})</script>";
			}
		} else {
			echo "<script>
				Swal.fire({title: 'Tambah Kegiatan Gagal. Ukuran File Terlalu Besar.',text: '',icon: 'error',confirmButtonText: 'OK'
				}).then((result) => {if (result.value){
					window.location = 'index.php?page=add-kegiatan';
					}
				})</script>";
		}
	} else {
		echo "<script>
			Swal.fire({title: 'Tambah Kegiatan Gagal. Ekstensi File Harus JPG/JPEG/PNG.',text: '',icon: 'error',confirmButtonText: 'OK'
			}).then((result) => {if (result.value){
				window.location = 'index.php?page=add-kegiatan';
				}
			})</script>";
	}
}
?>




<!-- end -->