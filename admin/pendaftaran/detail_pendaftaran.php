<?php

if (isset($_GET['kode'])) {
	$sql_cek = "SELECT * from tb_pendaftaran WHERE id_daftar='" . $_GET['kode'] . "'";
	$query_cek = mysqli_query($koneksi, $sql_cek);
	$data_cek = mysqli_fetch_array($query_cek, MYSQLI_BOTH);
}
?>

<div class="card card-danger">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Detail Pendaftaran
		</h3>
		</h3>

		<div class="card-tools">
		</div>
	</div>
	<div class="card-body p-1">
		<table class="table">
			<tbody>
				<tr>
					<td colspan="2">
						<b>A. Biodata Peserta</b>
					</td>
				</tr>
				<tr>
					<td style="width: 230px">
						NISN
					</td>
					<td>:
						<?php echo $data_cek['nisn']; ?>
					</td>
				</tr>
				<tr>
					<td>
						NIK
					</td>
					<td>:
						<?php echo $data_cek['nik']; ?>
					</td>
				</tr>
				<tr>
					<td>
						Nama Lengkap
					</td>
					<td>:
						<?php echo $data_cek['nama_lengkap_siswa']; ?>
					</td>
				</tr>
				<tr>
					<td>
						TTL
					</td>
					<td>:
						<?php echo $data_cek['tempat_lh']; ?>/
						<?php echo $data_cek['tgl_lh']; ?>
					</td>
				</tr>
				<tr>
					<td>
						Jekel
					</td>
					<td>:
						<?php echo $data_cek['jekel']; ?>
					</td>
				</tr>
				<tr>
					<td>
						Agama
					</td>
					<td>:
						<?php echo $data_cek['agama']; ?>
					</td>
				</tr>
				<tr>
					<td>
						Alamat
					</td>
					<td>:
						<?php echo $data_cek['alamat']; ?>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<b>B. Biodata Orang Tua/Wali</b>
					</td>
				</tr>
				<tr>
					<td>
						No KK
					</td>
					<td>:
						<?php echo $data_cek['no_kk']; ?>
					</td>
				</tr>
				<tr>
					<td>
						Nama Ayah
					</td>
					<td>:
						<?php echo $data_cek['nama_ayah']; ?>
					</td>
				</tr>
				<tr>
					<td>
						Pekerjaan Ayah
					</td>
					<td>:
						<?php echo $data_cek['kerja_ayah']; ?>
					</td>
				</tr>
				<tr>
					<td>
						Telepon Ayah
					</td>
					<td>:
						<?php echo $data_cek['telepon_ayah']; ?>
					</td>
				</tr>
				<tr>
					<td>
						Nama Ibu
					</td>
					<td>:
						<?php echo $data_cek['nama_ibu']; ?>
					</td>
				</tr>
				<tr>
					<td>
						Pekerjaan Ibu
					</td>
					<td>:
						<?php echo $data_cek['kerja_ibu']; ?>
					</td>
				</tr>
				<tr>
					<td>
						Telepon Ibu
					</td>
					<td>:
						<?php echo $data_cek['telepon_ibu']; ?>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<b>C. Lain-lain</b>
					</td>
				</tr>
				<tr>
					<td>
						TA Ajaran
					</td>
					<td>:
						<?php echo $data_cek['th_ajaran']; ?>
					</td>
				</tr>
				<tr>
					<td>
						Waktu Pendaftaran
					</td>
					<td>:
						<?php echo $data_cek['waktu_daftar']; ?>
					</td>
				</tr>
				<tr>
					<td>
						Pemberkasan
					</td>
					<td>:
						<?php echo $data_cek['berkas']; ?>
					</td>
				</tr>

				<tr>
					<td colspan="2">
						<b>D. Dokumen Peserta</b>
					</td>
				</tr>
				<tr>
					<td>
						Foto
					</td>
					<td>:
						<a class="btn btn-danger btn-sm" href="download/download.php?filename=<?php echo $data_cek['foto'] ?>">Download File</a>
					</td>
				</tr>
				<tr>
					<td>
						Akte Kelahiran
					</td>
					<td>:
						<a class="btn btn-danger btn-sm" href="download/download.php?filename=<?php echo $data_cek['akte_kelahiran'] ?>">Download File</a>
					</td>
				</tr>
				<tr>
					<td>
						Ijazah RA/TK/PAUD
					</td>
					<td>:
						<a class="btn btn-danger btn-sm" href="download/download.php?filename=<?php echo $data_cek['ijazah_paud'] ?>">Download File</a>
					</td>
				</tr>
				<tr>
					<td>
						Kartu Keluarga
					</td>
					<td>:
						<a class="btn btn-danger btn-sm" href="download/download.php?filename=<?php echo $data_cek['kartu_keluarga'] ?>">Download File</a>
					</td>
				</tr>
				<tr>
					<td>
						KTP Ayah/Wali
					</td>
					<td>:
						<a class="btn btn-danger btn-sm" href="download/download.php?filename=<?php echo $data_cek['ktp_ayah'] ?>">Download File</a>
					</td>
				</tr>
				<tr>
					<td>
						KTP Ibu/Wali
					</td>
					<td>:
						<a class="btn btn-danger btn-sm" href="download/download.php?filename=<?php echo $data_cek['ktp_ibu'] ?>">Download File</a>
					</td>
				</tr>
				<tr>
					<td>
						Kartu KKS/KKP/PKH/KIP
					</td>
					<td>:
						<?php if ($data_cek['kartu']) { ?>
							<a class="btn btn-danger btn-sm" href="download/download.php?filename=<?php echo $data_cek['kartu'] ?>">Download File</a>
						<?php } else { ?>
							Tidak Terlampir
						<?php } ?>
					</td>
				</tr>

			</tbody>
		</table>
		<div class="card-footer">
			<a href="?page=data-pendaftaran" title="Kembali" class="btn btn-danger"><i class="fa fa-arrow-circle-left"></i> Kembali</a>
		</div>
	</div>
</div>