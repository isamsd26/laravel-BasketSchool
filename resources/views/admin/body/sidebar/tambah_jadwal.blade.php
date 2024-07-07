<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Admin AKJ Basketball School</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('frontend/images/Logo_AKJ_Basketball.png') }}" />
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="{{ asset('backend/css/styles.css') }}" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html">Admin</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..."
                    aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i
                        class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="{{ route('admin.logout') }}">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        @include('admin.body.sidebar')
        <div id="layoutSidenav_content">

            <main>
                <div class="container-fluid px-4">
                    <h1 class="my-4">Tambah Jadwal</h1>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center">Isi Data untuk Tambah Jadwal</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.storeJadwal') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="hari_tanding" class="form-label">Hari Tanding</label>
                                    <input type="text" name="hari_tanding" id="hari_tanding" class="form-control"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <label for="tanggal_tanding" class="form-label">Tanggal Tanding</label>
                                    <input type="date" name="tanggal_tanding" id="tanggal_tanding"
                                        class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label for="nama_kompetisi" class="form-label">Nama Kompetisi</label>
                                    <input type="text" name="nama_kompetisi" id="nama_kompetisi" class="form-control"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <label for="logo_tim_a" class="form-label">Logo Tim A</label>
                                    <input type="file" name="logo_tim_a" id="logo_tim_a" class="form-control"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <label for="logo_tim_b" class="form-label">Logo Tim B</label>
                                    <input type="file" name="logo_tim_b" id="logo_tim_b" class="form-control"
                                        required>
                                </div>
                                <button type="submit" class="btn btn-primary">Tambah Jadwal</button>
                            </form>
                        </div>
                    </div>



                </div>
            </main>
            @include('admin.body.footer')
        </div>
    </div>
    <script>
        function filterData(kelompok_umur) {
            fetch(`/dashboard/filter/${kelompok_umur}`)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    console.log(data); // Periksa data yang diterima
                    let tableBody = document.getElementById('siswa-table-body');
                    tableBody.innerHTML = '';
                    if (data.error) {
                        console.error('Error from server:', data.error);
                    } else {
                        data.forEach(item => {
                            let row = `<tr>
                        <td>${item.nama_siswa}</td>
                        <td>${item.kelompok_umur}</td>
                        <td>${item.jenis_kelamin}</td>
                    </tr>`;
                            tableBody.innerHTML += row;
                        });
                    }
                })
                .catch(error => {
                    console.error('There was a problem with the fetch operation:', error);
                });
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="{{ asset('backend/js/scripts.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
    <script src="{{ asset('backend/js/datatables-simple-demo.js') }}"></script>
</body>

</html>
