<?php
// data sekolah
$sql = $koneksi->query("select * from tb_sekolah");
while ($data = $sql->fetch_assoc()) {
    $id_sekolah = $data['id_sekolah'];
    $nama = $data['nama_sekolah'];
    $alamat = $data['alamat_sekolah'];
    $akreditasi = $data['akreditasi'];
    $deskripsi = $data['deskripsi'];
}

// pagination
// konfigurasi
$jumlahDataPerHalaman = 3;
$query = mysqli_query($koneksi, "SELECT * FROM tb_kegiatan");
$jumlahData = mysqli_num_rows($query);
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

$sql = $koneksi->query("SELECT * FROM tb_kegiatan  LIMIT $awalData, $jumlahDataPerHalaman");
?>

<div class="container">
    <!-- Page Heading/Breadcrumbs -->
    <br>
    <br>

    <div class="row mt-3" style="margin-bottom: 90px" data-aos="fade-left">
        <?php
        while ($data = $sql->fetch_assoc()) {
            $nama = $data['nama_kegiatan'];
            if (strlen($nama) > 50) {
                $nama = substr($nama, 0, 50) . "...";
            }
        ?>
            <div class="col-md-4">
                <div class="card mb-3">
                    <center><img style="width: 90%; height: 230px;" src="<?php echo $data['gambar'] ? 'assets/img/kegiatan/' . $data['gambar'] : 'assets/img/kegiatan/default.png' ?>" alt="Gambar Kegiatan" class="card-img-top"></center>
                    <div class="card-body">
                        <p class="">
                            <b><?php echo $nama ?></b>
                        </p>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>

    <!-- Pagination -->
    <div class="row mb-3" style="margin-top: -39px;" data-aos="fade-up">
        <div class="col-md-12">
            <nav aria-label="...">
                <ul class="pagination">

                    <?php if ($halamanAktif > 1) : ?>
                        <li class="page-item">
                            <a class="page-link" href="?page=modul-kegiatan&halaman=<?php echo $halamanAktif - 1 ?>" tabindex="-1">Sebelumnya</a>
                        </li>
                    <?php endif; ?>

                    <?php for ($i = 1; $i <= $jumlahHalaman; $i++) : ?>
                        <?php if ($i == $halamanAktif) : ?>
                            <li class="page-item active">
                                <a class="page-link" href="?page=modul-kegiatan&halaman=<?php echo $i ?>"><?php echo $i; ?> <span class="sr-only">(current)</span></a>
                            </li>
                        <?php else : ?>
                            <li class="page-item"><a class="page-link" href="?page=modul-kegiatan&halaman=<?php echo $i ?>"><?php echo $i; ?></a></li>
                        <?php endif; ?>
                    <?php endfor; ?>

                    <?php if ($halamanAktif < $jumlahHalaman) : ?>
                        <li class="page-item">
                            <a class="page-link" href="?page=modul-kegiatan&halaman=<?php echo $halamanAktif + 1 ?>">Selanjutnya</a>
                        </li>
                    <?php endif; ?>

                </ul>
            </nav>
        </div>
    </div>
    <!-- /.row -->

</div>
<!--END -->