<?php
if (isset($_GET['kode'])) {
    $query = "SELECT * FROM tb_prestasi WHERE id_prestasi='" . $_GET['kode']  . "'";
    $sql = mysqli_query($koneksi, $query);
    $data = mysqli_fetch_array($sql);
    if (is_file("assets/img/prestasi/" . $data['gambar']))
        unlink("assets/img/prestasi/" . $data['gambar']);

    $sql_hapus = "DELETE FROM tb_prestasi WHERE id_prestasi='" . $_GET['kode'] . "'";
    $query_hapus = mysqli_query($koneksi, $sql_hapus);


    if ($query_hapus) {
        echo "<script>
                Swal.fire({title: 'Hapus Prestasi Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.value) {
                        window.location = 'index.php?page=data-prestasi';
                    }
                })</script>";
    } else {
        echo "<script>
                Swal.fire({title: 'Hapus Prestasi Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.value) {
                        window.location = 'index.php?page=data-prestasi';
                    }
                })</script>";
    }
}
?>
<!-- end -->