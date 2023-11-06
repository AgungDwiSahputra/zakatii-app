@extends('main-frame.main')

@push('meta-header')
    <title>Penggalang Dana | Zakatii App</title>
@endpush

@push('css')
    {{-- Local CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/css/penggalangan-dana.css?v=1.0') }}">
@endpush

@section('content')

    <div class="container" id="progress-penggalangan">
        <div class="row">
            <a href="{{ route('index') }}" class="text-black nav-link fw-bold"><i class="fa-solid fa-arrow-left fa-xl text-black"></i> Kembali</a>
            <h1 class="text-center">Galang Dana</h1>
            <div class="progress-penggalangan position-relative mt-3 mb-4">
                <hr class="w-100 p-0 mt-4 mb-1" style="border:4px solid black;border-radius:8px;">
                <div class=" w-100 number-progress position-absolute d-flex align-items-center">
                    <div class="text-center d-flex align-items-center justify-content-center flex-column">
                        <div id="page-tujuan" class="list-number m-0 d-flex align-items-center justify-content-center active">1</div>
                        <p>Tujuan</p>
                    </div>
                    <div class="text-center d-flex align-items-center justify-content-center flex-column">
                        <div id="page-data-diri" class="list-number m-0 d-flex align-items-center justify-content-center">2</div>
                        <p>Data Diri</p>
                    </div>
                    <div class="text-center d-flex align-items-center justify-content-center flex-column">
                        <div id="page-penerima" class="list-number m-0 d-flex align-items-center justify-content-center">3</div>
                        <p>Penerima</p>
                    </div>
                    <div class="text-center d-flex align-items-center justify-content-center flex-column">
                        <div id="page-target-donasi" class="list-number m-0 d-flex align-items-center justify-content-center">4</div>
                        <p>Target Donasi</p>
                    </div>
                    <div class="text-center d-flex align-items-center justify-content-center flex-column">
                        <div id="page-judul" class="list-number m-0 d-flex align-items-center justify-content-center">5</div>
                        <p>Judul</p>
                    </div>
                    <div class="text-center d-flex align-items-center justify-content-center flex-column">
                        <div id="page-deskripsi" class="list-number m-0 d-flex align-items-center justify-content-center">6</div>
                        <p>Deskripsi</p>
                    </div>
                </div>
            </div>
            <form method="POST" action="#" class="input-progress mt-5">
                <div class="list-input active" id="page-tujuan" data-page="1">
                    <div class="mb-3">
                        <label for="pilih-tujuan" class="form-label">Pilih Tujuan / Kategori</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Zakat Maal</option>
                            <option value="1">Zakat Maal</option>
                            <option value="2">Zakat Fitrah</option>
                            <option value="3">Infaq / Sedekah</option>
                        </select>
                        <div class="action d-flex align-items-center justify-content-between">
                            <button id="page-data-diri" type="button" class="btn btn-zakatii mt-3 float-right">Selanjutnya</button>
                        </div>
                    </div>
                </div>
                <div class="list-input fade" id="page-data-diri" data-page="2">
                    <div class="mb-3">
                        <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                        <input name="nama_lengkap" type="text" class="form-control" id="nama_lengkap" placeholder="Nama Lengkap">
                        <label for="no_telp" class="form-label">Nomor Telepon</label>
                        <input name="no_telp" type="text" class="form-control" id="no_telp" placeholder="Nomor Telepon">
                        <label for="pekerjaan" class="form-label">Pekerjaan</label>
                        <input name="pekerjaan" type="text" class="form-control" id="pekerjaan" placeholder="Pekerjaan">
                        <label for="tempat_pekerjaan" class="form-label">Tempat Pekerjaan</label>
                        <input name="tempat_pekerjaan" type="text" class="form-control" id="tempat_pekerjaan" placeholder="Tempat Pekerjaan">
                        <div class="action d-flex align-items-center justify-content-between">
                            <button id="page-tujuan" type="button" class="btn btn-zakatii-2 mt-3 float-left">Sebelumnya</button>
                            <button id="page-penerima" type="button" class="btn btn-zakatii mt-3 float-right">Selanjutnya</button>
                        </div>
                    </div>
                </div>
                <div class="list-input fade" id="page-penerima" data-page="3">
                    <div class="mb-3">
                        <label for="penggunaan" class="form-label">Penggunaan Galang Dana</label>
                        <input name="penggunaan" type="text" class="form-control" id="penggunaan" placeholder="Penggunaan Galang Dana">
                        <label for="detail_tujuan" class="form-label">Detail Tujuan Galang Dana</label>
                        <input name="detail_tujuan" type="text" class="form-control" id="detail_tujuan" placeholder="Detail Tujuan Galang Dana">
                        <label for="lokasi" class="form-label">Lokasi</label>
                        <input name="lokasi" type="text" class="form-control" id="lokasi" placeholder="Lokasi">
                        <div class="action d-flex align-items-center justify-content-between">
                            <button id="page-data-diri" type="button" class="btn btn-zakatii-2 mt-3 float-left">Sebelumnya</button>
                            <button id="page-target-donasi" type="button" class="btn btn-zakatii mt-3 float-right">Selanjutnya</button>
                        </div>
                    </div>
                </div>
                <div class="list-input fade" id="page-target-donasi" data-page="4">
                    <div class="mb-3">
                        <label for="perkiraan_biaya" class="form-label">Perkiraan Biaya yang Dibutuhkan</label>
                        <input name="perkiraan_biaya" type="text" class="form-control" id="perkiraan_biaya" placeholder="Perkiraan Biaya">
                        <label for="durasi" class="form-label">Durasi Galang Dana</label>
                        <input name="durasi" type="text" class="form-control" id="durasi" placeholder="Durasi Galang Dana">
                        <label for="rincian_penggunaan" class="form-label">Rincian Penggunaan Dana</label>
                        <input name="rincian_penggunaan" type="text" class="form-control" id="rincian_penggunaan" placeholder="Rincian Penggunaan Dana">
                        <div class="action d-flex align-items-center justify-content-between">
                            <button id="page-penerima" type="button" class="btn btn-zakatii-2 mt-3 float-left">Sebelumnya</button>
                            <button id="page-judul" type="button" class="btn btn-zakatii mt-3 float-right">Selanjutnya</button>
                        </div>
                    </div>
                </div>
                <div class="list-input fade" id="page-judul" data-page="5">
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul</label>
                        <input name="judul" type="text" class="form-control" id="judul" placeholder="Judul Galang Dana">
                        <label for="gambar_penggalangan" class="form-label">Foto Galang Dana</label>
                        <input class="form-control" type="file" name="gambar_penggalangan" id="gambar_penggalangan">
                        <div class="action d-flex align-items-center justify-content-between">
                            <button id="page-target-donasi" type="button" class="btn btn-zakatii-2 mt-3 float-left">Sebelumnya</button>
                            <button id="page-deskripsi" type="button" class="btn btn-zakatii mt-3 float-right">Selanjutnya</button>
                        </div>
                    </div>
                </div>
                <div class="list-input fade" id="page-deskripsi" data-page="6">
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Deskripsi Penggalangan Dana" id="deskripsi" style="height: 100px"></textarea>
                            <label for="deskripsi">Deskripsi Penggalangan Dana</label>
                        </div>
                        <label for="deskripsi" class="form-label">Ajakan</label>
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Ajakan Galang Dana" id="deskripsi" style="height: 100px"></textarea>
                            <label for="deskripsi">Ajakan Penggalangan Dana</label>
                        </div>
                        <div class="action d-flex align-items-center justify-content-between">
                            <button id="page-judul" type="button" class="btn btn-zakatii-2 mt-3 float-left">Sebelumnya</button>
                            <a href="{{ route('index') }}"><button id="page-deskripsi" type="button" class="btn btn-zakatii mt-3 float-right">Kirim</button></a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $('#progress-penggalangan .list-input .action button').on("click", function(){
            const target = $(this).attr('id');
            // const number_progress = $(this).parent().parent().parent().attr('id')
            $(this).parent().parent().parent().removeClass('active').addClass('fade')
            $('.list-input#'+target).removeClass('fade').addClass('active')
            $('.list-number#'+target).addClass('active')
            // console.log(number_progress);
            console.log($(this).parent().parent().parent());
            console.log($('.list-number#'+target));
        })
    </script>
@endpush