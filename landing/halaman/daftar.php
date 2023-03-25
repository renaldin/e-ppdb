<?php

function generate_uuid()
{
	return sprintf(
		'%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
		mt_rand(0, 0xffff),
		mt_rand(0, 0xffff),
		mt_rand(0, 0xffff),
		mt_rand(0, 0x0fff) | 0x4000,
		mt_rand(0, 0x3fff) | 0x8000,
		mt_rand(0, 0xffff),
		mt_rand(0, 0xffff),
		mt_rand(0, 0xffff)
	);
}

$UUID = generate_uuid();

?>
<?php
$sql = $koneksi->query("select * from tb_tahun where status='Aktif'");
while ($data = $sql->fetch_assoc()) {
	$tahun = $data['id_tahun'];
}
?>
<!-- END -->
<?php

$sql_cek = "select * from tb_sesi";
$query_cek = mysqli_query($koneksi, $sql_cek);
$data_cek = mysqli_fetch_array($query_cek, MYSQLI_BOTH);


$tgl1 = date("Y-m-d");
$tgl2 = $data_cek['tgl_akhir'];

$pecah1 = explode("-", $tgl1);
$date1 = $pecah1[2];
$month1 = $pecah1[1];
$year1 = $pecah1[0];

$pecah2 = explode("-", $tgl2);
$date2 = $pecah2[2];
$month2 = $pecah2[1];
$year2 =  $pecah2[0];

$jd1 = GregorianToJD($month1, $date1, $year1);
$jd2 = GregorianToJD($month2, $date2, $year2);

$selisih = $jd1 - $jd2;
?>


