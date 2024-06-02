<?php 
$tanggal=date("Y");
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title><?php echo"$k_k[nama]";?></title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="tema/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="tema/lib/lightbox/css/lightbox.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="tema/css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="tema/css/style.css" rel="stylesheet">
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->


       <?php include "menu.php"; ?>
        
       <!-- Carousel Start -->
        <div class="container-fluid carousel-header vh-100 px-0">
            <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img src="tema/img/carousel-1.jpg" class="img-fluid" alt="Image">
                        <div class="carousel-caption">
                            <div class="p-3" style="max-width: 900px;">
                                <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Website Resmi <?php echo"$k_k[nama]";?></h4>
                                <h1 class="display-1 text-capitalize text-white mb-4">Kami Siap Membantu</h1>
                                <p class="mb-5 fs-5">kami ingin menegaskan kesiapan kami untuk membantu masyarakat Desa kami. Setiap permintaan, setiap pertanyaan, kami siap memberikan pelayanan terbaik
                                </p>
                                <div class="d-flex align-items-center justify-content-center">
                                    <a class="btn-hover-bg btn btn-primary text-white py-3 px-5" href="utama.php?aksi=informasi">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="tema/img/carousel-2.jpg" class="img-fluid" alt="Image">
                        <div class="carousel-caption">
                            <div class="p-3" style="max-width: 900px;">
                                <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Website Resmi <?php echo"$k_k[nama]";?></h4>
                                <h1 class="display-1 text-capitalize text-white mb-4">Bersama Membangun</h1>
                                <p class="mb-5 fs-5">Pelayanan bukan hanya tugas, tetapi tanggung jawab bersama. Bersama-sama, kita membangun Desa kami menjadi tempat yang lebih baik melalui pelayanan yang berarti
                                </p>
                                <div class="d-flex align-items-center justify-content-center">
                                <a class="btn-hover-bg btn btn-primary text-white py-3 px-5" href="utama.php?aksi=informasi">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="tema/img/carousel-3.jpg" class="img-fluid" alt="Image">
                        <div class="carousel-caption">
                            <div class="p-3" style="max-width: 900px;">
                                <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Website Resmi <?php echo"$k_k[nama]";?></h4>
                                <h1 class="display-1 text-capitalize text-white mb-4">Payanan dengan Senyum</h1>
                                <p class="mb-5 fs-5">Kami berkomitmen memberikan pelayanan dengan senyum dan keramahan. Setiap warga Kami adalah prioritas kami
                                </p>
                                <div class="d-flex align-items-center justify-content-center">
                                <a class="btn-hover-bg btn btn-primary text-white py-3 px-5" href="utama.php?aksi=informasi">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Carousel End -->





        <!-- About Start -->
        <div class="container-fluid about  py-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-xl-5">
                        <div class="h-100">
                            <img src="foto/05152024024517.jpg" class="img-fluid w-100 h-100" alt="Image">
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <h5 class="text-uppercase text-primary">Tentang Kami</h5>
                        <h1 class="mb-4">Selamat Datang di Pekonway Sindi</h1>
                        <p class="fs-5 mb-4">Kami adalah sebuah lembaga pemerintah desa yang bergerak di pelayanan masyarakat, Kami menyediakan berbagai macam layanan yang berkaitan layana desa seperti Administrasi Kependudukan
                        </p>
                        <div class="tab-class bg-secondary p-4">
                            <ul class="nav d-flex mb-2">
                                <li class="nav-item mb-3">
                                    <a class="d-flex py-2 text-center bg-white active" data-bs-toggle="pill" href="#tab-1">
                                        <span class="text-dark" style="width: 150px;">Tentang</span>
                                    </a>
                                </li>
                                <li class="nav-item mb-3">
                                    <a class="d-flex py-2 mx-3 text-center bg-white" data-bs-toggle="pill" href="#tab-2">
                                        <span class="text-dark" style="width: 150px;">Misi</span>
                                    </a>
                                </li>
                                <li class="nav-item mb-3">
                                    <a class="d-flex py-2 text-center bg-white" data-bs-toggle="pill" href="#tab-3">
                                        <span class="text-dark" style="width: 150px;">Visi</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div id="tab-1" class="tab-pane fade show p-0 active">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="d-flex">
                                                <div class="text-start my-auto">
                                                    <h5 class="text-uppercase mb-3">Tentang</h5>
                                                    <p class="mb-4">Pekon Way Sindi Hanuan terletak di Kecamatan Karya Penggawa, Kabupaten Pesisir Barat, Provinsi Lampung. Kami berdedikasi untuk menyediakan layanan terbaik bagi warga kami, serta berupaya keras untuk meningkatkan kesejahteraan dan kualitas hidup masyarakat melalui berbagai program dan inisiatif yang inovatif dan berkelanjutan.
                                                    </p>
                                                    <div class="d-flex align-items-center justify-content-start">
                                                        <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#">Read More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-2" class="tab-pane fade show p-0">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="d-flex">
                                                <div class="text-start my-auto">
                                                    <h5 class="text-uppercase mb-3">Misi</h5>
                                                    <p class="mb-4">Mewujudkan Pekon Way Sindi Hanuan sebagai desa yang maju, mandiri, dan sejahtera dengan mengedepankan nilai kebersamaan dan gotong royong.
                                                    </p>
                                                    <div class="d-flex align-items-center justify-content-start">
                                                        <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#">Read More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-3" class="tab-pane fade show p-0">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="d-flex">
                                                <div class="text-start my-auto">
                                                    <h5 class="text-uppercase mb-3">Visi</h5>
                                                    <p class="mb-4">Meningkatkan Pelayanan Publik: Menyediakan layanan administrasi yang cepat, tepat, dan transparan untuk seluruh warga.
                                                    </p>
                                                    <div class="d-flex align-items-center justify-content-start">
                                                        <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#">Read More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Causes Start -->
        <div id="layanan" class="container-fluid causes py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5" style="max-width: 800px;">
                    <h5 class="text-uppercase text-primary">Layanan Kami</h5>
                    <h1 class="mb-4"> Layanan Kami yang Tersedia</h1>
                    
                </div>
                <div class="row g-4">
                <?php $tebaru=mysqli_query($koneksi," SELECT * FROM berita WHERE jenis='layanan' ORDER BY id_berita DESC  LIMIT 8");
