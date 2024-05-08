<!DOCTYPE html>
<html lang="en">

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
    <!-- Navbar dengan posisi tetap -->
    <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container"> <a class="navbar-brand navbar-logo" href="#"> <img
                    src="{{ asset('frontend/images/Logo_AKJ_Basketball.png') }}" alt="logo" class="logo-1"
                    width="50" height="50"> </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span
                    class="fas fa-bars"></span> </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('index') }}" data-scroll-nav="0">Home</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('berita') }}"
                            data-scroll-nav="1">Berita</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#" data-scroll-nav="2">Galeri</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#" data-scroll-nav="3">Jadwal</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#" data-scroll-nav="4">Informasi
                            Pendafataran</a> </li>
                </ul>
                <div class="d-flex align-itecenter">
                    <a href="features/login.php" class="btn btn-outline-light ml-2 fs-5 text-white">Masuk</a>
                    <a href="features/register.php" class="btn btn-light ml-3 fs-5">Daftar</a>
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
                                        <div class="portfolio-caption-subheading text-muted">Lorem ipsum dolor sit, amet
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
                                <input type="text" class="form-control" placeholder="Cari Berita Terbaru"
                                    aria-label="Cari Berita Terbaru" aria-describedby="button-addon2">
                                <a class="btn btn-outline-secondary" type="button" id="button-addon2">
                                    Search
                                    <i class="fa-solid fa-magnifying-glass" style="color: #000000;"></i>
                                </a>
                            </div>
                            <ul class="list-unstyled">
                                <!-- Menggunakan list-unstyled untuk menghapus default bullet -->
                                <!-- Item 1 -->
                                <li class="d-flex align-items-center mb-3">
                                    <!-- Menggunakan d-flex untuk menempatkan gambar dan teks -->
                                    <img src="{{ asset('frontend/images/1.jpg') }}" alt="Gambar 1"
                                        class="img-ul rounded mr-3"> <!-- Gambar di kiri -->
                                    <div> <!-- Keterangan di kanan -->
                                        <h6>Header 1</h6>
                                        <p>Ini adalah keterangan untuk item 1. Isi konten dan deskripsi yang relevan.
                                        </p>
                                    </div>
                                </li>
                                <!-- Item 2 -->
                                <li class="d-flex align-items-center mb-3">
                                    <img src="{{ asset('frontend/images/2.jpg') }}" alt="Gambar 2"
                                        class="img-ul rounded mr-3">
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
                                        class="img-ul rounded mr-3">
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

    <!-- Script -->
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