<?php if ($selisih <= 0) { ?>

	<div class="container">
		<br>
		<br>
		<div class="row">
			<div class="col-lg-12 mb-4">
				<div class="card h-100" data-aos="zoom-in-up">
					<h4 class="card-header">FORMULIR PPDB ONLINE TA
						<?= $tahun; ?>
					</h4>
					<div class="card-body">

						<form action="" method="post" enctype="multipart/form-data">
							<!-- Biodata Peserta -->
							<label>
								<B>A. BIODATA PESERTA <span class="text-danger">* (harus diisi)</span></B>
							</label>
							<div class="row" data-aos="zoom-in-left">
								<div class="col-md-6">
									<div class="form-group">
										<label>Nama Lengkap Siswa</label>
										<input type="text" name="nama_lengkap_siswa" class="form-control" placeholder="Masukkan Nama Lengkap Siswa" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Nama Panggilan Siswa</label>
										<input type="text" name="nama_panggilan_siswa" class="form-control" placeholder="Masukkan Nama Panggilan Siswa" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>NISN</label>
										<input type="text" name="nisn" class="form-control" placeholder="Masukkan NISN" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>NIK</label>
										<input type="text" name="nik" class="form-control" placeholder="Masukkan NIK" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Tempat Lahir</label>
										<input type="text" name="tempat_lh" class="form-control" placeholder="Masukkan Tempat Lahir" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Tanggal Lahir</label>
										<input type="date" name="tgl_lh" class="form-control" required>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label>Jenis Kelamin</label>
										<div>
											<select name="jekel" id="jekel" class="form-control" required>
												<option>- Pilih -</option>
												<option>Laki-laki</option>
												<option>Perempuan</option>
											</select>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Agama</label>
										<div>
											<select name="agama" id="agama" class="form-control" required>
												<option>- Pilih -</option>
												<option>Islam</option>
												<option>Kristen</option>
												<option>Katolik</option>
												<option>Hindu</option>
												<option>Budha</option>
												<option>Konghucu</option>
												<option>Kepercayaan Lain</option>
											</select>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Kewargangeraan</label>
										<input type="text" name="kewarganegaraan" class="form-control" placeholder="Masukkan Kewarganegaraan" required>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label>Alamat</label>
										<input type="text" name="alamat" class="form-control" placeholder="Contoh : Kp. Contoh, RT 01 / RW 01" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Desa</label>
										<input type="text" name="desa" class="form-control" placeholder="Masukkan Desa" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Kode Pos</label>
										<input type="text" name="kode_pos" class="form-control" placeholder="Masukkan Kode Pos" required>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Kecamatan</label>
										<input type="text" name="kecamatan" class="form-control" placeholder="Kecamatan" required>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Kabupaten</label>
										<input type="text" name="kabupaten" class="form-control" placeholder="Kabupaten" required>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Provinsi</label>
										<input type="text" name="provinsi" class="form-control" placeholder="Provinsi" required>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label>No Kartu Keluarga</label>
										<input type="text" name="no_kk" class="form-control" placeholder="Masukkan No Kartu Keluarga" required>
									</div>
								</div>
							</div>
							<br>
							<hr>
							<label>
								<B>B. BIODATA ORANG TUA/WALI <span class="text-danger">* (harus diisi)</span></B>
							</label>
							<!-- Biodata Ayah -->
							<div class="row" data-aos="zoom-in-right">
								<div class="col-md-12">
									<label>
										<b>Biodata Ayah/Wali</b>
									</label>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Nama Ayah</label>
										<input type="text" name="nama_ayah" class="form-control" placeholder="Masukkan Nama Ayah" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>NIK</label>
										<input type="text" name="nik_ayah" class="form-control" placeholder="Masukkan NIK" required>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label>Pendidikan</label>
										<div>
											<select name="pendidikan_ayah" id="pendidikan_ayah" class="form-control" required>
												<option>- Pilih -</option>
												<option>SD</option>
												<option>SMP</option>
												<option>SMA</option>
												<option>D1</option>
												<option>D2</option>
												<option>D3</option>
												<option>D4</option>
												<option>S1</option>
												<option>S2</option>
												<option>S3</option>
											</select>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Pekerjaan</label>
										<div>
											<select name="kerja_ayah" id="kerja_ayah" class="form-control" required>
												<option>- Pilih -</option>
												<option>Tidak Bekerja</option>
												<option>Almarhum</option>
												<option>Pensiunan</option>
												<option>PNS</option>
												<option>TN1/Polisi</option>
												<option>Guru/Dosen</option>
												<option>Pegawai Swasta</option>
												<option>Pengusaha/Wiraswasta</option>
												<option>Pengacara/Hakim/Jaksa/Notaris</option>
												<option>Seniman/Pelukis/Artis/Sejenis</option>
												<option>Dokter/Bidan/Perawat</option>
												<option>Pilot/Pramugari</option>
												<option>Pedagang</option>
												<option>Petani/Peternak</option>
												<option>Nelayan</option>
												<option>Buruh</option>
												<option>Supir/Masinis/Kondektur</option>
												<option>Politikus</option>
												<option>Lainnya</option>
											</select>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Penghasilan Per Bulan</label>
										<div>
											<select name="penghasilan_ayah" id="penghasilan_ayah" class="form-control" required>
												<option>- Pilih -</option>
												<option>
													< Rp. 500.000</option>
												<option>Rp. 500.000 - Rp. 1.000.000</option>
												<option>Rp. 1.000.000 - Rp. 2.000.000</option>
												<option>Rp. 2.000.000 - Rp. 3.000.000</option>
												<option>Rp. 3.000.000 - Rp. 5.000.000</option>
												<option>>Rp. 5.000.000</option>
											</select>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label>No. Handphone</label>
										<input type="text" name="telepon_ayah" class="form-control" placeholder="Contoh : 089456897987" required>
									</div>
								</div>
							</div>
							<!-- Biodata Ibu -->
							<div class="row" data-aos="zoom-in-left">
								<div class="col-md-12">
									<label>
										<b>Biodata Ibu/Wali</b>
									</label>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Nama Ibu</label>
										<input type="text" name="nama_ibu" class="form-control" placeholder="Masukkan Nama Ibu" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>NIK</label>
										<input type="text" name="nik_ibu" class="form-control" placeholder="Masukkan NIK" required>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label>Pendidikan</label>
										<div>
											<select name="pendidikan_ibu" id="pendidikan_ibu" class="form-control" required>
												<option>- Pilih -</option>
												<option>SD</option>
												<option>SMP</option>
												<option>SMA</option>
												<option>D1</option>
												<option>D2</option>
												<option>D3</option>
												<option>D4</option>
												<option>S1</option>
												<option>S2</option>
												<option>S3</option>
											</select>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Pekerjaan</label>
										<div>
											<select name="kerja_ibu" id="kerja_ibu" class="form-control" required>
												<option>- Pilih -</option>
												<option>Tidak Bekerja</option>
												<option>Almarhum</option>
												<option>Pensiunan</option>
												<option>PNS</option>
												<option>TN1/Polisi</option>
												<option>Guru/Dosen</option>
												<option>Pegawai Swasta</option>
												<option>Pengusaha/Wiraswasta</option>
												<option>Pengacara/Hakim/Jaksa/Notaris</option>
												<option>Seniman/Pelukis/Artis/Sejenis</option>
												<option>Dokter/Bidan/Perawat</option>
												<option>Pilot/Pramugari</option>
												<option>Pedagang</option>
												<option>Petani/Peternak</option>
												<option>Nelayan</option>
												<option>Buruh</option>
												<option>Supir/Masinis/Kondektur</option>
												<option>Politikus</option>
												<option>Lainnya</option>
											</select>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Penghasilan Per Bulan</label>
										<div>
											<select name="penghasilan_ibu" id="penghasilan_ibu" class="form-control" required>
												<option>- Pilih -</option>
												<option>
													< Rp. 500.000</option>
												<option>Rp. 500.000 - Rp. 1.000.000</option>
												<option>Rp. 1.000.000 - Rp. 2.000.000</option>
												<option>Rp. 2.000.000 - Rp. 3.000.000</option>
												<option>Rp. 3.000.000 - Rp. 5.000.000</option>
												<option>>Rp. 5.000.000</option>
											</select>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label>No. Handphone</label>
										<input type="text" name="telepon_ibu" class="form-control" placeholder="Contoh : 089456897987" required>
									</div>
								</div>
							</div>
							<br>
							<hr>
							<label>
								<B>C. BIODATA PESERTA LAINNYA <span class="text-danger">* (harus diisi)</span></B>
							</label>
							<!-- Data Peserta Lainnya -->
							<div class="row" data-aos="zoom-in-left">
								<div class="col-md-6">
									<div class="form-group">
										<label>Bertempat Tinggal Pada</label>
										<div>
											<select name="bertempat_tinggal" id="bertempat_tinggal" class="form-control" required>
												<option>- Pilih -</option>
												<option>Orang Tua</option>
												<option>Wali</option>
												<option>Panti Asuhan</option>
												<option>Lainnya</option>
											</select>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Berkubutuhan Khusus</label>
										<div>
											<select name="berkebutuhan_khusus" id="berkebutuhan_khusus" class="form-control" required>
												<option>- Pilih -</option>
												<option>Tidak</option>
												<option>Tuna Rungu</option>
												<option>Tuna Netra</option>
												<option>Tuna Daksa</option>
												<option>Tuna Grahita</option>
												<option>Tuna Laras</option>
												<option>Lamban Belajar</option>
												<option>Sulit Belajar</option>
												<option>Gangguan Komunikasi</option>
												<option>Bakat Luar Biasa</option>
											</select>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<label>Jumlah Saudara</label>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Kandung</label>
										<input type="number" name="jumlah_saudara_kandung" class="form-control">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Tiri</label>
										<input type="number" name="jumlah_saudara_tiri" class="form-control">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Angkat</label>
										<input type="number" name="jumlah_saudara_angkat" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Bahasa Sehari-hari</label>
										<input type="text" name="bahasa_sehari_hari" class="form-control" placeholder="Masukkan Bahasa Sehari-hari" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Golongan Darah</label>
										<div>
											<select name="gol_darah" id="gol_darah" class="form-control" required>
												<option>- Pilih -</option>
												<option>A</option>
												<option>AB</option>
												<option>B</option>
												<option>O</option>
											</select>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Tinggi Badan / cm</label>
										<input type="number" name="tinggi_badan" class="form-control" placeholder="Masukkan Tinggi Badan" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Berat Badan / kg</label>
										<input type="number" name="berat_badan" class="form-control" placeholder="Masukkan Berat Badan" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Jarak Rumah - Madrasah</label>
										<div>
											<select name="jarak_rumah" id="jarak_rumah" class="form-control" required>
												<option>- Pilih -</option>
												<option>
													< 1 km</option>
												<option>1-3 km</option>
												<option>3-5 km</option>
												<option>5-10 km</option>
												<option>> 10 km</option>
											</select>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Alat Transportasi Ke Sekolah</label>
										<div>
											<select name="alat_transportasi" id="alat_transportasi" class="form-control" required>
												<option>- Pilih -</option>
												<option>Jalan Kaki</option>
												<option>Sepeda</option>
												<option>Sepeda Motor</option>
												<option>Mobil Pribadi</option>
												<option>Antar Jemput Sekolah</option>
												<option>Angkutan Umum</option>
												<option>Lainnya</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<br>
							<hr>
							<label>
								<B>D. DATA SEKOLAH JENJANG SEBELUMNYA</B>
							</label>
							<!-- Data Data Sekolah Jenjang Sebelumnya -->
							<div class="row" data-aos="zoom-in-right">
								<div class="col-md-12">
									<div class="form-group">
										<label>Asal Murid</label>
										<div>
											<select name="asal_murid" id="asal_murid" class="form-control">
												<option>- Pilih -</option>
												<option>RA</option>
												<option>TK</option>
												<option>Paud</option>
												<option>Rumah Tangga</option>
												<option>Lainnya</option>
											</select>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Nama Lembaga</label>
										<input type="text" name="nama_lembaga" class="form-control" placeholder="Masukkan Nama Lembaga">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Status Lembaga</label>
										<div>
											<select name="status_lembaga" id="status_lembaga" class="form-control">
												<option>- Pilih -</option>
												<option>Negeri</option>
												<option>Swasta</option>
											</select>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>NPSN</label>
										<input type="text" name="npsn" class="form-control" placeholder="Masukkan NPSN">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>NSM</label>
										<input type="text" name="nsm" class="form-control" placeholder="Masukkan NSM">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label>Alamat</label>
										<input type="text" name="alamat_lembaga" class="form-control" placeholder="Contoh : Kp. Contoh, RT 01 / RW 01">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Desa</label>
										<input type="text" name="desa_lembaga" class="form-control" placeholder="Masukkan Desa">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Kode Pos</label>
										<input type="text" name="kode_pos_lembaga" class="form-control" placeholder="Masukkan Kode Pos">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Kecamatan</label>
										<input type="text" name="kecamatan_lembaga" class="form-control" placeholder="Kecamatan">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Kabupaten</label>
										<input type="text" name="kabupaten_lembaga" class="form-control" placeholder="Kabupaten">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Provinsi</label>
										<input type="text" name="provinsi_lembaga" class="form-control" placeholder="Provinsi">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>No. Ijazah RA/TK</label>
										<input type="text" name="no_ijazah_ra_tk" class="form-control" placeholder="Masukkan No Ijazah RA/TK">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Tanggal Ijazah</label>
										<input type="date" name="tanggal_ijazah" class="form-control" placeholder="Masukkan Tanggal Ijazah">
									</div>
								</div>
							</div>
							<br>
							<hr>
							<label>
								<B>E. MASUK MENJADI MURID PINDAHAN</B>
							</label>
							<!-- Masuk Menjadi Murid Pindahan -->
							<div class="row" data-aos="zoom-in-left">
								<div class="col-md-12">
									<div class="form-group">
										<label>Asal Murid</label>
										<div>
											<select name="asal_murid_pindahan" id="asal_murid_pindahan" class="form-control">
												<option>- Pilih -</option>
												<option>MI</option>
												<option>SD</option>
												<option>Lainnya</option>
											</select>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Nama Lembaga</label>
										<input type="text" name="nama_lembaga_pindahan" class="form-control" placeholder="Masukkan Nama Lembaga">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Status Lembaga</label>
										<div>
											<select name="status_lembaga_pindahan" id="status_lembaga_pindahan" class="form-control">
												<option>- Pilih -</option>
												<option>Negeri</option>
												<option>Swasta</option>
											</select>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>NPSN</label>
										<input type="text" name="npsn_pindahan" class="form-control" placeholder="Masukkan NPSN">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>NSM</label>
										<input type="text" name="nsm_pindahan" class="form-control" placeholder="Masukkan NSM">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label>Alamat</label>
										<input type="text" name="alamat_lembaga_pindahan" class="form-control" placeholder="Contoh : Kp. Contoh, RT 01 / RW 01">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Desa</label>
										<input type="text" name="desa_lembaga_pindahan" class="form-control" placeholder="Masukkan Desa">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Kode Pos</label>
										<input type="text" name="kode_pos_lembaga_pindahan" class="form-control" placeholder="Masukkan Kode Pos">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Kecamatan</label>
										<input type="text" name="kecamatan_lembaga_pindahan" class="form-control" placeholder="Kecamatan">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Kabupaten</label>
										<input type="text" name="kabupaten_lembaga_pindahan" class="form-control" placeholder="Kabupaten">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Provinsi</label>
										<input type="text" name="provinsi_lembaga_pindahan" class="form-control" placeholder="Provinsi">
									</div>
								</div>
							</div>
							<br>
							<hr>
							<label>
								<B>F. UPLOAD DOKUMEN <span class="text-danger">* (harus diisi maksimal ukuran file 1mb format .png/.jpg/.jpeg)</B>
							</label>
							<!-- Masuk Menjadi Murid Pindahan -->
							<div class="row" data-aos="zoom-in-left">
								<div class="col-md-12">
									<div class="form-group">
										<label>Foto Calon Siswa</label>
										<input type="file" name="foto" class="form-control" required>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Akte Kelahiran</label>
										<input type="file" name="akte_kelahiran" class="form-control" required>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Ijazah RA/TK/PAUD</label>
										<input type="file" name="ijazah_paud" class="form-control" required>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Kartu Keluarga</label>
										<input type="file" name="kartu_keluarga" class="form-control" required>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>KTP Ayah/Wali</label>
										<input type="file" name="ktp_ayah" class="form-control" required>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>KTP Ibu/Wali</label>
										<input type="file" name="ktp_ibu" class="form-control" required>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>KKS/KPS/PKH/KIP (Bagi Yang Memiliki)</label>
										<input type="file" name="kartu" class="form-control">
									</div>
								</div>
							</div>

							<div class="form-group" data-aos="zoom-in-up">
								<input type="submit" name="Simpan" value="DAFTAR SEKARANG" class="btn btn-danger">
							</div>
						</form>


					</div>
				</div>
			</div>
		</div>
	</div>

<?php } elseif ($selisih > 0) { ?>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<center>
		<h1 data-aos="zoom-in-up">Pendaftaran
			<?= $data_cek['sesi']; ?>
			Sudah Ditutup.</h1>
	</center>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
<?php } ?>

