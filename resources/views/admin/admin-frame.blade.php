<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @stack('meta-header')
    <meta description="Zakatii Platform zakat dan infaq berbasis Islam dengan kalkulator, pembayaran online, edukasi, dan transparansi, meningkatkan kesadaran agama dan membantu yang membutuhkan.">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    {{-- Bootstrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    {{-- FontAwesome 6 --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Flickity -->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    
    <link rel="stylesheet" href="{{ asset('assets/css/admin/all.css?v=1.0') }}">
    @stack('css')
</head>
<body>
    <div class="content d-flex flex-row">
        <nav class="navbar d-none d-lg-flex flex-column justify-content-start align-items-start nav-kiri text-light">
            <a class="nav-link fs-4 fw-bold mx-auto mt-4 mb-3" href="{{ route('index') }}">ZAKATII</a>
            <span class="fw-bold px-4" style="font-size:10px">MAIN</span>
            <ul class="nav nav-pills flex-column mt-2 w-100">
                <li class="nav-item w-100" role="menu">
                    <a class="nav-link px-4 text-light active" href="#dashboard" role="tab" data-bs-toggle="tab">
                        <i class="fa-solid fa-house me-2"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="nav-item w-100" role="menu">
                    <a class="nav-link px-4 text-light" href="#approval-request" role="tab" data-bs-toggle="tab">
                        <i class="fa-solid fa-clipboard-list me-3"></i>
                        <span>Approval Request</span>
                    </a>
                </li>
                <li class="nav-item w-100" role="menu">
                    <a class="nav-link px-4 text-light" href="#riwayat-beramal" role="tab" data-bs-toggle="tab">
                        <i class="fa-solid fa-list me-2"></i>
                        <span>Riwayat Beramal</span>
                    </a>
                </li>
                <li class="nav-item w-100" role="menu">
                    <a class="nav-link px-4 text-light" href="#users" role="tab" data-bs-toggle="tab">
                        <i class="fa-solid fa-users me-2"></i>
                        <span>Users</span>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="d-flex flex-column w-100" id="isi-content">
            <nav class="nav-atas">
                <div class="list-profile">
                    <ul class="navbar-nav d-flex flex-row align-items-center justify-content-end my-3 me-5">
                        <li class="nav-item dropdown me-3">
                            <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-bell fa-lg"></i>
                            </a>
                            <ul class="dropdown-menu p-0" style="width: 25vw">
                                <li class="d-flex align-items-center justify-content-between px-4 pt-4 pb-2">
                                    <h5>Notifikasi</h5>
                                    <a href="#" class="nav-link" style="font-size: 12px;">Lihat Semua</a>
                                </li>
                                <li><hr class="dropdown-divider m-0 p-0"></li>
                                <li class="d-flex align-items-start justify-content-between px-4 py-3 list-notifikasi">
                                    <div class="copy">
                                        <p class="mb-0 pb-0">Transfer Dana ke Masjid </p>
                                        <p>Infaq dan Shodaqoh</p>
                                        <p class="mb-0 pb-0 fw-bold">Rp. 30.000.000</p>
                                    </div>
                                    <div class="tanggal-notif">
                                        <p class="mb-0 pb-0">20/11/2023</p>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-user fa-lg"></i>
                            </a>
                            <ul class="dropdown-menu p-4">
                                <li><h5>Pengaturan</h5></li>
                                <li><hr class="dropdown-divider"></li>
                                <li class="d-flex align-items-center justify-content-start"><i class="fa-solid fa-user me-2"></i> Admin <a class="dropdown-item ms-auto" href="{{ route('index') }}"><i class="fa-solid fa-right-from-bracket fa-lg ml-auto"></i></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            
            <div class="tab-content">
                <div role="menu" class="tab-pane active" id="dashboard">
                    @include('admin.dashboard')
                </div>
                <div role="menu" class="tab-pane" id="approval-request">
                    Approval Request
                </div>
                <div role="menu" class="tab-pane" id="riwayat-beramal">
                    Riwayat Beramal
                </div>
                <div role="menu" class="tab-pane" id="users">
                    Users
                </div>
            </div>

            <div class="copyright text-center">
                <p>Copyright &copy; {{ date('Y') }} FirSwan | Universitas Esa Unggul</p>
            </div>
        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    {{-- Jquery --}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    {{-- Flickity --}}
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

    @stack('js')
</body>

</html>