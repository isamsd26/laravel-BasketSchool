<!DOCTYPE html>
<html lang="en">

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

<body>
    <!-- Navbar dengan posisi tetap -->
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
                <div class="d-flex align-itecenter">
                    <a href="features/login.php" class="btn btn-outline-light ms-2 fs-5 text-white">Masuk</a>
                    <a href="features/register.php" class="btn btn-light ms-3 fs-5">Daftar</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Tambahkan padding-top ke konten untuk memberikan ruang -->
    <div class="content-gal"> <!-- Tambahkan padding-top -->
        <!-- Bagian utama dengan konten -->
        <section id="portfolio" data-scroll-index="5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="text-center">
                            <h2>Galeri</h2>
                            <h3 class="text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                        </div>
                        <div class="row">
                            <!-- Portofolio item -->
                            <div class="col-lg-6 mb-4">
                                <div class="portfolio-item">
                                    <a class="portfolio-link" href="#portfolioModal1">
                                        <img class="img-news rounded" src="{{ asset('frontend/images/2.jpg') }}">
                                    </a>
                                    <div class="portfolio-caption">
                                        <div class="portfolio-caption-heading">Threads</div>
                                        <div class="portfolio-caption-subheading text-muted text-custom">Lorem ipsum
                                            dolor sit, amet
                                            consectetur adipisicing elit. Enim asperiores quis explicabo earum neque
                                            suscipit quaerat. Corrupti, vel cum quam ipsa eius vero architecto quas ea
                                            blanditiis magni eaque voluptatem!</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="portfolio-item">
                                    <a class="portfolio-link" href="#portfolioModal1">
                                        <img class="img-news rounded" src="{{ asset('frontend/images/2.jpg') }}">
                                    </a>
                                    <div class="portfolio-caption">
                                        <div class="portfolio-caption-heading">Threads</div>
                                        <div class="portfolio-caption-subheading text-muted">Lorem ipsum dolor sit,
                                            amet
                                            consectetur adipisicing elit. Enim asperiores quis explicabo earum neque
                                            suscipit quaerat. Corrupti, vel cum quam ipsa eius vero architecto quas ea
                                            blanditiis magni eaque voluptatem!</div>
                                    </div>
                                </div>
                            </div>
                            <!-- Item lainnya -->
                        </div>
                    </div>
                    <!-- Sidebar -->
                    <div class="col-lg-4">
                        <div class="sidebar">
                            <h3>Cari Berita</h3>
                            <hr class="t-line">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control " placeholder="Cari Berita Terbaru"
                                    aria-label="Cari Berita Terbaru" aria-describedby="button-addon2">
                                <a class="btn btn-outline-secondary" type="button" id="button-addon2">
                                    <i class="fa-solid fa-magnifying-glass" style="color: #000000;"></i>
                                </a>
                            </div>
                            <ul class="list-unstyled">
                                <!-- Menggunakan list-unstyled untuk menghapus default bullet -->
                                <!-- Item 1 -->
                                <li class="d-flex align-items-center mb-3">
                                    <!-- Menggunakan d-flex untuk menempatkan gambar dan teks -->
                                    <img src="{{ asset('frontend/images/1.jpg') }}" alt="Gambar 1"
                                        class="img-ul rounded me-3"> <!-- Gambar di kiri -->
                                    <div> <!-- Keterangan di kanan -->
                                        <h6>Header 1</h6>
                                        <p>Ini adalah keterangan untuk item 1. Isi konten dan deskripsi yang relevan.
                                        </p>
                                    </div>
                                </li>
                                <!-- Item 2 -->
                                <li class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/images/2.jpg') }}" alt="Gambar 2"
                                        class="img-ul rounded me-3">
                                    <div>
                                        <h6>Header 2</h6>
                                        <p>Ini adalah keterangan untuk item 2. Isi konten dan deskripsi yang
                                            relevan.
                                        </p>
                                    </div>
                                </li>
                                <!-- Item 3 -->
                                <li class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/images/3.jpg') }}" alt="Gambar 3"
                                        class="img-ul rounded me-3">
                                    <div>
                                        <h6>Header 3</h6>
                                        <p>Ini adalah keterangan untuk item 3. Isi konten dan deskripsi yang relevan.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Footer -->
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
                <a class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none ms-4">
                    <svg class="bi me-2" width="40" height="32">
                        <use xlink:href="#bootstrap" />
                    </svg>
                    <img src="{{ asset('frontend/images/Logo_AKJ_Basketball.png') }}" alt="Logo AKJ Semarang"
                        height="50" class="d-inline-block align-top me-2">
                </a>
                <p class="mb-0 ms-5 text-dark">
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

    <!-- Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <!-- scrollIt js -->
    <script src="{{ asset('frontend/js/scrollIt.min.js') }}"></script>
    <script src="{{ asset('frontend/js/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/js/script.js') }}"></script>
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
