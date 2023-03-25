<?php

if (isset($_GET['kode'])) {
	$sql_cek = "SELECT * FROM tb_informasi WHERE id_informasi='" . $_GET['kode'] . "'";
	$query_cek = mysqli_query($koneksi, $sql_cek);
	$data_cek = mysqli_fetch_array($query_cek, MYSQLI_BOTH);
}
?>

<div class="card card-danger">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Edit Informasi PPDB
		</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">
			<div class="row">

				<div class="col-md-6">
					<div class="form-group">
						<label class="col-form-label">Judul Informasi</label>
						<input type="hidden" class="form-control" id="id_sekolah" name="id_sekolah" value="<?= $data_cek['id_sekolah'] ?>" required>
						<input type="hidden" class="form-control" id="id_informasi" name="id_informasi" value="<?= $data_cek['id_informasi'] ?>" required>
						<input type="text" class="form-control" id="judul_informasi" name="judul_informasi" value="<?= $data_cek['judul_informasi'] ?>" required>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="col-form-label">Tanggal Informasi</label>
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
						<img src="assets/img/informasi-ppdb/<?php echo $data_cek['gambar'] ?>" width="100px" alt="">
					</div>
				</div>


				<div class="col-md-12">
					<label class="col-form-label">Informasi</label>
					<textarea name="informasi" id="ckeditor1" cols="30" rows="10" class="form-control" required><?= $data_cek['informasi'] ?></textarea>
				</div>
			</div>
		</div>
		<div class="card-footer">
			<input type="submit" name="Edit" value="Simpan" class="btn btn-success">
			<a href="?page=data-informasi" title="Kembali" class="btn btn-secondary">Batal</a>
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
				if (move_uploaded_file($file_tmp, 'assets/img/informasi-ppdb/' . $namafile)) {
					$query = "SELECT * FROM tb_informasi WHERE id_informasi='" . $_POST['id_informasi'] . "'";
					$sql = mysqli_query($koneksi, $query);
					$data = mysqli_fetch_array($sql);
					if (is_file("assets/img/informasi-ppdb/" . $data['gambar']))
						unlink("assets/img/informasi-ppdb/" . $data['gambar']);
					$sql_edit = "UPDATE tb_informasi SET
								id_sekolah='" . $_POST['id_sekolah'] . "',
								judul_informasi='" . $_POST['judul_informasi'] . "',
								informasi='" . $_POST['informasi'] . "',
								tanggal='" . $_POST['tanggal'] . "',
								gambar='" . $namafile . "'
								WHERE id_informasi='" . $_POST['id_informasi'] . "'";
					$query_edit = mysqli_query($koneksi, $sql_edit);
					mysqli_close($koneksi);
					if ($query_edit) {
						echo "<script>
								Swal.fire({title: 'Edit Informasi PPDB Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
								}).then((result) => {if (result.value){
									window.location = 'index.php?page=data-informasi';
									}
								})</script>";
					} else {
						echo "<script>
								Swal.fire({title: 'Edit Informasi PPDB Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
								}).then((result) => {if (result.value){
									window.location = 'index.php?page=data-informasi';
									}
								})</script>";
					}
				} else {
					echo "<script>
							Swal.fire({title: 'Edit Informasi PPDB Gagal. Ada Masalah Diinput Gambar.',text: '',icon: 'error',confirmButtonText: 'OK'
							}).then((result) => {if (result.value){
								window.location = 'index.php?page=data-informasi';
								}
							})</script>";
				}
			} else {
				echo "<script>
					Swal.fire({title: 'Edit Informasi PPDB Gagal. Ukuran Gambar Terlalu Besar.',text: '',icon: 'error',confirmButtonText: 'OK'
					}).then((result) => {if (result.value){
						window.location = 'index.php?page=data-informasi';
						}
					})</script>";
			}
		} else {
			$sql_edit = "UPDATE tb_informasi SET
						id_sekolah='" . $_POST['id_sekolah'] . "',
						judul_informasi='" . $_POST['judul_informasi'] . "',
						informasi='" . $_POST['informasi'] . "',
						tanggal='" . $_POST['tanggal'] . "'
						WHERE id_informasi='" . $_POST['id_informasi'] . "'";
			$query_edit = mysqli_query($koneksi, $sql_edit);
			mysqli_close($koneksi);
			if ($query_edit) {
				echo "<script>
				Swal.fire({title: 'Edit Informasi PPDB Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
				}).then((result) => {if (result.value){
					window.location = 'index.php?page=data-informasi';
					}
				})</script>";
			} else {
				echo "<script>
				Swal.fire({title: 'Edit Informasi PPDB Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
				}).then((result) => {if (result.value){
					window.location = 'index.php?page=data-informasi';
					}
				})</script>";
			}
		}
	} else {
		$sql_edit = "UPDATE tb_informasi SET
						id_sekolah='" . $_POST['id_sekolah'] . "',
						judul_informasi='" . $_POST['judul_informasi'] . "',
						informasi='" . $_POST['informasi'] . "',
						tanggal='" . $_POST['tanggal'] . "'
						WHERE id_informasi='" . $_POST['id_informasi'] . "'";
		$query_edit = mysqli_query($koneksi, $sql_edit);
		mysqli_close($koneksi);
		if ($query_edit) {
			echo "<script>
				Swal.fire({title: 'Edit Artikel Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
				}).then((result) => {if (result.value){
					window.location = 'index.php?page=data-informasi';
					}
				})</script>";
		} else {
			echo "<script>
				Swal.fire({title: 'Edit Informasi PPDB Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
				}).then((result) => {if (result.value){
					window.location = 'index.php?page=data-informasi';
					}
				})</script>";
		}
	}
}
?>

<!-- end -->