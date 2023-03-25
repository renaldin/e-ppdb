<?php

if (isset($_GET['kode'])) {
	$sql_cek = "SELECT * from tb_informasi LEFT JOIN tb_sekolah ON tb_informasi.id_sekolah=tb_sekolah.id_sekolah WHERE tb_informasi.id_informasi='" . $_GET['kode'] . "'";
	$query_cek = mysqli_query($koneksi, $sql_cek);
	$data_cek = mysqli_fetch_array($query_cek, MYSQLI_BOTH);
}
?>

<div class="card card-danger">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Detail Informasi
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
						<b>Deskripsi Informasi</b>
					</td>
				</tr>
				<tr>
					<td style="width: 150px">
						Nama Sekolah
					</td>
					<td>:
						<?php echo $data_cek['nama_sekolah']; ?>
					</td>
				</tr>
				<tr>
					<td>
						Judul Informasi
					</td>
					<td>:
						<?php echo $data_cek['judul_informasi']; ?>
					</td>
				</tr>
				<tr>
					<td>
						Tanggal Informasi
					</td>
					<td>:
						<?php echo $data_cek['tanggal']; ?>
					</td>
				</tr>
				<tr>
					<td>
						Gambar
					</td>
					<td>
						<img src="assets/img/informasi-ppdb/<?php echo $data_cek['gambar'] ?>" width="100px" alt="">
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<b>Isi Informasi</b>
					</td>
				</tr>
				<tr>
					<td>
						Informasi
					</td>
					<td>:

					</td>
				</tr>
				<tr>
					<td colspan="2">
						<?php echo $data_cek['informasi']; ?>
					</td>
				</tr>
			</tbody>
		</table>
		<div class="card-footer">
			<a href="?page=data-informasi" title="Kembali" class="btn btn-danger"><i class="fa fa-arrow-alt-circle-right"></i> Kembali</a>
		</div>
	</div>
</div>