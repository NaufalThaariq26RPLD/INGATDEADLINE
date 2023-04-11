@include('partial.admin')

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
                    <div class="col-lg-4 col-md-8">
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
                    <div class="col-lg-4 col-md-8">
                        <div class="card info-card sales-card">

                            <div class="card-body">
                                <h5 class="card-title"> Voucher </h5>

                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="ri-coupon-3-line"></i>
                                    </div>
                                    <div class="ps-3">
                                        @foreach ($voucher as $data)
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
                    <div class="col-lg-4 col-md-8">

                        <div class="card info-card sales-card">

                            <div class="card-body">
                                <h5 class="card-title">Pengguna</h5>

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
                </div>
            </div>


            <!-- Reports -->
            <div class="col-12">
                <div class="card">

                    <div class="card-body">
                        <h5 class="card-title">laporan</h5>

                        <!-- Line Chart -->
                        <div id="container"></div>
                        <!-- End Line Chart -->

                    </div>

                </div>
            </div><!-- End Reports -->
            <!-- Recent Sales -->
            <div class="col-12">
                <div class="card recent-sales overflow-auto">
                    <div class="card-body">
                        <h5 class="card-title">Jumlah Voucher</h5>

                        <table class="table table-borderless datatable">
                            <thead>
                                <tr class="text-center">
                                    <th scope="col">No</th>
                                    <th scope="col">Kategori</th>
                                    <th scope="col">Jumlah voucher</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 0;
                                @endphp

                                <ul>
                                    @foreach ($kategori as $row)
                                        @php
                                            $count = App\Models\Voucher::where('kategori', $row->Kategori)->count();
                                        @endphp
                                        <tr>
                                            <th scope="row"><a href="#">{{ ++$no }}</a></th>
                                            <td>{{ $row->Kategori }}</td>
                                            <td>{{ $count }}</td>
                                        </tr>
                                    @endforeach
                                </ul>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div><!-- End Recent Sales -->

            <!-- News & Updates Traffic -->
            <div class="col-12">
                <div class="card recent-sales overflow-auto">
                    <div class="card-body">
                        <h5 class="card-title">Voucher Baru Diupload</h5>

                        <table class="table table-borderless datatable">
                            <thead>
                                <tr class="text-center">
                                    <th scope="col">No</th>
                                    <th scope="col">Gambar</th>
                                    <th scope="col">Nama voucher</th>
                                    <th scope="col">Kategori</th>
                                    <th scope="col">Keterangan</th>
                                    <th scope="col">Masa berlaku</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 0;
                                    $no1 = 0;
                                @endphp
                                @foreach ($voucher as $row)
                                    <tr>
                                        <th scope="row">{{ ++$no }}</th>
                                        <td>
                                            <div class="image-container"><img class="image"
                                                    src="{{ asset('gambarvoucher/' . $row->gambar) }} " style="width: 100px; object-fit: cover"></div>
                                        </td>
                                        <td>{{ $row->nama_voucher }}</td>
                                        <td>{{ $row->kategori }}</td>
                                        <td>{{ $row->deskripsi }}</td>
                                        <td>{{ $row->masa_kadaluarsa }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- End Right side columns -->

        </div>
    </section>

</main><!-- End #main -->


<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/chart.js/chart.umd.js') }}"></script>
<script src="{{ asset('assets/vendor/echarts/echarts.min.js') }}"></script>
<script src="{{ asset('assets/vendor/quill/quill.min.js') }}"></script>
<script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
<script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>

<script>
    // Create the chart
    Highcharts.chart('container', {
        chart: {
            type: 'pie'
        },
        title: {
            text: 'Data Voucher',
            align: 'left'
        },

        accessibility: {
            announceNewData: {
                enabled: true
            },
            point: {
                valueSuffix: '0'
            }
        },

        plotOptions: {
            series: {
                dataLabels: {
                    enabled: true,
                    format: '{point.name}: {point.y:.1f}'
                }
            }
        },

        tooltip: {
            headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
            pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}</b> of total<br/>'
        },

        series: [{
            name: 'kategori',
            colorByPoint: true,
            data: [{
                    name: 'Baju',
                    y: 61.04,
                    drilldown: 'Baju'
                },
                {
                    name: 'Jaket',
                    y: 9.47,
                    drilldown: 'Jaket'
                },
                {
                    name: 'Hoodie',
                    y: 9.32,
                    drilldown: 'Hoodie'
                },
                {
                    name: 'Celana',
                    y: 8.15,
                    drilldown: 'Celana'
                }
            ]
        }],
        drilldown: {
            series: [{
                    name: 'top up',
                    id: 'top up',
                    data: [
                        [
                            'v97.0',
                            36.89
                        ],
                        [
                            'v96.0',
                            18.16
                        ],
                        [
                            'v95.0',
                            0.54
                        ],
                        [
                            'v94.0',
                            0.7
                        ],
                        [
                            'v93.0',
                            0.8
                        ],
                        [
                            'v92.0',
                            0.41
                        ],
                        [
                            'v91.0',
                            0.31
                        ],
                        [
                            'v90.0',
                            0.13
                        ],
                        [
                            'v89.0',
                            0.14
                        ],
                        [
                            'v88.0',
                            0.1
                        ],
                        [
                            'v87.0',
                            0.35
                        ],
                        [
                            'v86.0',
                            0.17
                        ],
                        [
                            'v85.0',
                            0.18
                        ],
                        [
                            'v84.0',
                            0.17
                        ],
                        [
                            'v83.0',
                            0.21
                        ],
                        [
                            'v81.0',
                            0.1
                        ],
                        [
                            'v80.0',
                            0.16
                        ],
                        [
                            'v79.0',
                            0.43
                        ],
                        [
                            'v78.0',
                            0.11
                        ],
                        [
                            'v76.0',
                            0.16
                        ],
                        [
                            'v75.0',
                            0.15
                        ],
                        [
                            'v72.0',
                            0.14
                        ],
                        [
                            'v70.0',
                            0.11
                        ],
                        [
                            'v69.0',
                            0.13
                        ],
                        [
                            'v56.0',
                            0.12
                        ],
                        [
                            'v49.0',
                            0.17
                        ]
                    ]
                },
                {
                    name: 'pakaian',
                    id: 'pakaian',
                    data: [
                        [
                            'v15.3',
                            0.1
                        ],
                        [
                            'v15.2',
                            2.01
                        ],
                        [
                            'v15.1',
                            2.29
                        ],
                        [
                            'v15.0',
                            0.49
                        ],
                        [
                            'v14.1',
                            2.48
                        ],
                        [
                            'v14.0',
                            0.64
                        ],
                        [
                            'v13.1',
                            1.17
                        ],
                        [
                            'v13.0',
                            0.13
                        ],
                        [
                            'v12.1',
                            0.16
                        ]
                    ]
                },
                {
                    name: 'furniture',
                    id: 'furniture',
                    data: [
                        [
                            'v97',
                            6.62
                        ],
                        [
                            'v96',
                            2.55
                        ],
                        [
                            'v95',
                            0.15
                        ]
                    ]
                },
                {
                    name: 'penginapan',
                    id: 'penginapan',
                    data: [
                        [
                            'v96.0',
                            4.17
                        ],
                        [
                            'v95.0',
                            3.33
                        ],
                        [
                            'v94.0',
                            0.11
                        ],
                        [
                            'v91.0',
                            0.23
                        ],
                        [
                            'v78.0',
                            0.16
                        ],
                        [
                            'v52.0',
                            0.15
                        ]
                    ]
                }
            ]
        }
    });
</script>
<!-- Template Main JS File -->
<script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
