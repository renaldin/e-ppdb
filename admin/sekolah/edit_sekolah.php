<?php

if (isset($_GET['kode'])) {
	$sql_cek = "SELECT * FROM tb_sekolah WHERE id_sekolah='" . $_GET['kode'] . "'";
	$query_cek = mysqli_query($koneksi, $sql_cek);
	$data_cek = mysqli_fetch_array($query_cek, MYSQLI_BOTH);
}
?>

<div class="card card-danger">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Ubah Data
		</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<input type='hidden' class="form-control" name="id_sekolah" value="<?php echo $data_cek['id_sekolah']; ?>" readonly />

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Sekolah</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="nama_sekolah" name="nama_sekolah" value="<?php echo $data_cek['nama_sekolah']; ?>" />
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Alamat</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="alamat_sekolah" name="alamat_sekolah" value="<?php echo $data_cek['alamat_sekolah']; ?>" />
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Deskripsi Sekolah</label>
				<div class="col-sm-6">
					<textarea class="form-control" id="deskripsi" name="deskripsi" cols="30" rows="10"><?php echo $data_cek['deskripsi']; ?></textarea>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					<label class="">Akreditasi Sekolah</label>
					<input type="text" class="form-control" id="akreditasi" name="akreditasi" value="<?php echo $data_cek['akreditasi']; ?>" />
				</div>
				<div class="col-md-4">
					<label class="">No SK akreditas</label>
					<input type="text" class="form-control" id="no_sk_akreditasi" name="no_sk_akreditasi" value="<?php echo $data_cek['no_sk_akreditasi']; ?>" />
				</div>
				<div class="col-md-4">
					<label class="">Tanggal SK akreditas</label>
					<input type="date" class="form-control" id="tanggal_sk_akreditasi" name="tanggal_sk_akreditasi" value="<?php echo $data_cek['tanggal_sk_akreditasi']; ?>" />
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<label class="">NSM</label>
						<input type="text" class="form-control" id="nsm" name="nsm" value="<?php echo $data_cek['nsm']; ?>" />
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label class="">NPSN</label>
						<input type="text" class="form-control" id="npsn" name="npsn" value="<?php echo $data_cek['npsn']; ?>" />
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label class="">NPWP</label>
						<input type="text" class="form-control" id="npwp" name="npwp" value="<?php echo $data_cek['npwp']; ?>" />
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<label for="">Titik Koordinat</label>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="">Latitude</label>
						<input type="text" class="form-control" id="latitude" name="latitude" value="<?php echo $data_cek['latitude']; ?>" />
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="">Longitude</label>
						<input type="text" class="form-control" id="longitude" name="longitude" value="<?php echo $data_cek['longitude']; ?>" />
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<label class="">Email</label>
						<input type="text" class="form-control" id="email" name="email" value="<?php echo $data_cek['email']; ?>" />
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label class="">No Rekening</label>
						<input type="text" class="form-control" id="no_rekening" name="no_rekening" value="<?php echo $data_cek['no_rekening']; ?>" />
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label class="">Bank</label>
						<input type="text" class="form-control" id="bank" name="bank" value="<?php echo $data_cek['bank']; ?>" />
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label class="">No SK Pendirian</label>
						<input type="text" class="form-control" id="no_sk_pendirian" name="no_sk_pendirian" value="<?php echo $data_cek['no_sk_pendirian']; ?>" />
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="">Tanggal SK Pendirian</label>
						<input type="date" class="form-control" id="tanggal_sk_pendirian" name="tanggal_sk_pendirian" value="<?php echo $data_cek['tanggal_sk_pendirian']; ?>" />
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label class="">No Izin Operasional</label>
						<input type="text" class="form-control" id="no_izin_operasional" name="no_izin_operasional" value="<?php echo $data_cek['no_izin_operasional']; ?>" />
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="">Tanggal Izin Operasional</label>
						<input type="date" class="form-control" id="tanggal_izin_operasional" name="tanggal_izin_operasional" value="<?php echo $data_cek['tanggal_izin_operasional']; ?>" />
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label class="">No Telepon Sekolah</label>
						<input type="number" class="form-control" id="no_telepon" name="no_telepon" value="<?php echo $data_cek['no_telepon']; ?>" />
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="">No Whatsapp</label>
						<input type="number" class="form-control" id="no_wa" name="no_wa" value="<?php echo $data_cek['no_wa']; ?>" />
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label class="">Nama Kepala Sekolah</label>
						<input type="text" class="form-control" id="nama_kepala" name="nama_kepala" value="<?php echo $data_cek['nama_kepala']; ?>" />
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="">Nama Yayasan</label>
						<input type="text" class="form-control" id="nama_yayasan" name="nama_yayasan" value="<?php echo $data_cek['nama_yayasan']; ?>" />
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<label class="">No SK Kemkumham</label>
						<input type="text" class="form-control" id="no_sk_kemkumham" name="no_sk_kemkumham" value="<?php echo $data_cek['no_sk_kemkumham']; ?>" />
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label class="">Tanggal SK Kemkumham</label>
						<input type="date" class="form-control" id="tanggal_sk_kemkumham" name="tanggal_sk_kemkumham" value="<?php echo $data_cek['tanggal_sk_kemkumham']; ?>" />
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label class="">Akte Notaris Yayasan</label>
						<input type="text" class="form-control" id="akte_notaris_yayasan" name="akte_notaris_yayasan" value="<?php echo $data_cek['akte_notaris_yayasan']; ?>" />
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-3">
					<div class="form-group">
						<label class="">Status Tanah</label>
						<input type="text" class="form-control" id="status_tanah" name="status_tanah" value="<?php echo $data_cek['status_tanah']; ?>" />
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label class="">Luas Tanah</label>
						<input type="text" class="form-control" id="luas_tanah" name="luas_tanah" value="<?php echo $data_cek['luas_tanah']; ?>" />
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label class="">Status Bangunan</label>
						<input type="text" class="form-control" id="status_bangunan" name="status_bangunan" value="<?php echo $data_cek['status_bangunan']; ?>" />
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label class="">Luas Bangunan</label>
						<input type="text" class="form-control" id="luas_bangunan" name="luas_bangunan" value="<?php echo $data_cek['luas_bangunan']; ?>" />
					</div>
				</div>
			</div>

			<div class="card-footer">
				<input type="submit" name="Edit" value="Simpan" class="btn btn-success">
				<a href="?page=data-sekolah" title="Kembali" class="btn btn-secondary">Batal</a>
			</div>
	</form>
