    <div class="breadcrumb flex-column">
        <h4 class="fw-bold m-0 p-0">Dashboard</h4>
        <span class="p-0 m-0">Selamat Datang, <b>Admin</b></span>
    </div>
    <div class="row mt-5 mb-3">
        <div class="col-lg-8 col-12 mb-3">
            <div class="total-dana d-flex align-items-center justify-content-between">
                <div class="copy text-light">
                    <span>Total Dana</span>
                    <h2 class="fw-bold">Rp. 100.000.000.000</h2>
                </div>
                <i class="fa-solid fa-wallet text-light" style="font-size:50px"></i>
            </div>
        </div>
        <div class="col-lg-4 col-12 mb-3">
            <div class="total-donatur d-flex align-items-center justify-content-center flex-column">
                <h2 class="fw-bold">565</h2>
                <span>Total Donatur</span>
            </div>
        </div>
        <div class="col-lg-3 col-6 mb-3">
            <div class="total-card-default d-flex align-items-center justify-content-center flex-column">
                <h2 class="fw-bold">23</h2>
                <span>Total Penggalang Dana</span>
            </div>
        </div>
        <div class="col-lg-3 col-6 mb-3">
            <div class="total-card-default d-flex align-items-center justify-content-center flex-column">
                <h2 class="fw-bold">20</h2>
                <span>Total Penggalang Dana(Approve)</span>
            </div>
        </div>
        <div class="col-lg-3 col-6 mb-3">
            <div class="total-card-default d-flex align-items-center justify-content-center flex-column">
                <h2 class="fw-bold">03</h2>
                <span>Total Penggalang Dana(Wait Approve)</span>
            </div>
        </div>
        <div class="col-lg-3 col-6 mb-3">
            <div class="total-card-default d-flex align-items-center justify-content-center flex-column">
                <h2 class="fw-bold">12</h2>
                <span>Total Penggalang Dana(Success)</span>
            </div>
        </div>
        <div class="col-lg-6 col-6 mb-3">
            <div class="total-card-default d-flex align-items-center justify-content-center flex-column">
                <h2 class="fw-bold">23</h2>
                <span>Total Blogs / Artikel</span>
            </div>
        </div>
        <div class="col-lg-6 col-6 mb-3">
            <div class="total-card-default d-flex align-items-center justify-content-center flex-column">
                <h2 class="fw-bold">16788</h2>
                <span>Total Views Blogs / Artikel</span>
            </div>
        </div>

        {{-- List Penggalangan Dana --}}
        <div class="col-lg-6 mb-3">
            <div class="total-card-default-list position-relative">
                <h5 class="mb-4 text-start fw-bold">List Penggalang Dana (Approval)</h5>
                <table class="table">
                    <thead>
                        <tr>
                        <th class="fw-bold" scope="col">No.</th>
                        <th class="fw-bold" scope="col">Nama Penggalang Dana</th>
                        <th class="fw-bold" scope="col">Total Dana</th>
                        <th class="fw-bold" scope="col">Total Dana Terkumpul</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for($i = 1;$i < 5;$i++)
                            <tr>
                                <th scope="row">{{ $i }}</th>
                                <td>Masjid Jami {{ $i }}</td>
                                <td>Rp. 200.000.000</td>
                                <td>Rp. 123.198.000</td>
                            </tr>
                        @endfor
                    </tbody>
                </table>
                <a class="position-absolute nav-link fw-bold zakatii-color" href="#" style="left: 42%;bottom:20px">Lihat Semua</a>
            </div>
        </div>
        <div class="col-lg-6 mb-3">
            <div class="total-card-default-list position-relative">
                <h5 class="mb-4 text-start fw-bold">List Penggalang Dana (Wait Approval)</h5>
                <table class="table">
                    <thead>
                        <tr>
                        <th class="fw-bold" scope="col">No.</th>
                        <th class="fw-bold" scope="col">Nama Penggalang Dana</th>
                        <th class="fw-bold" scope="col">Total Dana</th>
                        <th class="fw-bold" scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for($i = 1;$i < 5;$i++)
                            <tr>
                                <th scope="row">{{ $i }}</th>
                                <td>Masjid Jami {{ $i }}</td>
                                <td>Rp. 200.000.000</td>
                                <td><span style="color: #FFC700">Waiting</span></td>
                            </tr>
                        @endfor
                    </tbody>
                </table>
                <a class="position-absolute nav-link fw-bold zakatii-color" href="#" style="left: 42%;bottom:20px">Lihat Semua</a>
            </div>
        </div>
        {{-- End List Penggalangan Dana --}}
        {{-- Donatur Teratas --}}
        <div class="col-lg-6 mb-3">
            <div class="total-card-default-list position-relative">
                <h5 class="mb-4 text-start fw-bold">List Donatur Teratas</h5>
                <table class="table">
                    <thead>
                        <tr>
                        <th class="fw-bold" scope="col">No.</th>
                        <th class="fw-bold" scope="col">Nama Donatur</th>
                        <th class="fw-bold" scope="col">Total Dana</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for($i = 1;$i < 5;$i++)
                            <tr>
                                <th scope="row">{{ $i }}</th>
                                <td>Ahmad Jaelani {{ $i }}</td>
                                <td>Rp. 200.000.000</td>
                            </tr>
                        @endfor
                    </tbody>
                </table>
                <a class="position-absolute nav-link fw-bold zakatii-color" href="#" style="left: 42%;bottom:20px">Lihat Semua</a>
            </div>
        </div>
        {{-- End List Penggalangan Dana --}}
        {{-- Penggalangan Dana Teratas --}}
        <div class="col-lg-6 mb-3">
            <div class="total-card-default-list position-relative">
                <h5 class="mb-4 text-start fw-bold">Penggalangan Dana Teratas</h5>
                <table class="table">
                    <thead>
                        <tr>
                        <th class="fw-bold" scope="col">No.</th>
                        <th class="fw-bold" scope="col">Nama Penggalang Dana</th>
                        <th class="fw-bold" scope="col">Total Dana</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for($i = 1;$i < 5;$i++)
                            <tr>
                                <th scope="row">{{ $i }}</th>
                                <td>Masjid Jami {{ $i }}</td>
                                <td>Rp. 200.000.000</td>
                            </tr>
                        @endfor
                    </tbody>
                </table>
                <a class="position-absolute nav-link fw-bold zakatii-color" href="#" style="left: 42%;bottom:20px">Lihat Semua</a>
            </div>
        </div>
        {{-- End Penggalangan Dana Teratas --}}
    </div>