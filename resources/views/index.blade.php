@extends('main-frame.main')

@push('meta-header')
    <title>Landing Page | Zakatii App</title>
@endpush

@push('css')
    {{-- Local CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/css/index.css?v=1.0') }}">
@endpush

@section('content')
    <div id="hero-section" class="container w-100 m-0">
        <div class="row">
            <div class="col-md-12 copy">
                <h1>#SatuKlikUntukKebaikanAbadi</h1>
                <p>Platform zakat dan infaq berbasis Islam dengan kalkulator, pembayaran online, edukasi, dan transparansi, meningkatkan kesadaran agama dan membantu yang membutuhkan.</p>
                <a href="#menu-amalan"><button class="btn btn-zakatii-2">Beramal Sekarang</button></a>
            </div>
        </div>
    </div>

    <section id="menu-amalan">
        <div class="container">
            <div class="row">
                <h3 class="mb-4">Menu Amalan</h3>
            </div>
            <div class="amalan d-flex align-items-center justify-content-center flex-wrap flex-lg-nowrap">
                <a href="{{ route('zis-list') }}" class="m-2 list-amalan bg-light">
                    <div class="text-center">
                        <img src="{{ asset('assets/icons/Rice.png') }}" width="60px" alt="Rice">
                        <p class="m-0">Zakat Fitrah</p>
                    </div>
                </a>
                <a href="{{ route('zis-list') }}" class="m-2 list-amalan bg-light">
                    <div class="text-center">
                        <img src="{{ asset('assets/icons/Treasure.png') }}" width="60px" alt="Treasure">
                        <p class="m-0">Zakat Maal</p>
                    </div>
                </a>
                <a href="{{ route('zis-list') }}" class="m-2 list-amalan bg-light">
                    <div class="text-center">
                        <img src="{{ asset('assets/icons/Contractor.png') }}" width="60px" alt="Contractor">
                        <p class="m-0">Zakat Peghasilan</p>
                    </div>
                </a>
                <a href="{{ route('infaq-sedekah-list') }}" class="m-2 list-amalan bg-light">
                    <div class="text-center">
                        <img src="{{ asset('assets/icons/Mosque.png') }}" width="60px" alt="Mosque">
                        <p class="m-0">Infaq</p>
                    </div>
                </a>
                <a href="{{ route('infaq-sedekah-list') }}" class="m-2 list-amalan bg-light">
                    <div class="text-center">
                        <img src="{{ asset('assets/icons/Muslim.png') }}" width="60px" alt="Muslim">
                        <p class="m-0">Sedekah</p>
                    </div>
                </a>
                {{-- <a href="{{ route('zis-list') }}" class="m-2 list-amalan bg-light">
                    <div class="text-center">
                        <img src="{{ asset('assets/icons/More.png') }}" width="60px" alt="More">
                        <p class="m-0">Lainnya</p>
                    </div>
                </a> --}}
            </div>
        </div>
    </section>
    <section id="penggalangan-dana">
        <div class="container">
            <div class="row">
                <h3 class="mb-4">Penggalangan Dana</h3>
            </div>
            <div class="penggalangan d-flex align-items-center justify-content-center flex-wrap flex-lg-nowrap">
                <a href="{{ route('overview') }}" class="m-2 list-penggalangan bg-light" style="background-image: url('assets/img/galangan-dana/galangan-dana (1).png')"></a>
                <a href="{{ route('overview') }}" class="m-2 list-penggalangan bg-light" style="background-image: url('assets/img/galangan-dana/galangan-dana (1).png')"></a>
                <a href="{{ route('overview') }}" class="m-2 list-penggalangan bg-light" style="background-image: url('assets/img/galangan-dana/galangan-dana (1).png')"></a>
                <a href="{{ route('overview') }}" class="m-2 list-penggalangan bg-light" style="background-image: url('assets/img/galangan-dana/galangan-dana (1).png')"></a>
                <a href="{{ route('overview') }}" class="m-2 list-penggalangan bg-light" style="background-image: url('assets/img/galangan-dana/galangan-dana (1).png')"></a>
                <a href="{{ route('overview') }}" class="m-2 list-penggalangan bg-light" style="background-image: url('assets/img/galangan-dana/galangan-dana (1).png')"></a>
            </div>
        </div>
    </section>

    <section id="banner-slider">
        <div class="flickity-effect w-100 h-auto">
            <img src="{{ asset('assets/img/banner/banner.png') }}" alt="Banner" width="100%">
            <img src="{{ asset('assets/img/banner/banner.png') }}" alt="Banner" width="100%">
            <img src="{{ asset('assets/img/banner/banner.png') }}" alt="Banner" width="100%">
            <img src="{{ asset('assets/img/banner/banner.png') }}" alt="Banner" width="100%">
        </div>
    </section>

    <section id="blogs">
        <div class="container">
            <div class="row">
                <h3 class="mb-4">Blogs</h3>
            </div>
            <div class="blogs d-flex align-items-center justify-content-center flex-wrap flex-lg-nowrap">
                <a href="#" class="m-2 list-blogs bg-light" style="background-image: url('assets/img/blogs/blog.png');background-repeat:no-repeat;background-size:cover;"></a>
                <a href="#" class="m-2 list-blogs bg-light" style="background-image: url('assets/img/blogs/blog.png');background-repeat:no-repeat;background-size:cover;"></a>
                <a href="#" class="m-2 list-blogs bg-light" style="background-image: url('assets/img/blogs/blog.png');background-repeat:no-repeat;background-size:cover;"></a>
            </div>
        </div>
    </section>
@endsection

@push('js')
    <script>
        $(document).ready(function () { 
            $('.flickity-effect').flickity({
                contain: true,
                cellAlign: 'left',
                prevNextButtons: false,
                pageDots: true
            })
            if (window.matchMedia("(max-width: 767.92px)").matches) {
                $('.amalan').flickity({
                    contain: true,
                    cellAlign: 'left',
                    prevNextButtons: false,
                    pageDots: true
                });
                $('.penggalangan').flickity({
                    contain: true,
                    cellAlign: 'left',
                    prevNextButtons: true,
                    pageDots: false
                });
                $('.blogs').flickity({
                    contain: true,
                    cellAlign: 'left',
                    prevNextButtons: true,
                    pageDots: false
                });
            }
        })

    </script>
@endpush