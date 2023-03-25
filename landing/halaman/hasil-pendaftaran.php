<?php

if (isset($_POST['nik'])) {
	//anti inject sql
	$nik = mysqli_real_escape_string($koneksi, $_POST['nik']);

	//query cek
	$sql_cek = "SELECT * FROM tb_pendaftaran WHERE BINARY nik='$nik'";
	$query_cek = mysqli_query($koneksi, $sql_cek);
	$data_cek = mysqli_fetch_array($query_cek, MYSQLI_BOTH);
	$jumlah_cek = mysqli_num_rows($query_cek);


	if ($jumlah_cek == 1) {
	} else {
		echo "<script>
			Swal.fire({title: '',text: 'Error! Data tidak ditemukan.',icon: 'error',confirmButtonText: 'OK'
			}).then((result) => {if (result.value)
				{window.location = 'welcome.php?page=modul-informasi';}
			})</script>";
	}
}

$nik = $_POST['nik'];

$sql_cek_sekolah = "SELECT * FROM tb_sekolah";
$query_cek_sekolah = mysqli_query($koneksi, $sql_cek_sekolah);
$data_cek_sekolah = mysqli_fetch_array($query_cek_sekolah, MYSQLI_BOTH);

$sql_cek = "SELECT * FROM tb_pendaftaran WHERE nik='$nik'";
$query_cek = mysqli_query($koneksi, $sql_cek);
$data_cek = mysqli_fetch_array($query_cek, MYSQLI_BOTH);
?>

<div class="container">
	<br>
	<br>
	<div class="row">
		<div class="col-lg-12 mb-4">
			<div class="card h-100">
				<h5 class="card-header"><strong>HASIL PENCARIAN DENGAN NIK :
					<?php echo $data_cek['nik']; ?> </strong>
				</h5>
				<div class="card-body">
					<table border="1" cellspacing="0" height="230px" style="width: 75%">
						<tbody>
							<tr>
								<td>NIK</td>
								<td>:</td>
								<td>
									<?php echo $data_cek['nik']; ?>
								</td>

							</tr>
							<tr>
								<td>Nama Peserta</td>
								<td>:</td>
								<td>
									<?php echo $data_cek['nama_lengkap_siswa']; ?>
								</td>
							</tr>
							<tr>
								<td>Jenis Kelamin</td>
								<td>:</td>
								<td>
									<?php echo $data_cek['jekel']; ?>
								</td>
							</tr>
							<tr>
								<td>TTL</td>
								<td>:</td>
								<td>
									<?php echo $data_cek['tempat_lh']; ?>
									/
									<?php echo $data_cek['tgl_lh']; ?>
								</td>
							</tr>
							<tr>
								<td>Alamat</td>
								<td>:</td>
								<td>
									<?php echo $data_cek['alamat']; ?>, <?php echo $data_cek['desa']; ?>, <?php echo $data_cek['kecamatan']; ?>, <?php echo $data_cek['kabupaten']; ?>, <?php echo $data_cek['provinsi']; ?>
								</td>
							</tr>
							<tr>
								<td>No KK</td>
								<td>:</td>
								<td>
									<?php echo $data_cek['no_kk']; ?>
								</td>
							</tr>
							<tr>
								<td>Nama Ayah</td>
								<td>:</td>
								<td>
									<?php echo $data_cek['nama_ayah']; ?>
								</td>
							</tr>
							<tr>
								<td>Nama Ibu</td>
								<td>:</td>
								<td>
									<?php echo $data_cek['nama_ibu']; ?>
								</td>
							</tr>
						</tbody>
					</table>
					<br>

					<a href="download_bukti_pendaftaran.php?kode=<?php echo $data_cek['id_daftar']; ?>" target="_blank">
						<button class="btn btn-danger mb-2">Download Bukti Pendaftaran</button>
					</a>
					<br>
					<br>
				</div>
				<div class="card-footer">
					<strong>Selamat Anda sudah mengisi formulir pendaftaran secara online!!!<br>Dokumen Anda akan diseleksi, ditunggu pengumuman hasil PPDB nya!!!</strong>
				</div>
			</div>
		</div>
	</div>
</div>
<!--end-->