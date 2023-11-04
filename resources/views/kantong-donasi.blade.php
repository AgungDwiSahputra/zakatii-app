@extends('main-frame.main')

@push('meta-header')
    <title>Landing Page | Zakatii App</title>
@endpush

@push('css')
    {{-- Local CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/css/kantong-donasi.css?v=1.0') }}">
@endpush

<!-- Isi konten -->
@section('content')

<div class="container pb-5">
    <div class="row p-5">
        <div class="col d-flex justify-content-center align-items-center">
            <div class="col-6 rounded-4 text-light" id="total_donasi">
                <div class="text">
                    <p class="fs-4 fw-medium m-0 m-0">Total Kantong Donasi</p>
                    <p class="fs-2 fw-bold m-0">Rp 30.000.000</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col" id="riwayat">
            <div class="container">
                <div class="row p-2">
                    <div class="col-10">
                        <p class="fs-6 fw-medium m-0">Transfer Dana ke Masjid A</p>
                        <p class="fw-light">Infaq dan Shodaqoh</p>
                        <p class="fs-5 fw-bold m-0">Rp 30.000.000</p>
                    </div>
                    <div class="col-2 text-end d-flex justify-content-center align-items-center">
                        <div class="tanggal">
                            <p class="fw-lighter">20/12/2023</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col" id="riwayat">
            <div class="container">
                <div class="row p-2">
                    <div class="col-10">
                        <p class="fs-6 fw-medium m-0">Transfer Dana ke Masjid A</p>
                        <p class="fw-light">Infaq dan Shodaqoh</p>
                        <p class="fs-5 fw-bold m-0">Rp 30.000.000</p>
                    </div>
                    <div class="col-2 text-end d-flex justify-content-center align-items-center">
                        <div class="tanggal">
                            <p class="fw-lighter">20/12/2023</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col" id="riwayat">
            <div class="container">
                <div class="row p-2">
                    <div class="col-10">
                        <p class="fs-6 fw-medium m-0">Transfer Dana ke Masjid A</p>
                        <p class="fw-light">Infaq dan Shodaqoh</p>
                        <p class="fs-5 fw-bold m-0">Rp 30.000.000</p>
                    </div>
                    <div class="col-2 text-end d-flex justify-content-center align-items-center">
                        <div class="tanggal">
                            <p class="fw-lighter">20/12/2023</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col" id="riwayat">
            <div class="container">
                <div class="row p-2">
                    <div class="col-10">
                        <p class="fs-6 fw-medium m-0">Transfer Dana ke Masjid A</p>
                        <p class="fw-light">Infaq dan Shodaqoh</p>
                        <p class="fs-5 fw-bold m-0">Rp 30.000.000</p>
                    </div>
                    <div class="col-2 text-end d-flex justify-content-center align-items-center">
                        <div class="tanggal">
                            <p class="fw-lighter">20/12/2023</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col" id="riwayat">
            <div class="container">
                <div class="row p-2">
                    <div class="col-10">
                        <p class="fs-6 fw-medium m-0">Transfer Dana ke Masjid A</p>
                        <p class="fw-light">Infaq dan Shodaqoh</p>
                        <p class="fs-5 fw-bold m-0">Rp 30.000.000</p>
                    </div>
                    <div class="col-2 text-end d-flex justify-content-center align-items-center">
                        <div class="tanggal">
                            <p class="fw-lighter">20/12/2023</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col" id="riwayat">
            <div class="container">
                <div class="row p-2">
                    <div class="col-10">
                        <p class="fs-6 fw-medium m-0">Transfer Dana ke Masjid A</p>
                        <p class="fw-light">Infaq dan Shodaqoh</p>
                        <p class="fs-5 fw-bold m-0">Rp 30.000.000</p>
                    </div>
                    <div class="col-2 text-end d-flex justify-content-center align-items-center">
                        <div class="tanggal">
                            <p class="fw-lighter">20/12/2023</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






@endsection

@push('js')
@endpush