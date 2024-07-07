<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="{{ route('admin') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">Interface</div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseForms"
                    aria-expanded="false" aria-controls="collapseForms">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Forms
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseForms" aria-labelledby="headingOne"
                    data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('admin.tambah_jadwal') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-calendar-plus"></i></div>
                            Tambah Jadwal
                        </a>
                        <a class="nav-link" href="{{ route('admin.tambah_galeri') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-images"></i></div>
                            Tambah Galeri
                        </a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseTabelData"
                    aria-expanded="false" aria-controls="collapseTabelData">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-book-atlas"></i></i></div>
                    Tabel Data
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseTabelData" aria-labelledby="headingTwo"
                    data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('admin.jadwal_side') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-calendar-plus"></i></div>
                            Jadwal
                        </a>
                    </nav>
                </div>
                <div class="sb-sidenav-menu-heading">Addons</div>
                <a class="nav-link" href="charts.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    Charts
                </a>
                <a class="nav-link" href="tables.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Tables
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Admin
        </div>
    </nav>
</div>
