<?php

if (isset($_GET['kode'])) {
	$sql_cek = "SELECT * FROM tb_kegiatan WHERE id_kegiatan='" . $_GET['kode'] . "'";
	$query_cek = mysqli_query($koneksi, $sql_cek);
	$data_cek = mysqli_fetch_array($query_cek, MYSQLI_BOTH);
}
?>

<div class="card card-danger">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Edit Kegiatan
		</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">
			<div class="row">

				<div class="col-md-12">
					<div class="form-group">
						<label class="col-form-label">Nama Kegiatan</label>
						<input type="hidden" class="form-control" id="id_kegiatan" name="id_kegiatan" value="<?= $data_cek['id_kegiatan'] ?>" required>
						<input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan" value="<?= $data_cek['nama_kegiatan'] ?>" required>
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
						<img src="assets/img/kegiatan/<?php echo $data_cek['gambar'] ?>" width="100px" alt="">
					</div>
				</div>
			</div>
		</div>
		<div class="card-footer">
			<input type="submit" name="Edit" value="Simpan" class="btn btn-success">
			<a href="?page=data-kegiatan" title="Kembali" class="btn btn-secondary">Batal</a>
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
				if (move_uploaded_file($file_tmp, 'assets/img/kegiatan/' . $namafile)) {
					$query = "SELECT * FROM tb_kegiatan WHERE id_kegiatan='" . $_POST['id_kegiatan'] . "'";
					$sql = mysqli_query($koneksi, $query);
					$data = mysqli_fetch_array($sql);
					if (is_file("assets/img/kegiatan/" . $data['gambar']))
						unlink("assets/img/kegiatan/" . $data['gambar']);
					$sql_edit = "UPDATE tb_kegiatan SET
								nama_kegiatan='" . $_POST['nama_kegiatan'] . "',
								gambar='" . $namafile . "'
								WHERE id_kegiatan='" . $_POST['id_kegiatan'] . "'";
					$query_edit = mysqli_query($koneksi, $sql_edit);
					mysqli_close($koneksi);
					if ($query_edit) {
						echo "<script>
								Swal.fire({title: 'Edit Kegiatan Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
								}).then((result) => {if (result.value){
									window.location = 'index.php?page=data-kegiatan';
									}
								})</script>";
					} else {
						echo "<script>
								Swal.fire({title: 'Edit Kegiatan Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
								}).then((result) => {if (result.value){
									window.location = 'index.php?page=data-kegiatan';
									}
								})</script>";
					}
				} else {
					echo "<script>
							Swal.fire({title: 'Edit Kegiatan Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
							}).then((result) => {if (result.value){
								window.location = 'index.php?page=data-kegiatan';
								}
							})</script>";
				}
			} else {
				echo "<script>
					Swal.fire({title: 'Edit Kegiatan Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
					}).then((result) => {if (result.value){
						window.location = 'index.php?page=data-kegiatan';
						}
					})</script>";
			}
		} else {
			$sql_edit = "UPDATE tb_kegiatan SET
						nama_kegiatan='" . $_POST['nama_kegiatan'] . "'
						WHERE id_kegiatan='" . $_POST['id_kegiatan'] . "'";
			$query_edit = mysqli_query($koneksi, $sql_edit);
			mysqli_close($koneksi);
			if ($query_edit) {
				echo "<script>
				Swal.fire({title: 'Edit Kegiatan Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
				}).then((result) => {if (result.value){
					window.location = 'index.php?page=data-kegiatan';
					}
				})</script>";
			} else {
				echo "<script>
				Swal.fire({title: 'Edit Kegiatan Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
				}).then((result) => {if (result.value){
					window.location = 'index.php?page=data-kegiatan';
					}
				})</script>";
			}
		}
	} else {
		$sql_edit = "UPDATE tb_prestasi SET
						nama_kegiatan='" . $_POST['nama_kegiatan'] . "'
						WHERE id_kegiatan='" . $_POST['id_kegiatan'] . "'";
		$query_edit = mysqli_query($koneksi, $sql_edit);
		mysqli_close($koneksi);
		if ($query_edit) {
			echo "<script>
				Swal.fire({title: 'Edit Kegiatan Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
				}).then((result) => {if (result.value){
					window.location = 'index.php?page=data-kegiatan';
					}
				})</script>";
		} else {
			echo "<script>
				Swal.fire({title: 'Edit Kegiatan Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
				}).then((result) => {if (result.value){
					window.location = 'index.php?page=data-kegiatan';
					}
				})</script>";
		}
	}
}
?>
<!-- end -->