<?php
$sql = $koneksi->query("select * from tb_sekolah");
while ($data = $sql->fetch_assoc()) {
	$id_sekolah = $data['id_sekolah'];
	$nama = $data['nama_sekolah'];
	$alamat = $data['alamat_sekolah'];
	$akreditasi = $data['akreditasi'];
	$deskripsi = $data['deskripsi'];
	$nsm = $data['nsm'];
	$npsn = $data['npsn'];
	$npwp = $data['npwp'];
	$latitude = $data['latitude'];
	$longitude = $data['longitude'];
	$email = $data['email'];
	$no_rekening = $data['no_rekening'];
	$bank = $data['bank'];
	$no_sk_pendirian = $data['no_sk_pendirian'];
	$tanggal_sk_pendirian = $data['tanggal_sk_pendirian'];
	$no_izin_operasional = $data['no_izin_operasional'];
	$tanggal_izin_operasional = $data['tanggal_izin_operasional'];
	$no_sk_akreditasi = $data['no_sk_akreditasi'];
	$tanggal_sk_akreditasi = $data['tanggal_sk_akreditasi'];
	$nama_kepala = $data['nama_kepala'];
	$no_telepon = $data['no_telepon'];
	$nama_yayasan = $data['nama_yayasan'];
	$no_sk_kemkumham = $data['no_sk_kemkumham'];
	$tanggal_sk_kemkumham = $data['tanggal_sk_kemkumham'];
	$akte_notaris_yayasan = $data['akte_notaris_yayasan'];
	$status_tanah = $data['status_tanah'];
	$luas_tanah = $data['luas_tanah'];
	$status_bangunan = $data['status_bangunan'];
	$luas_bangunan = $data['luas_bangunan'];
}
?>

<div class="container">
	<!-- Page Heading/Breadcrumbs -->
	<br>
	<br>
	<!-- Intro Content -->
	<div class="row">
		<div class="col-lg-6" data-aos="fade-up-left">
			<img src="landing/vendor/ProfilSekolah.jpg" width="100%" alt="Gambar Profil Sekolah" />
		</div>
		<div class="col-lg-6" data-aos="fade-up-right">
			<h3><?= $nama; ?></h3>
			<p style="text-align:justify">
				<?= $deskripsi; ?>
			</p>
			<a href="?page=modul-register" class="btn btn-danger">PENDAFTARAN</a>
		</div>
	</div>
	<!-- /.row -->
	<div class="row mt-4">
		<div class="col-md-12" data-aos="fade-up">
			<div class="card card-danger">
				<div class="card-header">
					<h3 class="card-title">
						<i class="fa fa-home"></i> Identitas Sekolah
					</h3>
					<div class="card-tools">
					</div>
				</div>
				<div class="card-body p-1">
					<table class="table" border="0">
						<tbody>
							<tr>
								<td width="30%">
									<b>Nama Lembaga</b>
								</td>
								<td>
									<?php echo $nama; ?>
								</td>
							</tr>
							<tr>
								<td>
									<b>NSM</b>
								</td>
								<td>
									<?php echo $nsm; ?>
								</td>
							</tr>
							<tr>
								<td>
									<b>NPSN</b>
								</td>
								<td>
									<?php echo $npsn; ?>
								</td>
							</tr>
							<tr>
								<td>
									<b>NPWP</b>
								</td>
								<td>
									<?php echo $npwp; ?>
								</td>
							</tr>
							<tr>
								<td>
									<b>Titik Koordinat</b>
								</td>
								<td>
									<?php echo $latitude; ?>, <?php echo $longitude; ?>
								</td>
							</tr>
							<tr>
								<td>
									<b>Email</b>
								</td>
								<td>
									<?php echo $email; ?>
								</td>
							</tr>
							<tr>
								<td>
									<b>No Rekening</b>
								</td>
								<td>
									<?php echo $no_rekening; ?>
								</td>
							</tr>
							<tr>
								<td>
									<b>Bank</b>
								</td>
								<td>
									<?php echo $bank; ?>
								</td>
							</tr>
							<tr>
								<td>
									<b>No. SK Pendirian</b>
								</td>
								<td>
									<?php echo $no_sk_pendirian; ?>
								</td>
							</tr>
							<tr>
								<td>
									<b>Tanggal SK Pendirian</b>
								</td>
								<td>
									<?php echo date('d F Y', strtotime($tanggal_sk_pendirian)) ?>
								</td>
							</tr>
							<tr>
								<td>
									<b>No. Izin Operasional</b>
								</td>
								<td>
									<?php echo $no_izin_operasional; ?>
								</td>
							</tr>
							<tr>
								<td>
									<b>Tanggal Izin Operasional</b>
								</td>
								<td>
									<?php echo date('d F Y', strtotime($tanggal_izin_operasional)) ?>
								</td>
							</tr>
							<tr>
								<td>
									<b>Akreditasi</b>
								</td>
								<td>
									<?php echo $akreditasi; ?>
								</td>
							</tr>
							<tr>
								<td>
									<b>No. SK Akreditasi</b>
								</td>
								<td>
									<?php echo $no_sk_akreditasi; ?>
								</td>
							</tr>
							<tr>
								<td>
									<b>Tanggal SK Akreditasi</b>
								</td>
								<td>
									<?php echo date('d F Y', strtotime($tanggal_sk_akreditasi)) ?>
								</td>
							</tr>
							<tr>
								<td>
									<b>Nama Kepala Sekolah</b>
								</td>
								<td>
									<?php echo $nama_kepala; ?>
								</td>
							</tr>
							<tr>
								<td>
									<b>No. Telepon Sekolah</b>
								</td>
								<td>
									<?php echo $no_telepon; ?>
								</td>
							</tr>
							<tr>
								<td>
									<b>Nama Yayasan</b>
								</td>
								<td>
									<?php echo $nama_yayasan; ?>
								</td>
							</tr>
							<tr>
								<td>
									<b>No. SK KemKumHam</b>
								</td>
								<td>
									<?php echo $no_sk_kemkumham; ?>
								</td>
							</tr>
							<tr>
								<td>
									<b>Kepemilikan Tanah</b>
								</td>
								<td>
									<?php echo $status_tanah; ?>, <?php echo $luas_tanah; ?>
								</td>
							</tr>
							<tr>
								<td>
									<b>Status Bangunan</b>
								</td>
								<td>
									<?php echo $status_bangunan; ?>
								</td>
							</tr>
							<tr>
								<td>
									<b>Luas Bangunan</b>
								</td>
								<td>
									<?php echo $luas_bangunan; ?>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<!--END -->