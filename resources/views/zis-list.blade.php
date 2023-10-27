<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zis Lists</title>

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    {{-- Bootstrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    {{-- FontAwesome 6 --}}
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
                        <div class="kalkulator text-center">
                            <a class="btn btn-success btn-zakatii" data-bs-toggle="collapse" href="#kalkulator-zakat-fitrah" role="button" aria-expanded="false" aria-controls="kalkulator-zakat-fitrah">
                                <i class="fa-solid fa-calculator fa-xl"></i>
                                <span class="ms-2">Kalkulator Zakat Fitrah</span>
                            </a>
                            <div class="collapse" id="kalkulator-zakat-fitrah">
                                <div class="card card-body bg-transparent mx-auto mt-1 d-flex align-items-center flex-row">
                                    <form class="text-start w-sm-100 w-50" method="POST" action="#">
                                        <div class="mb-3">
                                            <label for="nilai-asset" class="form-label">Nilai emas, perak, dan/atau permata <span class="text-danger">*</span></label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="nilai-asset">Rp.</span>
                                                <input id="numericInput1" name="nilai-asset" type="text" class="form-control" placeholder="1.000.000" aria-label="nilai" aria-describedby="nilai-asset">
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="nilai-matauang" class="form-label">Uang tunai, tabungan, deposito <span class="text-danger">*</span></label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="nilai-matauang">Rp.</span>
                                                <input id="numericInput2" name="nilai-matauang" type="text" class="form-control" placeholder="1.000.000" aria-label="nilai" aria-describedby="nilai-matauang">
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="nilai-properti" class="form-label">Kendaraan, rumah, aset, dll <span class="text-danger">*</span></label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="nilai-properti">Rp.</span>
                                                <input id="numericInput3" name="nilai-properti" type="text" class="form-control" placeholder="1.000.000" aria-label="nilai" aria-describedby="nilai-properti">
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="nilai-hutang" class="form-label">Jumlah hutang/cicilan (optional)</label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="nilai-hutang">Rp.</span>
                                                <input id="numericInput4" name="nilai-hutang" type="text" class="form-control" placeholder="1.000.000" aria-label="nilai" aria-describedby="nilai-hutang">
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-success btn-zakatii">Hitung</button>
                                    </form>
                                    <div class="total d-flex flex-column align-items-center justify-content-center w-sm-100 w-50 ms-5">
                                        <span>Hasil Perhitungan</span>
                                        <h3>Rp. 100.000.000</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter d-flex align-items-center justify-content-between mt-4 mb-3">
                            <div class="filter-button d-flex align-items-center">
                                <ul class="nav">
                                    <li class="nav-item">
                                      <a class="nav-link active" aria-current="page" href="#">Sedang Trend</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" href="#">Paling Rendah</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" href="#">Paling Tinggi</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="filter-search">
                                <form class="d-flex" role="search">
                                    <input class="form-control me-2 rounded-pill" type="search" placeholder="Search" aria-label="Search">
                                    <button class="btn ps-0" type="submit"><i class="fa-solid fa-magnifying-glass fa-lg text-white"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="list-item row justify-content-center">
                            @for ($i = 0; $i < 12;$i++)
                                <div class="col-5 card-zis d-flex align-items-center justify-content-start">
                                    <img src="{{ asset('assets/img/hero-image.jpg') }}" alt="Cover ZIS" class="img-zis img-thumbnail rounded">
                                    <div class="deskripsi ms-3">
                                        <h5 class="m-0">Sucikan Hati dengan Zakat Mal</h5>
                                        <span>Baznas</span>
                                        <div class="progress my-2" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar" style="width: 25%"></div>
                                        </div>
                                        <span>Total</span>
                                        <h4 class="m-0">Rp. 20.000.000</h4>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                    <div role="zakat" class="tab-pane" id="zakat-penghasilan">
                        <div class="kalkulator text-center">
                            <a class="btn btn-success btn-zakatii" data-bs-toggle="collapse" href="#kalkulator-zakat-fitrah" role="button" aria-expanded="false" aria-controls="kalkulator-zakat-fitrah">
                                <i class="fa-solid fa-calculator fa-xl"></i>
                                <span class="ms-2">Kalkulator Zakat Fitrah</span>
                            </a>
                            <div class="collapse" id="kalkulator-zakat-fitrah">
                                <div class="card card-body bg-transparent mx-auto mt-1 d-flex align-items-center flex-row">
                                    <form class="text-start w-sm-100 w-50" method="POST" action="#">
                                        <div class="mb-3">
                                            <label for="nilai-asset" class="form-label">Nilai emas, perak, dan/atau permata <span class="text-danger">*</span></label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="nilai-asset">Rp.</span>
                                                <input id="numericInput1" name="nilai-asset" type="text" class="form-control" placeholder="1.000.000" aria-label="nilai" aria-describedby="nilai-asset">
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="nilai-matauang" class="form-label">Uang tunai, tabungan, deposito <span class="text-danger">*</span></label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="nilai-matauang">Rp.</span>
                                                <input id="numericInput2" name="nilai-matauang" type="text" class="form-control" placeholder="1.000.000" aria-label="nilai" aria-describedby="nilai-matauang">
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="nilai-properti" class="form-label">Kendaraan, rumah, aset, dll <span class="text-danger">*</span></label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="nilai-properti">Rp.</span>
                                                <input id="numericInput3" name="nilai-properti" type="text" class="form-control" placeholder="1.000.000" aria-label="nilai" aria-describedby="nilai-properti">
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="nilai-hutang" class="form-label">Jumlah hutang/cicilan (optional)</label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="nilai-hutang">Rp.</span>
                                                <input id="numericInput4" name="nilai-hutang" type="text" class="form-control" placeholder="1.000.000" aria-label="nilai" aria-describedby="nilai-hutang">
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-success btn-zakatii">Hitung</button>
                                    </form>
                                    <div class="total d-flex flex-column align-items-center justify-content-center w-sm-100 w-50 ms-5">
                                        <span>Hasil Perhitungan</span>
                                        <h3>Rp. 100.000.000</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter d-flex align-items-center justify-content-between mt-4 mb-3">
                            <div class="filter-button d-flex align-items-center">
                                <ul class="nav">
                                    <li class="nav-item">
                                      <a class="nav-link active" aria-current="page" href="#">Sedang Trend</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" href="#">Paling Rendah</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" href="#">Paling Tinggi</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="filter-search">
                                <form class="d-flex" role="search">
                                    <input class="form-control me-2 rounded-pill" type="search" placeholder="Search" aria-label="Search">
                                    <button class="btn ps-0" type="submit"><i class="fa-solid fa-magnifying-glass fa-lg text-white"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="list-item row justify-content-center">
                            @for ($i = 0; $i < 12;$i++)
                                <div class="col-5 card-zis d-flex align-items-center justify-content-start">
                                    <img src="{{ asset('assets/img/hero-image.jpg') }}" alt="Cover ZIS" class="img-zis img-thumbnail rounded">
                                    <div class="deskripsi ms-3">
                                        <h5 class="m-0">Sucikan Hati dengan Zakat Mal</h5>
                                        <span>Baznas</span>
                                        <div class="progress my-2" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar" style="width: 25%"></div>
                                        </div>
                                        <span>Total</span>
                                        <h4 class="m-0">Rp. 20.000.000</h4>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                    <div role="zakat" class="tab-pane" id="zakat-maal">
                        <div class="kalkulator text-center">
                            <a class="btn btn-success btn-zakatii" data-bs-toggle="collapse" href="#kalkulator-zakat-fitrah" role="button" aria-expanded="false" aria-controls="kalkulator-zakat-fitrah">
                                <i class="fa-solid fa-calculator fa-xl"></i>
                                <span class="ms-2">Kalkulator Zakat Fitrah</span>
                            </a>
                            <div class="collapse" id="kalkulator-zakat-fitrah">
                                <div class="card card-body bg-transparent mx-auto mt-1 d-flex align-items-center flex-row">
                                    <form class="text-start w-sm-100 w-50" method="POST" action="#">
                                        <div class="mb-3">
                                            <label for="nilai-asset" class="form-label">Nilai emas, perak, dan/atau permata <span class="text-danger">*</span></label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="nilai-asset">Rp.</span>
                                                <input id="numericInput1" name="nilai-asset" type="text" class="form-control" placeholder="1.000.000" aria-label="nilai" aria-describedby="nilai-asset">
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="nilai-matauang" class="form-label">Uang tunai, tabungan, deposito <span class="text-danger">*</span></label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="nilai-matauang">Rp.</span>
                                                <input id="numericInput2" name="nilai-matauang" type="text" class="form-control" placeholder="1.000.000" aria-label="nilai" aria-describedby="nilai-matauang">
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="nilai-properti" class="form-label">Kendaraan, rumah, aset, dll <span class="text-danger">*</span></label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="nilai-properti">Rp.</span>
                                                <input id="numericInput3" name="nilai-properti" type="text" class="form-control" placeholder="1.000.000" aria-label="nilai" aria-describedby="nilai-properti">
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="nilai-hutang" class="form-label">Jumlah hutang/cicilan (optional)</label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="nilai-hutang">Rp.</span>
                                                <input id="numericInput4" name="nilai-hutang" type="text" class="form-control" placeholder="1.000.000" aria-label="nilai" aria-describedby="nilai-hutang">
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-success btn-zakatii">Hitung</button>
                                    </form>
                                    <div class="total d-flex flex-column align-items-center justify-content-center w-sm-100 w-50 ms-5">
                                        <span>Hasil Perhitungan</span>
                                        <h3>Rp. 100.000.000</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter d-flex align-items-center justify-content-between mt-4 mb-3">
                            <div class="filter-button d-flex align-items-center">
                                <ul class="nav">
                                    <li class="nav-item">
                                      <a class="nav-link active" aria-current="page" href="#">Sedang Trend</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" href="#">Paling Rendah</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" href="#">Paling Tinggi</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="filter-search">
                                <form class="d-flex" role="search">
                                    <input class="form-control me-2 rounded-pill" type="search" placeholder="Search" aria-label="Search">
                                    <button class="btn ps-0" type="submit"><i class="fa-solid fa-magnifying-glass fa-lg text-white"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="list-item row justify-content-center">
                            @for ($i = 0; $i < 12;$i++)
                                <div class="col-5 card-zis d-flex align-items-center justify-content-start">
                                    <img src="{{ asset('assets/img/hero-image.jpg') }}" alt="Cover ZIS" class="img-zis img-thumbnail rounded">
                                    <div class="deskripsi ms-3">
                                        <h5 class="m-0">Sucikan Hati dengan Zakat Mal</h5>
                                        <span>Baznas</span>
                                        <div class="progress my-2" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar" style="width: 25%"></div>
                                        </div>
                                        <span>Total</span>
                                        <h4 class="m-0">Rp. 20.000.000</h4>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container" id="three-pilar">
        <div class="row text-white">
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
            <div class="col-md-4">
                <h5>Contact Us</h5>
                Jl. Arjuna Utara No.9 Duri Kepa, Kec. Kebon Jeruk, Kota Jakarta Barat, DKI Jakarta 11510<br>
                +62 821-1086-0615<br>
                demo@demo.id
            </div>
            <div class="col-md-4 ps-5">
                <h5>Information</h5>
                <ul>
                    <li><a href="#" class="text-black nav-link">Product Support</a></li>
                    <li><a href="#" class="text-black nav-link">Checkout</a></li>
                    <li><a href="#" class="text-black nav-link">Licence Policy</a></li>
                    <li><a href="#" class="text-black nav-link">Affiliate</a></li>
                </ul>
            </div>
            <div class="col-md-4">
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    {{-- Konversi matauang --}}
    <script>
    // Mendeteksi perubahan pada input number
    $('[id^="numericInput"]').on('input', function() {
        // Ambil nilai dari input
        var inputValue = $(this).val();

        // Hapus semua karakter non-digit (misalnya, tanda koma atau titik)
        var numericValue = inputValue.replace(/[^0-9]/g, '');

        // Ubah menjadi format mata uang dengan tanda pemisah ribuan
        var formattedValue = numericValue.replace(/\B(?=(\d{3})+(?!\d))/g, '.');

        // Setel kembali nilai input dengan format mata uang
        $(this).val(formattedValue);
    });
    </script>

</body>
</html>