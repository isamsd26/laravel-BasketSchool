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
                    <h1 class="my-4">Jadwal Tanding</h1>
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    <div class="card">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Hari Tanding</th>
                                    <th scope="col">Tanggal Tanding</th>
                                    <th scope="col">Nama Kompetisi</th>
                                    <th scope="col">Logo Tim A</th>
                                    <th scope="col">Logo Tim B</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($jadwal as $index => $item)
                                    <tr>
                                        <th scope="row">{{ $index + 1 }}</th>
                                        <td>{{ $item->hari_tanding }}</td>
                                        <td>{{ $item->tanggal_tanding }}</td>
                                        <td>{{ $item->nama_kompetisi }}</td>
                                        <td><img src="{{ asset('storage/' . $item->logo_tim_a) }}" alt="Logo Tim A"
                                                width="50"></td>
                                        <td><img src="{{ asset('storage/' . $item->logo_tim_b) }}" alt="Logo Tim B"
                                                width="50"></td>
                                        <td>
                                            <form action="{{ route('admin.delete_jadwal', $item->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"><i
                                                        class="fa-regular fa-trash-can"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{-- pagination --}}
                        @if ($jadwal->lastPage() > 1)
                            <nav aria-label="Page navigation" >
                                <ul class="pagination justify-content-center">
                                    <li class="{{ $jadwal->currentPage() == 1 ? 'disabled' : '' }}">
                                        <a href="{{ $jadwal->url(1) }}" class="page-link">Previous</a>
                                    </li>
                                    @for ($i = 1; $i <= $jadwal->lastPage(); $i++)
                                        <li class="{{ $jadwal->currentPage() == $i ? 'active' : '' }}">
                                            <a href="{{ $jadwal->url($i) }}" class="page-link">{{ $i }}</a>
                                        </li>
                                    @endfor
                                    <li
                                        class="{{ $jadwal->currentPage() == $jadwal->lastPage() ? 'disabled' : '' }}">
                                        <a href="{{ $jadwal->url($jadwal->currentPage() + 1) }}"
                                            class="page-link">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        @endif
                    </div>
                </div>
            </main>

            @include('admin.body.footer')
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="{{ asset('backend/js/scripts.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
    <script src="{{ asset('backend/js/datatables-simple-demo.js') }}"></script>
</body>

</html>
