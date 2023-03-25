<div class="card card-danger">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-archive"></i> Data Pendaftaran Sudah Pemberkasan
		</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<a href="./laporan/cetak_semua_sudah_pemberkasan.php" target="_blank" class="btn btn-primary btn -sm mb-1"><i class="fa fa-print"></i> Download Semua</a>
		<div class="table-responsive">
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>TA</th>
						<th>NIK</th>
						<th>Nama Peserta</th>
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
								<?php echo $data['nama_ibu']; ?>
							</td>
							<td>
								<?php echo $data['telepon_ibu']; ?>
							</td>
							<td>
								<?php echo $data['berkas']; ?>
							</td>
							<td>
								<a href="./laporan/cetak_pendaftaran.php?id_daftar=<?php echo $data['id_daftar']; ?>" target="blank" title="Cetak Formulir" class="btn btn-primary btn-sm">
									<i class="fas fa-print"></i> Download
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