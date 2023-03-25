<?php
if ($_POST['Simpan']) {
	$ekstensi_diperbolehkan    = array('png', 'jpg', 'jpeg');
	$nama = $_FILES['gambar']['name'];
	$ext = pathinfo($nama, PATHINFO_EXTENSION);
	$random = crypt($nama, time());
	// $x = explode('.', $nama);
	// $ekstensi = strtolower(end($x));
	$ukuran    = $_FILES['gambar']['size'];
	$file_tmp = $_FILES['gambar']['tmp_name'];
	$pathdb = $random . '.' . $ext;

	if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
		if ($ukuran < 1044070) {
			move_uploaded_file($file_tmp, 'assets/img/artikel/' . $pathdb);
			$sql_simpan = "INSERT INTO  tb_artikel (judul_artikel,penulis,tanggal,artikel, gambar) VALUES (
				'" . $_POST['judul_artikel'] . "',
				'" . $_POST['penulis'] . "',
				'" . $_POST['tanggal'] . "',
				'" . $_POST['artikel'] . "',
				'" . $pathdb . "')";
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
						window.location = 'index.php?page=data-artikel';
						}
					})</script>";
			}
		} else {
			echo "<script>
				Swal.fire({title: 'Tambah Artikel Gagal. Ukuran File Terlalu Besar.',text: '',icon: 'error',confirmButtonText: 'OK'
				}).then((result) => {if (result.value){
					window.location = 'index.php?page=data-artikel';
					}
				})</script>";
		}
	} else {
		echo "<script>
			Swal.fire({title: 'Tambah Artikel Gagal. Ekstensi File Harus JPG/JPEG/PNG.',text: '',icon: 'error',confirmButtonText: 'OK'
			}).then((result) => {if (result.value){
				window.location = 'index.php?page=data-artikel';
				}
			})</script>";
	}
}
?>


<?php
if ($_POST['Simpan']) {

	$sql_simpan = "INSERT INTO  tb_artikel (judul_artikel,penulis,tanggal,artikel) VALUES (
				'" . $_POST['judul_artikel'] . "',
				'" . $_POST['penulis'] . "',
				'" . $_POST['tanggal'] . "',
				'" . $_POST['artikel'] . "')";
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
						window.location = 'index.php?page=data-artikel';
						}
					})</script>";
	}
}
?>

