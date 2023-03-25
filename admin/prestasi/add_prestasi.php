<div class="card card-danger">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-plus"></i> Tambah Prestasi
		</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">
			<div class="row">

				<div class="col-md-6">
					<div class="form-group">
						<label class="col-form-label">Nama Prestasi</label>
						<input type="text" class="form-control" id="nama_prestasi" name="nama_prestasi" placeholder="Masukkan Nama Prestasi" required>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="col-form-label">Tingkat</label>
						<select name="tingkat" class="form-control" id="tingkat">
							<option>--Pilih Tingkat--</option>
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
						<input type="file" class="form-control" id="gambar" name="gambar" required>
					</div>
				</div>
			</div>
		</div>
		<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-primary">
			<a href="?page=data-prestasi" title="Kembali" class="btn btn-secondary">Batal</a>
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
			move_uploaded_file($file_tmp, 'assets/img/prestasi/' . $namafile);
			$sql_simpan = "INSERT INTO  tb_prestasi (nama_prestasi,tingkat,gambar) VALUES (
				'" . $_POST['nama_prestasi'] . "',
				'" . $_POST['tingkat'] . "',
				'" . $namafile . "')";
			$query_simpan = mysqli_query($koneksi, $sql_simpan);
			mysqli_close($koneksi);
			if ($query_simpan) {
				echo "<script>
					Swal.fire({title: 'Tambah Prestasi Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
					}).then((result) => {if (result.value){
						window.location = 'index.php?page=data-prestasi';
						}
					})</script>";
			} else {
				echo "<script>
					Swal.fire({title: 'Tambah Prestasi Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
					}).then((result) => {if (result.value){
						window.location = 'index.php?page=add-prestasi';
						}
					})</script>";
			}
		} else {
			echo "<script>
				Swal.fire({title: 'Tambah Prestasi Gagal. Ukuran File Terlalu Besar.',text: '',icon: 'error',confirmButtonText: 'OK'
				}).then((result) => {if (result.value){
					window.location = 'index.php?page=add-prestasi';
					}
				})</script>";
		}
	} else {
		echo "<script>
			Swal.fire({title: 'Tambah Prestasi Gagal. Ekstensi File Harus JPG/JPEG/PNG.',text: '',icon: 'error',confirmButtonText: 'OK'
			}).then((result) => {if (result.value){
				window.location = 'index.php?page=add-prestasi';
				}
			})</script>";
	}
}
?>




<!-- end -->