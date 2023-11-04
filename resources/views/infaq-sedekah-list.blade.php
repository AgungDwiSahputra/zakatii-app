
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
                        <h2>Pilihan Infaq & Sedekah</h2>
                    </div>
                    <div class="pilihan d-flex align-items-center justify-content-end">
                        <ul class="nav nav-pills">
                            <li class="nav-item active" role="infaq-sedekah">
                                <a class="nav-link active" href="#infaq" role="tab" data-bs-toggle="tab">
                                    <img src="{{ asset('assets/icons/Mosque.png') }}" alt="Mosque" width="50px">
                                    <p>Infaq</p>
                                </a>
                            </li>
                            <li class="nav-item" role="infaq-sedekah">
                                <a class="nav-link" href="#sedekah" role="tab" data-bs-toggle="tab">
                                    <img src="{{ asset('assets/icons/Muslim.png') }}" alt="Muslim" width="50px">
                                    <p>Sedekah</p>
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
                    <div role="zakat" class="tab-pane active" id="infaq">
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
                                    <a href="{{ route('overview') }}" class="nav-link"><img src="{{ asset('assets/img/hero-image.jpg') }}" alt="Cover ZIS" class="img-zis img-thumbnail rounded"></a>
                                    <div class="deskripsi ms-3">
                                        <a href="{{ route('overview') }}" class="nav-link"><h5 class="m-0">Infaq</h5></a>
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
                    <div role="zakat" class="tab-pane" id="sedekah">
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
                                    <a href="{{ route('overview') }}" class="nav-link"><img src="{{ asset('assets/img/hero-image.jpg') }}" alt="Cover ZIS" class="img-zis img-thumbnail rounded"></a>
                                    <div class="deskripsi ms-3">
                                        <a href="{{ route('overview') }}" class="nav-link"><h5 class="m-0">Sedekah</h5></a>
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

@endpush