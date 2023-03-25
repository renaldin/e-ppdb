<div class="card card-danger">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-plus"></i> Tambah Tahun Ajaran
		</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kode</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="id_tahun" name="id_tahun" placeholder="Ex : 2021/2022" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tahun Ajaran</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="t_ajaran" name="t_ajaran" placeholder="Ex : Tahun Ajaran 2021/2022">
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-primary">
			<a href="?page=data-tahun" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php

if (isset($_POST['Simpan'])) {
	$sql_simpan = "INSERT INTO tb_tahun (id_tahun,t_ajaran,status) VALUES (
        '" . $_POST['id_tahun'] . "',
        '" . $_POST['t_ajaran'] . "',
        'Aktif')";
	$query_simpan = mysqli_query($koneksi, $sql_simpan);
	mysqli_close($koneksi);

	if ($query_simpan) {
		echo "<script>
      Swal.fire({title: 'Tambah Tahun Ajaran Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=data-tahun';
          }
      })</script>";
	} else {
		echo "<script>
      Swal.fire({title: 'Tambah Tahun Ajaran Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=add-tahun';
          }
      })</script>";
	}
}
?>
<!-- end -->