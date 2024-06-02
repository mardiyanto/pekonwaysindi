    <!-- Navbar start -->
    <div class="container-fluid fixed-top px-0">
            <div class="container px-0">
                <div class="topbar">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-8">
                            <div class="topbar-info d-flex flex-wrap">
                                <a href="#" class="text-light me-4"><i class="fas fa-envelope text-white me-2"></i><?php echo"$k_k[alias]";?></a>
                                <a href="#" class="text-light"><i class="fas fa-phone-alt text-white me-2"></i><?php echo"$k_k[tahun]";?></a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="topbar-icon d-flex align-items-center justify-content-end">
                                <a href="#" class="btn-square text-white me-2"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="btn-square text-white me-2"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="btn-square text-white me-2"><i class="fab fa-instagram"></i></a>
                                <a href="#" class="btn-square text-white me-2"><i class="fab fa-pinterest"></i></a>
                                <a href="#" class="btn-square text-white me-0"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-light bg-light navbar-expand-xl">
                    <a href="index.php" class="navbar-brand ms-3">
                        <h1 class="text-primary display-5"><i class="fas fa-building me-3"></i><?php echo"$k_k[nama_app]";?></h1>
                    </a>
                    <button class="navbar-toggler py-2 px-3 me-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars text-primary"></span>
                    </button>
                    <div class="collapse navbar-collapse bg-light" id="navbarCollapse">
                        <div class="navbar-nav ms-auto">
                            <a href="index.php" class="nav-item nav-link active">Beranda</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Profil Kami</a>
                                <div class="dropdown-menu m-0 bg-secondary rounded-0">
                                <?php $sql=mysqli_query($koneksi," SELECT * FROM berita WHERE jenis='halaman' ORDER BY id_berita DESC ");
while ($r=mysqli_fetch_array($sql)){ 
                       echo" <a href='utama.php?aksi=home&id_berita=$r[id_berita]' class='dropdown-item'>$r[judul]</a>";
 } ?>
                                
                                </div>
                            </div>
                            <a href="index.php#informasi" class="nav-item nav-link">informasi</a>
                            <a href="index.php#galeri" class="nav-item nav-link">Galeri</a>
                            <a href="utama.php?aksi=hubungi" class="nav-item nav-link">Hubungi Kami</a>
                        </div>
                        <!-- <div class="d-flex align-items-center flex-nowrap pt-xl-0" style="margin-left: 15px;">
                            <a href="" class="btn-hover-bg btn btn-primary text-white py-2 px-4 me-3">Donate Now</a>
                        </div> -->
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar End -->
