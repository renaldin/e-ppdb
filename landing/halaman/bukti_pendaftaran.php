<?php
$id_daftar = $_GET['kode'];


$sql = $koneksi->query("select * from tb_tahun where status='Aktif'");
while ($data = $sql->fetch_assoc()) {
	$tahun = $data['id_tahun'];
}


$sql_cek = "SELECT * FROM tb_sekolah";
$query_cek = mysqli_query($koneksi, $sql_cek);
$data_cek = mysqli_fetch_array($query_cek, MYSQLI_BOTH); {
?>

	<br>
	<br>
	<div class="row">
		<div class="col-md-12">
		<?php
	}

	$sql_tampil = "select * from tb_pendaftaran where id_daftar='$id_daftar'";
	$query_tampil = mysqli_query($koneksi, $sql_tampil);
	$no = 1;
	while ($data = mysqli_fetch_array($query_tampil, MYSQLI_BOTH)) {
		?>
			<table style="width:100%">
				<tr style="border-top: 1px solid black; border-left: 1px solid black; border-collapse: collapse;">
					<th rowspan="5" width="25%">
						<center><img src="./assets/img/logo-e-ppdb.png" height="170px" width="170px" alt="Logo E-PPDB"></center>
					</th>
				</tr>
				<tr style="border-right: 1px solid black; border-collapse: collapse;">
					<td style="padding-left: 10px;"><span style="font-size: 20px;">PANITIA PENERIMAAN PESERTA DIDIK BARU</span></td>
				</tr>
				<tr style="border-right: 1px solid black; border-collapse: collapse;">
					<td style="padding-left: 10px;"><span style="font-size: 40px;"><b><?= $data_cek['nama_sekolah'] ?></b></span></td>
				</tr>
				<tr style="border-right: 1px solid black; border-collapse: collapse;">
					<td style="padding-left: 10px;"><span style="font-size: 20px;">TAHUN PELAJARAN <?= $tahun; ?></span></td>
				</tr>
				<tr style="border-bottom: 1px solid black; border-right: 1px solid black; border-collapse: collapse;">
					<td style="padding-left: 10px;">
						<span style="font-size: 17px;">Alamat : Kp. Selagedang RT/RW 01/o3 Desa Sukalilah Kecamatan Cibatu
							<br>Kabupaten Garut email : mi.assalafush”gmail.com</span>
					</td>
				</tr>
				<tr style="border-bottom: 1px solid black; border-right: 1px solid black; border-left: 1px solid black; border-collapse: collapse;">
					<td colspan="3">
						<span style="font-size: 30px;">
							<center><b>KARTU BUKTI PENDAFTARAN PESERTA DIDIK BARU</b></center>
						</span>
					</td>
				</tr>
			</table>
			<!-- middle -->
			<table style="width:100%">
				<tr style="border-right: 1px solid black; border-left: 1px solid black; border-collapse: collapse;">
					<td style="padding-left: 10px;" width="10px"><b>1</b></td>
					<td style="padding-left: 10px;"><b>Data Pribadi</b></td>
					<td style="padding-left: 10px;"></td>
				</tr>
				<tr style="border-left: 1px solid black; border-collapse: collapse;">
					<th></th>
					<th></th>
					<th></th>
					<th rowspan="5" width="25%">
						<center><img src="./assets/img/dokumen/<?php echo $data['foto'] ?>" height="170px" width="170px" alt="Foto Peserta"></center>
					</th>
				</tr>
				<tr style="border-right: 1px solid black; border-left: 1px solid black; border-collapse: collapse;">
					<td style="padding-left: 10px;"></td>
					<td style="padding-left: 10px;" width="170px">NISN</td>
					<td style="padding-left: 10px;">: <?php echo $data['nisn'] ?></td>
				</tr>
				<tr style="border-right: 1px solid black; border-left: 1px solid black; border-collapse: collapse;">
					<td style="padding-left: 10px;"></td>
					<td style="padding-left: 10px;">Nama</td>
					<td style="padding-left: 10px;">: <?php echo $data['nama_lengkap_siswa'] ?></td>
				</tr>
				<tr style="border-right: 1px solid black; border-left: 1px solid black; border-collapse: collapse;">
					<td style="padding-left: 10px;"></td>
					<td style="padding-left: 10px;">TTL</td>
					<td style="padding-left: 10px;">: <?php echo $data['tempat_lh'] ?>, <?php echo $data['tgl_lh'] ?></td>
				</tr>
				<tr style="border-right: 1px solid black; border-left: 1px solid black; border-collapse: collapse;">
					<td style="padding-left: 10px;"></td>
					<td style="padding-left: 10px;">Alamat</td>
					<td style="padding-left: 10px;">: <?php echo $data['alamat'] ?>, Desa <?php echo $data['desa'] ?>, Kecamatan <?php echo $data['kecamatan'] ?>, Kabupaten <?php echo $data['kabupaten'] ?></td>
				</tr>
				<tr style="border-right: 1px solid black; border-left: 1px solid black; border-collapse: collapse;">
					<td style="padding-left: 10px;"></td>
					<td style="padding-left: 10px;">No. HP</td>
					<td style="padding-left: 10px;">: <?php echo $data['telepon_ayah'] ?></td>
				</tr>
			</table>
			<!-- bottom -->
			<br>
			<table style="width:100%">
				<tr style="border-right: 1px solid black; border-left: 1px solid black; border-collapse: collapse;">
					<td style="padding-left: 10px;" width="10px"><b>2</b></td>
					<td style="padding-left: 10px;"><b>Berkas</b></td>
					<td style="padding-left: 10px;"></td>
				</tr>
				<tr style="border-right: 1px solid black; border-left: 1px solid black; border-collapse: collapse;">
					<td style="padding-left: 10px;"></td>
					<td style="padding-left: 10px;" width="300px">Foto</td>
					<td style="padding-left: 10px;">:
						<?php if ($data['foto']) {
							echo "Terlampir";
						} else {
							echo "Tidak Terlampir";
						} ?>
					</td>
				</tr>
				<tr style="border-right: 1px solid black; border-left: 1px solid black; border-collapse: collapse;">
					<td style="padding-left: 10px;"></td>
					<td style="padding-left: 10px;" width="300px">Kartu Kelurga</td>
					<td style="padding-left: 10px;">:
						<?php if ($data['kartu_keluarga']) {
							echo "Terlampir";
						} else {
							echo "Tidak Terlampir";
						} ?>
					</td>
				</tr>
				<tr style="border-right: 1px solid black; border-left: 1px solid black; border-collapse: collapse;">
					<td style="padding-left: 10px;"></td>
					<td style="padding-left: 10px;" width="300px">Akte Kelahiran</td>
					<td style="padding-left: 10px;">:
						<?php if ($data['akte_kelahiran']) {
							echo "Terlampir";
						} else {
							echo "Tidak Terlampir";
						} ?>
					</td>
				</tr>
				<tr style="border-right: 1px solid black; border-left: 1px solid black; border-collapse: collapse;">
					<td style="padding-left: 10px;"></td>
					<td style="padding-left: 10px;" width="300px">KTP Orang Tua/Wali</td>
					<td style="padding-left: 10px;">:
						<?php if ($data['ktp_ayah'] && $data['ktp_ibu']) {
							echo "Terlampir";
						} else {
							echo "Tidak Terlampir";
						} ?>
					</td>
				</tr>
				<tr style="border-right: 1px solid black; border-left: 1px solid black; border-collapse: collapse;">
					<td style="padding-left: 10px;"></td>
					<td style="padding-left: 10px;" width="300px">Ijazah RA/TK</td>
					<td style="padding-left: 10px;">:
						<?php if ($data['ijazah_paud']) {
							echo "Terlampir";
						} else {
							echo "Tidak Terlampir";
						} ?>
					</td>
				</tr>
				<tr style="border-right: 1px solid black; border-left: 1px solid black; border-collapse: collapse;">
					<td style="padding-left: 10px;"></td>
					<td style="padding-left: 10px; " width="300px">kartu KKS/KPS/PKH/KIP (Tidak Wajib)</td>
					<td style="padding-left: 10px;">:
						<?php if ($data['kartu']) {
							echo "Terlampir";
						} else {
							echo "Tidak Terlampir";
						} ?>
					</td>
				</tr>
				<tr style="border: 1px solid black; border-collapse: collapse;">
					<td style="padding: 40px;" colspan="3">
						Catatan : <br>
						Kartu ini wajib dibawa saat Verifikasi berkas pada tanggal 12 – 30 Juni 2022
					</td>
				</tr>
			</table>
		</div>
	</div>
<?php } ?>