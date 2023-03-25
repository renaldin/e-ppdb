<?php

if (isset($_GET['kode'])) {
	$sql_cek = "SELECT * from tb_artikel WHERE id_artikel='" . $_GET['kode'] . "'";
	$query_cek = mysqli_query($koneksi, $sql_cek);
	$data_cek = mysqli_fetch_array($query_cek, MYSQLI_BOTH);
}
?>

<div class="card card-danger">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-book-reader"></i> Detail Artikel
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
						<b>Deskripsi Artikel</b>
					</td>
				</tr>
				<tr>
					<td style="width: 150px">
						Judul Artikel
					</td>
					<td>:
						<?php echo $data_cek['judul_artikel']; ?>
					</td>
				</tr>
				<tr>
					<td>
						Penulis
					</td>
					<td>:
						<?php echo $data_cek['penulis']; ?>
					</td>
				</tr>
				<tr>
					<td>
						Tanggal Publikasi
					</td>
					<td>:
						<?php echo $data_cek['tanggal']; ?>
					</td>
				</tr>
				<tr>
					<td>
						Gambar
					</td>
					<td>:
						<img src="assets/img/artikel/<?php echo $data_cek['gambar'] ?>" width="100px" alt="">
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<b>Artikel</b>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<?php echo $data_cek['artikel']; ?>
					</td>
				</tr>
			</tbody>
		</table>
		<div class="card-footer">
			<a href="?page=data-artikel" title="Kembali" class="btn btn-danger"><i class="fa fa-arrow-alt-circle-right"></i> Kembali</a>
		</div>
	</div>
</div>