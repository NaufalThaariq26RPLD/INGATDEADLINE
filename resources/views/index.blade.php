@include('partial.sidebar-navbar')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Halaman utama</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                <li class="breadcrumb-item active">Halaman utama</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">

                    <!-- Sales Card -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card info-card sales-card">

                            <div class="card-body">
                                <h5 class="card-title"> Kategori </h5>

                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-cart"></i>
                                    </div>
                                    <div class="ps-3">
                                        @php
                                            $no1 = 0;
                                            $no2 = 0;
                                            $no3 = 0;
                                            $no4 = 0;
                                        @endphp
                                        @foreach ($kategori as $kategoris)
                                            @php
                                                ++$no1;
                                            @endphp
                                        @endforeach
                                        <h6>{{ $no1 }}</h6>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Sales Card -->

                    <!-- Revenue Card -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card info-card sales-card">

                            <div class="card-body">
                                <h5 class="card-title"> Voucher </h5>

                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-ticket-perforated"></i>
                                    </div>
                                    <div class="ps-3">
                                        @foreach ($voucher as $vouchers)
                                            @php
                                                ++$no2;
                                            @endphp
                                        @endforeach
                                        <h6>{{ $no2 }}</h6>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Revenue Card -->

                    <!-- Customers Card -->
                    <div class="col-lg-3">

                        <div class="card info-card sales-card">

                            <div class="card-body">
                                <h5 class="card-title">User </h5>

                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="ps-3">
                                        @foreach ($user as $users)
                                            @php
                                                ++$no3;
                                            @endphp
                                        @endforeach
                                        <h6>{{ $no3 }}</h6>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div><!-- End Customers Card -->

                    <div class="col-lg-3">

                        <div class="card info-card sales-card">

                            <div class="card-body">
                                <h5 class="card-title">Toko </h5>

                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-shop"></i>
                                    </div>
                                    <div class="ps-3">
                                        @foreach ($toko as $tokos)
                                            @php
                                                ++$no4;
                                            @endphp
                                        @endforeach
                                        <h6>{{ $no4 }}</h6>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div><!-- End Customers Card -->
                </div>
            </div>

            <!-- Recent Sales -->
            <div class="col-12">
                <div class="card recent-sales overflow-auto">
                    <div class="card-body">
                        <h5 class="card-title">Jumlah voucher pertoko</h5>

                        <table class="table table-borderless datatable">
                            <thead>
                                <tr class="text-center">
                                    <th scope="col" class="text-center">Nama Toko</th>
                                    <th scope="col" class="text-center"></i>jumlah voucher</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 0;
                                    $no1 = 0;
                                @endphp
                                @foreach ($toko as $row)
                                    <tr>
                                        <td class="text-center">{{ $row->nama_toko }}</td>
                                        {{-- <th scope="row" class="text-center">{{ $row->vouchers->voucher }}</th> --}}
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div><!-- End Recent Sales -->
        </div>
    </section>

</main><!-- End #main -->


<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/chart.js/chart.umd.js"></script>
<script src="assets/vendor/echarts/echarts.min.js"></script>
<script src="assets/vendor/quill/quill.min.js"></script>
<script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="assets/vendor/tinymce/tinymce.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>
        