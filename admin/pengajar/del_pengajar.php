<?php
if (isset($_GET['kode'])) {
    $query = "SELECT * FROM tb_pengajar WHERE id_pengajar='" . $_GET['kode']  . "'";
    $sql = mysqli_query($koneksi, $query);
    $data = mysqli_fetch_array($sql);
    if (is_file("assets/img/pengajar/" . $data['foto']))
        unlink("assets/img/pengajar/" . $data['foto']);

    $sql_hapus = "DELETE FROM tb_pengajar WHERE id_pengajar='" . $_GET['kode'] . "'";
    $query_hapus = mysqli_query($koneksi, $sql_hapus);

    if ($query_hapus) {
        echo "<script>
                Swal.fire({title: 'Hapus Pengajar Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.value) {
                        window.location = 'index.php?page=data-pengajar';
                    }
                })</script>";
    } else {
        echo "<script>
                Swal.fire({title: 'Hapus Pengajar Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.value) {
                        window.location = 'index.php?page=data-Pengajar';
                    }
                })</script>";
    }
}
?>
<!-- end -->