while ($t=mysqli_fetch_array($tebaru)){ ?>
                    <div class="col-lg-6 col-xl-3">
                        <div class="causes-item">
                            <div class="causes-img">
                                <img src="foto/data/<?php echo"$t[gambar]";?>" class="img-fluid w-100" alt="Image">
                            
                                <div class="causes-dination p-2">
                                    <a class="btn-hover-bg btn btn-primary text-white py-2 px-3" href="#">Layanan</a>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                    <span>89%</span>
                                </div>
                            </div>
                            <div class="causes-content p-4">
                                <h4 class="mb-3"><?php echo"$t[judul]";?></h4>
                                <p class="mb-4"><?php echo substr("$t[isi]", 0, 200); ?></p>
                                <a class="btn-hover-bg btn btn-primary text-white py-2 px-3" href="utama.php?aksi=detailberita&id_berita=<?php echo"$t[id_berita]";?>">Read More</a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    
                    
                    
                </div>
            </div>
        </div>
        <!-- Causes End -->
        <!-- Events Start -->
        <div id="informasi" class="container-fluid event py-5">
            <div class="container py-5">
                <div class="text-center mx-auto mb-5" style="max-width: 800px;">
                    <h5 class="text-uppercase text-primary">Berita</h5>
                    <h1 class="mb-0">Berita Terbaru</h1>
                </div>
                <div class="event-carousel owl-carousel">
<?php $tebaru=mysqli_query($koneksi," SELECT * FROM berita WHERE jenis='informasi' ORDER BY id_berita DESC ");
while ($t=mysqli_fetch_array($tebaru)){ ?>
                    <div class="event-item">
                        <img src="foto/data/<?php echo"$t[gambar]";?>" class="img-fluid w-100" alt="Image">
                        <div class="event-content p-4">
                            <div class="d-flex justify-content-between mb-4">
                                <span class="text-body"><i class="fas fa-map-marker-alt me-2"></i>Informasi Kami</span>
                                <span class="text-body"><i class="fas fa-calendar-alt me-2"></i><?php echo"$t[tanggal]";?></span>
                            </div>
                            <h4 class="mb-4"><?php echo"$t[judul]";?></h4>
                            <p class="mb-4"><?php echo substr("$t[isi]", 0, 100); ?></p>
                            <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="utama.php?aksi=detailberita&id_berita=<?php echo"$t[id_berita]";?>">Read More</a>
                        </div>
                    </div>
<?php } ?>
                    
                </div>
            </div>
        </div>
        <!-- Events End -->

        <!-- Blog Start -->
        <div id="galeri" class="container-fluid blog py-5 mb-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5" style="max-width: 800px;">
                    <h5 class="text-uppercase text-primary">Galri Kami</h5>
                    <h1 class="mb-0">Galeri kami 
                    </h1>
                </div>
                <div class="row g-4">
                <?php  $tebaru=mysqli_query($koneksi," SELECT * FROM galeri ORDER BY id_galeri DESC  LIMIT 4");
                        while ($t=mysqli_fetch_array($tebaru)){ ?>  
                   <div class="col-lg-6 col-xl-3">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="foto/galleri/<?php echo"$t[gambar]";?>" class="img-fluid w-100" alt="">
                                <div class="blog-info">
                                    <span><i class="fa fa-clock"></i> <?php echo"$t[tgl]";?></span>
                                    <div class="d-flex">
                                        <span class="me-3"> 3 <i class="fa fa-heart"></i></span>
                                        <a href="#" class="text-white">0 <i class="fa fa-comment"></i></a>
                                    </div>
                                </div>
                                <div class="search-icon">
                                    <a href="foto/galleri/<?php echo"$t[gambar]";?>" data-lightbox="Blog-1" class="my-auto"><i class="fas fa-search-plus btn-primary text-white p-3"></i></a>
                                </div>
                            </div>
                            <div class="text-dark border p-4 ">
                                <h4 class="mb-4"><?php echo"$t[judul]";?></h4>
                                <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="utama.php?aksi=galeri">Lihat Semua Galeri</a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- Blog End -->

        <!-- Volunteers Start -->
        <div class="container-fluid volunteer py-5 mt-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-5">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="volunteer-img">
                                    <img src="tema/img/volunteers-1.jpg" class="img-fluid w-100" alt="Image">
                                    <div class="volunteer-title">
                                        <h5 class="mb-2 text-white">IMRONSAH</h5>
                                        <p class="mb-0 text-white">Kepala desa</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="volunteer-img">
                                    <img src="tema/img/volunteers-3.jpg" class="img-fluid w-100" alt="Image">
                                    <div class="volunteer-title">
                                        <h5 class="mb-2 text-white">Ali Imron</h5>
                                        <p class="mb-0 text-white">Tata Usaha</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="volunteer-img">
                                    <img src="tema/img/volunteers-2.jpg" class="img-fluid w-100" alt="Image">
                                    <div class="volunteer-title">
                                        <h5 class="mb-2 text-white">Fikri Susandi</h5>
                                        <p class="mb-0 text-white">Sekertaris</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="volunteer-img">
                                    <img src="tema/img/volunteers-4.jpg" class="img-fluid w-100" alt="Image">
                                    <div class="volunteer-title">
                                        <h5 class="mb-2 text-white">Nirwan Rezali</h5>
                                        <p class="mb-0 text-white">Pelayanan</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <h5 class="text-uppercase text-primary">Website Resmi <?php echo"$k_k[nama]";?></h5>
                        <h1 class="mb-4">Kualitas Pelayanan, Bukan Hanya Kuantitas</h1>
                        <p class="mb-4">Lebih dari sekadar menyelesaikan tugas, kami fokus pada kualitas pelayanan. Setiap interaksi dengan warga adalah kesempatan untuk memberikan pengalaman yang baik dan membantu memecahkan masalah.
                        </p>
                        <p class="text-dark"><i class=" fa fa-check text-primary me-2"></i> Pelayanan Sosial</p>
                        <p class="text-dark"><i class=" fa fa-check text-primary me-2"></i> Administrasi Kependudukan</p>
                        <p class="text-dark"><i class=" fa fa-check text-primary me-2"></i> Pemberdayaan Perempuan dan Anak</p>
                        <p class="text-dark"><i class=" fa fa-check text-primary me-2"></i> Pengembangan Ekonomi Lokal</p>
                        <p class="text-dark mb-5"><i class=" fa fa-check text-primary me-2"></i> Pengembangan Kesejahteraan</p>
                        <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="utama.php?aksi=hubungi">Info Lengkap</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Volunteers End -->

       <?php include "bawah.php"; ?>


        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="tema/lib/easing/easing.min.js"></script>
        <script src="tema/lib/waypoints/waypoints.min.js"></script>
        <script src="tema/lib/counterup/counterup.min.js"></script>
        <script src="tema/lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="tema/lib/lightbox/js/lightbox.min.js"></script>
        

        <!-- Template Javascript -->
        <script src="tema/js/main.js"></script>

    </body>

</html>