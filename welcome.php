<?php
session_start();
include "connect/koneksi.php";
?>
<?php
$sql = $koneksi->query("select * from tb_sekolah");
while ($data = $sql->fetch_assoc()) {
	$nama = $data['nama_sekolah'];
	$alamat = $data['alamat_sekolah'];
	$no_wa = $data['no_wa'];
}

$sql_sesi = "SELECT * FROM tb_sesi";
$query_cek_sesi = mysqli_query($koneksi, $sql_sesi);
$data_cek_sesi = mysqli_fetch_array($query_cek_sesi, MYSQLI_BOTH);

$sql_peserta = "SELECT * FROM tb_pendaftaran";
$query_peserta = mysqli_query($koneksi, $sql_peserta);
// $jumlah_peserta = 40;
$jumlah_peserta = mysqli_num_rows($query_peserta);
$batas_kuota = $data_cek_sesi['kuota_pendaftaran'];
$sisa_kuota = $batas_kuota - $jumlah_peserta;
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>E-PPDB |
		<?php echo $nama; ?>
	</title>
	<link rel="icon" href="assets/img/logo.png">

	<!-- Bootstrap core CSS -->
	<link href="landing/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Bootstrap CSS -->
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
	<!-- Custom styles for this template -->
	<link href="landing/css/modern-business.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="assets/css/adminlte.min.css">
	<!-- Select2 -->
	<link rel="stylesheet" href="plugins/select2/css/select2.min.css">
	<link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	<!-- Alert -->
	<script src="plugins/alert.js"></script>
	<!-- Animation Aos -->
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

</head>

