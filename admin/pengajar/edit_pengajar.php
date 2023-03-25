<?php

if (isset($_GET['kode'])) {
	$sql_cek = "SELECT * FROM tb_pengajar WHERE id_pengajar='" . $_GET['kode'] . "'";
	$query_cek = mysqli_query($koneksi, $sql_cek);
	$data_cek = mysqli_fetch_array($query_cek, MYSQLI_BOTH);
}
?>

<div class="card card-danger">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Edit Pengajar
		</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">
			<div class="row">

				<div class="col-md-12">
					<div class="form-group">
						<label class="col-form-label">Nama & Gelar</label>
						<input type="hidden" class="form-control" id="id_pengajar" name="id_pengajar" value="<?= $data_cek['id_pengajar'] ?>" required>
						<input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="<?= $data_cek['nama_lengkap'] ?>" required>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="col-form-label">Jenis Kelamin</label>
						<select class="form-control" name="jenis_kelamin" id="">
							<option value="<?= $data_cek['jenis_kelamin'] ?>"><?= $data_cek['jenis_kelamin'] ?></option>
							<option value="Laki-laki">Laki-laki</option>
							<option value="Perempuan">Perempuan</option>
						</select>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="col-form-label">Lulusan</label>
						<input type="text" class="form-control" id="lulusan" name="lulusan" value="<?= $data_cek['lulusan'] ?>" required>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="col-form-label">Mata Pelajaran</label>
						<input type="text" class="form-control" id="mata_pelajaran" name="mata_pelajaran" value="<?= $data_cek['mata_pelajaran'] ?>" required>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="col-form-label">Jabatan</label>
						<input type="text" class="form-control" id="jabatan" name="jabatan" value="<?= $data_cek['jabatan'] ?>" required>
					</div>
				</div>
				<div class="col-md-12">
					<div class="form-group">
						<labe class="col-form-label">Foto</labe>
						<input type="file" class="form-control" id="foto" name="foto">
					</div>
				</div>
			</div>
		</div>
		<div class="card-footer">
			<input type="submit" name="Edit" value="Simpan" class="btn btn-success">
			<a href="?page=data-pengajar" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php

if (isset($_POST['Edit'])) {

	if (!$_FILES['foto'] == '') {
		$ekstensi_diperbolehkan    = array('png', 'jpg', 'jpeg');
		$nama = $_FILES['foto']['name'];
		$namafile = time() . $nama;
		// $ext = pathinfo($nama, PATHINFO_EXTENSION);
		// $random = crypt($nama, time());
		$x = explode('.', $nama);
		$ekstensi = strtolower(end($x));
		$ukuran    = $_FILES['foto']['size'];
		$file_tmp = $_FILES['foto']['tmp_name'];

		if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
			if ($ukuran < 1044070) {
				if (move_uploaded_file($file_tmp, 'assets/img/pengajar/' . $namafile)) {
					$query = "SELECT * FROM tb_pengajar WHERE id_pengajar='" . $_POST['id_pengajar'] . "'";
					$sql = mysqli_query($koneksi, $query);
					$data = mysqli_fetch_array($sql);
					if (is_file("assets/img/pengajar/" . $data['foto']))
						unlink("assets/img/pengajar/" . $data['foto']);
					$sql_edit = "UPDATE tb_pengajar SET
						nama_lengkap='" . $_POST['nama_lengkap'] . "',
						jenis_kelamin='" . $_POST['jenis_kelamin'] . "',
						lulusan='" . $_POST['lulusan'] . "',
						mata_pelajaran='" . $_POST['mata_pelajaran'] . "',
						jabatan='" . $_POST['jabatan'] . "',
						foto='" . $namafile . "'
						WHERE id_pengajar='" . $_POST['id_pengajar'] . "'";

					$query_edit = mysqli_query($koneksi, $sql_edit);
					mysqli_close($koneksi);
					if ($query_edit) {
						echo "<script>
								Swal.fire({title: 'Edit Pengajar Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
								}).then((result) => {if (result.value){
									window.location = 'index.php?page=data-pengajar';
									}
								})</script>";
					} else {
						echo "<script>
								Swal.fire({title: 'Edit Pengajar Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
								}).then((result) => {if (result.value){
									window.location = 'index.php?page=data-pengajar';
									}
								})</script>";
					}
				} else {
					echo "<script>
							Swal.fire({title: 'Edit Pengajar Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
							}).then((result) => {if (result.value){
								window.location = 'index.php?page=data-pengajar';
								}
							})</script>";
				}
			} else {
				echo "<script>
					Swal.fire({title: 'Edit Pengajar Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
					}).then((result) => {if (result.value){
						window.location = 'index.php?page=data-pengajar';
						}
					})</script>";
			}
		} else {
			$sql_edit = "UPDATE tb_pengajar SET
						nama_lengkap='" . $_POST['nama_lengkap'] . "',
						jenis_kelamin='" . $_POST['jenis_kelamin'] . "',
						lulusan='" . $_POST['lulusan'] . "',
						mata_pelajaran='" . $_POST['mata_pelajaran'] . "',
						jabatan='" . $_POST['jabatan'] . "'
						WHERE id_pengajar='" . $_POST['id_pengajar'] . "'";

			$query_edit = mysqli_query($koneksi, $sql_edit);
			mysqli_close($koneksi);
			if ($query_edit) {
				echo "<script>
						Swal.fire({title: 'Edit Pengajar Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
						}).then((result) => {if (result.value){
							window.location = 'index.php?page=data-pengajar';
							}
						})</script>";
			} else {
				echo "<script>
						Swal.fire({title: 'Edit Pengajar Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
						}).then((result) => {if (result.value){
							window.location = 'index.php?page=data-pengajar';
							}
						})</script>";
			}
		}
	} else {
		$sql_edit = "UPDATE tb_pengajar SET
						nama_lengkap='" . $_POST['nama_lengkap'] . "',
						jenis_kelamin='" . $_POST['jenis_kelamin'] . "',
						lulusan='" . $_POST['lulusan'] . "',
						mata_pelajaran='" . $_POST['mata_pelajaran'] . "',
						jabatan='" . $_POST['jabatan'] . "'
						WHERE id_pengajar='" . $_POST['id_pengajar'] . "'";

		$query_edit = mysqli_query($koneksi, $sql_edit);
		mysqli_close($koneksi);
		if ($query_edit) {
			echo "<script>
					Swal.fire({title: 'Edit Pengajar Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
					}).then((result) => {if (result.value){
						window.location = 'index.php?page=data-pengajar';
						}
					})</script>";
		} else {
			echo "<script>
					Swal.fire({title: 'Edit Pengajar Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
					}).then((result) => {if (result.value){
						window.location = 'index.php?page=data-pengajar';
						}
					})</script>";
		}
	}
}
?>

<!-- end -->