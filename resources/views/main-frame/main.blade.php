<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @stack('meta-header')
    <meta keywoard="zakatii, zakat, infaq, shodaqoh, zis, amalan, amal, baznas">
    <meta description="Zakatii Platform zakat dan infaq berbasis Islam dengan kalkulator, pembayaran online, edukasi, dan transparansi, meningkatkan kesadaran agama dan membantu yang membutuhkan.">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    {{-- Bootstrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    {{-- FontAwesome 6 --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Flickity -->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    
    <link rel="stylesheet" href="{{ asset('assets/css/all.css?v=1.0') }}">
    @stack('css')
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{ route('index') }}">ZAKATII</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="bg-white p-3 rounded my-2 d-flex align-items-center justify-content-between d-block d-lg-none">
                        <a class="dropdown-item profile" href="#">
                            <i class="fa-solid fa-user fa-xl align-middle"></i>
                            <h4 class="d-inline-block m-0 ms-2 align-middle">Joko Sembung</h4>
                        </a>
                        <a class="dropdown-item text-end" href="#"><i class="fa-solid fa-right-from-bracket fa-lg ml-auto"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('index') }}">HOME</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{ route('zis-list') }}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        ZAKAT
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('zis-list') }}">Zakat</a></li>
                        <li><a class="dropdown-item" href="{{ route('infaq-sedekah-list') }}">Infaq & Shodaqoh</a></li>
                    </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">BLOG</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">CONTACT</a>
                    </li>
                </ul>
                <div class="list-profile">
                    <ul class="navbar-nav d-none d-lg-flex">
                        <li class="nav-item dropdown" style="margin-right: 8px">
                            <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-bell fa-lg"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Pembaharuan Sistem</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Update Penggalangan Data</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-user fa-lg"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item profile" href="#">
                                    <i class="fa-solid fa-user fa-lg align-middle"></i>
                                    <h5 class="d-inline-block">Joko Sembung</h5>
                                </a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Kantong Donasi</a></li>
                                <li><a class="dropdown-item" href="#">Info Pribadi</a></li>
                                <li><a class="dropdown-item" href="{{ route('penggalangan-dana') }}">Galang Dana</a></li>
                                <li><a class="dropdown-item" href="#">Riwayat Transaksi</a></li>
                                <li><a class="dropdown-item" href="#">Wishlist</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-right-from-bracket fa-lg ml-auto"></i></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    @yield('content')
    
    <div class="container" id="three-pilar">
        <div class="row text-white justify-content-center">
            <div class="col-4 list-pilar text-center pt-4 px-4">
                <i class="fa-solid fa-sack-dollar fa-2xl mb-4"></i><br>
                <b>Bebas Riba</b>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est omnis amet fuga accusantium facere sed ea? Ab ipsam consectetur molestias?</p>
            </div>
            <div class="col-4 list-pilar text-center pt-4 px-4">
                <i class="fa-solid fa-arrows-to-eye fa-2xl mb-4"></i><br>
                <b>Diawasi BAZNAS</b>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est omnis amet fuga accusantium facere sed ea? Ab ipsam consectetur molestias?</p>
            </div>
            <div class="col-4 list-pilar text-center pt-4 px-4">
                <i class="fa-solid fa-circle-check fa-2xl mb-4"></i><br>
                <b>Terverifikasi MUI</b>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est omnis amet fuga accusantium facere sed ea? Ab ipsam consectetur molestias?</p>
            </div>
        </div>
    </div>
    <footer class="container">
        <div class="row">
            <div class="list-contact col-md-4">
                <h5>Contact Us</h5>
                Jl. Arjuna Utara No.9 Duri Kepa, Kec. Kebon Jeruk, Kota Jakarta Barat, DKI Jakarta 11510<br>
                +62 821-1086-0615<br>
                demo@demo.id
            </div>
            <div class="list-contact col-md-4 ps-5">
                <h5>Information</h5>
                <ul>
                    <li><a href="#" class="text-black nav-link">Product Support</a></li>
                    <li><a href="#" class="text-black nav-link">Checkout</a></li>
                    <li><a href="#" class="text-black nav-link">Licence Policy</a></li>
                    <li><a href="#" class="text-black nav-link">Affiliate</a></li>
                </ul>
            </div>
            <div class="list-contact col-md-4">
                <h5>Costumer Service</h5>
                <ul>
                    <li><a href="#" class="text-black nav-link">Help Center</a></li>
                    <li><a href="#" class="text-black nav-link">Redeem Voucher</a></li>
                    <li><a href="#" class="text-black nav-link">Contact Us</a></li>
                    <li><a href="#" class="text-black nav-link">Policies & Rules</a></li>
                </ul>
            </div>
        </div>
    </footer>
    <div class="copyright text-center">
        <p>Copyright &copy; {{ date('Y') }} FirSwan | Universitas Esa Unggul</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    {{-- Jquery --}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    {{-- Flickity --}}
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

    @stack('js')
</body>
</html>