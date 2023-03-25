<div class="card card-danger">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-database"></i> Data Pendaftaran Masuk
		</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<table id="" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>TA</th>
						<th>NIK</th>
						<th>Nama Peserta</th>
						<th>Tanggal Lahir
						<th>Nama Ibu</th>
						<th>No Hp Ibu</th>
						<th>Pemberkasan</th>
						<th>Opsi</th>
					</tr>
				</thead>
				<tbody>

					<?php
					$no = 1;
					$sql = $koneksi->query("select * from tb_pendaftaran where berkas='Belum'");
					while ($data = $sql->fetch_assoc()) {
					?>

						<tr>
							<td>
								<?php echo $no++; ?>
							</td>
							<td>
								<?php echo $data['th_ajaran']; ?>
							</td>
							<td>
								<?php echo $data['nik']; ?>
							</td>
							<td>
								<a href="?page=detail&kode=<?php echo $data['id_daftar']; ?>" title="Selengkapnya">
									<?php echo $data['nama_lengkap_siswa']; ?>
								</a>
							</td>
							<td>
								<?php echo $data['tgl_lh']; ?>
							</td>
							<td>
								<?php echo $data['nama_ibu']; ?>
							</td>
							<td>
								<?php echo $data['telepon_ibu']; ?>
							</td>
							<td>
								<?php echo $data['berkas']; ?>
							</td>
							<td>
								<a href="?page=edit-pendaftaran&kode=<?php echo $data['id_daftar']; ?>" onclick="return confirm('Apakah berkas peserta sudah lengkap ?')" title="Pemberkasan Lengkap" class="btn btn-success btn-sm mb-1">
									<i class="fas fa-check"></i> Ok
								</a>
								<a href="?page=del-pendaftaran&kode=<?php echo $data['id_daftar']; ?>" onclick="return confirm('Apakah anda yakin hapus data peserta ini ?')" title="Hapus" class="btn btn-danger btn-sm mb-1">
									<i class="fas fa-trash"></i> Hapus
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