</div>


<?php

if (isset($_POST['Edit'])) {
	$sql_edit = "UPDATE tb_sekolah SET
        nama_sekolah='" . $_POST['nama_sekolah'] . "',
        alamat_sekolah='" . $_POST['alamat_sekolah'] . "',
        akreditasi='" . $_POST['akreditasi'] . "',
        deskripsi='" . $_POST['deskripsi'] . "',
        nsm='" . $_POST['nsm'] . "',
        npsn='" . $_POST['npsn'] . "',
        npwp='" . $_POST['npwp'] . "',
        latitude='" . $_POST['latitude'] . "',
        longitude='" . $_POST['longitude'] . "',
        email='" . $_POST['email'] . "',
        no_rekening='" . $_POST['no_rekening'] . "',
        bank='" . $_POST['bank'] . "',
        no_sk_pendirian='" . $_POST['no_sk_pendirian'] . "',
        tanggal_sk_pendirian='" . $_POST['tanggal_sk_pendirian'] . "',
        no_izin_operasional='" . $_POST['no_izin_operasional'] . "',
        tanggal_izin_operasional='" . $_POST['tanggal_izin_operasional'] . "',
        no_sk_akreditasi='" . $_POST['no_sk_akreditasi'] . "',
        tanggal_sk_akreditasi='" . $_POST['tanggal_sk_akreditasi'] . "',
        nama_kepala='" . $_POST['nama_kepala'] . "',
        no_telepon='" . $_POST['no_telepon'] . "',
        no_wa='" . $_POST['no_wa'] . "',
        nama_yayasan='" . $_POST['nama_yayasan'] . "',
        no_sk_kemkumham='" . $_POST['no_sk_kemkumham'] . "',
        tanggal_sk_kemkumham='" . $_POST['tanggal_sk_kemkumham'] . "',
        akte_notaris_yayasan='" . $_POST['akte_notaris_yayasan'] . "',
        status_tanah='" . $_POST['status_tanah'] . "',
        luas_tanah='" . $_POST['luas_tanah'] . "',
        status_bangunan='" . $_POST['status_bangunan'] . "',
        luas_bangunan='" . $_POST['luas_bangunan'] . "'
        WHERE id_sekolah='" . $_POST['id_sekolah'] . "'";
	$query_edit = mysqli_query($koneksi, $sql_edit);
	mysqli_close($koneksi);

	if ($query_edit) {
		echo "<script>
      Swal.fire({title: 'Edit Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-sekolah';
        }
      })</script>";
	} else {
		echo "<script>
      Swal.fire({title: 'Edit Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=edit-sekolah';
        }
      })</script>";
	}
}
?>
<!--end -->