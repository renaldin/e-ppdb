<?php
if (isset($_GET['kode'])) {
    $query = "SELECT * FROM tb_informasi WHERE id_informasi='" . $_GET['kode']  . "'";
    $sql = mysqli_query($koneksi, $query);
    $data = mysqli_fetch_array($sql);
    if (is_file("assets/img/informasi-ppdb/" . $data['gambar']))
        unlink("assets/img/informasi-ppdb/" . $data['gambar']);

    $sql_hapus = "DELETE FROM tb_informasi WHERE id_informasi='" . $_GET['kode'] . "'";
    $query_hapus = mysqli_query($koneksi, $sql_hapus);

    if ($query_hapus) {
        echo "<script>
                Swal.fire({title: 'Hapus Informasi Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.value) {
                        window.location = 'index.php?page=data-informasi';
                    }
                })</script>";
    } else {
        echo "<script>
                Swal.fire({title: 'Hapus Informasi Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.value) {
                        window.location = 'index.php?page=data-informasi';
                    }
                })</script>";
    }
}
?>
<!-- end -->