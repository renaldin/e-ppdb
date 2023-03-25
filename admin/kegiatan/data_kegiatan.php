<div class="card card-danger">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-book-open"></i> Daftar Data Kegiatan
		</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<div>
				<a href="?page=add-kegiatan" class="btn btn-primary">
					<i class="fa fa-plus"></i> Tambah</a>
			</div>
			<br>
			<table id="example1" class="table">
				<thead>
					<tr>
						<th width="15px">No</th>
						<th>Nama Kegiatan</th>
						<th>Foto Kegiatan</th>
						<th width="250px">Opsi</th>
					</tr>
				</thead>
				<tbody>

					<?php
					$no = 1;
					$sql = $koneksi->query("select * from tb_kegiatan");
					while ($data = $sql->fetch_assoc()) {
					?>

						<tr>
							<td>
								<?php echo $no++; ?>
							</td>
							<td>
								<?php echo $data['nama_kegiatan']; ?>
							</td>
							<td>
								<img src="assets/img/kegiatan/<?php echo $data['gambar'] ?>" width="80px" alt="">
							</td>
							<td>
								<a style="margin-bottom: 5px;" href="?page=edit-kegiatan&kode=<?php echo $data['id_kegiatan']; ?>" title="Ubah" class="btn btn-success btn-sm">
									<i class="fa fa-edit"></i> Edit
								</a>
								<a style="margin-bottom: 5px;" href="?page=del-kegiatan&kode=<?php echo $data['id_kegiatan']; ?>" onclick="return confirm('Apakah anda yakin hapus kegiatan ini ?')" title="Hapus" class="btn btn-danger btn-sm">
									<i class="fa fa-trash"></i> Hapus
								</a>
							</td>
						</tr>

					<?php
					}
					?>
				</tbody>
				</tfoot>
			</table>
		</div>
	</div>
	<!-- /.card-body -->