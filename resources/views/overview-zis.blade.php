<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Overview Lists</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    {{-- Local CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/css/zist-list.css?v=1.0') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/landing.css') }}">
</head>
<body style="background-color:#edf1d6;">
    <nav class="navbar navbar-expand-lg sticky-top">
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
    
    <div class="container mt-4">
      <div class="row align-items-center">
        <div class="col-4">
            <img src="{{ asset('assets/img/ngaji.png') }}" class="" width="350px">
        </div>
        <div class="col-8 ps-4">
            <div class="row pb-3 me-2 border-1 border-bottom border-black">
                <div class="col-11 p-0">
                    <h1 class="mb-0">Sucikan Hati dengan Zakat Mal</h1>
                </div>
                <div class="col-1 text-center">
                    <!-- icon -->
                    <i class="fa-regular fa-bookmark fa-2xl align-bottom" style="color: #000000;" ></i>
                </div>
            </div>
            <div class="row pt-3 pb-3 me-2 border-1 border-bottom border-black align-items-center">
                <div class="col-1 p-0">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/e/e6/Logo_BAZNAS_RI-Hijau-01.png"  class="border border-1 border-black rounded-circle" width="50px" height="50px" style="object-fit:contain;">
                </div>
                <div class="col-11 ">
                    <h4 class="">Baznas Official Jakarta Barat</h4>
                </div>
            </div>
            <div class="row pt-3 pb-3 me-2 border-1 border-bottom border-black">
                 <div class="col-3 text-center">
                    <!-- icon -->
                    <i class="fa-regular fa-heart fa-xl d-inline me-1" style="color: #000000;"></i>
                    <!-- number -->
                    <p class="d-inline"><b>1125</b> Donasi</p>
                 </div>
                 <div class="col-3 text-center">
                    <!-- icon -->
                    <i class="fa-solid fa-hands-praying fa-xl d-inline me-1" style="color: #000000;"></i>
                    <!-- number -->
                    <p class="d-inline"><b>1125</b> Doa</p>
                 </div>
                 <div class="col-3 text-center">
                    <!-- icon -->
                    <i class="fa-solid fa-share fa-xl d-inline me-1" style="color: #000000;"></i>
                    <!-- number -->
                    <p class="d-inline"><b>1125</b> Share</p>
                 </div>
                 <div class="col-3 text-center">
                    <!-- icon -->
                    <i class="fa-solid fa-ellipsis fa-xl d-inline me-1" style="color: #000000;"></i>
                    <p class="d-inline">More</p>
                 </div>
            </div>
            <div class="row pt-3 pb-3 me-2 justify-content-between">
                <div class="col-4">
                    <p class="m-0">Total Donasi</p>
                    <p class="m-0"><b>Rp 15.000.000</b></p>
                </div>
                <div class="col-4 text-end">
                    <p class="m-0">Sisa Donasi</p>
                    <p class="m-0"><b>Rp 15.000.000</b></p>
                </div>
            </div>
            <div class="row me-2">
                <div class="progress p-0" role="progressbar" aria-label="Basic example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="--bs-progress-height: 10px; --bs-progress-bar-bg: #609966; --bs-progress-bg: none; border: 1px solid #609966;">
                    <div class="progress-bar" style="width: 50%"></div>
                </div>
            </div>
            <div class="row pt-3 pb-3 me-2 justify-content-between align-items-center">
                <div class="col-6">
                    <p class="m-0">Target Donasi</p>
                    <h3>Rp 30.000.000</h3>
                </div>
                <div class="col-4 text-end align-middle">
                    <button type="button" class="btn" style="background-color: #609966; color: #fff;"><b>Donate</b></button>
                </div>
            </div>
        </div>
      </div>
    </div>
    
    
    
    
    
    
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  </body>
</html>