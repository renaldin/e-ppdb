<?php
$sql = $koneksi->query("SELECT COUNT(id_artikel) as artikel  from tb_artikel");
while ($data = $sql->fetch_assoc()) {
	$artikel = $data['artikel'];
}

$sql = $koneksi->query("SELECT COUNT(id_daftar) as jumlah  from tb_pendaftaran");
while ($data = $sql->fetch_assoc()) {
	$jumlah = $data['jumlah'];
}

$sql = $koneksi->query("SELECT COUNT(id_daftar) as belum  from tb_pendaftaran where berkas='Belum'");
while ($data = $sql->fetch_assoc()) {
	$belum = $data['belum'];
}

$sql = $koneksi->query("SELECT COUNT(id_daftar) as sudah  from tb_pendaftaran where berkas='Sudah'");
while ($data = $sql->fetch_assoc()) {
	$sudah = $data['sudah'];
}

$sql = $koneksi->query("SELECT COUNT(id_jawaban) as teman  from tb_jawaban where jawaban='Teman'");
while ($data = $sql->fetch_assoc()) {
	$teman = $data['teman'];
}

$sql = $koneksi->query("SELECT COUNT(id_jawaban) as saudara  from tb_jawaban where jawaban='Saudara'");
while ($data = $sql->fetch_assoc()) {
	$saudara = $data['saudara'];
}

$sql = $koneksi->query("SELECT COUNT(id_jawaban) as cari  from tb_jawaban where jawaban='Mencari Tahu Sendiri'");
while ($data = $sql->fetch_assoc()) {
	$cari = $data['cari'];
}
?>

<div class="row">
	<div class="col-lg-3 col-6">
		<!-- small box -->
		<div class="small-box bg-purple">
			<div class="inner">
				<h3>
					<?php echo $artikel; ?>
				</h3>

				<p>Artikel</p>
			</div>
			<div class="icon">
				<i class="ion fa-book-open"></i>
			</div>
			<a href="?page=data-artikel" class="small-box-footer">DETAIL
				<i class="fas fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>

	<div class="col-lg-3 col-6">
		<!-- small box -->
		<div class="small-box bg-blue">
			<div class="inner">
				<h3>
					<?php echo $jumlah; ?>
				</h3>

				<p>Pendaftar</p>
			</div>
			<div class="icon">
				<i class="ion ion-person"></i>
			</div>
			<a href="?page=data-semua-pendaftar" class="small-box-footer">DETAIL
				<i class="fas fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>
	<!-- ./col -->
	<div class="col-lg-3 col-6">
		<!-- small box -->
		<div class="small-box bg-danger">
			<div class="inner">
				<h3>
					<?php echo $belum; ?>
				</h3>

				<p>Belum Pemberkasan</p>
			</div>
			<div class="icon">
				<i class="ion ion-android-sad"></i>
			</div>
			<a href="?page=data-pendaftaran" class="small-box-footer">DETAIL
				<i class="fas fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>
	<!-- ./col -->
	<div class="col-lg-3 col-6">
		<!-- small box -->
		<div class="small-box bg-success">
			<div class="inner">
				<h3>
					<?php echo $sudah; ?>
				</h3>

				<p>Sudah Pemberkasan</p>
			</div>
			<div class="icon">
				<i class="ion ion-android-happy"></i>
			</div>
			<a href="?page=pendaftaran-lengkap" class="small-box-footer">DETAIL
				<i class="fas fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>
</div>

<div class="row mt-3">
	<div class="col-md-7">
		<div class="card">
			<div class="card-header bg-danger">
				Data Jawaban User dari pertanyaan "Dari mana Kamu tahu sekolah ini?"
			</div>
			<div class="card-body">
				<table id="example1" class="table">
					<thead>
						<tr>
							<th width="15px">No</th>
							<th>Jawaban</th>
						</tr>
					</thead>
					<tbody>

						<?php
						$no = 1;
						$sql = $koneksi->query("select * from tb_jawaban");
						while ($data = $sql->fetch_assoc()) {
						?>

							<tr>
								<td>
									<?php echo $no++; ?>
								</td>
								<td>
									<?php echo $data['jawaban']; ?>
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
	</div>
	<div class="col-md-5">
		<center>
			<canvas id="myChart" width="100" height="100"></canvas>
		</center>
	</div>
</div>
<br>
<script>
	var ctx = document.getElementById("myChart");
	var myChart = new Chart(ctx, {
		type: 'pie',
		data: {
			labels: ["Teman", "Saudara", "Mencari Tahu Sendiri"],
			datasets: [{
				label: '# of Votes',
				data: [<?php echo $teman ?>, <?php echo $saudara ?>, <?php echo $cari ?>],
				backgroundColor: [
					'#DC143C',
					'#2596be',
					'yellow',
				],
				borderColor: [
					'white',
					'white',
					'white'
				],
				borderWidth: 1
			}]
		},
		options: {
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero: true
					}
				}]
			}
		}
	});
</script>