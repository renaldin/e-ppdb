<?php
if (isset($_GET['kode'])) {
    $sql_hapus = "DELETE FROM tb_tahun WHERE id_tahun='" . $_GET['kode'] . "'";
    $query_hapus = mysqli_query($koneksi, $sql_hapus);

    if ($query_hapus) {
        echo "<script>
                Swal.fire({title: 'Hapus Tahun Ajaran Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.value) {
                        window.location = 'index.php?page=data-tahun';
                    }
                })</script>";
    } else {
        echo "<script>
                Swal.fire({title: 'Hapus Tahun Ajaran Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.value) {
                        window.location = 'index.php?page=data-tahun';
                    }
                })</script>";
    }
}
?>
<!-- end -->