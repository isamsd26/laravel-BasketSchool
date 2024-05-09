<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>AKJ Basketbal School</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="../assets/img/Logo_AKJ_Basketball.png" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/style.css') }}" />

</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top" id="navbar">
        <div class="container">
            <a class="navbar-brand navbar-logo" href="#"> <img
                    src="{{ asset('frontend/images/Logo_AKJ_Basketball.png') }}" alt="logo" class="logo-1"
                    width="50" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('index') }}" data-scroll-nav="0">Home</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('berita') }}"
                            data-scroll-nav="1">Berita</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('jadwal') }}" data-scroll-nav="3">Jadwal</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#" data-scroll-nav="2">Galeri</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#" data-scroll-nav="4">Informasi
                            Pendafataran</a> </li>
                </ul>
                <div class="d-flex justify-content-center">
                    <a href="features/login.php" class="btn btn-outline-light ms-2 fs-5 text-white">Masuk</a>
                    <a href="features/register.php" class="btn btn-light ms-3 fs-5">Daftar</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <!-------Banner Start------->
    <section class="banner">
        <div class="banner-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12"> <img src="{{ asset('frontend/images/konten.png') }}"
                            class="img-fluid wow fadeInUp" />
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="banner-text">
                            <h2 class="white">Lets join and play with us!</h2>
                            <p class="banner-text white">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Curabitur hendrerit neque massa, sit amet tristique ante porta ut. In sodales et justo
                                vel vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada
                                fames ac turpis egestas.</p>
                            <ul>
                                <li><a class="btn btn-light  text-uppercase rounded-pill" href="#">Gabung
                                        sekarang</a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <div class="container d-flex flex-column justify-content-center align-items-center" id="alasan">
        <div class="container bg-white">
            <div class="sectioner-header text-center mb-5">
                <h3>About AKJ Basketball School</h3>
                <span class="line"></span>
            </div>
            <div class="container-custom mt-1">
                <div class="row">
                    <!-- Div pertama untuk gambar -->
                    <div class="col-md-6 d-flex justify-content-center align-items-center">
                        <div class="position-relative clearfix">
                            <img class="img-abs rounded" src="{{ asset('frontend/images/1.jpg') }}" alt="..." />

                            <img class="img-abs rounded position-absolute" src="{{ asset('frontend/images/3.jpg') }}"
                                alt="..." />
                            <!-- Gambar kedua dipindah ke kiri -->
                        </div>
                    </div>

                    <!-- Div kedua untuk konten -->
                    <div class="col-md-6 order-1 order-md-2">
                        <div class="fs-5">
                            <div class="my-3">
                                <p>Sudahkah kamu mendengar tentang AKJ Basketball, sekolah basket keren di Semarang? Di
                                    sana,
                                    bukan hanya soal bermain basket, tapi juga tentang petualangan yang menantang dan
                                    pertumbuhan
                                    pribadi yang luar biasa!
                                </p>
                                <p>Bayangkan, di AKJ Basketball, kamu akan diajari teknik-teknik basket terbaik oleh
                                    para pelatih handal yang siap membimbingmu menjadi pemain basket yang hebat Mereka
                                    tidak hanya mengajarkan cara melempar bola atau melakukan dribble, tetapi juga
                                    membekalimu dengan keterampilan taktis dan fisik yang akan membuatmu unggul di
                                    lapangan.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-------Banner End------->

    <!-------About End------->

    <section class="feature section-padding mt-5" data-scroll-index='2'>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="sectioner-header text-center">
                        <h3>Kenapa Harus Kami?</h3>
                        <span class="line"></span> <!-- Keep this in its original position -->
                        <p>Sed quis nisi nisi. Proin consectetur porttitor dui sit amet viverra. Fusce sit amet lorem
                            faucibus, vestibulum ante in, pharetra ante.</p>
                    </div>

                    <div class="section-content text-center">
                        <!-- Row Pertama: 3 Kolom -->
                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <div class="single-feature wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="text-right">
                                        <h5>Kualitas Pelatihan</h5>
                                        <div>
                                            <img class="img-fluid rounded"
                                                src="{{ asset('frontend/images/UI/konten1.png') }}" alt="..." />
                                            <!-- SVG positioned here -->
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididugnt ut labore.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="single-feature wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="text-right">
                                        <h5>Fasilitas Modern</h5>
                                        <div>
                                            <img class="img-fluid rounded"
                                                src="{{ asset('frontend/images/UI/konten2.png') }}" alt="..." />
                                            <!-- SVG positioned here -->
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididugnt ut labore.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="single-feature wow fadeInUp" data-wow-delay="0.6s">
                                    <div class="text-right">
                                        <h5>Kopmetensi Rutin</h5>
                                        <div>
                                            <img class="img-fluid rounded"
                                                src="{{ asset('frontend/images/UI/konten3.png') }}" alt="..." />
                                            <!-- SVG positioned here -->
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididugnt ut labore.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Row Kedua: 2 Kolom -->
                        <div class="row mt-4 ">
                            <div class="col"></div>
                            <div class="col-md-4 col-sm-12">
                                <div class="single-feature wow fadeInUp" data-wow-delay="0.6s">
                                    <div class="text-right">
                                        <h5>Pengembangan karakter</h5>
                                        <div>
                                            <img class="img-fluid rounded"
                                                src="{{ asset('frontend/images/UI/konten4.png') }}" alt="..." />
                                            <!-- SVG positioned here -->
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididugnt ut labore.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="single-feature wow fadeInUp" data-wow-delay="0.6s">
                                    <div class="text-right">
                                        <h5>Komunitas Solid</h5>
                                        <<div>
                                            <img class="img-fluid rounded"
                                                src="{{ asset('frontend/images/UI/konten5.png') }}" alt="..." />
                                            <!-- SVG positioned here -->
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididugnt ut labore.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col"></div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>



    <section class="about section-padding prelative" data-scroll-index='1'>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="mt-4 text-center">Berita Terbaru</h1>
                    <div class="section-content text-center">
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-sm-6 mb-4">
                                <!-- Portfolio item 1-->
                                <div class="portfolio-item">
                                    <a class="portfolio-link" href="#portfolioModal1">
                                        <img class="img-galeri rounded" src="{{ asset('frontend/images/2.jpg') }}"
                                            alt="..." />
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 mb-4">
                                <!-- Portfolio item 2-->
                                <div class="portfolio-item">
                                    <a class="portfolio-link" href="#portfolioModal2">
                                        <img class="img-galeri rounded" src="{{ asset('frontend/images/2.jpg') }}"
                                            alt="..." />
                                    </a>
                                </div>
                            </div>

                        </div>
                        <a href="{{ route('berita') }}" class="about-btn">Lihat Berita Lainnya</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-------About End------->

    <!-------FAQ Start------->
    <section class="faq section-padding prelative" class="page-section bg-light" id="portfolio"
        data-scroll-index='5'>
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Galeri</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" href="#portfolioModal1">
                            <img class="img-galeri rounded" src="{{ asset('frontend/images/2.jpg') }}"
                                alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Threads</div>
                            <div class="portfolio-caption-subheading text-muted">Illustration</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 2-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" href="#portfolioModal2">
                            <img class="img-galeri rounded" src="{{ asset('frontend/images/2.jpg') }}"
                                alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Explore</div>
                            <div class="portfolio-caption-subheading text-muted">Graphic Design</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 3-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" href="#portfolioModal3">
                            <img class="img-galeri rounded" src="{{ asset('frontend/images/2.jpg') }}"
                                alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Finish</div>
                            <div class="portfolio-caption-subheading text-muted">Identity</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                    <!-- Portfolio item 4-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" href="#portfolioModal4">
                            <img class="img-galeri rounded" src="{{ asset('frontend/images/2.jpg') }}"
                                alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Lines</div>
                            <div class="portfolio-caption-subheading text-muted">Branding</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                    <!-- Portfolio item 5-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" href="#portfolioModal5">
                            <img class="img-galeri rounded" src=".{{ asset('frontend/images/2.jpg') }}"
                                alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Southwest</div>
                            <div class="portfolio-caption-subheading text-muted">Website Design</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <!-- Portfolio item 6-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" href="#portfolioModal6">
                            <img class="img-galeri rounded" src="{{ asset('frontend/images/2.jpg') }}"
                                alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Window</div>
                            <div class="portfolio-caption-subheading text-muted">Photography</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-------FAQ End------->

    <!-------Contact Start------->
    <section class="contact section-padding" data-scroll-index='6'>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="sectioner-header text-center">
                        <h3>Contact us</h3>
                        <span class="line"></span>
                        <p>Sed quis nisi nisi. Proin consectetur porttitor dui sit amet viverra. Fusce sit amet lorem
                            faucibus, vestibulum ante in, pharetra ante.</p>
                    </div>
                    <div class="section-content">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-8">
                                <form id="contact_form" action="">
                                    <div class="row">
                                        <div class="col">
                                            <input type="text" id="your_name" class="form-input w-100"
                                                name="full-name" placeholder="Full Name" required>
                                        </div>
                                        <div class="col">
                                            <input type="email" id="email" class="form-input w-100"
                                                name="email" placeholder="Email" required>
                                        </div>
                                    </div>
                                    <input type="text" id="subject" class="form-input w-100" name="subject"
                                        placeholder="Subject">
                                    <textarea class="form-input w-100" id="message" placeholder="Message" name="message"></textarea>
                                    <button class="btn-grad w-100 text-uppercase" type="submit"
                                        name="button">submit</button>
                                </form>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-4">
                                <div class="contact-info white">
                                    <div class="contact-item media"> <i
                                            class="fa fa-map-marker-alt media-left media-right-margin"></i>
                                        <div class="media-body">
                                            <p class="text-uppercase">Address</p>
                                            <p class="text-uppercase">New Delhi, India</p>
                                        </div>
                                    </div>
                                    <div class="contact-item media"> <i
                                            class="fa fa-mobile media-left media-right-margin"></i>
                                        <div class="media-body">
                                            <p class="text-uppercase">Phone</p>
                                            <p class="text-uppercase"><a class="text-white"
                                                    href="tel:+15173977100">009900990099</a> </p>
                                        </div>
                                    </div>
                                    <div class="contact-item media"> <i
                                            class="fa fa-envelope media-left media-right-margin"></i>
                                        <div class="media-body">
                                            <p class="text-uppercase">E-mail</p>
                                            <p class="text-uppercase"><a class="text-white"
                                                    href="mailto:abcdefg@gmail.com">yogeshsingh.now@gmail.com</a> </p>
                                        </div>
                                    </div>
                                    <div class="contact-item media"> <i
                                            class="fa fa-clock media-left media-right-margin"></i>
                                        <div class="media-body">
                                            <p class="text-uppercase">Working Hours</p>
                                            <p class="text-uppercase">Mon-Fri 9.00 AM to 5.00PM.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="card mx-5 mt-5 pl-4" style="width: auto; height: 120px; background-color: black;">
        <div class="card-body d-flex justify-content-between align-items-center text-white pe-4">
            <div>
                <h5 class="card-title">Need more information?</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus efficitur arcu
                    eget convallis efficitur.</p>
            </div>
            <button type="button" class="btn btn-light btn-md"
                onclick="window.location.href = 'features/info.php';">Informari pendaftaran</button>
        </div>
    </div>
    <footer class="footer">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 pb-3 pt-5 border-top custom-footer-bg text-white">
            <div class="col mb-3 d-flex flex-column align-items-center justify-content-center">
                <a class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none me-4">
                    <svg class="bi me-2" width="40" height="32">
                        <use xlink:href="#bootstrap" />
                    </svg>
                    <img src="{{ asset('frontend/images/Logo_AKJ_Basketball.png') }}" alt="Logo AKJ Semarang"
                        height="50" class="d-inline-block align-top me-2">
                </a>
                <p class="mb-0 me-5 text-dark">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis quo, pariatur dolorem
                    recusandae omnis impedit. Reiciendis quod repellat officia doloribus deserunt!
                </p>
            </div>

            <div class="col mb-3">
                <h5 class="text-dark">Section 1</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">Features</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">Pricing</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">About</a></li>
                </ul>
            </div>

            <div class="col mb-3">
                <h5 class="text-dark">Section 2</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">Features</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">Pricing</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">About</a></li>
                </ul>
            </div>

            <div class="col mb-3">
                <h5 class="text-dark">Section 3</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">Features</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">Pricing</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">About</a></li>
                </ul>
            </div>
            <div class="col"></div>
        </div>
    </footer>

    <script>
        $(document).ready(function() {
            // Atur jumlah slide yang ditampilkan berdasarkan ukuran layar
            function setCarouselItems() {
                var screenWidth = $(window).width();
                var visibleSlides;

                if (screenWidth < 750) {
                    visibleSlides = 1;
                } else if (screenWidth < 1000) {
                    visibleSlides = 2;
                } else {
                    visibleSlides = 3;
                }

                $('#carouselExampleIndicators').carousel({
                    interval: false,
                    wrap: false
                });

                $('#carouselExampleIndicators').on('slide.bs.carousel', function(e) {
                    var $e = $(e.relatedTarget);
                    var idx = $e.index();
                    var itemsPerSlide = visibleSlides;
                    var totalItems = $('.carousel-item').length;

                    if (idx >= totalItems - (itemsPerSlide - 1)) {
                        var it = itemsPerSlide - (totalItems - idx);
                        for (var i = 0; i < it; i++) {
                            // Tambahkan slide ke akhir jika sedang di slide terakhir
                            if (e.direction == "left") {
                                $('.carousel-item').eq(i).appendTo('.carousel-inner');
                            } else {
                                $('.carousel-item').eq(0).appendTo('.carousel-inner');
                            }
                        }
                    }
                });
            }

            // Panggil fungsi setCarouselItems saat halaman dimuat dan saat ukuran layar berubah
            setCarouselItems();
            $(window).resize(setCarouselItems);
        });
    </script>

    <!-- Bootstrap core JS-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <!-- scrollIt js -->
    <script src="{{ asset('frontend/js/scrollIt.min.js') }}"></script>
    <script src="{{ asset('frontend/js/wow.min.js') }}"></script>
    <script>
        wow = new WOW();
        wow.init();
        $(document).ready(function(e) {

            $('#video-icon').on('click', function(e) {
                e.preventDefault();
                $('.video-popup').css('display', 'flex');
                $('.iframe-src').slideDown();
            });
            $('.video-popup').on('click', function(e) {
                var $target = e.target.nodeName;
                var video_src = $(this).find('iframe').attr('src');
                if ($target != 'IFRAME') {
                    $('.video-popup').fadeOut();
                    $('.iframe-src').slideUp();
                    $('.video-popup iframe').attr('src', " ");
                    $('.video-popup iframe').attr('src', video_src);
                }
            });

            $('.slider').bxSlider({
                pager: false
            });
        });

        window.onscroll = function() {
            myFunction()
        };

        const navbar = document.getElementById("navbar");
        const sticky = navbar.offsetTop;

        function myFunction() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky");
            } else {
                navbar.classList.remove("sticky");
            }
        }

        // $(window).on("scroll",function () {
        //     var bodyScroll = $(window).scrollTop(),
        //     navbar = $(".navbar");
        //     if(bodyScroll > 50){
        //       $('.navbar-logo img').attr('src','../../../public/frontend/images/logo-black.png');
        //       navbar.addClass("nav-scroll");
        //     }else{
        //       $('.navbar-logo img').attr('src','../../../public/frontend/images/logo.png');
        //       navbar.removeClass("nav-scroll");
        //     }
        // });
        // $(window).on("load",function (){
        // 	var bodyScroll = $(window).scrollTop(),
        // 	navbar = $(".navbar");

        // 	if(bodyScroll > 50){
        // 	$('.navbar-logo img').attr('src','../../../public/frontend/images/logo-black.png');
        // 	navbar.addClass("nav-scroll");
        // 	}else{
        // 	$('.navbar-logo img').attr('src','../../../public/frontend/images/logo-white.png');
        // 	navbar.removeClass("nav-scroll");
        // 	}

        // 	$.scrollIt({

        // 	easing: 'swing',      // the easing function for animation
        // 	scrollTime: 900,       // how long (in ms) the animation takes
        // 	activeClass: 'active', // class given to the active nav element
        // 	onPageChange: null,    // function(pageIndex) that is called when page is changed
        // 	topOffset: -63
        // 	});
        // });
    </script>
</body>

</html>
