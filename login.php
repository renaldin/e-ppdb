<?php
session_start();
include "connect/koneksi.php";

if (isset($_SESSION["ses_level"]) == "Administrator") {
	header("Location:index.php");
}


?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>E-PPDB | Login Calon Siswa</title>
	<link rel="icon" href="assets/img/logo.png">
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
						<b>WEBSITE PENERIMAAAN PESERTA DIDIK BARU
						</b>
					</h5>
					<img src="assets/img/logo.png" width=150px />
					<br>
					<br>
				</center>

				<form action="" method="post">
					<div class="input-group mb-3">
						<input type="text" class="form-control" name="username" placeholder="Masukkan Username" required>
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-user-circle"></span>
							</div>
						</div>
					</div>
					<div class="input-group mb-3">
						<input type="password" class="form-control" name="password" placeholder="Masukkan Password" required>
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-lock"></span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<button type="submit" class="btn btn-danger btn-block btn-flat" name="tombol-login" title="Masuk Sistem">
								<b>Login</b>
							</button>
						</div>
				</form>
				<div class="col-lg-12 mt-3">
					<a href="daftar-akun-calon-siswa.php">Belum Punya Akun ? Daftar!</a><br>
					<a href="welcome.php">Kembali Ke Home.</a>
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
if (isset($_POST['tombol-login'])) {
	//anti inject sql
	$username = mysqli_real_escape_string($koneksi, $_POST['username']);
	$password = mysqli_real_escape_string($koneksi, $_POST['password']);

	//query login
	$sql_login = "SELECT * FROM tb_pengguna WHERE BINARY username='$username' AND password='$password'";
	$query_login = mysqli_query($koneksi, $sql_login);
	$data_login = mysqli_fetch_array($query_login, MYSQLI_BOTH);
	$jumlah_login = mysqli_num_rows($query_login);


	if ($jumlah_login == 1) {
		$_SESSION["ses_id"] = $data_login["id_pengguna"];
		$_SESSION["ses_nama"] = $data_login["nama_pengguna"];
		$_SESSION["ses_username"] = $data_login["username"];
		$_SESSION["ses_level"] = $data_login["level"];
		$_SESSION["ses_log"] = true;

		if ($_SESSION["ses_level"] == 'Calon Siswa') {
			echo "<script>
				Swal.fire({title: 'Login Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
				}).then((result) => {if (result.value)
					{window.location = 'welcome.php';}
				})</script>";
		} else if ($_SESSION["ses_level"] == 'Administrator') {
			echo "<script>
				Swal.fire({title: 'Login Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
				}).then((result) => {if (result.value)
					{window.location = 'index.php';}
				})</script>";
		}
	} else {
		echo "<script>
			Swal.fire({title: 'Login Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
			}).then((result) => {if (result.value)
				{window.location = 'login.php';}
			})</script>";
	}
}
?>
<!-- end -->