<?php

if (isset($_POST['Simpan'])) {
	$ekstensi_diperbolehkan    = array('png', 'jpg', 'jpeg');
	// Ambil Data
	$foto = $_FILES['foto']['name'];
	$akte_kelahiran = $_FILES['akte_kelahiran']['name'];
	$ijazah_paud = $_FILES['ijazah_paud']['name'];
	$kartu_keluarga = $_FILES['kartu_keluarga']['name'];
	$ktp_ayah = $_FILES['ktp_ayah']['name'];
	$ktp_ibu = $_FILES['ktp_ibu']['name'];
	$kartu = $_FILES['kartu']['name'];

	// Nama File
	$namafileFoto = time() . $foto;
	$namafileAkteKelahiran = time() . $akte_kelahiran;
	$namafileIjazah = time() . $ijazah_paud;
	$namafileKK = time() . $kartu_keluarga;
	$namafileKtpAyah = time() . $ktp_ayah;
	$namafileKtpIbu = time() . $ktp_ibu;
	$namafileKartu = time() . $kartu;

	// $ext = pathinfo($nama, PATHINFO_EXTENSION);
	// $random = crypt($nama, time());
	// Ekstensi
	$xFoto = explode('.', $foto);
	$xAkteKelahiran = explode('.', $akte_kelahiran);
	$xIjazah = explode('.', $ijazah_paud);
	$xKK = explode('.', $kartu_keluarga);
	$xKtpAyah = explode('.', $ktp_ayah);
	$xKtpIbu = explode('.', $ktp_ibu);
	$xKartu = explode('.', $kartu);

	$ekstensiFoto = strtolower(end($xFoto));
	$ekstensiAkteKelahiran = strtolower(end($xAkteKelahiran));
	$ekstensiIjazah = strtolower(end($xIjazah));
	$ekstensiKK = strtolower(end($xKK));
	$ekstensiKtpAyah = strtolower(end($xKtpAyah));
	$ekstensiKtpIbu = strtolower(end($xKtpIbu));
	$ekstensiKartu = strtolower(end($xKartu));

	// Ukuran
	$ukuranFoto    = $_FILES['foto']['size'];
	$ukuranAkteKelahiran    = $_FILES['akte_kelahiran']['size'];
	$ukuranIjazah    = $_FILES['ijazah_paud']['size'];
	$ukuranKK    = $_FILES['kartu_keluarga']['size'];
	$ukuranKtpAyah    = $_FILES['ktp_ayah']['size'];
	$ukuranKtpIbu    = $_FILES['ktp_ibu']['size'];
	$ukuranKartu    = $_FILES['kartu']['size'];

	// file_tmp
	$file_tmpFoto = $_FILES['foto']['tmp_name'];
	$file_tmpAkteKelahiran = $_FILES['akte_kelahiran']['tmp_name'];
	$file_tmpIjazah = $_FILES['ijazah_paud']['tmp_name'];
	$file_tmpKK = $_FILES['kartu_keluarga']['tmp_name'];
	$file_tmpKtpAyah = $_FILES['ktp_ayah']['tmp_name'];
	$file_tmpKtpIbu = $_FILES['ktp_ibu']['tmp_name'];
	$file_tmpKartu = $_FILES['kartu']['tmp_name'];
	// $pathdb = $random . '.' . $ext;
	$dir = "assets/img/dokumen/";

	if ((in_array($ekstensiFoto, $ekstensi_diperbolehkan) === true) && (in_array($ekstensiAkteKelahiran, $ekstensi_diperbolehkan) === true) && (in_array($ekstensiIjazah, $ekstensi_diperbolehkan) === true) && (in_array($ekstensiKK, $ekstensi_diperbolehkan) === true) && (in_array($ekstensiKtpAyah, $ekstensi_diperbolehkan) === true) && (in_array($ekstensiKtpIbu, $ekstensi_diperbolehkan) === true) && (in_array($ekstensiKartu, $ekstensi_diperbolehkan) === true)) {
		if (($ukuranFoto < 1044070) || ($ukuranAkteKelahiran < 1044070) || ($ukuranIjazah < 1044070) || ($ukuranKK < 1044070) || ($ukuranKtpAyah < 1044070) || ($ukuranKtpIbu < 1044070) || ($ukuranKartu < 1044070)) {
			// Pindah File
			move_uploaded_file($file_tmpFoto, $dir . $namafileFoto);
			move_uploaded_file($file_tmpAkteKelahiran, $dir . $namafileAkteKelahiran);
			move_uploaded_file($file_tmpIjazah, $dir . $namafileIjazah);
			move_uploaded_file($file_tmpKK, $dir . $namafileKK);
			move_uploaded_file($file_tmpKtpAyah, $dir . $namafileKtpAyah);
			move_uploaded_file($file_tmpKtpIbu, $dir . $namafileKtpIbu);
			move_uploaded_file($file_tmpKartu, $dir . $namafileKartu);

			$sql_simpan = "INSERT INTO  tb_pendaftaran (
				id_daftar, nama_lengkap_siswa, nama_panggilan_siswa, nisn, nik, tempat_lh, tgl_lh, jekel, agama, kewarganegaraan, alamat, desa, kode_pos, kecamatan, kabupaten, provinsi, no_kk,
				nama_ayah, nik_ayah, pendidikan_ayah, kerja_ayah, penghasilan_ayah, telepon_ayah, 
				nama_ibu, nik_ibu, pendidikan_ibu, kerja_ibu, penghasilan_ibu, telepon_ibu, 
				bertempat_tinggal, berkebutuhan_khusus, jumlah_saudara_kandung, jumlah_saudara_tiri, jumlah_saudara_angkat, bahasa_sehari_hari, gol_darah, tinggi_badan, berat_badan, jarak_rumah, alat_transportasi,
				asal_murid, nama_lembaga, status_lembaga, npsn, nsm, alamat_lembaga, desa_lembaga, kode_pos_lembaga, kecamatan_lembaga, kabupaten_lembaga, provinsi_lembaga, no_ijazah_ra_tk, tanggal_ijazah, 
				asal_murid_pindahan, nama_lembaga_pindahan, status_lembaga_pindahan, npsn_pindahan, nsm_pindahan, alamat_lembaga_pindahan, desa_lembaga_pindahan, kode_pos_lembaga_pindahan, kecamatan_lembaga_pindahan, kabupaten_lembaga_pindahan, provinsi_lembaga_pindahan, 
				foto, akte_kelahiran, ijazah_paud, kartu_keluarga, ktp_ayah, ktp_ibu, kartu, th_ajaran
				) VALUES (
				'" . $UUID . "',
				'" . $_POST['nama_lengkap_siswa'] . "',
				'" . $_POST['nama_panggilan_siswa'] . "',
				'" . $_POST['nisn'] . "',
				'" . $_POST['nik'] . "',
				'" . $_POST['tempat_lh'] . "',
				'" . $_POST['tgl_lh'] . "',
				'" . $_POST['jekel'] . "',
				'" . $_POST['agama'] . "',
				'" . $_POST['kewarganegaraan'] . "',
				'" . $_POST['alamat'] . "',
				'" . $_POST['desa'] . "',
				'" . $_POST['kode_pos'] . "',
				'" . $_POST['kecamatan'] . "',
				'" . $_POST['kabupaten'] . "',
				'" . $_POST['provinsi'] . "',
				'" . $_POST['no_kk'] . "',
				'" . $_POST['nama_ayah'] . "',
				'" . $_POST['nik_ayah'] . "',
				'" . $_POST['pendidikan_ayah'] . "',
				'" . $_POST['kerja_ayah'] . "',
				'" . $_POST['penghasilan_ayah'] . "',
				'" . $_POST['telepon_ayah'] . "',
				'" . $_POST['nama_ibu'] . "',
				'" . $_POST['nik_ibu'] . "',
				'" . $_POST['pendidikan_ibu'] . "',
				'" . $_POST['kerja_ibu'] . "',
				'" . $_POST['penghasilan_ibu'] . "',
				'" . $_POST['telepon_ibu'] . "',
				'" . $_POST['bertempat_tinggal'] . "',
				'" . $_POST['berkebutuhan_khusus'] . "',
				'" . $_POST['jumlah_saudara_kandung'] . "',
				'" . $_POST['jumlah_saudara_tiri'] . "',
				'" . $_POST['jumlah_saudara_angkat'] . "',
				'" . $_POST['bahasa_sehari_hari'] . "',
				'" . $_POST['gol_darah'] . "',
				'" . $_POST['tinggi_badan'] . "',
				'" . $_POST['berat_badan'] . "',
				'" . $_POST['jarak_rumah'] . "',
				'" . $_POST['alat_transportasi'] . "',
				'" . $_POST['asal_murid'] . "',
				'" . $_POST['nama_lembaga'] . "',
				'" . $_POST['status_lembaga'] . "',
				'" . $_POST['npsn'] . "',
				'" . $_POST['nsm'] . "',
				'" . $_POST['alamat_lembaga'] . "',
				'" . $_POST['desa_lembaga'] . "',
				'" . $_POST['kode_pos_lembaga'] . "',
				'" . $_POST['kecamatan_lembaga'] . "',
				'" . $_POST['kabupaten_lembaga'] . "',
				'" . $_POST['provinsi_lembaga'] . "',
				'" . $_POST['no_ijazah_ra_tk'] . "',
				'" . $_POST['tanggal_ijazah'] . "',
				'" . $_POST['asal_murid_pindahan'] . "',
				'" . $_POST['nama_lembaga_pindahan'] . "',
				'" . $_POST['status_lembaga_pindahan'] . "',
				'" . $_POST['npsn_pindahan'] . "',
				'" . $_POST['nsm_pindahan'] . "',
				'" . $_POST['alamat_lembaga_pindahan'] . "',
				'" . $_POST['desa_lembaga_pindahan'] . "',
				'" . $_POST['kode_pos_lembaga_pindahan'] . "',
				'" . $_POST['kecamatan_lembaga_pindahan'] . "',
				'" . $_POST['kabupaten_lembaga_pindahan'] . "',
				'" . $_POST['provinsi_lembaga_pindahan'] . "',
				'" . $namafileFoto . "',
				'" . $namafileAkteKelahiran . "',
				'" . $namafileIjazah . "',
				'" . $namafileKK . "',
				'" . $namafileKtpAyah . "',
				'" . $namafileKtpIbu . "',
				'" . $namafileKartu . "',
				'" . $tahun . "')";
			$query_simpan = mysqli_query($koneksi, $sql_simpan);
			mysqli_close($koneksi);
			if ($query_simpan) {
				echo "<script>
					Swal.fire({title: 'Selamat!! Pendaftaran Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
					}).then((result) => {if (result.value){
						window.location = 'welcome.php?page=modul-hasil&kode=" . $UUID . "';
						}
					})</script>";
			} else {
				echo "<script>
					Swal.fire({title: 'Pendaftaran Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
					}).then((result) => {if (result.value){
						window.location = 'welcome.php?page=modul-register';
						}
					})</script>";
			}
		} else {
			echo "<script>
				Swal.fire({title: 'Pendaftaran Gagal. Ukuran File Terlalu Besar.',text: '',icon: 'error',confirmButtonText: 'OK'
				}).then((result) => {if (result.value){
					window.location = 'welcome.php?page=modul-register';
					}
				})</script>";
		}
	} else {
		echo "<script>
			Swal.fire({title: 'Pendaftaran Gagal. Ekstensi File Harus JPG/JPEG/PNG.',text: '',icon: 'error',confirmButtonText: 'OK'
			}).then((result) => {if (result.value){
				window.location = 'welcome.php?page=modul-register';
				}
			})</script>";
	}
}


