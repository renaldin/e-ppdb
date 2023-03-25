<div class="card card-danger">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-user-friends"></i> Data Pengguna
		</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<div>
				<a href="?page=add-pengguna" class="btn btn-primary">
					<i class="fa fa-plus"></i> Tambah</a>
			</div>
			<br>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama User</th>
						<th>Username</th>
						<th>Level</th>
						<th>Opsi</th>
					</tr>
				</thead>
				<tbody>

					<?php
					$no = 1;
					$sql = $koneksi->query("select * from tb_pengguna");
					while ($data = $sql->fetch_assoc()) {
					?>

						<tr>
							<td>
								<?php echo $no++; ?>
							</td>
							<td>
								<?php echo $data['nama_pengguna']; ?>
							</td>
							<td>
								<?php echo $data['username']; ?>
							</td>
							<td>
								<?php echo $data['level']; ?>
							</td>
							<td>
								<a href="?page=edit-pengguna&kode=<?php echo $data['id_pengguna']; ?>" title="Ubah" class="btn btn-success btn-sm"><i class="fa fa-edit"></i> Edit
								</a>
								<a href="?page=del-pengguna&kode=<?php echo $data['id_pengguna']; ?>" onclick="return confirm('Apakah anda yakin hapus pengguna admin ini ?')" title="Hapus" class="btn btn-danger btn-sm">
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