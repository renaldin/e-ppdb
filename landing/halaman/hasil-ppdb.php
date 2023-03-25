<?php

$sql = $koneksi->query("select * from tb_tahun where status='Aktif'");
while ($data = $sql->fetch_assoc()) {
	$tahun = $data['id_tahun'];
}

$sql_cek_sekolah = "SELECT * FROM tb_sekolah";
$query_cek_sekolah = mysqli_query($koneksi, $sql_cek_sekolah);
$data_cek_sekolah = mysqli_fetch_array($query_cek_sekolah, MYSQLI_BOTH);

$sql_sesi = "SELECT * FROM tb_sesi";
$query_cek_sesi = mysqli_query($koneksi, $sql_sesi);
$data_cek_sesi = mysqli_fetch_array($query_cek_sesi, MYSQLI_BOTH);

$sql_peserta_belum_pemberkasan = "SELECT * FROM tb_pendaftaran WHERE berkas='belum'";
$query_peserta_belum_pemberkasan = mysqli_query($koneksi, $sql_peserta_belum_pemberkasan);
$jumlah_peserta_belum_pemberkasan = mysqli_num_rows($query_peserta_belum_pemberkasan);

$sql_peserta_sudah_pemberkasan = "SELECT * FROM tb_pendaftaran WHERE berkas='sudah'";
$query_peserta_sudah_pemberkasan = mysqli_query($koneksi, $sql_peserta_sudah_pemberkasan);
$jumlah_peserta_sudah_pemberkasan = mysqli_num_rows($query_peserta_sudah_pemberkasan);

$sql_peserta = "SELECT * FROM tb_pendaftaran";
$query_peserta = mysqli_query($koneksi, $sql_peserta);
$jumlah_peserta = mysqli_num_rows($query_peserta);
$batas_kuota = $data_cek_sesi['kuota_pendaftaran'];
$sisa_kuota = $batas_kuota - $jumlah_peserta;

?>

<div class="container">
	<!-- Page Heading/Breadcrumbs -->
	<br>
	<br>
	<!-- Intro Content -->
	<div class="row">
		<div class="col-lg-6" data-aos="zoom-in-left">
			<img src="landing/vendor/12.png" width="100%" alt="Gambar Informasi PPDB" />
		</div>
		<div class="col-lg-6" data-aos="zoom-in-right">
			<h3> <b>Informasi Penerimaan Peserta Didik Baru </b></h3>
			<p style="text-align:justify">
			</p>
			<p style="text-align:justify">
				Daftar peserta hasil PPDB dibawah ini merupakan hasil dari proses pendaftaran pada webiste ini dan Panitia PPDB sudah melakukan pengecekan berkas yang terkait. Berikut deskripsi dan daftar peserta penerimaan peserta didik baru yang dilakukan oleh <?php echo $data_cek_sekolah['nama_sekolah'] ?>.
			</p>
			<h4>Deskripsi</h4>
			<table>
				<tr>
					<th>Tahun Penerimaan</th>
					<td class="text-center" width="20px">:</td>
					<td><?php echo $tahun; ?></td>
				</tr>
				<tr>
					<th>Tanggal Periode</th>
					<td class="text-center" width="20px">:</td>
					<td><?php echo $data_cek_sesi['tgl_awal']; ?> s/d <?php echo $data_cek_sesi['tgl_akhir'] ?></td>
				</tr>
				<tr>
					<th>Nama Sekolah</th>
					<td class="text-center" width="20px">:</td>
					<td><?php echo $data_cek_sekolah['nama_sekolah']; ?></td>
				</tr>
				<tr>
					<th>Jumlah Peserta Sudah Pemberkasan</th>
					<td class="text-center" width="20px">:</td>
					<td><?php echo $jumlah_peserta_sudah_pemberkasan; ?> Peserta</td>
				</tr>
				<tr>
					<th>Jumlah Peserta Belum Pemberkasan</th>
					<td class="text-center" width="20px">:</td>
					<td><?php echo $jumlah_peserta_belum_pemberkasan; ?> Peserta</td>
				</tr>
				<tr>
					<th>Jumlah Peserta PPDB</th>
					<td class="text-center" width="20px">:</td>
					<td><?php echo $jumlah_peserta; ?> Peserta</td>
				</tr>
				<tr>
					<th>Sisa Kuota Pendaftaran</th>
					<td class="text-center" width="20px">:</td>
					<td><?php echo $sisa_kuota; ?> Peserta dari <?php echo $batas_kuota ?> Peserta yang akan diterima</td>
				</tr>
			</table>
		</div>
	</div>
	<!-- /.row -->
	<br>
	<div class="row">
		<div class="col-lg-12 mb-4" data-aos="zoom-in-up">
			<div class="card">
				<h4 class="card-header">Daftar Hasil Penerimaan Peserta Didik Baru</h4>
				<div class="card-body">
					<table class="table table-bordered table-striped table-responsive" id="example1"" align=" center">
						<thead>
							<tr class=" bg-danger text-white">
								<th class="text-center" width="15px">No.</th>
								<th class="text-center">Nama Siswa</th>
								<th class="text-center">Tempat. Tanggal Lahir</th>
								<th class="text-center">Jenis Kelamin</th>
								<th class="text-center">Agama</th>
								<th class="text-center">Alamat</th>
								<th class="text-center">Status Pemberkasan</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no = 1;
							$sql = $koneksi->query("select * from tb_pendaftaran where berkas='Sudah'");
							while ($data = $sql->fetch_assoc()) { ?>
								<tr>
									<td><?php echo $no++; ?></td>
									<td><?php echo $data['nama_lengkap_siswa']; ?></td>
									<td><?php echo $data['tempat_lh'], $data['tgl_lh']; ?></td>
									<td><?php echo $data['jekel']; ?></td>
									<td><?php echo $data['agama']; ?></td>
									<td><?php echo $data['alamat']; ?>, <?php echo $data['desa']; ?>, <?php echo $data['kabupaten']; ?>, <?php echo $data['provinsi']; ?></td>
									<td><?php echo $data['berkas']; ?></td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
				<div class=" card-footer">
				</div>
			</div>
		</div>
	</div>
</div>
<!--end-->