// if (isset($_POST['Simpan'])) {
// $ekstensi_diperbolehkan    = array('png', 'jpg', 'jpeg');
// ambil data
// $foto = $_FILES['foto']['name'];
// $akte_kelahiran = $_FILES['akte_kelahiran']['name'];
// $kartu_keluarga = $_FILES['kartu_keluarga']['name'];
// $ktp_ayah = $_FILES['ktp_ayah']['name'];
// $ktp_ibu = $_FILES['ktp_ibu']['name'];
// $ijazah_paud = $_FILES['ijazah_paud']['name'];
// $kartu_kip = $_FILES['kartu_kip']['name'];

// nama file
// $namaFileFoto = time() . $foto;
// $namaFileAkte = time() . $akte_kelahiran;
// $namaFileKK = time() . $kartu_keluarga;
// $namaFileKtpAyah = time() . $ktp_ayah;
// $namaFileKtpIbu = time() . $ktp_ibu;
// $namaFileIjazah = time() . $ijazah_paud;
// $namaFileKartu = time() . $kartu_kip;
// $ext = pathinfo($nama, PATHINFO_EXTENSION);
// $random = crypt($nama, time());

// $xFoto = explode('.', $foto);
// $xAkte = explode('.', $akte_kelahiran);
// $xKK = explode('.', $kartu_keluarga);
// $xKtpAyah = explode('.', $ktp_ayah);
// $xKtpIbu = explode('.', $ktp_ibu);
// $xIjazah = explode('.', $ijazah_paud);
// $xKartu = explode('.', $kartu_kip);
// cek ekstensi
// $ekstensi1 = strtolower(end($xFoto));
// $ekstensi2 = strtolower(end($xAkte));
// $ekstensi3 = strtolower(end($xKK));
// $ekstensi4 = strtolower(end($xKtpAyah));
// $ekstensi5 = strtolower(end($xKtpIbu));
// $ekstensi6 = strtolower(end($xIjazah));
// $ekstensi7 = strtolower(end($xKartu));
// ukuran
// $ukuranFoto    = $_FILES['foto']['size'];
// $ukuranAkte    = $_FILES['akte_kelahiran']['size'];
// $ukuranKK    = $_FILES['kartu_keluarga']['size'];
// $ukuranKtpAyah    = $_FILES['ktp_ayah']['size'];
// $ukuranKtpIbu   = $_FILES['ktp_ibu']['size'];
// $ukuranIjazah    = $_FILES['ijazah_paud']['size'];
// $ukuranKartu    = $_FILES['kartu_kip']['size'];
// tmp
// $file_tmpFoto = $_FILES['foto']['tmp_name'];
// $file_tmpAkte = $_FILES['akte_kelahiran']['tmp_name'];
// $file_tmpKK = $_FILES['kartu_keluarga']['tmp_name'];
// $file_tmpKtpAyah = $_FILES['ktp_ayah']['tmp_name'];
// $file_tmpKtpIbu = $_FILES['ktp_ibu']['tmp_name'];
// $file_tmpIjazah = $_FILES['ijazah_paud']['tmp_name'];
// $file_tmpKartu = $_FILES['kartu_kip']['tmp_name'];
// $pathdb = $random . '.' . $ext;
// if (in_array($ekstensi1, $ekstensi_diperbolehkan) === true) {
// 	if (($ukuranFoto < 5000000) || ($ukuranAkte < 5000000) || ($ukuranKK < 5000000) || ($ukuranKtpAyah < 5000000) || ($ukuranKtpIbu < 5000000) || ($ukuranIjazah < 5000000) || ($ukuranKartu < 5000000)) {
// 		move_uploaded_file($file_tmpFoto, 'assets/img/dokumen/' . $namaFileFoto);
// move_uploaded_file($file_tmpAkte, 'assets/img/dokumen/' . $namaFileAkte);
// move_uploaded_file($file_tmpKK, 'assets/img/dokumen/' . $namaFileKK);
// move_uploaded_file($file_tmpKtpAyah, 'assets/img/dokumen/' . $namaFileKtpAyah);
// move_uploaded_file($file_tmpKtpIbu, 'assets/img/dokumen/' . $namaFileKtpIbu);
// move_uploaded_file($file_tmpIjazah, 'assets/img/dokumen/' . $namaFileIjazah);
// move_uploaded_file($file_tmpKartu, 'assets/img/dokumen/' . $namaFileKartu);

