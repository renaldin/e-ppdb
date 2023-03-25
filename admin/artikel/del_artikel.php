<?php
if (isset($_GET['kode'])) {
    $query = "SELECT * FROM tb_artikel WHERE id_artikel='" . $_GET['kode']  . "'";
    $sql = mysqli_query($koneksi, $query);
    $data = mysqli_fetch_array($sql);
    if (is_file("assets/img/artikel/" . $data['gambar']))
        unlink("assets/img/artikel/" . $data['gambar']);

    $sql_hapus = "DELETE FROM tb_artikel WHERE id_artikel='" . $_GET['kode'] . "'";
    $query_hapus = mysqli_query($koneksi, $sql_hapus);


    if ($query_hapus) {
        echo "<script>
                Swal.fire({title: 'Hapus Artikel Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.value) {
                        window.location = 'index.php?page=data-artikel';
                    }
                })</script>";
    } else {
        echo "<script>
                Swal.fire({title: 'Hapus Artikel Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.value) {
                        window.location = 'index.php?page=data-artikel';
                    }
                })</script>";
    }
}
?>
<!-- end -->