<?php

if (isset($_GET['kode'])) {
	$sql_cek = "SELECT * FROM tb_artikel WHERE id_artikel='" . $_GET['kode'] . "'";
	$query_cek = mysqli_query($koneksi, $sql_cek);
	$data_cek = mysqli_fetch_array($query_cek, MYSQLI_BOTH);
}
?>

<div class="card card-danger">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Edit Artikel
		</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">
			<div class="row">

				<div class="col-md-12">
					<div class="form-group">
						<label class="col-form-label">Judul Artikel</label>
						<input type="hidden" class="form-control" id="id_artikel" name="id_artikel" value="<?= $data_cek['id_artikel'] ?>" required>
						<input type="text" class="form-control" id="judul_artikel" name="judul_artikel" value="<?= $data_cek['judul_artikel'] ?>" required>
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label class="col-form-label">Penulis</label>
						<input type="text" class="form-control" id="penulis" name="penulis" value="<?= $data_cek['penulis'] ?>" required>
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label class="col-form-label">Tanggal</label>
						<input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= $data_cek['tanggal'] ?>" required>
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label class="col-form-label">Gambar</label>
						<input type="file" class="form-control" id="gambar" name="gambar">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<img src="assets/img/artikel/<?php echo $data_cek['gambar'] ?>" width="100px" alt="">
					</div>
				</div>

				<div class="col-md-12">
					<label class="col-form-label">Artikel</label>
					<textarea name="artikel" id="ckeditor1" cols="30" rows="10" class="form-control"><?= $data_cek['artikel'] ?></textarea>
				</div>
			</div>
		</div>
		<div class="card-footer">
			<input type="submit" name="Edit" value="Simpan" class="btn btn-success">
			<a href="?page=data-artikel" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php

if (isset($_POST['Edit'])) {
	if (!$_FILES['gambar'] == '') {
		$ekstensi_diperbolehkan    = array('png', 'jpg', 'jpeg');
		$nama = $_FILES['gambar']['name'];
		$namafile = time() . $nama;
		// $ext = pathinfo($nama, PATHINFO_EXTENSION);
		// $random = crypt($nama, time());
		$x = explode('.', $nama);
		$ekstensi = strtolower(end($x));
		$ukuran    = $_FILES['gambar']['size'];
		$file_tmp = $_FILES['gambar']['tmp_name'];

		if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
			if ($ukuran < 1044070) {
				if (move_uploaded_file($file_tmp, 'assets/img/artikel/' . $namafile)) {
					$query = "SELECT * FROM tb_artikel WHERE id_artikel='" . $_POST['id_artikel'] . "'";
					$sql = mysqli_query($koneksi, $query);
					$data = mysqli_fetch_array($sql);
					if (is_file("assets/img/artikel/" . $data['gambar']))
						unlink("assets/img/artikel/" . $data['gambar']);
					$sql_edit = "UPDATE tb_artikel SET
								judul_artikel='" . $_POST['judul_artikel'] . "',
								penulis='" . $_POST['penulis'] . "',
								tanggal='" . $_POST['tanggal'] . "',
								artikel='" . $_POST['artikel'] . "',
								gambar='" . $namafile . "'
								WHERE id_artikel='" . $_POST['id_artikel'] . "'";
					$query_edit = mysqli_query($koneksi, $sql_edit);
					mysqli_close($koneksi);
					if ($query_edit) {
						echo "<script>
								Swal.fire({title: 'Edit Artikel Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
								}).then((result) => {if (result.value){
									window.location = 'index.php?page=data-artikel';
									}
								})</script>";
					} else {
						echo "<script>
								Swal.fire({title: 'Edit Artikel Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
								}).then((result) => {if (result.value){
									window.location = 'index.php?page=data-artikel';
									}
								})</script>";
					}
				} else {
					echo "<script>
							Swal.fire({title: 'Edit Artikel Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
							}).then((result) => {if (result.value){
								window.location = 'index.php?page=data-artikel';
								}
							})</script>";
				}
			} else {
				echo "<script>
					Swal.fire({title: 'Edit Artikel Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
					}).then((result) => {if (result.value){
						window.location = 'index.php?page=data-artikel';
						}
					})</script>";
			}
		} else {
			$sql_edit = "UPDATE tb_artikel SET
						judul_artikel='" . $_POST['judul_artikel'] . "',
						penulis='" . $_POST['penulis'] . "',
						tanggal='" . $_POST['tanggal'] . "',
						artikel='" . $_POST['artikel'] . "'
						WHERE id_artikel='" . $_POST['id_artikel'] . "'";
			$query_edit = mysqli_query($koneksi, $sql_edit);
			mysqli_close($koneksi);
			if ($query_edit) {
				echo "<script>
				Swal.fire({title: 'Edit Artikel Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
				}).then((result) => {if (result.value){
					window.location = 'index.php?page=data-artikel';
					}
				})</script>";
			} else {
				echo "<script>
				Swal.fire({title: 'Edit Artikel Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
				}).then((result) => {if (result.value){
					window.location = 'index.php?page=data-artikel';
					}
				})</script>";
			}
		}
	} else {
		$sql_edit = "UPDATE tb_artikel SET
						judul_artikel='" . $_POST['judul_artikel'] . "',
						penulis='" . $_POST['penulis'] . "',
						tanggal='" . $_POST['tanggal'] . "',
						artikel='" . $_POST['artikel'] . "'
						WHERE id_artikel='" . $_POST['id_artikel'] . "'";
		$query_edit = mysqli_query($koneksi, $sql_edit);
		mysqli_close($koneksi);
		if ($query_edit) {
			echo "<script>
				Swal.fire({title: 'Edit Artikel Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
				}).then((result) => {if (result.value){
					window.location = 'index.php?page=data-artikel';
					}
				})</script>";
		} else {
			echo "<script>
				Swal.fire({title: 'Edit Artikel Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
				}).then((result) => {if (result.value){
					window.location = 'index.php?page=data-artikel';
					}
				})</script>";
		}
	}
}
?>
<!-- end -->