<div class="card card-danger">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-book-open"></i> Daftar Data Artikel
		</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<div>
				<a href="?page=add-artikel" class="btn btn-primary">
					<i class="fa fa-plus"></i> Tambah</a>
			</div>
			<br>
			<table id="example1" class="table">
				<thead>
					<tr>
						<th width="15px">No</th>
						<th>Judul Artikel</th>
						<th>Tanggal</th>
						<th width="250px">Opsi</th>
					</tr>
				</thead>
				<tbody>

					<?php
					$no = 1;
					$sql = $koneksi->query("select * from tb_artikel order by tanggal desc");
					while ($data = $sql->fetch_assoc()) {
					?>

						<tr>
							<td>
								<?php echo $no++; ?>
							</td>
							<td>
								<?php echo $data['judul_artikel']; ?>
							</td>
							<td>
								<?php echo $data['tanggal']; ?>
							</td>
							<td>
								<a style="margin-bottom: 5px;" href="?page=detail-artikel&kode=<?php echo $data['id_artikel']; ?>" title="Detail" class="btn btn-primary btn-sm">
									<i class="fa fa-inbox"></i> Detail
								</a>
								<a style="margin-bottom: 5px;" href="?page=edit-artikel&kode=<?php echo $data['id_artikel']; ?>" title="Ubah" class="btn btn-success btn-sm">
									<i class="fa fa-edit"></i> Edit
								</a>
								<a style="margin-bottom: 5px;" href="?page=del-artikel&kode=<?php echo $data['id_artikel']; ?>" onclick="return confirm('Apakah anda yakin hapus artikel ini ?')" title="Hapus" class="btn btn-danger btn-sm">
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