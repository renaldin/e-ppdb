<?php
if (isset($_GET['kode'])) {
    $query = "SELECT * FROM tb_kegiatan WHERE id_kegiatan='" . $_GET['kode']  . "'";
    $sql = mysqli_query($koneksi, $query);
    $data = mysqli_fetch_array($sql);
    if (is_file("assets/img/kegiatan/" . $data['gambar']))
        unlink("assets/img/kegiatan/" . $data['gambar']);

    $sql_hapus = "DELETE FROM tb_kegiatan WHERE id_kegiatan='" . $_GET['kode'] . "'";
    $query_hapus = mysqli_query($koneksi, $sql_hapus);


    if ($query_hapus) {
        echo "<script>
                Swal.fire({title: 'Hapus Kegiatan Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.value) {
                        window.location = 'index.php?page=data-kegiatan';
                    }
                })</script>";
    } else {
        echo "<script>
                Swal.fire({title: 'Hapus Kegiatan Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.value) {
                        window.location = 'index.php?page=data-kegiatan';
                    }
                })</script>";
    }
}
?>
<!-- end -->