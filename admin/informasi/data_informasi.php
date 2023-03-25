<div class="card card-danger">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Data Informasi PPDB
		</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<div>
				<a href="?page=add-informasi" class="btn btn-primary">
					<i class="fa fa-plus"></i> Tambah</a>
			</div>
			<br>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th width="15px">No</th>
						<th>Judul Informasi</th>
						<th>Tanggal</th>
						<th width="250px">Opsi</th>
					</tr>
				</thead>
				<tbody>

					<?php
					$no = 1;
					$sql = $koneksi->query("select * from tb_informasi left join tb_sekolah on tb_informasi.id_sekolah=tb_sekolah.id_sekolah order by tanggal desc");
					while ($data = $sql->fetch_assoc()) {
					?>

						<tr>
							<td>
								<?php echo $no++; ?>
							</td>
							<td>
								<?php echo $data['judul_informasi']; ?>
							</td>
							<td>
								<?php echo $data['tanggal']; ?>
							</td>
							<td>
								<a style="margin-bottom: 5px;" href="?page=detail-informasi&kode=<?php echo $data['id_informasi']; ?>" title="Detail" class="btn btn-primary btn-sm"><i class="fa fa-inbox"></i> Detail
								</a>
								<a style="margin-bottom: 5px;" href="?page=edit-informasi&kode=<?php echo $data['id_informasi']; ?>" title="Ubah" class="btn btn-success btn-sm"><i class="fa fa-edit"></i> Edit
								</a>
								<a style="margin-bottom: 5px;" href="?page=del-informasi&kode=<?php echo $data['id_informasi']; ?>" onclick="return confirm('Apakah anda yakin hapus informasi ini ?')" title="Hapus" class="btn btn-danger btn-sm">
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