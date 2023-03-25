<?php

if (isset($_GET['kode'])) {
	$sql_cek = "SELECT * FROM tb_prestasi WHERE id_prestasi='" . $_GET['kode'] . "'";
	$query_cek = mysqli_query($koneksi, $sql_cek);
	$data_cek = mysqli_fetch_array($query_cek, MYSQLI_BOTH);
}
?>

<div class="card card-danger">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Edit Prestasi
		</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">
			<div class="row">

				<div class="col-md-6">
					<div class="form-group">
						<label class="col-form-label">Nama Prestasi</label>
						<input type="hidden" class="form-control" id="id_prestasi" name="id_prestasi" value="<?= $data_cek['id_prestasi'] ?>" required>
						<input type="text" class="form-control" id="nama_prestasi" name="nama_prestasi" value="<?= $data_cek['nama_prestasi'] ?>" required>
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label class="col-form-label">Tingkat</label>
						<select name="tingkat" class="form-control" id="tingkat">
							<option value="<?= $data_cek['tingkat'] ?>"><?= $data_cek['tingkat'] ?></option>
							<option value="Desa/Kelurahan">Desa/Kelurahan</option>
							<option value="Kecamatan">Kecamatan</option>
							<option value="Kabupaten">Kabupaten</option>
							<option value="Nasional">Nasional</option>
						</select>
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
						<img src="assets/img/prestasi/<?php echo $data_cek['gambar'] ?>" width="100px" alt="">
					</div>
				</div>
			</div>
		</div>
		<div class="card-footer">
			<input type="submit" name="Edit" value="Simpan" class="btn btn-success">
			<a href="?page=data-prestasi" title="Kembali" class="btn btn-secondary">Batal</a>
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
				if (move_uploaded_file($file_tmp, 'assets/img/prestasi/' . $namafile)) {
					$query = "SELECT * FROM tb_prestasi WHERE id_prestasi='" . $_POST['id_prestasi'] . "'";
					$sql = mysqli_query($koneksi, $query);
					$data = mysqli_fetch_array($sql);
					if (is_file("assets/img/prestasi/" . $data['gambar']))
						unlink("assets/img/prestasi/" . $data['gambar']);
					$sql_edit = "UPDATE tb_prestasi SET
								nama_prestasi='" . $_POST['nama_prestasi'] . "',
								tingkat='" . $_POST['tingkat'] . "',
								gambar='" . $namafile . "'
								WHERE id_prestasi='" . $_POST['id_prestasi'] . "'";
					$query_edit = mysqli_query($koneksi, $sql_edit);
					mysqli_close($koneksi);
					if ($query_edit) {
						echo "<script>
								Swal.fire({title: 'Edit Prestasi Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
								}).then((result) => {if (result.value){
									window.location = 'index.php?page=data-prestasi';
									}
								})</script>";
					} else {
						echo "<script>
								Swal.fire({title: 'Edit Prestasi Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
								}).then((result) => {if (result.value){
									window.location = 'index.php?page=data-prestasi';
									}
								})</script>";
					}
				} else {
					echo "<script>
							Swal.fire({title: 'Edit Prestasi Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
							}).then((result) => {if (result.value){
								window.location = 'index.php?page=data-prestasi';
								}
							})</script>";
				}
			} else {
				echo "<script>
					Swal.fire({title: 'Edit Prestasi Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
					}).then((result) => {if (result.value){
						window.location = 'index.php?page=data-prestasi';
						}
					})</script>";
			}
		} else {
			$sql_edit = "UPDATE tb_prestasi SET
						nama_prestasi='" . $_POST['nama_prestasi'] . "',
						tingkat='" . $_POST['tingkat'] . "'
						WHERE id_prestasi='" . $_POST['id_prestasi'] . "'";
			$query_edit = mysqli_query($koneksi, $sql_edit);
			mysqli_close($koneksi);
			if ($query_edit) {
				echo "<script>
				Swal.fire({title: 'Edit Prestasi Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
				}).then((result) => {if (result.value){
					window.location = 'index.php?page=data-prestasi';
					}
				})</script>";
			} else {
				echo "<script>
				Swal.fire({title: 'Edit Prestasi Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
				}).then((result) => {if (result.value){
					window.location = 'index.php?page=data-prestasi';
					}
				})</script>";
			}
		}
	} else {
		$sql_edit = "UPDATE tb_prestasi SET
						nama_prestasi='" . $_POST['nama_prestasi'] . "',
						tingkat='" . $_POST['tingkat'] . "'
						WHERE id_prestasi='" . $_POST['id_prestasi'] . "'";
		$query_edit = mysqli_query($koneksi, $sql_edit);
		mysqli_close($koneksi);
		if ($query_edit) {
			echo "<script>
				Swal.fire({title: 'Edit Prestasi Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
				}).then((result) => {if (result.value){
					window.location = 'index.php?page=data-prestasi';
					}
				})</script>";
		} else {
			echo "<script>
				Swal.fire({title: 'Edit Prestasi Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
				}).then((result) => {if (result.value){
					window.location = 'index.php?page=data-prestasi';
					}
				})</script>";
		}
	}
}
?>
<!-- end -->