<div class="card card-danger">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-database"></i> Data Pendaftaran Selesai
		</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>TA</th>
						<th>NIK</th>
						<th>Nama Peserta</th>
						<th>Tanggal Lahir</th>
						<th>Nama Ibu</th>
						<th>No Hp Ibu</th>
						<th>Pemberkasan</th>
						<th>Opsi</th>
					</tr>
				</thead>
				<tbody>

					<?php
					$no = 1;
					$sql = $koneksi->query("select * from tb_pendaftaran where berkas ='Sudah'");
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
								<a href="?page=berkas-ulang&kode=<?php echo $data['id_daftar']; ?>" onclick="return confirm('Ulangi pemberkasan ?')" title="Ulangi Pemberkasan" class="btn btn-warning btn-sm btn-flat mb-1">
									<i class="fa fa-backspace"></i> Ulangi
								</a>
								<a href="?page=del-pendaftaran-ok&kode=<?php echo $data['id_daftar']; ?>" onclick="return confirm('Apakah anda yakin hapus data peserta ini ?')" title="Hapus" class="btn btn-danger btn-sm btn-flat mb-1">
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