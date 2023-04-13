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
                                <h5 class="card-title">Pengunjung </h5>

                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="ps-3">
                                        @foreach ($toko as $tokos)
                                            @php
                                                ++$no3;
                                            @endphp
                                        @endforeach
                                        <h6>{{ $toko->views }}</h6>

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
                        <style>
                            body {
                                font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
                            }
        
                            #chartdiv {
                                width: 550px;
                                height: 350px;
                                font-size: 11px;
                                border: 1px solid #eee;
                                float: left;
                            }
        
                            #legend {
        
                                border: 1px solid #eee;
                                margin-left: 10px;
                                float: left;
                            }
        
                            #legend .legend-item {
                                margin: 10px;
                                font-size: 15px;
                                font-weight: bold;
                                cursor: pointer;
                            }
        
                            #legend .legend-item .legend-value {
                                font-size: 12px;
                                font-weight: normal;
                                margin-left: 22px;
                            }
        
                            #legend .legend-item .legend-marker {
                                display: inline-block;
                                width: 12px;
                                height: 12px;
                                border: 1px solid #ccc;
                                margin-right: 10px;
                            }
        
                            #legend .legend-item.disabled .legend-marker {
                                opacity: 0.5;
                                background: #ddd;
                            }
                        </style>
                        <script src="https://cdn.amcharts.com/lib/4/core.js"></script>
                        <script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
                        <script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>
                        <div id="chartdiv"></div>
                        <div id="legend"></div>
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
                                            $count = App\Models\Voucher::where('kategori', $row->id)->count();
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
                        <h5 class="card-title">Voucher yang paling banyak dilihat</h5>

                        <table class="table table-borderless datatable">
                            <thead>
                                <tr class="text-center">
                                    <th scope="col">No</th>
                                    <th scope="col">Gambar</th>
                                    <th scope="col">Nama voucher</th>
                                    <th scope="col">Kategori</th>
                                    <th scope="col">Aksi</th>
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
                                            src="{{ asset('gambarvoucher/' . $row->gambar) }}" style="width: 100px; object-fit: cover"></div>
                                        </td>
                                        <td>{{ $row->nama_voucher }}</td>
                                        <td>{{ $row->kategori }}</td>
                                        <td><i class="bi bi-eye"></i>{{ $row->views}}</td>
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
<script>
    am4core.useTheme(am4themes_animated);

    // Create chart instance
    var chart = am4core.create("chartdiv", am4charts.PieChart);

    // Add data
    chart.data = [{
        "country": "Voucher Yang Diterima",
        "litres": {{ $diterima }},
        "color": am4core.color("#52D726")
    }, {
        "country": "Voucher Yang Masih Menunggu",
        "litres": {{ $pending }},
        "color": am4core.color("#FFEC00")
    }, {
        "country": "Voucher Yang Ditolak",
        "litres": {{$ditolak}},
        "color": am4core.color("#FF0000")
    }];

    // Add and configure Series
    var pieSeries = chart.series.push(new am4charts.PieSeries());
    pieSeries.dataFields.value = "litres";
    pieSeries.dataFields.category = "country";
    pieSeries.slices.template.propertyFields.fill = "color";
    pieSeries.labels.template.disabled = true;

    chart.radius = am4core.percent(95);

    // Create custom legend
    chart.events.on("ready", function(event) {
        // populate our custom legend when chart renders
        chart.customLegend = document.getElementById('legend');
        pieSeries.dataItems.each(function(row, i) {
            var color = chart.colors.getIndex(i);
            var percent = Math.round(row.values.value.percent * 100) / 100;
            var value = row.value;
            legend.innerHTML += '<div class="legend-item" id="legend-item-' + i +
                '" onclick="toggleSlice(' + i + ');" onmouseover="hoverSlice(' + i +
                ');" onmouseout="blurSlice(' + i + ');" style="color: ' + color +
                ';"><div class="legend-marker" style="background: ' + row.dataContext.color + '"></div>' + row
                .category + '<div class="legend-value">' + value + ' | ' + percent + '%</div></div>';
        });
    });

    function toggleSlice(item) {
        var slice = pieSeries.dataItems.getIndex(item);
        if (slice.visible) {
            slice.hide();
        } else {
            slice.show();
        }
    }

    function hoverSlice(item) {
        var slice = pieSeries.slices.getIndex(item);
        slice.isHover = true;
    }

    function blurSlice(item) {
        var slice = pieSeries.slices.getIndex(item);
        slice.isHover = false;
    }
        </script>

<!-- Template Main JS File -->
<script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
