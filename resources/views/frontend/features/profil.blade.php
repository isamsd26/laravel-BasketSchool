<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>AKJ Basketbal School</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('frontend/images/Logo_AKJ_Basketball.png') }}" />
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
    <nav class="navbar navbar-expand-lg fixed-top navbar-transparent" id="navbar">
        <div class="container">
            <a class="navbar-brand navbar-logo" href="{{ route('index') }}"> <img
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
                    <li class="nav-item"> <a class="nav-link" href="{{ route('profil') }}"
                            data-scroll-nav="0">Profil</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('berita') }}"
                            data-scroll-nav="1">Berita</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('jadwal') }}"
                            data-scroll-nav="3">Jadwal</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('galeri') }}"
                            data-scroll-nav="2">Galeri</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#" data-scroll-nav="4">Informasi
                            Pendafataran</a> </li>
                </ul>
                <div class="d-flex align-itecenter">
                    <a href="{{ route('login') }}" class="btn btn-outline-light ms-2 fs-5">Masuk</a>
                    <a href="{{ route('register') }}" class="btn btn-light ms-3 fs-5">Daftar</a>
                </div>
            </div>
        </div>
    </nav>
    {{-- Main Content --}}
    <main class="content-gal">
        {{-- Penjelasan Profil --}}
        <div class=" d-flex flex-column justify-content-center align-items-center bg-profil margin-profil"
            id="alasan">
            <div class="container">
                <div class="sectioner-header text-center mb-5">
                    <h4>Profil</h4>
                    <h1>About AKJ Basketball</h3>
                        <span class="line"></span>
                </div>
                <div class="container-custom mt-1">
                    <div class="row">
                        <div class="col-md-6 d-flex justify-content-center align-items-center">
                            <div class="position-relative clearfix">
                                <img class="img-abs rounded" src="{{ asset('frontend/images/1.jpg') }}"
                                    alt="..." />

                                <img class="img-abs rounded position-absolute"
                                    src="{{ asset('frontend/images/3.jpg') }}" alt="..." />
                            </div>
                        </div>
                        <div class="col-md-6 order-1 order-md-2">
                            <div>
                                <div class="my-3">
                                    <p>Sudahkah kamu mendengar tentang AKJ Basketball, sekolah basket keren di Semarang?
                                        Di
                                        sana,
                                        bukan hanya soal bermain basket, tapi juga tentang petualangan yang menantang
                                        dan
                                        pertumbuhan
                                        pribadi yang luar biasa!
                                    </p>
                                    <p>Bayangkan, di AKJ Basketball, kamu akan diajari teknik-teknik basket terbaik oleh
                                        para pelatih handal yang siap membimbingmu menjadi pemain basket yang hebat
                                        Mereka
                                        tidak hanya mengajarkan cara melempar bola atau melakukan dribble, tetapi juga
                                        membekalimu dengan keterampilan taktis dan fisik yang akan membuatmu unggul di
                                        lapangan.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- sejarah --}}
        <div class="container">
            <div class="sectioner-header text-center mb-5">
                <h2>Sejarah AKJ Basketball School</h2>
                <span class="line"></span>
            </div>
            <div class="container-prof">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur facere, tenetur in eveniet
                    consectetur soluta iste. Facilis officia voluptates repudiandae adipisci sapiente est dolorum,
                    placeat esse officiis, laborum nihil ea. Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Fugit ipsam molestiae facilis neque vero voluptatibus tenetur aut odit possimus, sint quos, ab
                    beatae esse soluta porro illo labore fugiat recusandae. Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Accusantium harum consectetur ea similique cumque saepe. Placeat veniam aperiam
                    cupiditate perspiciatis delectus impedit modi molestiae hic eligendi error! Aperiam, dolores
                    delectus.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur facere, tenetur in eveniet
                    consectetur soluta iste. Facilis officia voluptates repudiandae adipisci sapiente est dolorum,
                    placeat esse officiis, laborum nihil ea. Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Fugit ipsam molestiae facilis neque vero voluptatibus tenetur aut odit possimus, sint quos, ab
                    beatae esse soluta porro illo labore fugiat recusandae. Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Accusantium harum consectetur ea similique cumque saepe. Placeat veniam aperiam
                    cupiditate perspiciatis delectus impedit modi molestiae hic eligendi error! Aperiam, dolores
                    delectus.</p>
            </div>
            {{-- VISI MISI  --}}
            <div class="container container-visi">
                <div class="sectioner-header text-center row-margin">
                    <h2>Visi Misi AKJ Basketball School</h2>
                    <span class="line"></span>
                </div>
                <div class="container d-flex">
                    <div class="row row-margin">
                        <div class="col-3">
                            <img class="img-visi" src="{{ asset('frontend/images/UI/visi.png') }}" alt="">
                        </div>
                        <div class="col-8">
                            <p class="text-misi text-profil">Lunar Strategy helped us with our digital marketing for 4 months now
                                and still helps us.
                                Great service and highly recommended.
                            </p>
                            <p class="text-visi text-profil">
                                — Kimmo Hakonen - Skrum Master at DaGear AB
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Filosofi --}}
        <div class="container margin-fil">
            <div class=" mt-1">
                <div class="row justify-content-center">
                    <div class="col-md-4 order-1">
                        <div>
                            <div class="mt-5 mb-2 text-center">
                                <div class="mb-4">
                                    <h3>
                                        Filosofi AKJ Basketball
                                    </h3>

                                </div>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere, eius amet itaque et
                                    velit esse quasi numquam eos. Ipsum enim nulla nesciunt! Repellat, distinctio quidem
                                    hic porro minima id nam.
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem voluptatem nihil,
                                    consectetur, quaerat natus repellat vero numquam animi quam ipsa molestias.
                                    Voluptatum, omnis accusamus? Consectetur magni vel quod quo dignissimos?
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex justify-content-center align-items-center order-md-2">
                        <div class="position-relative clearfix">
                            <img class="img-abs rounded" src="{{ asset('frontend/images/UI/Logo.png') }}"
                                alt="..." />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- struktur organisasi --}}
        <div class="margin-fil mb-5">
            <div class="row justify-content-center">
                <div>
                    <h3 class="mb-4 text-center">
                        Struktur organisasi
                    </h3>
                    <span class="line"></span>
                </div>
                <div class="col-md-3 mb-4 col-centered">
                    <div class="card-profil justify-content-center">
                        <img src="{{ asset('frontend/images/UI/profil.png') }}" class="card-img-top img-profil mb-5"
                            alt="...">
                        <div class="card-body text-center">
                            <h4 class="card-title">Tim Haldorson</h4>
                            <p class="card-text mt-1 text-profil">Jabatan</p>
                            <p class="card-text mt-2 text-profil">Alamat 1</p>
                            <p class="card-text text-profil">Email 1</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4 col-centered">
                    <div class="card-profil justify-content-center">
                        <img src="{{ asset('frontend/images/UI/profil.png') }}" class="card-img-top img-profil mb-5"
                            alt="...">
                        <div class="card-body text-center">
                            <h4 class="card-title">Tim Haldorson</h4>
                            <p class="card-text mt-1 text-profil">Jabatan</p>
                            <p class="card-text mt-2 text-profil">Alamat </p>
                            <p class="card-text text-profil">Email </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4 col-centered">
                    <div class="card-profil justify-content-center">
                        <img src="{{ asset('frontend/images/UI/profil.png') }}" class="card-img-top img-profil mb-5"
                            alt="...">
                        <div class="card-body text-center">
                            <h4 class="card-title">Tim Haldorson</h4>
                            <p class="card-text mt-1 text-profil">Jabatan</p>
                            <p class="card-text mt-2 text-profil">Alamat </p>
                            <p class="card-text text-profil">Email </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Baris kedua -->
            <div class="row justify-content-center mt-5">
                <div class="col-md-3 mb-4 col-centered">
                    <div class="card-profil justify-content-center">
                        <img src="{{ asset('frontend/images/UI/profil.png') }}" class="card-img-top img-profil mb-5"
                            alt="...">
                        <div class="card-body text-center">
                            <h4 class="card-title">Tim Haldorson</h4>
                            <p class="card-text mt-1 text-profil">Jabatan</p>
                            <p class="card-text mt-2 text-profil">Alamat 1</p>
                            <p class="card-text text-profil">Email 1</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4 col-centered">
                    <div class="card-profil justify-content-center">
                        <img src="{{ asset('frontend/images/UI/profil.png') }}" class="card-img-top img-profil mb-5"
                            alt="...">
                        <div class="card-body text-center">
                            <h4 class="card-title">Tim Haldorson</h4>
                            <p class="card-text mt-1 text-profil">Jabatan</p>
                            <p class="card-text mt-2 text-profil">Alamat </p>
                            <p class="card-text text-profil">Email </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4 col-centered">
                    <div class="card-profil justify-content-center">
                        <img src="{{ asset('frontend/images/UI/profil.png') }}" class="card-img-top img-profil mb-5"
                            alt="...">
                        <div class="card-body text-center">
                            <h4 class="card-title">Tim Haldorson</h4>
                            <p class="card-text mt-1 text-profil">Jabatan</p>
                            <p class="card-text mt-2 text-profil">Alamat </p>
                            <p class="card-text text-profil">Email </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

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
        window.addEventListener("scroll", function() {
            const navbar = document.getElementById("navbar");
            const stickyPoint = 50;

            if (window.pageYOffset > stickyPoint) {
                navbar.classList.remove("navbar-transparent");
                navbar.classList.add("navbar-solid");
            } else {
                navbar.classList.remove("navbar-solid");
                navbar.classList.add("navbar-transparent");
            }
        });
    </script>
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
