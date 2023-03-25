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

// tahun
$sql = $koneksi->query("select * from tb_tahun where status='Aktif'");
while ($data = $sql->fetch_assoc()) {
    $tahun = $data['id_tahun'];
}

// pagination
// konfigurasi
$jumlahDataPerHalaman = 2;
$query = mysqli_query($koneksi, "SELECT * FROM tb_informasi");
$jumlahData = mysqli_num_rows($query);
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

$sql = $koneksi->query("SELECT * FROM tb_informasi ORDER BY tanggal DESC LIMIT $awalData, $jumlahDataPerHalaman");

?>

<div class="container">
    <!-- Page Heading/Breadcrumbs -->
    <br>
    <br>

    <div class="row mb-3" data-aos="fade-right">
        <div class="col-lg-6">
            <img src="landing/vendor/333.png" width="100%" alt="Gambar Utama" />
        </div>
        <div class="col-lg-6">
            <h3>Penerimaan Peserta Didik Baru
                <?= $tahun; ?>
            </h3>
            <p style="text-align:justify">Penerimaan peserta didik baru secara ONLINE, kenapa tidak ?
                <br>Bapak atau Ibu orang tua calon peserta didik baru dapat mendaftarkan putra dan putrinya sebagai peserta didik di sekolah
                kami secara online. Sistem akan merekap secara otomatis data peserta didik baru yang di input melalui form pendaftaran.
            </p>
            <p style="text-align:justify">
            <h4>Syarat Pendaftaran</h4>
            <br> 1. Mengisi Formulir
            <br> 2. Upload Akta Kelahiran
            <br> 3. Upload Kartu Keluarga
            <br> 4. Upload KTP Orang Tua/Wali
            <br> 5. Upload Ijazah RA/TK/PAUD
            <br> 6. Upload KKS/KPS/PKH/KIP (bagi yang memiliki)
            <br> <b> DAFTAR ONLINE</b>
            <a href="?page=modul-register"> <u>Disini</u> </a>
            </p>
        </div>
    </div>

    <div class="row mb-3" data-aos="fade-left">
        <div class="col-lg-6 mb-1">
            <h3>Informasi Penerimaan Peserta Didik Baru</h3>
            <p style="text-align:justify">
                <b><?= $nama; ?></b>
            </p>
            <p style="text-align:justify">
                Agar melancarkan dalam melakukan proses pendaftaran pada website ini, kami sarankan untuk melihat atau mendownload panduan yang kami berikan. Untuk panduan bisa dikases pada tombol <a href="?page=modul-help"> <b>panduan</b> </a> dibawah.
            </p>
            <p style="text-align:justify">
                Dalam pengisian formulir pendaftaran untuk diperhatikan agar semua formulir yang ada diisi sesuai dengan data dimiliki.
            </p>

        </div>
        <div class="col-lg-6">
            <img src="landing/vendor/depan.jpg" width="100%" alt="Gambar Profil Sekolah" />
        </div>
    </div>

    <div class="row mb-3" data-aos="fade-right">
        <div class="col-lg-12 mb-4">
            <div class="card h-100">
                <h4 class="card-header"><strong>CETAK HASIL PENDAFTARAN</strong></h4>
                <div class="card-body">

                    <form action="?page=modul-hasil-pendaftaran" method="POST">
                        <div class="form-group">
                            <label>Cari Dengan NIK</label>
                            <input type="text" name="nik" class="form-control" placeholder="Masukkan NIK disini" required>
                        </div>

                        <div class="form-group">
                            <?php if (isset($_SESSION["ses_username"]) == "") { ?>
                                <a href="login.php" class="btn btn-danger">CEK PENDAFTARAN</a>
                            <?php } else { ?>
                                <input type="submit" name="Cek" value="CEK PENDAFTARAN" class="btn btn-danger">
                            <?php } ?>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3" data-aos="fade-left">
        <?php
        while ($data = $sql->fetch_assoc()) {
            $judul = $data['judul_informasi'];
            if (strlen($judul) > 50) {
                $judul = substr($judul, 0, 50) . "...";
            }
            $informasi = $data["informasi"];
            if (strlen($informasi) > 70) {
                $informasi = substr($informasi, 0, 70) . "...";
            }
        ?>
            <div class="col-md-6">
                <div class="card mb-3">
                    <center><img style="width: 60%; height: 200px;" src="<?php echo $data['gambar'] ? 'assets/img/informasi-ppdb/' . $data['gambar'] : 'assets/img/informasi-ppdb/default.png' ?>" alt="Gambar Informasi PPDB" class="card-img-top"></center>
                    <div class="card-body">
                        <p class="">
                            <b><?php echo $judul ?></b>
                            <?php echo $informasi ?>
                        </p>
                        <span class="badge"><i class="fas fa-tags"></i> <?php echo $data['tanggal'] ?></span>
                    </div>
                    <div class="card-footer">
                        <div align="right">
                            <a href="?page=modul-baca-informasi&kode=<?php echo $data['id_informasi']; ?>" class="btn btn-danger"><i class="fa fa-book"></i> Baca</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>

    <!-- Pagination -->
    <div class="row mb-3" data-aos="fade-up">
        <div class="col-md-12">
            <nav aria-label="...">
                <ul class="pagination">

                    <?php if ($halamanAktif > 1) : ?>
                        <li class="page-item">
                            <a class="page-link" href="?page=modul-informasi&halaman=<?php echo $halamanAktif - 1 ?>" tabindex="-1">Sebelumnya</a>
                        </li>
                    <?php endif; ?>

                    <?php for ($i = 1; $i <= $jumlahHalaman; $i++) : ?>
                        <?php if ($i == $halamanAktif) : ?>
                            <li class="page-item active">
                                <a class="page-link" href="?page=modul-informasi&halaman=<?php echo $i ?>"><?php echo $i; ?> <span class="sr-only">(current)</span></a>
                            </li>
                        <?php else : ?>
                            <li class="page-item"><a class="page-link" href="?page=modul-informasi&halaman=<?php echo $i ?>"><?php echo $i; ?></a></li>
                        <?php endif; ?>
                    <?php endfor; ?>

                    <?php if ($halamanAktif < $jumlahHalaman) : ?>
                        <li class="page-item">
                            <a class="page-link" href="?page=modul-informasi&halaman=<?php echo $halamanAktif + 1 ?>">Selanjutnya</a>
                        </li>
                    <?php endif; ?>

                </ul>
            </nav>
        </div>
    </div>
    <!-- /.row -->

    <h4 data-aos="fade-up">Siapa Saja Yang menggunakan Sistem Ini ?</h4>

    <div class="row" data-aos="fade-up">
        <div class="col-lg-2"></div>
        <div class="col-lg-4 mb-4">
            <div class="card h-100">
                <img src="landing/vendor/calon-siswa1.png" height="250px" />
                <div class="card-body">
                    <h4 class="card-title">Calon Siswa</h4>
                    <p class="card-text">- Mendaftarkan Diri
                        <br>- Cetak Bukti Pendaftaran
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card h-100">
                <img src="landing/vendor/admin.png" height="250px" />
                <div class="card-body">
                    <h4 class="card-title">Admin PPDB</h4>
                    <p class="card-text">- Manajemen Data
                        <br>- Manajemen Aplikasi
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-2"></div>
    </div>
</div>
<!--END -->