<div class="card card-danger">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-plus"></i> Tambah Pengajar
		</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">
			<div class="row">

				<div class="col-md-12">
					<div class="form-group">
						<label class="col-form-label">Nama & Gelar</label>
						<input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Masukkan Nama Lengkap & Gelar" required>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="col-form-label">Jenis Kelamin</label>
						<select class="form-control" name="jenis_kelamin" id="">
							<option value="">--Pilih Jenis Kelamin--</option>
							<option value="Laki-laki">Laki-laki</option>
							<option value="Perempuan">Perempuan</option>
						</select>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="col-form-label">Lulusan</label>
						<input type="text" class="form-control" id="lulusan" name="lulusan" placeholder="Masukkan Lulusan" required>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="col-form-label">Mata Pelajaran</label>
						<input type="text" class="form-control" id="mata_pelajaran" name="mata_pelajaran" placeholder="Masukkan Mata Pelajaran" required>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="col-form-label">Jabatan</label>
						<input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Masukkan Jabatan" required>
					</div>
				</div>
				<div class="col-md-12">
					<div class="form-group">
						<label class="col-form-label">Foto</label>
						<input type="file" class="form-contro" name="foto" id="foto" required>
					</div>
				</div>
			</div>
		</div>
		<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-primary">
			<a href="?page=data-pengajar" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php

if (isset($_POST['Simpan'])) {
	$ekstensi_diperbolehkan    = array('png', 'jpg', 'jpeg');
	$nama = $_FILES['foto']['name'];
	$namafile = time() . $nama;
	// $ext = pathinfo($nama, PATHINFO_EXTENSION);
	// $random = crypt($nama, time());
	$x = explode('.', $nama);
	$ekstensi = strtolower(end($x));
	$ukuran    = $_FILES['foto']['size'];
	$file_tmp = $_FILES['foto']['tmp_name'];
	// $pathdb = $random . '.' . $ext;

	if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
		if ($ukuran < 1044070) {
			move_uploaded_file($file_tmp, 'assets/img/pengajar/' . $namafile);
			$sql_simpan = "INSERT INTO  tb_pengajar (nama_lengkap,jenis_kelamin, lulusan, mata_pelajaran, jabatan, foto) VALUES (
				'" . $_POST['nama_lengkap'] . "',
				'" . $_POST['jenis_kelamin'] . "',
				'" . $_POST['lulusan'] . "',
				'" . $_POST['mata_pelajaran'] . "',
				'" . $_POST['jabatan'] . "',
				'" . $namafile . "'
				)";
			$query_simpan = mysqli_query($koneksi, $sql_simpan);
			mysqli_close($koneksi);
			if ($query_simpan) {
				echo "<script>
					Swal.fire({title: 'Tambah Pengajar Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
					}).then((result) => {if (result.value){
						window.location = 'index.php?page=data-pengajar';
						}
					})</script>";
			} else {
				echo "<script>
					Swal.fire({title: 'Tambah Pengajar Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
					}).then((result) => {if (result.value){
						window.location = 'index.php?page=data-pengajar';
						}
					})</script>";
			}
		} else {
			echo "<script>
				Swal.fire({title: 'Tambah Pengajar Gagal. Ukuran File Terlalu Besar.',text: '',icon: 'error',confirmButtonText: 'OK'
				}).then((result) => {if (result.value){
					window.location = 'index.php?page=add-pengajar';
					}
				})</script>";
		}
	} else {
		echo "<script>
			Swal.fire({title: 'Tambah Pengajar Gagal. Ekstensi File Harus JPG/JPEG/PNG.',text: '',icon: 'error',confirmButtonText: 'OK'
			}).then((result) => {if (result.value){
				window.location = 'index.php?page=add-pengajar';
				}
			})</script>";
	}
}
?>
<!-- end -->