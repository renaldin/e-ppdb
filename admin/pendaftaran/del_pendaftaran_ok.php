<?php
if (isset($_GET['kode'])) {
    $sql_hapus = "DELETE FROM tb_pendaftaran WHERE id_daftar='" . $_GET['kode'] . "'";
    $query_hapus = mysqli_query($koneksi, $sql_hapus);

    if ($query_hapus) {
        echo "<script>
        Swal.fire({title: 'Hapus Data Peserta Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=pendaftaran_ok';
            }
        })</script>";
    } else {
        echo "<script>
        Swal.fire({title: 'Hapus Data Peserta Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=pendaftaran_ok';
            }
        })</script>";
    }
}
?>
<!-- end -->