<?php

if (isset($_GET['kode'])) {
	$sql_cek = "SELECT * FROM tb_sesi WHERE id_sesi='" . $_GET['kode'] . "'";
	$query_cek = mysqli_query($koneksi, $sql_cek);
	$data_cek = mysqli_fetch_array($query_cek, MYSQLI_BOTH);
}
?>

<div class="card card-danger">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Edit Gelombang / Sesi
		</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="col-sm-4">
				<input type="hidden" class="form-control" id="id_sesi" name="id_sesi" value="<?php echo $data_cek['id_sesi']; ?>" readonly />
			</div>


			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Gelombang/Sesi</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="sesi" name="sesi" value="<?php echo $data_cek['sesi']; ?>" />
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Pelaksanaaan</label>
				<div class="col-sm-3">
					<input type="date" class="form-control" id="tgl_awal" name="tgl_awal" value="<?php echo $data_cek['tgl_awal']; ?>" />
				</div>
				s/d
				<div class="col-sm-3">
					<input type="date" class="form-control" id="tgl_akhir" name="tgl_akhir" value="<?php echo $data_cek['tgl_akhir']; ?>" />
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kuota Pendaftaran</label>
				<div class="col-sm-3">
					<input type="number" class="form-control" id="kuota_pendaftaran" name="kuota_pendaftaran" value="<?php echo $data_cek['kuota_pendaftaran']; ?>" />
				</div>
			</div>



		</div>
		<div class="card-footer">
			<input type="submit" name="Edit" value="Simpan" class="btn btn-success">
			<a href="?page=data-sesi" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>



<?php
if (isset($_POST['Edit'])) {
	$sql_edit = "UPDATE tb_sesi SET
        sesi='" . $_POST['sesi'] . "',
		tgl_awal='" . $_POST['tgl_awal'] . "',
		tgl_akhir='" . $_POST['tgl_akhir'] . "',
		kuota_pendaftaran='" . $_POST['kuota_pendaftaran'] . "'
        WHERE id_sesi='" . $_POST['id_sesi'] . "'";
	$query_edit = mysqli_query($koneksi, $sql_edit);
	mysqli_close($koneksi);

	if ($query_edit) {
		echo "<script>
      Swal.fire({title: 'Edit Gelombang/Sesi Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-sesi';
        }
      })</script>";
	} else {
		echo "<script>
      Swal.fire({title: 'Edit Gelombang/Sesi Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-sesi';
        }
      })</script>";
	}
}
?>
<!-- end -->