<body style="background-image: url('assets/img/bg4.png'); background-size:cover; background-repeat: no-repeat;">

	<!-- Navigation -->
	<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-danger fixed-top" data-aos="zoom-in-down">
		<div class="container">
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<a class="navbar-brand" href="?page=modul-about">
				<h5>
					<b><?php echo $nama; ?></b>&nbsp;&nbsp;&nbsp;
					<img src="assets/img/logo.png" width="40px" height="40px" alt="Logo">
				</h5>
			</a>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item mb-1">
						<a class="btn btn-danger" href="?page=modul-home">Home</a>
					</li>
					<li class="nav-item dropdown">
						<a class="btn btn-danger dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
							Profil
						</a>
						<div class="dropdown-menu bg-danger" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="?page=modul-profil">Profil Sekolah</a>
							<a class="dropdown-item" href="?page=modul-visi-misi">Visi & Misi</a>
							<a class="dropdown-item" href="?page=modul-prestasi">Prestasi</a>
							<a class="dropdown-item" href="?page=modul-kegiatan">Kegiatan Sekolah</a>
							<a class="dropdown-item" href="?page=modul-struktur">Struktur Organisasi</a>
							<a class="dropdown-item" href="?page=modul-pengajar">Pengajar</a>
							<a class="dropdown-item" href="?page=modul-lokasi">Lokasi</a>
							<a class="dropdown-item" href="?page=modul-kurikulum_biaya">Kurikulum & Biaya</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="btn btn-danger dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
							Pendaftaran
						</a>
						<div class="dropdown-menu bg-danger" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="?page=modul-informasi">Informasi PPDB</a>
							<a class="dropdown-item" href="?page=modul-brosur">Brosur</a>
							<a class="dropdown-item" href="?page=modul-help">Panduan</a>
							<?php if ($jumlah_peserta >= $batas_kuota) { ?>
								<a class="dropdown-item" href="?page=modul-pesan">Formulir Online</a>
							<?php } else if (isset($_SESSION["ses_username"]) == "") { ?>
								<a class="dropdown-item" href="login.php">Formulir Online</a>
							<?php } else { ?>
								<a class="dropdown-item" href="?page=modul-register">Formulir Online</a>
							<?php } ?>
							<a class="dropdown-item" href="?page=modul-hasil-ppdb">Hasil PPDB</a>
						</div>
					</li>
					<li class="nav-item mb-1">
						<a class="btn btn-danger" href="?page=modul-artikel">Artikel</a>
					</li>
					<?php if (isset($_SESSION["ses_level"]) == "") { ?>
						<li class="nav-item mb-1">
							<a class="btn btn-primary" href="login.php">
								<b>Login</b>
							</a>
						</li>
					<?php } else { ?>
						<li class="nav-item mb-1 ml-1">
							<a onclick="return confirm('Apakah anda yakin akan keluar ?')" class="btn btn-danger" href="logout.php">
								<b>Logout</b>
							</a>
						</li>
					<?php } ?>
				</ul>
			</div>
		</div>
	</nav>

	<!-- Page Content -->
	<div>
		<!-- /. WEB DINAMIS DISINI ############################################################################### -->
		<?php
		if (isset($_GET['page'])) {
			$halaman = $_GET['page'];

			switch ($halaman) {

				case 'modul-pesan':
					include "landing/halaman/pesan-kuota-penuh.php";
					break;

				case 'modul-home':
					include "landing/halaman/home.php";
					break;
				case 'modul-profil':
					include "landing/halaman/profil.php";
					break;
				case 'modul-visi-misi':
					include "landing/halaman/visi-misi.php";
					break;
				case 'modul-prestasi':
					include "landing/halaman/prestasi.php";
					break;
				case 'modul-kegiatan':
					include "landing/halaman/kegiatan.php";
					break;
				case 'modul-pengajar':
					include "landing/halaman/pengajar.php";
					break;
				case 'modul-struktur':
					include "landing/halaman/struktur.php";
					break;
				case 'modul-lokasi':
					include "landing/halaman/lokasi.php";
					break;
				case 'modul-kurikulum_biaya':
					include "landing/halaman/kurikulum_biaya.php";
					break;
				case 'modul-informasi':
					include "landing/halaman/informasi-ppdb.php";
					break;
				case 'modul-baca-informasi':
					include "landing/halaman/baca-informasi.php";
					break;
				case 'modul-artikel':
					include "landing/halaman/artikel.php";
					break;
				case 'modul-baca-artikel':
					include "landing/halaman/baca-artikel.php";
					break;
				case 'modul-help':
					include "landing/halaman/panduan.php";
					break;
				case 'modul-brosur':
					include "landing/halaman/brosur.php";
					break;
				case 'modul-register':
					include "landing/halaman/daftar.php";
					break;

				case 'modul-hasil-pendaftaran':
					include "landing/halaman/hasil-pendaftaran.php";
					break;
				case 'modul-hasil':
					include "landing/halaman/data_pendaftaran.php";
					break;
				case 'modul-hasil-ppdb':
					include "landing/halaman/hasil-ppdb.php";
					break;
				case 'modul-bukti-pendaftaran':
					include "landing/halaman/bukti_pendaftaran.php";
					break;

					//default
				default:
					include "landing/halaman/home.php";
					break;
			}
		} else {
			include "landing/halaman/home.php";
		}
		?>

	</div>
	<!-- /.container -->
	<br>
	<br>
	<!-- Footer -->
	<footer class="py-1 bg-danger">
		<div class="container">
			<p class="m-0 text-center text-white">Copyright &copy; <?= date('Y') ?> | E-PPDB</p>
		</div>
		<!-- /.container -->
	</footer>

	<!-- Bootstrap core JavaScript -->
	<script src="landing/vendor/jquery/jquery.min.js"></script>
	<script src="landing/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- Bootstrap core JavaScript Online -->
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
	<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
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
	<!-- Animation Aos -->
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	<script>
		AOS.init();
	</script>
	<!-- page script -->
	<script src="plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>
	<script>
		$(function() {
			$("#example1").DataTable();
			$('#example2').DataTable({
				"paging": true,
				"lengthChange": false,
				"searching": true,
				"ordering": false,
				"info": false,
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