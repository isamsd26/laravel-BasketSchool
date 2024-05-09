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
                    <li class="nav-item"> <a class="nav-link" href="{{ route('jadwal') }}"
                            data-scroll-nav="3">Jadwal</a> </li>
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

    <main class="content-gal">
        <!-- Bagian utama dengan konten -->
        <div class="custom-jadwal">
            <h1 class="margin-jad mb-5">Jadwal Pertandingan Basket</h1>
            <div class="row justify-content-center mx-3">
                <div class="col-9 mb-4">
                    <p class="fs-4 fw-bold">Rabu, 24-5-2024</p> <!-- Mengatur ukuran kolom -->
                    <div class="card card-custom">
                        <div>
                            <div class="card card-kecil">
                                <!-- Warna khusus untuk card -->
                                Nama Kompetisi
                            </div>
                        </div>
                        <!-- Card yang ingin ditempatkan di tengah -->
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <!-- Konten card -->
                            <div>
                                <img src="{{ asset('frontend/images/Logo_AKJ_Basketball.png') }}" alt="Logo Klub A"
                                    class="img-logo">
                            </div>
                            <div>
                                <p class="text-logo">VS</p>
                            </div>
                            <div>
                                <img src="{{ asset('frontend/images/Logo_AKJ_Basketball.png') }}" alt="Logo Klub B"
                                    class="img-logo">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-4 margin-logo">
                        <div class="card card-custom">
                            <div>
                                <div class="card card-kecil">
                                    <!-- Warna khusus untuk card -->
                                    Nama Kompetisi
                                </div>
                            </div>
                            <div class="card-body d-flex justify-content-between align-items-center">
                                <div>
                                    <img src={{ asset('frontend/images/Logo_AKJ_Basketball.png') }} alt="Logo Klub A"
                                        class="img-logo">
                                </div>
                                <div>
                                    <p class="text-logo">VS</p>
                                </div>
                                <div>

                                    <img src="{{ asset('frontend/images/Logo_AKJ_Basketball.png') }}" alt="Logo Klub B"
                                        class="img-logo">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Tambahkan padding-top ke konten untuk memberikan ruang -->
    <div class="content-gal"> <!-- Tambahkan padding-top -->
        <!-- Footer -->
        <div class="card mx-5 mt-5 pl-4" style="width: auto; height: 120px; background-color: black;">
            <div class="card-body d-flex justify-content-between align-items-center text-white pe-4">
                <div>
                    <h5 class="card-title">Need more information?</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus efficitur
                        arcu
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

                <div class="col mb-3 ms-5">
                    <h5 class="text-dark">Section 1</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">About</a></li>
                    </ul>
                </div>

                <div class="col mb-3 ms-5">
                    <h5 class="text-dark">Section 2</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">About</a></li>
                    </ul>
                </div>

                <div class="col mb-3 ms-5">
                    <h5 class="text-dark">Section 3</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">About</a></li>
                    </ul>
                </div>
                <div class="col ms-5 mb-3"></div>
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