// for ($x = 1; $x <= 5; $x++) {
// 	$tmp_file = $_FILES["file" . $x]['tmp_name']; //temporary file
// 	$nama_file = time() . $_FILES["file" . $x]['name'];
// 	$tipe_file = $_FILES["file" . $x]['type'];
// 	$uk_file = $_FILES["file" . $x]['size']; //ukuran file

// 	$dir_tujuan = "assets/img/dokumen/"; //direktori tujuan
// 	if (!empty($tmp_file)) {
// 		$move = move_uploaded_file($tmp_file, $dir_tujuan . $nama_file);
// 		if ($move == true) {
// 			$notifikasi .= "Nama file : <b>" . $nama_file . "</b> berhasil di upload <br/>";
// 		} else {
// 			$notifikasi .= "Nama file : <b>" . $nama_file . "</b> gagal di upload <br/>";
// 		}
// 	}
// }

// $nik = $_POST['nik'];

// $sql_simpan = "INSERT INTO `tb_pendaftaran`(
// `id_daftar`, `nama_lengkap_siswa`, `nama_panggilan_siswa`, `nisn`, `nik`, `tempat_lh`, `tgl_lh`, `jekel`, `agama`, `kewarganegaraan`, `alamat`, `desa`, `kode_pos`, `kecamatan`, `kabupaten`, `provinsi`, `no_kk`, 
// `nama_ayah`, `nik_ayah`, `pendidikan_ayah`, `kerja_ayah`, `penghasilan_ayah`, `telepon_ayah`, 
// `nama_ibu`, `nik_ibu`, `pendidikan_ibu`, `kerja_ibu`, `penghasilan_ibu`, `telepon_ibu`, 
// `bertempat_tinggal`, `berkebutuhan_khusus`, `jumlah_saudara_kandung`, `jumlah_saudara_tiri`, `jumlah_saudara_angkat`, `bahasa_sehari_hari`, `gol_darah`, `tinggi_badan`, `berat_badan`, `jarak_rumah`, `alat_transportasi`, 
// `asal_murid`, `nama_lembaga`, `status_lembaga`, `npsn`, `nsm`, `alamat_lembaga`, `desa_lembaga`, `kode_pos_lembaga`, `kecamatan_lembaga`, `kabupaten_lembaga`, `provinsi_lembaga`, `no_ijazah_ra_tk`, `tanggal_ijazah`, 
// `asal_murid_pindahan`, `nama_lembaga_pindahan`, `status_lembaga_pindahan`, `npsn_pindahan`, `nsm_pindahan`, `alamat_lembaga_pindahan`, `desa_lembaga_pindahan`, `kode_pos_lembaga_pindahan`, `kecamatan_lembaga_pindahan`, `kabupaten_lembaga_pindahan`, `provinsi_lembaga_pindahan`, 
// 	`th_ajaran`
// 	) VALUES(
//         '" . $UUID . "',
// '" . $_POST['nama_lengkap_siswa'] . "',
// '" . $_POST['nama_panggilan_siswa'] . "',
// '" . $_POST['nisn'] . "',
// '" . $_POST['nik'] . "',
// '" . $_POST['tempat_lh'] . "',
// '" . $_POST['tgl_lh'] . "',
// '" . $_POST['jekel'] . "',
// '" . $_POST['agama'] . "',
// '" . $_POST['kewarganegaraan'] . "',
// '" . $_POST['alamat'] . "',
// '" . $_POST['desa'] . "',
// '" . $_POST['kode_pos'] . "',
// '" . $_POST['kecamatan'] . "',
// '" . $_POST['kabupaten'] . "',
// '" . $_POST['provinsi'] . "',
// '" . $_POST['no_kk'] . "',
// '" . $_POST['nama_ayah'] . "',
// '" . $_POST['nik_ayah'] . "',
// '" . $_POST['pendidikan_ayah'] . "',
// '" . $_POST['kerja_ayah'] . "',
// '" . $_POST['penghasilan_ayah'] . "',
// '" . $_POST['telepon_ayah'] . "',
// '" . $_POST['nama_ibu'] . "',
// '" . $_POST['nik_ibu'] . "',
// '" . $_POST['pendidikan_ibu'] . "',
// '" . $_POST['kerja_ibu'] . "',
// '" . $_POST['penghasilan_ibu'] . "',
// '" . $_POST['telepon_ibu'] . "',
// '" . $_POST['bertempat_tinggal'] . "',
// '" . $_POST['berkebutuhan_khusus'] . "',
// '" . $_POST['jumlah_saudara_kandung'] . "',
// '" . $_POST['jumlah_saudara_tiri'] . "',
// '" . $_POST['jumlah_saudara_angkat'] . "',
// '" . $_POST['bahasa_sehari_hari'] . "',
// '" . $_POST['gol_darah'] . "',
// '" . $_POST['tinggi_badan'] . "',
// '" . $_POST['berat_badan'] . "',
// '" . $_POST['jarak_rumah'] . "',
// '" . $_POST['alat_transportasi'] . "',
// '" . $_POST['asal_murid'] . "',
// '" . $_POST['nama_lembaga'] . "',
// '" . $_POST['status_lembaga'] . "',
// '" . $_POST['npsn'] . "',
// '" . $_POST['nsm'] . "',
// '" . $_POST['alamat_lembaga'] . "',
// '" . $_POST['desa_lembaga'] . "',
// '" . $_POST['kode_pos_lembaga'] . "',
// '" . $_POST['kecamatan_lembaga'] . "',
// '" . $_POST['kabupaten_lembaga'] . "',
// '" . $_POST['provinsi_lembaga'] . "',
// '" . $_POST['no_ijazah_ra_tk'] . "',
// '" . $_POST['tanggal_ijazah'] . "',
// '" . $_POST['asal_murid_pindahan'] . "',
// '" . $_POST['nama_lembaga_pindahan'] . "',
// '" . $_POST['status_lembaga_pindahan'] . "',
// '" . $_POST['npsn_pindahan'] . "',
// '" . $_POST['nsm_pindahan'] . "',
// '" . $_POST['alamat_lembaga_pindahan'] . "',
// '" . $_POST['desa_lembaga_pindahan'] . "',
// '" . $_POST['kode_pos_lembaga_pindahan'] . "',
// '" . $_POST['kecamatan_lembaga_pindahan'] . "',
// '" . $_POST['kabupaten_lembaga_pindahan'] . "',
// '" . $_POST['provinsi_lembaga_pindahan'] . "',
// 		'" . $tahun . "'
// 		)";
// $query_simpan = mysqli_query($koneksi, $sql_simpan);
// mysqli_close($koneksi);

// if ($query_simpan) {
// 	echo "<script>alert('Selamat, Pendaftaran Berhasil')</script>";
// 	echo "<meta http-equiv='refresh' content='0; url=welcome.php?page=modul-hasil&kode=" . $UUID . "'>";
// } else {
// 	echo "<script>alert('Aduh, Pendaftaran Gagal')</script>";
// 	echo "<meta http-equiv='refresh' content='0; url=welcome.php?page=modul-register'>";
// }
// } else {
// 	echo "<script>alert('Aduh, Pendaftaran Gagal3')</script>";
// 	echo "<meta http-equiv='refresh' content='0; url=welcome.php?page=modul-register'>";
// }
// } else {
// 	echo "<script>alert('Aduh, Pendaftaran Gagal2')</script>";
// 	echo "<meta http-equiv='refresh' content='0; url=welcome.php?page=modul-register'>";
// }
// }

?>
<!-- end -->