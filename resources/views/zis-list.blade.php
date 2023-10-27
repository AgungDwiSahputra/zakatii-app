<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zis Lists</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    {{-- Local CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/css/zist-list.css?v=1.0') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/landing.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">ZAKATII</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">HOME</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        ZAKAT
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Zakat</a></li>
                        <li><a class="dropdown-item" href="#">Infaq & Shodaqoh</a></li>
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
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown" style="margin-right: 8px">
                            <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-bell fa-lg"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
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
                                <li><a class="dropdown-item" href="#">Galang Dana</a></li>
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
    <div class="container" id="pilihan-zakat">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center">
                <div class="kotak-pilihan-zakat d-flex align-items-center justify-content-between">
                    <div class="copy">
                        <h2>Pilihan Zakat</h2>
                    </div>
                    <div class="pilihan d-flex align-items-center justify-content-end">
                        <ul class="nav nav-pills">
                            <li class="nav-item active" role="zakat">
                                <a class="nav-link active" href="#zakat-fitrah" role="tab" data-bs-toggle="tab">
                                    <img src="{{ asset('assets/icons/Rice.png') }}" alt="Rice">
                                    <p>Zakat Fitrah</p>
                                </a>
                            </li>
                            <li class="nav-item" role="zakat">
                                <a class="nav-link" href="#zakat-penghasilan" role="tab" data-bs-toggle="tab">
                                    <img src="{{ asset('assets/icons/Treasure.png') }}" alt="Tresure">
                                    <p>Zakat Penghasilan</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#zakat-maal" role="tab" data-bs-toggle="tab">
                                    <img src="{{ asset('assets/icons/Contractor.png') }}" alt="Contractor">
                                    <p>Zakat Maal</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container w-100" id="content-zis-list">
        <div class="row">
            <div class="col-md-12">
                <div class="tab-content">
                    <div role="zakat" class="tab-pane active" id="zakat-fitrah">
                        <h1>INI ZAKAT FITRAH</h1>
                    </div>
                    <div role="zakat" class="tab-pane" id="zakat-penghasilan">
                        <h1>INI ZAKAT PENGHASILAN</h1>
                    </div>
                    <div role="zakat" class="tab-pane" id="zakat-maal">
                        <h1>INI ZAKAT MAAL</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>