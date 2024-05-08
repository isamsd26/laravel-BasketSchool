<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>AKJ Basketball School</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
        integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/style.css') }}" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
        integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <!-- Font Google -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container"> <a class="navbar-brand navbar-logo" href="#"> <img
                    src="{{ asset('frontend/images/Logo_AKJ_Basketball.png') }}" alt="logo" class="logo-1"
                    width="50" height="50"> </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span
                    class="fas fa-bars"></span> </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"> <a class="nav-link" href="" data-scroll-nav="0">Home</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('berita') }}" data-scroll-nav="1">Berita</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#" data-scroll-nav="2">Galeri</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#" data-scroll-nav="3">Jadwal</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#" data-scroll-nav="4">Informasi
                            Pendafataran</a> </li>
                </ul>
                <div class="d-flex align-items-center">
                    <a href="features/login.php" class="btn btn-outline-light ml-2 fs-5 text-white">Masuk</a>
                    <a href="features/register.php" class="btn btn-light ml-3 fs-5">Daftar</a>
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
                                        <h5>Fast Processing</h5>
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
                                        <h5>Low Power Consuming</h5>
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
                                        <h5>Wifi Compatibility</h5>
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
                            <div class="col-4">
                                <div class="single-feature wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="text-left">
                                        <h5>Regular Updates</h5>
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
                            <div class="col-4">
                                <div class="single-feature wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="text-left">
                                        <h5>Save Money</h5>
                                        <div>
                                            <img class="img-fluid rounded"
                                                src="{{ asset('frontend/images/UI/konten5.png') }}" alt="..." />
                                            <!-- SVG positioned here -->
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididugnt ut labore.</p>
                                    </div>
                                </div>
                            </div>
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

                    <div class="section-content text-center">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="icon-box wow fadeInUp" data-wow-delay="0.2s"> <img
                                        src="{{ asset('frontend/images/slider/b-1.jpg') }}"
                                        style="height: 200px; width: 200px;">
                                    <h5>Support</h5>
                                    <p>Phasellus lobortis justo a magna facilisis, in commodo tellus rutrum. Sed vitae
                                        condimentum nulla.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="icon-box wow fadeInUp" data-wow-delay="0.4s"> <img
                                        src="{{ asset('frontend/images/slider/b-2.jpg') }}"
                                        style="height: 200px; width: 200px;">
                                    <h5>Cross Platform</h5>
                                    <p>Phasellus lobortis justo a magna facilisis, in commodo tellus rutrum. Sed vitae
                                        condimentum nulla.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="icon-box wow fadeInUp" data-wow-delay="0.6s"> <img
                                        src="{{ asset('frontend/images/slider/b-3.jpg') }}"
                                        style="height: 200px; width: 200px;">
                                    <h5>Fast</h5>
                                    <p>Phasellus lobortis justo a magna facilisis, in commodo tellus rutrum. Sed vitae
                                        condimentum nulla.</p>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="about-btn">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-------About End------->

    <!-------Video Start------->
    <section class="video-section prelative text-center white">
        <div class="section-padding video-overlay">
            <div class="container">
                <h3>Watch Now</h3>
                <i class="fa fa-play" id="video-icon" aria-hidden="true"></i>
                <div class="video-popup">
                    <div class="video-src">
                        <div class="iframe-src">
                            <iframe src="https://www.youtube.com/embed/Ku52zNnft8k?rel=0&amp;showinfo=0"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-------Video End------->
    <div id="carouselExampleIndicators" class="container carousel slide my-5 py-3 bg-white" data-ride="carousel">
        <h1 class="mt-4">Berita Terbaru</h1>
        <div class="carousel-inner mt-5">
            <div class="carousel-item active">
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <div class="text-center">
                            <img src="{{ asset('frontend/images/slider/b-1.jpg') }}" class="d-block mx-auto mb-3"
                                style="height: 300px; width: 300px; object-fit: cover;" alt="Slide 1">
                            <h5 class="mt-3">Header Slide 1</h5>
                            <p class="mt-3">Description for Slide 1</p>
                            <button class="btn btn-outline-dark" style="background-color: #b7821d;">Learn
                                More</button>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-center">
                            <img src="{{ asset('frontend/images/slider/b-2.jpg') }}" class="d-block mx-auto mb-3"
                                style="height: 300px; width: 300px; object-fit: cover;" alt="Slide 2">
                            <h5 class="mt-3">Header Slide 2</h5>
                            <p class="mt-3">Description for Slide 2</p>
                            <button class="btn btn-outline-dark" style="background-color: #b7821d;">Learn
                                More</button>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-center">
                            <img src="{{ asset('frontend/images/slider/b-3.jpg') }}" class="d-block mx-auto mb-3"
                                style="height: 300px; width: 300px; object-fit: cover;" alt="Slide 3">
                            <h5 class="mt-3">Header Slide 3</h5>
                            <p class="mt-3">Description for Slide 3</p>
                            <button class="btn btn-outline-dark" style="background-color: #b7821d;">Learn
                                More</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <div class="text-center">
                            <img src="{{ asset('frontend/images/slider/b-1.jpg') }}" class="d-block mx-auto mb-3"
                                style="height: 300px; width: 300px; object-fit: cover;" alt="Slide 1">
                            <h5 class="mt-3">Header Slide 4</h5>
                            <p class="mt-3">Description for Slide 4</p>
                            <button class="btn btn-outline-dark" style="background-color: #b7821d;">Learn
                                More</button>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-center">
                            <img src="{{ asset('frontend/images/slider/b-2.jpg') }}" class="d-block mx-auto mb-3"
                                style="height: 300px; width: 300px; object-fit: cover;" alt="Slide 2">
                            <h5 class="mt-3">Header Slide 5</h5>
                            <p class="mt-3">Description for Slide 5</p>
                            <button class="btn btn-outline-dark" style="background-color: #b7821d;">Learn
                                More</button>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-center">
                            <img src="{{ asset('frontend/images/slider/b-3.jpg') }}" class="d-block mx-auto mb-3"
                                style="height: 300px; width: 300px; object-fit: cover;" alt="Slide 3">
                            <h5 class="mt-3">Header Slide 6</h5>
                            <p class="mt-3">Description for Slide 6 </p>
                            <button class="btn btn-outline-dark" style="background-color: #b7821d;">Learn
                                More</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add other carousel items here -->
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"
            style="left: 0;">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next"
            style="right: 0;">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden text-dark">Next</span>
        </a>
    </div>

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
                <a class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none ml-4">
                    <svg class="bi mr-2" width="40" height="32">
                        <use xlink:href="#bootstrap" />
                    </svg>
                    <img src="{{ asset('frontend/images/Logo_AKJ_Basketball.png') }}" alt="Logo AKJ Semarang"
                        height="50" class="d-inline-block align-top mr-2">
                </a>
                <p class="mb-0 ml-5 text-dark">
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

    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>

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
   
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
        integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous">
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
