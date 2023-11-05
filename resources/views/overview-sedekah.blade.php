@extends('main-frame.main')

@push('meta-header')
    <title>Overview ZIS| Zakatii App</title>
@endpush

@push('css')
    {{-- Local CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/css/overview-zis.css') }}">
@endpush

@section('content')
    <!-- Section header -->
    <div class="container mt-4">
      <div class="row align-items-center pb-3">
        <div class="col-lg-4 col-md-6 col-sm-12">
            <img src="{{ asset('assets/img/ngaji.png') }}" id="gambar-header" class="rounded">
        </div>
        <div class="col-lg-8 col-md-6 col-sm-12 ps-4">
            <div class="row pb-3 me-2 border-1 border-bottom border-black">
                <div class="col-11 p-0">
                    <p class="fs-1 fw-bold mb-0 align-self-center">Sucikan Hati dengan Infaq/Sedekah</p>
                </div>
                <div class="col-1 text-center align-self-center">
                    <!-- icon -->
                    <i class="fa-regular fa-bookmark fa-2xl align-bottom" style="color: #000000;" ></i>
                </div>
            </div>
            <div class="row border-1 border-bottom border-black me-2">
                <div class="d-flex align-items-center justify-content-start py-2">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/e/e6/Logo_BAZNAS_RI-Hijau-01.png"  class="border border-1 border-black rounded-circle" id="profil">
                    <p class="fs-3 fw-medium p-0 m-0 ms-2">Baznas Official Jakarta Barat</p>
                </div>
            </div>
            <div class="row pt-3 pb-3 me-2 border-1 border-bottom border-black align-items-center">
                 <div class="col-3 col-lg-3 col-md-6 col-sm-6 text-center">
                    <!-- icon -->
                    <i class="fa-regular fa-heart fa-xl d-inline me-1" style="color: #000000;"></i>
                    <!-- number -->
                    <p class="d-inline"><b>1125</b> Donasi</p>
                 </div>
                 <div class="col-3 col-lg-3 col-md-6 col-sm-6 text-center">
                    <!-- icon -->
                    <i class="fa-solid fa-hands-praying fa-xl d-inline me-1" style="color: #000000;"></i>
                    <!-- number -->
                    <p class="d-inline"><b>1125</b> Doa</p>
                 </div>
                 <div class="col-3 col-lg-3 col-md-6 col-sm-6 text-center">
                    <!-- icon -->
                    <i class="fa-solid fa-share fa-xl d-inline me-1" style="color: #000000;"></i>
                    <!-- number -->
                    <p class="d-inline"><b>1125</b> Share</p>
                 </div>
                 <div class="col-3 col-lg-3 col-md-6 col-sm-6 text-center">
                    <!-- icon -->
                    <i class="fa-solid fa-ellipsis fa-xl d-inline me-1" style="color: #000000;"></i>
                    <p class="d-inline">More</p>
                 </div>
            </div>
            <div class="row pt-3 pb-3 me-2 justify-content-between">
                <div class="col-4 col-lg-4 col-md-5 col-sm-6">
                    <p class="m-0">Total Donasi</p>
                    <p class="m-0"><b>Rp 15.000.000</b></p>
                </div>
                <div class="col-4 col-lg-4 col-md-5 col-sm-6 text-end">
                    <p class="m-0">Sisa Donasi</p>
                    <p class="m-0"><b>Rp 15.000.000</b></p>
                </div>
            </div>
            <div class="row me-2">
                <div class="progress p-0 border-black" role="progressbar" aria-label="Basic example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="--bs-progress-height: 10px; --bs-progress-bar-bg: #609966; --bs-progress-bg: none; border: 1px solid #609966;">
                    <div class="progress-bar" style="width: 50%"></div>
                </div>
            </div>
            <div class="row pt-3 pb-3 me-2 justify-content-between align-items-center">
                <div class="col-6">
                    <p class="m-0">Target Donasi</p>
                    <h3>Rp 30.000.000</h3>
                </div>
                <div class="col-4 text-end align-middle">
                    <a href="{{route('payment-sedekah')}}">
                        <button type="button" class="btn" style="background-color: #609966; color: #fff;"><b>Donate</b></button>
                    </a>
                </div>
            </div>
        </div>
      </div>
    </div>
    
    <!-- Section Deskripsi -->
    <div class="deskripsi" style="background-color: #609966;">
        <div class="container p-4">
            <p class="fs-3 fw-bold" style="color:#edf1d6;">Deskripsi Penggalangan Dana</p>
            <div class="row mb-4 rounded" style="background-color: #edf1d6;">
                <p class="fs-6 fw-lighter mt-2">25 Oktober 2022</p>
                <p class="fs-6">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                <p class="fs-6"> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
            </div>

            <!-- Penerima Bantuan -->
            <div class="row">
                <div class="col d-inline justify-content-around">
                    <p class="fs-5 fw-medium" style="color:#edf1d6;">Penerima Bantuan</p>
                    <div class="col-lg-12 col-sm-12">
                        <div class="rounded p-2" style="background-color: #edf1d6;">
                            <div class="container">
                                <div class="row px-2 py-1 justify-content-between align-items-center">
                                    <div class="col-9">
                                        <p class="fs-5 fw-medium p-0 m-0">Jalaudin</p>
                                        <p class="fs-6 p-0 m-0">Kebutuhan pokok sebesar <b>Rp 2.000.000</b></p>
                                    </div>
                                    <p class="fs-6 fw-lighter p-0 m-0 col-2">1 hari yang lalu</p>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row px-2 py-1 justify-content-between align-items-center">
                                    <div class="col-9">
                                        <p class="fs-5 fw-medium p-0 m-0">Jalaudin</p>
                                        <p class="fs-6 p-0 m-0">Kebutuhan pokok sebesar <b>Rp 2.000.000</b></p>
                                    </div>
                                    <p class="fs-6 fw-lighter p-0 m-0 col-2">1 hari yang lalu</p>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row px-2 py-1 justify-content-between align-items-center">
                                    <div class="col-9">
                                        <p class="fs-5 fw-medium p-0 m-0">Jalaudin</p>
                                        <p class="fs-6 p-0 m-0">Kebutuhan pokok sebesar <b>Rp 2.000.000</b></p>
                                    </div>
                                    <p class="fs-6 fw-lighter p-0 m-0 col-2">1 hari yang lalu</p>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row px-2 py-1 justify-content-between align-items-center">
                                    <div class="col-9">
                                        <p class="fs-5 fw-medium p-0 m-0">Jalaudin</p>
                                        <p class="fs-6 p-0 m-0">Kebutuhan pokok sebesar <b>Rp 2.000.000</b></p>
                                    </div>
                                    <p class="fs-6 fw-lighter p-0 m-0 col-2">1 hari yang lalu</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Histori Donasi -->
                <div class="col-lg-6 col-sm-12 d-inline justify-content-around">
                    <p class="fs-5 fw-medium p-lg-0 pt-md-3 pt-sm-3" style="color:#edf1d6;" >Histori Donasi</p>
                    <div class="col">
                        <div class="rounded p-2" style="background-color: #edf1d6;">
                            <div class="container">
                                <div class="row justify-content-between align-items-center px-1 py-1">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/e/e6/Logo_BAZNAS_RI-Hijau-01.png"  class="border border-1 border-black rounded-circle p-0" id="profil">
                                    <div class="col-8 p-0 m-0 ps-2">
                                        <p class="fs-5 fw-medium p-0 m-0">Jalaudin</p>
                                        <p class="fs-6 p-0 m-0">Kebutuhan pokok sebesar <b>Rp 2.000.000</b></p>
                                    </div>
                                    <div class="col-2 p-0 m-0">
                                        <p class="fs-6 fw-lighter p-0 m-0">1 hari yang lalu</p>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row justify-content-between align-items-center px-1 py-1">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/e/e6/Logo_BAZNAS_RI-Hijau-01.png"  class="border border-1 border-black rounded-circle p-0" id="profil">
                                    <div class="col-8 p-0 m-0">
                                        <p class="fs-5 fw-medium p-0 m-0">Jalaudin</p>
                                        <p class="fs-6 p-0 m-0">Kebutuhan pokok sebesar <b>Rp 2.000.000</b></p>
                                    </div>
                                    <div class="col-2 p-0 m-0">
                                        <p class="fs-6 fw-lighter p-0 m-0">1 hari yang lalu</p>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row justify-content-between align-items-center px-1 py-1">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/e/e6/Logo_BAZNAS_RI-Hijau-01.png"  class="border border-1 border-black rounded-circle p-0" id="profil">
                                    <div class="col-8 p-0 m-0">
                                        <p class="fs-5 fw-medium p-0 m-0">Jalaudin</p>
                                        <p class="fs-6 p-0 m-0">Kebutuhan pokok sebesar <b>Rp 2.000.000</b></p>
                                    </div>
                                    <div class="col-2 p-0 m-0">
                                        <p class="fs-6 fw-lighter p-0 m-0">1 hari yang lalu</p>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row justify-content-between align-items-center px-1 py-1">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/e/e6/Logo_BAZNAS_RI-Hijau-01.png"  class="border border-1 border-black rounded-circle p-0" id="profil">
                                    <div class="col-8 p-0 m-0">
                                        <p class="fs-5 fw-medium p-0 m-0">Jalaudin</p>
                                        <p class="fs-6 p-0 m-0">Kebutuhan pokok sebesar <b>Rp 2.000.000</b></p>
                                    </div>
                                    <div class="col-2 p-0 m-0">
                                        <p class="fs-6 fw-lighter p-0 m-0">1 hari yang lalu</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section Kumpulan Orang Baik -->
    <div class="container">
        <p class="fs-3 fw-bold pt-3 m-0">Doa Orang-orang Baik</p>
    </div>
    <div class="py-4 flickity-effect">
        <div class="col-lg-4 col-sm-8 ps-2">
            <div class="card">
                <div class="card-body">
                    <div class="container p-4 rounded">
                        <div class="d-flex align-items-center justify-content-Start">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/e/e6/Logo_BAZNAS_RI-Hijau-01.png"  class="border border-1 border-black rounded-circle p-0" id="profil">
                            <div class="align-self-center p-0 m-0">
                                <div class="profil p-0 m-2">
                                    <h5 class="p-0 m-0">Orang Baik</h5>
                                    <p class="p-0 m-0" style="font-size:10px;">1 jam yang lalu</p>
                                </div>
                            </div>
                            <i class="fa-solid fa-ellipsis fa-xl d-inline me-1 ms-auto" style="color: #000000;"></i>
                        </div>
                        <div class="row p-3 text-center align-self-center">
                            <p class="p-0 m-0">Semoga kita selalu diberi rejeki, kesehatan, dan kebahagiaan. Serta dilancarkan semua usaha yang dilakukan.</p>
                        </div>
                        <div class="row p-2 text-center align-self-center">
                            <div class="col" href="#">
                                <i class="fa-solid fa-heart fa-sm d-inline" style="color: #000000;"></i>
                                <p class="m-0 d-inline"><b>6 rb</b> Aamiinn</p>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-8 ps-2">
            <div class="card">
                <div class="card-body">
                    <div class="container p-4 rounded">
                        <div class="d-flex align-items-center justify-content-Start">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/e/e6/Logo_BAZNAS_RI-Hijau-01.png"  class="border border-1 border-black rounded-circle p-0" id="profil">
                            <div class="align-self-center p-0 m-0">
                                <div class="profil p-0 m-2">
                                    <h5 class="p-0 m-0">Orang Baik</h5>
                                    <p class="p-0 m-0" style="font-size:10px;">1 jam yang lalu</p>
                                </div>
                            </div>
                            <i class="fa-solid fa-ellipsis fa-xl d-inline me-1 ms-auto" style="color: #000000;"></i>
                        </div>
                        <div class="row p-3 text-center align-self-center">
                            <p class="p-0 m-0">Semoga kita selalu diberi rejeki, kesehatan, dan kebahagiaan. Serta dilancarkan semua usaha yang dilakukan.</p>
                        </div>
                        <div class="row p-2 text-center align-self-center">
                            <div class="col" href="#">
                                <i class="fa-solid fa-heart fa-sm d-inline" style="color: #000000;"></i>
                                <p class="m-0 d-inline"><b>6 rb</b> Aamiinn</p>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-8 ps-2">
            <div class="card">
                <div class="card-body">
                    <div class="container p-4 rounded">
                        <div class="d-flex align-items-center justify-content-Start">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/e/e6/Logo_BAZNAS_RI-Hijau-01.png"  class="border border-1 border-black rounded-circle p-0" id="profil">
                            <div class="align-self-center p-0 m-0">
                                <div class="profil p-0 m-2">
                                    <h5 class="p-0 m-0">Orang Baik</h5>
                                    <p class="p-0 m-0" style="font-size:10px;">1 jam yang lalu</p>
                                </div>
                            </div>
                            <i class="fa-solid fa-ellipsis fa-xl d-inline me-1 ms-auto" style="color: #000000;"></i>
                        </div>
                        <div class="row p-3 text-center align-self-center">
                            <p class="p-0 m-0">Semoga kita selalu diberi rejeki, kesehatan, dan kebahagiaan. Serta dilancarkan semua usaha yang dilakukan.</p>
                        </div>
                        <div class="row p-2 text-center align-self-center">
                            <div class="col" href="#">
                                <i class="fa-solid fa-heart fa-sm d-inline" style="color: #000000;"></i>
                                <p class="m-0 d-inline"><b>6 rb</b> Aamiinn</p>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-8 ps-2">
            <div class="card">
                <div class="card-body">
                    <div class="container p-4 rounded">
                        <div class="d-flex align-items-center justify-content-Start">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/e/e6/Logo_BAZNAS_RI-Hijau-01.png"  class="border border-1 border-black rounded-circle p-0" id="profil">
                            <div class="align-self-center p-0 m-0">
                                <div class="profil p-0 m-2">
                                    <h5 class="p-0 m-0">Orang Baik</h5>
                                    <p class="p-0 m-0" style="font-size:10px;">1 jam yang lalu</p>
                                </div>
                            </div>
                            <i class="fa-solid fa-ellipsis fa-xl d-inline me-1 ms-auto" style="color: #000000;"></i>
                        </div>
                        <div class="row p-3 text-center align-self-center">
                            <p class="p-0 m-0">Semoga kita selalu diberi rejeki, kesehatan, dan kebahagiaan. Serta dilancarkan semua usaha yang dilakukan.</p>
                        </div>
                        <div class="row p-2 text-center align-self-center">
                            <div class="col" href="#">
                                <i class="fa-solid fa-heart fa-sm d-inline" style="color: #000000;"></i>
                                <p class="m-0 d-inline"><b>6 rb</b> Aamiinn</p>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-8 ps-2">
            <div class="card">
                <div class="card-body">
                    <div class="container p-4 rounded">
                        <div class="d-flex align-items-center justify-content-Start">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/e/e6/Logo_BAZNAS_RI-Hijau-01.png"  class="border border-1 border-black rounded-circle p-0" id="profil">
                            <div class="align-self-center p-0 m-0">
                                <div class="profil p-0 m-2">
                                    <h5 class="p-0 m-0">Orang Baik</h5>
                                    <p class="p-0 m-0" style="font-size:10px;">1 jam yang lalu</p>
                                </div>
                            </div>
                            <i class="fa-solid fa-ellipsis fa-xl d-inline me-1 ms-auto" style="color: #000000;"></i>
                        </div>
                        <div class="row p-3 text-center align-self-center">
                            <p class="p-0 m-0">Semoga kita selalu diberi rejeki, kesehatan, dan kebahagiaan. Serta dilancarkan semua usaha yang dilakukan.</p>
                        </div>
                        <div class="row p-2 text-center align-self-center">
                            <div class="col" href="#">
                                <i class="fa-solid fa-heart fa-sm d-inline" style="color: #000000;"></i>
                                <p class="m-0 d-inline"><b>6 rb</b> Aamiinn</p>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $(document).ready(function () { 
            $('.flickity-effect').flickity({
                contain: true,
                cellAlign: 'left',
                prevNextButtons: true,
                pageDots: false
            })
        })
    </script>
@endpush