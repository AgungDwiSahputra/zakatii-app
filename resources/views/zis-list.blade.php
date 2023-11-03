
@extends('main-frame.main')

@push('meta-header')
    <title>ZIS List | Zakatii App</title>
@endpush

@push('css')
    {{-- Local CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/css/zist-list.css?v=1.0') }}">
@endpush

@section('content')
    <div class="container" id="pilihan-zakat">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center">
                <div class="kotak-pilihan-zakat d-flex align-items-center justify-content-between flex-column flex-lg-row">
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
                        <div class="filter d-flex align-items-center justify-content-between mt-4 mb-3 flex-column-reverse flex-lg-row">
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
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5 card-zis d-flex align-items-center justify-content-start">
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
                        <div class="filter d-flex align-items-center justify-content-between mt-4 mb-3 flex-column-reverse flex-lg-row">
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
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5 card-zis d-flex align-items-center justify-content-start">
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
                        <div class="filter d-flex align-items-center justify-content-between mt-4 mb-3 flex-column-reverse flex-lg-row">
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
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5 card-zis d-flex align-items-center justify-content-start">
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
@endsection

@push('js')
    {{-- Konversi Bentuk Uang --}}
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
@endpush