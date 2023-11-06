@extends('main-frame.main')

@push('meta-header')
    <title>Payment | Zakatii App</title>
@endpush

@push('css')
    {{-- Local CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/css/payment.css?v=1.0') }}">
@endpush

@section('content')

    <div class="container" id="progress-penggalangan">
        <div class="row">
            <a href="{{ route('overview-maal') }}" class="text-black nav-link fw-bold ms-4 ms-lg-0"><i class="fa-solid fa-arrow-left fa-xl text-black"></i> Kembali</a>
            <h1 class="text-center">Pembayaran Zakat Maal</h1>
            <div class="progress-penggalangan position-relative mt-3 mb-4">
                <hr class="w-100 p-0 mt-4 mb-1" style="border:4px solid black;border-radius:8px;">
                <div class=" w-100 number-progress position-absolute d-flex align-items-center">
                    <div class="text-center d-flex align-items-center justify-content-center flex-column">
                        <div id="page-nominal" class="list-number m-0 d-flex align-items-center justify-content-center active">1</div>
                        <p>Nominal</p>
                    </div>
                    <div class="text-center d-flex align-items-center justify-content-center flex-column">
                        <div id="page-data-diri" class="list-number m-0 d-flex align-items-center justify-content-center">2</div>
                        <p>Data Diri</p>
                    </div>
                    <div class="text-center d-flex align-items-center justify-content-center flex-column">
                        <div id="page-payment" class="list-number m-0 d-flex align-items-center justify-content-center">3</div>
                        <p>Payment</p>
                    </div>
                    <div class="text-center d-flex align-items-center justify-content-center flex-column">
                        <div id="page-success" class="list-number m-0 d-flex align-items-center justify-content-center">4</div>
                        <p>Success</p>
                    </div>
                </div>
            </div>
            <form method="POST" action="#" class="input-progress mt-5">
                <div class="list-input active" id="page-nominal" data-page="1">
                    <h6 class="fw-bold text-center">Niat Zakat Maal</h6>
                    <p class="text-center m-0 p-0">Nawaitu an ukhrija zakatadz maali fardhan lillahi ta`ala.</p>
                    <p class="text-center">“Saya Niat Mengeluarkan Zakat Maal Dari Diriku Sendiri Fardhu Karena Allah Ta`ala”</p>
                    <a href="#" class="text-center nav-link mb-5 fw-bold">Lihat Detail</a>
                    <div class="mb-3 d-flex align-items-center justify-content-lg-between justify-content-center flex-wrap">
                        @php
                            $nominal = 2122246;
                        @endphp
                        @for($i = 1; $i <= 9; $i++)
                            <div class="form-check d-inline-block position-relative mb-3">
                                <input class="form-check-input kotak-nominal" type="radio" name="number-payment" id="number-payment-{{ $i }}">
                                <label class="form-check-label position-absolute" for="number-payment-{{ $i }}">
                                    <h3 class="p-0 m-0 fw-bold copy-nominal">Rp. {{ number_format($nominal, 0, ',', '.') }}</h3>
                                </label>
                            </div>
                            @php
                                if($i == 1){
                                    $nominal += 100000; 
                                }else if($i == 5){
                                    $nominal += 500000; 
                                }else if($i > 5){
                                    $nominal += 1000000; 
                                }else{
                                    $nominal += 100000; 
                                }
                            @endphp
                        @endfor
                        <div class="w-100 action d-flex align-items-center justify-content-between">
                            <div id="nominal-select">
                                <label for="nominal">Nominal</label><br>
                                <h3 class="nominal fw-bold">Rp. <input type="text" name="nominal" class="nominal fw-bold" value="2.122.246" id="numericNominal"></h3>
                            </div>
                            <button id="page-data-diri" type="button" class="btn btn-zakatii mt-3 float-right">Selanjutnya</button>
                        </div>
                    </div>
                </div>
                <div class="list-input fade" id="page-data-diri" data-page="2">
                    <div class="d-flex align-items-center justify-content-center flex-column flex-lg-row">
                        <div class="data-diri w-100">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="nama_lengkap"><i class="fa-solid fa-user"></i></span>
                                <input type="text" class="form-control" placeholder="Nama Lengkap" aria-label="Nama Lengkap" aria-describedby="nama_lengkap" value="Joko Sembung" readonly>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="nomor_telepon"><i class="fa-solid fa-phone"></i></span>
                                <input type="text" class="form-control" placeholder="Nomor Telepon" aria-label="Nomor Telepon" aria-describedby="nomor_telepon" value="082110860615" readonly>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="email"><i class="fa-solid fa-envelope"></i></span>
                                <input type="text" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="email" value="joko1234@gmail.com" readonly>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="jenis_kelamin"><i class="fa-solid fa-venus-mars"></i></span>
                                <input type="text" class="form-control" placeholder="Jenis Kelamin" aria-label="Jenis Kelamin" aria-describedby="jenis_kelamin" value="Laki-Laki" readonly>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="pekerjaan"><i class="fa-solid fa-briefcase"></i></span>
                                <input type="text" class="form-control" placeholder="Pekerjaan" aria-label="Pekerjaan" aria-describedby="pekerjaan" value="Karyawan Swasta" readonly>
                            </div>
                        </div>
                        <div class="rincian text-light text-center ms-lg-4 w-lg-0 w-100">
                            <h3 class="fw-bold">Rincian Pembayaran</h3>
                            <p class="p-0 m-0">Jenis Kebaikan</p>
                            <h4 class="m-0 p-0"><u class="fw-bold m-0 p-0">Zakat Maal</u></h4>
                            <p class="p-0 m-0 mt-3">Total Biaya Kebaikan</p>
                            <h4 class="m-0 p-0"><u class="fw-bold m-0 p-0 nominal-payment">Rp. 1.000.000</u></h4>
                            <button id="page-payment" type="button" class="fw-bold btn-zakatii-2 mt-3">Pilih Pembayaran</button></a>
                        </div>
                    </div>
                </div>
                <div class="list-input fade" id="page-payment" data-page="3">
                    <div class="d-flex align-items-center justify-content-center flex-column flex-lg-row">
                        <div class="data-diri">
                            <div class="mb-3 d-flex align-items-center justify-content-around flex-wrap">
                                @for($i = 1; $i <= 4; $i++)
                                    <div class="form-check d-inline-block position-relative mb-3">
                                        <input class="form-check-input kotak-nominal" type="radio" name="number-payment" id="number-payment-{{ $i }}">
                                        <label class="form-check-label position-absolute d-flex align-items-center justify-content-around" for="number-payment-{{ $i }}">
                                            <i class="fa-solid fa-building-columns fa-lg"></i>
                                            <span class="ms-3">20200803125<br>Arief Rahman</span>
                                        </label>
                                    </div>
                                @endfor
                            </div>
                        </div>
                        <div class="rincian text-light text-center ms-lg-4 ms-0 w-lg-0 w-100">
                            <h3 class="fw-bold">Rincian Pembayaran</h3>
                            <p class="p-0 m-0">Jenis Kebaikan</p>
                            <h4 class="m-0 p-0"><u class="fw-bold m-0 p-0">Zakat Maal</u></h4>
                            <p class="p-0 m-0 mt-3">Total Biaya Kebaikan</p>
                            <h4 class="m-0 p-0"><u class="fw-bold m-0 p-0 nominal-payment">Rp. 1.000.000</u></h4>
                            <button id="page-success" type="button" class="fw-bold btn-zakatii-2 mt-3">Bayar</button></a>
                        </div>
                    </div>
                </div>
                <div class="list-input fade" id="page-success" data-page="4">
                    <div class="d-flex align-items-center justify-content-around flex-column flex-lg-row">
                        <div class="bukti-transaksi text-center order-lg-1 order-2 mt-lg-0 mt-5">
                            <h3>Bukti Transfer</h3>
                            <div class="m-0">
                                <input class="bukti-upload" type="file" id="formFile">
                            </div>
                            <span class="text-danger">* Bukti dalam bentuk .jpg/.png</span>
                        </div>
                        <div class="desc-pembayaran ms-3 text-center order-lg-2 order-1">
                            <h3 class="fw-bold">Selesaikan pembayaran dalam</h3>
                            <h3 class="countdown fw-bold text-danger">24:00:00</h3>
                            <p class="m-0 p-0">Batas akhir pembayaran</p>
                            <b>Rabu, 05 November 2023</b>
                            <table align="center" cellpadding="5px">
                                <tr>
                                    <td>Nama Bank</td>
                                    <td>Nama Pemilik Rekening</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold fs-4">Bank BCA</td>
                                    <td class="fw-bold fs-4">Arief Rahman</td>
                                </tr>
                                <tr>
                                    <td>Nomor Rekening</td>
                                    <td>Total Biaya Kebaikan</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold fs-4">2080192384</td>
                                    <td class="fw-bold fs-4 nominal-payment">Rp. 1.000.000</td>
                                </tr>
                            </table>
                            <a href="{{ route('index') }}" class="nav-link"><button type="button" class="btn btn-zakatii d-block w-100 mt-3">Selesai</button></a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('js')
    <script>
        // Mendeteksi perubahan pada input number
        $('#numericNominal').on('input', function() {
            // Ambil nilai dari input
            var inputValue = $(this).val();

            // Hapus semua karakter non-digit (misalnya, tanda koma atau titik)
            var numericValue = inputValue.replace(/[^0-9]/g, '');

            // Ubah menjadi format mata uang dengan tanda pemisah ribuan
            var formattedValue = numericValue.replace(/\B(?=(\d{3})+(?!\d))/g, '.');

            // Setel kembali nilai input dengan format mata uang
            $(this).val(formattedValue);
        });

        $('#progress-penggalangan .list-input button').on("click", function(){
            
            const target = $(this).attr('id');

            if(target == 'page-data-diri'){
                var angka = 'Rp. '+$('#numericNominal').val();
                // console.log(angka);
                // Simpan data ke session storage
                sessionStorage.setItem('nominal', angka);
            }
            var nominalSession = sessionStorage.getItem('nominal')
            $('.nominal-payment').html(nominalSession) // Merubah nominal payment pada tabs di payemnt

            $(this).parent().parent().parent().removeClass('active').addClass('fade')
            $('.list-input#'+target).removeClass('fade').addClass('active')
            $('.list-number#'+target).addClass('active')

            if(target == 'page-success'){
                var countdown = 24 * 60 * 60; // 1 hari dalam detik (24 jam x 60 menit x 60 detik)

                function updateCountdown() {
                    var hours = Math.floor(countdown / 3600);
                    var minutes = Math.floor((countdown % 3600) / 60);
                    var seconds = countdown % 60;
                    
                    $('.countdown').text(pad(hours) + ':' + pad(minutes) + ':' + pad(seconds));
                    countdown--;

                    if (countdown < 0) {
                        // Countdown selesai, lakukan tindakan yang sesuai di sini
                        $('.countdown').text('Waktu Habis');
                    }
                }

                // Memulai countdown saat halaman dimuat
                updateCountdown();
                var countdownInterval = setInterval(updateCountdown, 1000);

                // Fungsi untuk menambahkan "0" di depan angka tunggal (misalnya, 5 menjadi "05")
                function pad(number) {
                    return (number < 10) ? "0" + number : number;
                }
            }
        })
    </script>

    <script>
        // Nominal
        $('#page-nominal .form-check').on("click", function(){
            var nominal = $(this).find('.copy-nominal').html()
            // Menghapus "Rp." dan spasi dari string
            var numericValue = nominal.replace(/\D/g, '');
            // var cleanedText = inputText.replace("Rp. ", "");

            // Mengubah string yang telah dibersihkan menjadi angka
            var angka = parseFloat(numericValue);
            // Mengubah angka menjadi format mata uang dengan titik sebagai pengganti koma
            var formatMataUang = angka.toLocaleString('id-ID');

            // $('#nominal-select .nominal').html(nominal)
            $('#numericNominal').val(formatMataUang)

            // sessionStorage.removeItem('nominal');
        })
    </script>
@endpush