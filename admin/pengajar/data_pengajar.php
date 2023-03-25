<div class="card card-danger">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Data Pengajar
		</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<div>
				<a href="?page=add-pengajar" class="btn btn-primary">
					<i class="fa fa-plus"></i> Tambah</a>
			</div>
			<br>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th width="15px">No</th>
						<th>Nama </th>
						<th>Foto</th>
						<th width="250px">Opsi</th>
					</tr>
				</thead>
				<tbody>

					<?php
					$no = 1;
					$sql = $koneksi->query("select * from tb_pengajar");
					while ($data = $sql->fetch_assoc()) {
					?>

						<tr>
							<td>
								<?php echo $no++; ?>
							</td>
							<td>
								<?php echo $data['nama_lengkap']; ?>
							</td>
							<td>
								<img src="assets/img/pengajar/<?php echo $data['foto'] ?>" width="80px" alt="Foto <?= $data['nama_lengkap'] ?>">
							</td>
							<td>
								<button type="button" style="margin-bottom: 5px;" data-toggle="modal" data-target="#detail-pengajar<?php echo $data['id_pengajar']; ?>" title="Ubah" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i> Detail
								</button>
								<a style="margin-bottom: 5px;" href="?page=edit-pengajar&kode=<?php echo $data['id_pengajar']; ?>" title="Ubah" class="btn btn-success btn-sm"><i class="fa fa-edit"></i> Edit
								</a>
								<a style="margin-bottom: 5px;" href="?page=del-pengajar&kode=<?php echo $data['id_pengajar']; ?>" onclick="return confirm('Apakah anda yakin hapus pengajar ini ?')" title="Hapus" class="btn btn-danger btn-sm">
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


	<!-- Modal -->
	<?php $sql = $koneksi->query("select * from tb_pengajar");
	while ($data = $sql->fetch_assoc()) { ?>
		<div class="modal fade" id="detail-pengajar<?php echo $data['id_pengajar'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Detail Pengajar</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-md-4">
								<center><img src="assets/img/pengajar/<?php echo $data['foto'] ?>" width="90%" alt="Foto <?= $data['nama_lengkap'] ?>"></center>
							</div>
							<div class="col-md-8">
								<table class="table table-striped">
									<tr>
										<td width="180px">Nama</td>
										<td>:</td>
										<td><?php echo $data['nama_lengkap'] ?></td>
									</tr>
									<tr>
										<td>Jenis Kelamin</td>
										<td>:</td>
										<td><?php echo $data['jenis_kelamin'] ?></td>
									</tr>
									<tr>
										<td>Lulusan</td>
										<td>:</td>
										<td><?php echo $data['lulusan'] ?></td>
									</tr>
									<tr>
										<td>Mata Pelajaran</td>
										<td>:</td>
										<td><?php echo $data['mata_pelajaran'] ?></td>
									</tr>
									<tr>
										<td>Jabatan</td>
										<td>:</td>
										<td><?php echo $data['jabatan'] ?></td>
									</tr>
								</table>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary" data-dismiss="modal">Kembali</button>
					</div>
				</div>
			</div>
		</div>
	<?php } ?>