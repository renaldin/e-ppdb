<?php
session_start();
if (isset($_SESSION["ses_username"]) == "") {
	header("location: welcome.php");
} else {
	$data_id = $_SESSION["ses_id"];
	$data_nama = $_SESSION["ses_nama"];
	$data_user = $_SESSION["ses_username"];
	$data_level = $_SESSION["ses_level"];
}

include "connect/koneksi.php";
?>
<?php
$sql = $koneksi->query("select * from tb_sekolah");
while ($data = $sql->fetch_assoc()) {
	$nama = $data['nama_sekolah'];
	$alamat = $data['alamat_sekolah'];
}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>E-PPDB</title>
	<link rel="icon" href="assets/img/logo.png">
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
	<!-- Chartjs -->
	<script src="plugins/chartjs/Chart.bundle.js"></script>
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="assets/css/adminlte.min.css">
	<!-- Select2 -->
	<link rel="stylesheet" href="plugins/select2/css/select2.min.css">
	<link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	<!-- Alert -->
	<script src="plugins/alert.js"></script>
</head>

<body class="hold-transition sidebar-mini sidebar-collapse">
	<!-- Site wrapper -->
	<div class="wrapper">
		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-danger navbar-light">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#">
						<i class="fas fa-bars text-white"></i>
					</a>
				</li>

			</ul>

			<!-- SEARCH FORM -->
			<ul class="navbar-nav ml-auto">

				<li class="nav-item d-none d-sm-inline-block">
					<a href="index.php" class="nav-link">
						<font color="white">
							<b>
								<?php echo $nama; ?>
								-
								<?php echo $alamat; ?>
							</b>
						</font>
					</a>
				</li>
			</ul>

		</nav>
		<!-- /.navbar -->

		<!-- Sidebar -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<!-- Sidebar Brand Logo -->
			<a href="index.php" class="brand-link">
				<span class="brand-text text-white text-bold">
					<center>
						E - PPDB
					</center>
				</span>
			</a>

			<!-- Sidebar Left -->
			<div class="sidebar">
				<!-- Sidebar user (optional) -->
				<div class="user-panel mt-3 pb-3 mb-3 d-flex">
					<div class="image">
						<img src="assets/img/avatar1.jpg" class="img-circle elevation-2" alt="User Image">
					</div>
					<div class="info">
						<a href="index.php" class="d-block">
							<?php echo $data_nama; ?>
						</a>
						<span class="badge badge-danger">
							<?php echo $data_level; ?>
						</span>
					</div>
				</div>

				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

						<!-- Level  -->
						<?php
						if ($data_level == "Administrator") {
						?>
							<!-- Dashboard -->
							<li class="nav-item">
								<a href="index.php" class="nav-link">
									<i class="nav-icon fas fa-tachometer-alt"></i>
									<p>
										Dashboard
									</p>
								</a>
							</li>

							<!-- Data Master -->
							<li class="nav-item has-treeview">
								<a href="#" class="nav-link">
									<i class="nav-icon fas fa-cube"></i>
									<p>
										Data Master
										<i class="fas fa-angle-left right"></i>
									</p>
								</a>
								<ul class="nav nav-treeview">
									<li class="nav-item">
										<a href="?page=data-sekolah" class="nav-link">
											<i class="nav-icon fas fa-dot-circle text-danger"></i>
											<p>Kelola Data Sekolah</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="?page=data-pengajar" class="nav-link">
											<i class="nav-icon fas fa-dot-circle text-danger"></i>
											<p>Kelola Pengajar</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="?page=data-kegiatan" class="nav-link">
											<i class="nav-icon fas fa-dot-circle text-danger"></i>
											<p>Kelola Kegiatan</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="?page=data-prestasi" class="nav-link">
											<i class="nav-icon fas fa-dot-circle text-danger"></i>
											<p>Kelola Prestasi</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="?page=data-informasi" class="nav-link">
											<i class="nav-icon fas fa-dot-circle text-danger"></i>
											<p>Kelola Informasi PPDB</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="?page=data-tahun" class="nav-link">
											<i class="nav-icon fas fa-dot-circle text-danger"></i>
											<p>Tahun Ajaran</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="?page=data-sesi" class="nav-link">
											<i class="nav-icon fas fa-dot-circle text-danger"></i>
											<p>Gelombang Daftar</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="?page=data-artikel" class="nav-link">
											<i class="nav-icon fas fa-dot-circle text-danger"></i>
											<p>Kelola Artikel</p>
										</a>
									</li>
								</ul>
							</li>

							<!-- Kelola Pendaftaran -->
							<li class="nav-item has-treeview">
								<a href="#" class="nav-link">
									<i class="nav-icon fas fa-users"></i>
									<p>
										Kelola Pendaftaran
										<i class="fas fa-angle-left right"></i>
									</p>
								</a>
								<ul class="nav nav-treeview">
									<li class="nav-item">
										<a href="?page=data-pendaftaran" class="nav-link">
											<i class="nav-icon fas fa-dot-circle text-danger"></i>
											<p>Pendaftaran Masuk</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="?page=pendaftaran-lengkap" class="nav-link">
											<i class="nav-icon fas fa-dot-circle text-danger"></i>
											<p>Sudah Pemberkasan</p>
										</a>
									</li>
								</ul>
							</li>

							<!-- Kelola Artikel -->
							<!-- <li class="nav-item has-treeview">
								<a href="#" class="nav-link">
									<i class="nav-icon fas fa-book"></i>
									<p>
										Kelola Artikel
										<i class="fas fa-angle-left right"></i>
									</p>
								</a>
								<ul class="nav nav-treeview">
									<li class="nav-item">
										<a href="?page=data-artikel" class="nav-link">
											<i class="nav-icon fas fa-dot-circle text-danger"></i>
											<p>Daftar Artikel</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="?page=add-artikel" class="nav-link">
											<i class="nav-icon far fas fa-dot-circle text-danger"></i>
											<p>Tambah Artikel</p>
										</a>
									</li>
								</ul>
							</li> -->

							<li class="nav-item has-treeview">
								<a href="#" class="nav-link">
									<i class="nav-icon fas fa-file-archive"></i>
									<p>
										Kelola Laporan
										<i class="fas fa-angle-left right"></i>
									</p>
								</a>
								<ul class="nav nav-treeview">
									<li class="nav-item">
										<a href="?page=data-laporan-sudah-pemberkasan" class="nav-link">
											<i class="nav-icon fas fa-dot-circle text-danger"></i>
											<p>Sudah Pemberkasan</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="?page=data-laporan-belum-pemberkasan" class="nav-link">
											<i class="nav-icon fas fa-dot-circle text-danger"></i>
											<p>Belum Pemberkasan</p>
										</a>
									</li>
								</ul>
							</li>

							<li class="nav-header">Setting</li>


							<li class="nav-item">
								<a href="?page=data-pengguna" class="nav-link">
									<i class="nav-icon fas fa-user-friends"></i>
									<p>
										Data Pengguna
									</p>
								</a>
							</li>

						<?php
						}
						?>

						<li class="nav-item">
							<a onclick="return confirm('Apakah anda yakin akan keluar ?')" href="logout.php" class="nav-link">
								<i class="nav-icon fas fa-dot-circle text-danger"></i>
								<p>
									Logout
								</p>
							</a>
						</li>
					</ul>
				</nav>
			</div>
		</aside>

		<!-- Content  -->
		<div class="content-wrapper">
			<section class="content-header">
			</section>

			<!-- Main content -->
			<section class="content">
				<!-- /. WEB DINAMIS DISINI ############################################################################### -->
				<div class="container-fluid">

					<?php
					if (isset($_GET['page'])) {
						$hal = $_GET['page'];

						switch ($hal) {
								//Klik Halaman Home Pengguna
							case 'admin':
								include "home/admin.php";
								break;

								// Kelola Data Sekolah
							case 'data-sekolah':
								include "admin/sekolah/data_sekolah.php";
								break;
							case 'edit-sekolah':
								include "admin/sekolah/edit_sekolah.php";
								break;

								// Kelola Pengajar
							case 'data-pengajar':
								include "admin/pengajar/data_pengajar.php";
								break;
							case 'edit-pengajar':
								include "admin/pengajar/edit_pengajar.php";
								break;
							case 'add-pengajar':
								include "admin/pengajar/add_pengajar.php";
								break;
							case 'del-pengajar':
								include "admin/pengajar/del_pengajar.php";
								break;

								// Kelola Kegiatan
							case 'data-kegiatan':
								include "admin/kegiatan/data_kegiatan.php";
								break;
							case 'edit-kegiatan':
								include "admin/kegiatan/edit_kegiatan.php";
								break;
							case 'add-kegiatan':
								include "admin/kegiatan/add_kegiatan.php";
								break;
							case 'del-kegiatan':
								include "admin/kegiatan/del_kegiatan.php";
								break;

								// Kelola Prestasi
							case 'data-prestasi':
								include "admin/prestasi/data_prestasi.php";
								break;
							case 'edit-prestasi':
								include "admin/prestasi/edit_prestasi.php";
								break;
							case 'add-prestasi':
								include "admin/prestasi/add_prestasi.php";
								break;
							case 'del-prestasi':
								include "admin/prestasi/del_prestasi.php";
								break;

								// Kelola Informasi PPDB
							case 'data-informasi':
								include "admin/informasi/data_informasi.php";
								break;
							case 'edit-informasi':
								include "admin/informasi/edit_informasi.php";
								break;
							case 'add-informasi':
								include "admin/informasi/add_informasi.php";
								break;
							case 'del-informasi':
								include "admin/informasi/del_informasi.php";
								break;
							case 'detail-informasi':
								include "admin/informasi/detail_informasi.php";
								break;

								// Kelola Tahun Penerimaan
							case 'data-tahun':
								include "admin/tahun/data_tahun.php";
								break;
							case 'add-tahun':
								include "admin/tahun/add_tahun.php";
								break;
							case 'edit-tahun':
								include "admin/tahun/edit_tahun.php";
								break;
							case 'del-tahun':
								include "admin/tahun/del_tahun.php";
								break;

								// Kelola Data Sesi
							case 'data-sesi':
								include "admin/sesi/data_sesi.php";
								break;
							case 'edit-sesi':
								include "admin/sesi/edit_sesi.php";
								break;

								// Kelola Data Pemdaftaran
							case 'data-semua-pendaftar':
								include "admin/pendaftaran/data_semua_pendaftar.php";
								break;
							case 'data-pendaftaran':
								include "admin/pendaftaran/data_pendaftaran.php";
								break;
							case 'pendaftaran-lengkap':
								include "admin/pendaftaran/pendaftaran_ok.php";
								break;
							case 'add-pendaftaran':
								include "admin/pendaftaran/add_pendaftaran.php";
								break;
							case 'edit-pendaftaran':
								include "admin/pendaftaran/edit_pendaftaran.php";
								break;
							case 'berkas-ulang':
								include "admin/pendaftaran/ulang_pendaftaran.php";
								break;
							case 'del-pendaftaran':
								include "admin/pendaftaran/del_pendaftaran.php";
								break;
							case 'del-pendaftaran-ok':
								include "admin/pendaftaran/del_pendaftaran_ok.php";
								break;
							case 'detail':
								include "admin/pendaftaran/detail_pendaftaran.php";
								break;

								// Kelola Artikel Sekolah
							case 'data-artikel':
								include "admin/artikel/data_artikel.php";
								break;
							case 'edit-artikel':
								include "admin/artikel/edit_artikel.php";
								break;
							case 'add-artikel':
								include "admin/artikel/add_artikel.php";
								break;
							case 'del-artikel':
								include "admin/artikel/del_artikel.php";
								break;
							case 'detail-artikel':
								include "admin/artikel/detail_artikel.php";
								break;

								// Kelola Laporan
							case 'data-laporan-belum-pemberkasan':
								include "admin/laporan/belum_pemberkasan.php";
								break;
							case 'data-laporan-sudah-pemberkasan':
								include "admin/laporan/sudah_pemberkasan.php";
								break;

								//Kelola Pengguna
							case 'data-pengguna':
								include "admin/pengguna/data_pengguna.php";
								break;
							case 'add-pengguna':
								include "admin/pengguna/add_pengguna.php";
								break;
							case 'edit-pengguna':
								include "admin/pengguna/edit_pengguna.php";
								break;
							case 'del-pengguna':
								include "admin/pengguna/del_pengguna.php";
								break;

								//default
							default:
								echo "<center><h1> ERROR !</h1></center>";
								break;
						}
					} else {
						// Auto Halaman Home Pengguna
						if ($data_level == "Administrator") {
							include "home/admin.php";
						} elseif ($data_level == "Calon Siswa") {
							include "logout.php";
						}
					}
					?>

				</div>
			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->

		<footer class="main-footer">
			<div class="d-none d-sm-block">
				<center>
					Copyright &copy;
					<a href="index.php">
						<strong> E - PPDB</strong>
					</a>
					All rights reserved.
				</center>
			</div>
		</footer>

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
		</aside>
		<!-- /.control-sidebar -->
	</div>
	<!-- ./wrapper -->

	<!-- jQuery -->
	<script src="plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- Select2 -->
	<script src="plugins/select2/js/select2.full.min.js"></script>
	<!-- DataTables -->
	<script src="plugins/datatables/jquery.dataTables.js"></script>
	<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
	<!-- AdminLTE App -->
	<script src="assets/js/adminlte.min.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="assets/js/demo.js"></script>
	<!-- page script -->
	<script src="plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>
	<script src="plugins/ckeditor/ckeditor.js"></script>

	<!-- Script Artikel -->
	<script>
		CKEDITOR.replace('ckeditor1');
	</script>

	<script>
		$(function() {
			$("#example1").DataTable();
			$('#example2').DataTable({
				"paging": true,
				"lengthChange": false,
				"searching": false,
				"ordering": true,
				"info": true,
				"autoWidth": false,
			});
		});
	</script>

	<script>
		$(function() {
			//Initialize Select2 Elements
			$('.select2').select2()

			//Initialize Select2 Elements
			$('.select2bs4').select2({
				theme: 'bootstrap4'
			})
		})
	</script>

</body>

</html>