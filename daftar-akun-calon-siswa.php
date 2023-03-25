<?php
include "connect/koneksi.php";

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>E-PPDB | Daftar Akun Calon Siswa</title>
	<link rel="icon" href="assets/img/logo-e-ppdb.png">
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- icheck bootstrap -->
	<link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="assets/css/adminlte.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	<!-- Animation Aos -->
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body class="hold-transition login-page" style="background-image: url('assets/img/bg.png'); background-size:cover; background-repeat: no-repeat;">
	<div class="login-box">
		<div class="login-logo">
		</div>
		<!-- /.login-logo -->
		<div class="card" data-aos="zoom-in-up">
			<div class="card-body login-card-body">
				<center>
					<h5 class="login-box-msg">
						<b>DAFTAR AKUN</b>
					</h5>
					<img src="assets/img/logo.png" width=150px />
					<br>
					<br>
				</center>

				<form action="" method="post">
					<div class="input-group mb-3">
						<input type="text" class="form-control" name="nama_pengguna" placeholder="Masukkan Nama Lengkap" required>
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-user"></span>
							</div>
						</div>
					</div>
					<div class="input-group mb-3">
						<input type="text" class="form-control" name="username" placeholder="Masukkan Username" required>
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-user-circle"></span>
							</div>
						</div>
					</div>
					<div class="input-group mb-3">
						<input type="password" class="form-control" name="password" placeholder="Password" required>
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-lock"></span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<button type="submit" class="btn btn-danger btn-block btn-flat" name="Simpan" title="Masuk Sistem">
								<b>Daftar</b>
							</button>
						</div>
				</form>
				<div class="col-lg-12 mt-3">
					<a href="login.php">Sudah Punya Akun ? Login!</a>
				</div>

			</div>
		</div>
	</div>
	<!-- /.login-box -->

	<!-- jQuery -->
	<script src="plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- AdminLTE App -->
	<script src="assets/js/adminlte.min.js"></script>
	<!-- Alert -->
	<script src="plugins/alert.js"></script>
	<!-- Animation Aos -->
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	<script>
		AOS.init();
	</script>

</body>

</html>

<?php

if (isset($_POST['Simpan'])) {
	$sql_simpan = "INSERT INTO tb_pengguna (nama_pengguna,username,password,level) VALUES (
        '" . $_POST['nama_pengguna'] . "',
        '" . $_POST['username'] . "',
        '" . $_POST['password'] . "',
        'Calon Siswa')";
	$query_simpan = mysqli_query($koneksi, $sql_simpan);
	mysqli_close($koneksi);

	if ($query_simpan) {
		echo "<script>
      Swal.fire({title: 'Anda Berhasil Buat Akun',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'login.php';
          }
      })</script>";
	} else {
		echo "<script>
      Swal.fire({title: 'Anda Gagal Buat Akun',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'daftar-akun-calon-siswa.php';
          }
      })</script>";
	}
}
?>
<!-- end -->