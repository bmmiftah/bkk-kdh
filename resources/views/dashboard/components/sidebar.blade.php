<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <img src="/img/logo-header.png" alt="">
        </div>
        <div class="sidebar-brand-text mx-2">Sistem BKK Kandanghaur</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href='/dashboard'>
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Posting
    </div>

    <!-- Admin access - informasi collapse menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseInformasi"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-info"></i>
            <span>Informasi</span>
        </a>
        <div id="collapseInformasi" class="collapse" aria-labelledby="headingInformasi" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Atur Informasi:</h6>
                
                {{-- tambah data informasi --}}
                <a class="collapse-item" href="/dashboard/informasi/create"><i class="fas fa-plus-circle fa-sm fa-fw mr-2 text-gray-400"></i> Tambah Data</a>

                {{-- lihat tambel data informasi --}}
                <a class="collapse-item" href="/dashboard/informasi"><i class="fas fa-table fa-sm fa-fw mr-2 text-gray-400"></i> Tabel Data</a>

            </div>
        </div>
    </li>

    <!-- admin access - Lowongan Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLowongan"
            aria-expanded="true" aria-controls="collapseLowongan">
            <i class="fas fa-fw fa-briefcase"></i>
            <span>Lowongan</span>
        </a>
        <div id="collapseLowongan" class="collapse" aria-labelledby="headingLowongan"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Atur Lowongan:</h6>
                {{-- tambah data informasi --}}
                <a class="collapse-item" href="/dashboard/informasi/create"><i class="fas fa-plus-circle fa-sm fa-fw mr-2 text-gray-400"></i> Tambah Data</a>

                {{-- lihat tambel data informasi --}}
                <a class="collapse-item" href="/dashboard/informasi"><i class="fas fa-table fa-sm fa-fw mr-2 text-gray-400"></i> Tabel Data</a>
            </div>
        </div>
    </li>

    <!-- admin access - Pendaftaran Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePendaftaran"
            aria-expanded="true" aria-controls="collapsePendaftaran">
            <i class="fas fa-fw fa-clipboard"></i>
            <span>Pendaftaran</span>
        </a>
        <div id="collapsePendaftaran" class="collapse" aria-labelledby="headingPendaftaran"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Atur Pendaftaran:</h6>
               {{-- tambah data informasi --}}
               <a class="collapse-item" href="/dashboard/informasi/create"><i class="fas fa-plus-circle fa-sm fa-fw mr-2 text-gray-400"></i> Tambah Data</a>

               {{-- lihat tambel data informasi --}}
               <a class="collapse-item" href="/dashboard/informasi"><i class="fas fa-table fa-sm fa-fw mr-2 text-gray-400"></i> Tabel Data</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Kontrol
    </div>

    <!-- super admin access - pengurus Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePengurus"
            aria-expanded="true" aria-controls="collapsePengurus">
            <i class="fas fa-fw fa-users"></i>
            <span>Pengurus</span>
        </a>
        <div id="collapsePengurus" class="collapse" aria-labelledby="headingPengurus"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Atur Pengurus:</h6>
            {{-- tambah data pengurus --}}
            <a class="collapse-item" href="/dashboard/informasi/create"><i class="fas fa-plus-circle fa-sm fa-fw mr-2 text-gray-400"></i> Tambah Data</a>

            {{-- lihat tambel data pengurus --}}
            <a class="collapse-item" href="/dashboard/informasi"><i class="fas fa-table fa-sm fa-fw mr-2 text-gray-400"></i> Tabel Data</a>
            </div>
        </div>
    </li>

    <!-- super admin access - perusahaan Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePerusahaan"
            aria-expanded="true" aria-controls="collapsePerusahaan">
            <i class="fas fa-fw fa-flag"></i>
            <span>Perusahaan</span>
        </a>
        <div id="collapsePerusahaan" class="collapse" aria-labelledby="headingPerusahaan"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Atur Perusahaan:</h6>
            {{-- tambah data Perusahaan --}}
            <a class="collapse-item" href="/dashboard/informasi/create"><i class="fas fa-plus-circle fa-sm fa-fw mr-2 text-gray-400"></i> Tambah Data</a>

            {{-- lihat tambel data Perusahaan --}}
            <a class="collapse-item" href="/dashboard/informasi"><i class="fas fa-table fa-sm fa-fw mr-2 text-gray-400"></i> Tabel Data</a>
            </div>
        </div>
    </li>

    

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->