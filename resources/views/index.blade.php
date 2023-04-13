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
                                        @foreach ($data as $tokos)
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

            <!-- Reports -->
            <div class="col-12">
                <div class="card">

                    <div class="card-body">
                        <h5 class="card-title">Kategori</h5>
                        <div id="chartdiv"></div>
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
<script src="https://code.highcharts.com/highcharts.js"></script>

{{-- Chart --}}
<style>
    #chartdiv {
      width: 100%;
      height: 500px;
    }
    </style>
    
    <!-- Resources -->
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
    
    <!-- Chart code -->
    <script>
    am5.ready(function() {
    
    // Create root element
    // https://www.amcharts.com/docs/v5/getting-started/#Root_element
    var root = am5.Root.new("chartdiv");
    
    
    // Set themes
    // https://www.amcharts.com/docs/v5/concepts/themes/
    root.setThemes([
      am5themes_Animated.new(root)
    ]);
    
    
    // Create chart
    // https://www.amcharts.com/docs/v5/charts/xy-chart/
    var chart = root.container.children.push(am5xy.XYChart.new(root, {
      panX: true,
      panY: true,
      wheelX: "panX",
      wheelY: "zoomX",
      pinchZoomX: true
    }));
    
    // Add cursor
    // https://www.amcharts.com/docs/v5/charts/xy-chart/cursor/
    var cursor = chart.set("cursor", am5xy.XYCursor.new(root, {}));
    cursor.lineY.set("visible", false);
    
    
    // Create axes
    // https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
    var xRenderer = am5xy.AxisRendererX.new(root, { minGridDistance: 30 });
    xRenderer.labels.template.setAll({
      rotation: -90,
      centerY: am5.p50,
      centerX: am5.p100,
      paddingRight: 15
    });
    
    xRenderer.grid.template.setAll({
      location: 1
    })
    
    var xAxis = chart.xAxes.push(am5xy.CategoryAxis.new(root, {
      maxDeviation: 0.3,
      categoryField: "country",
      renderer: xRenderer,
      tooltip: am5.Tooltip.new(root, {})
    }));
    
    var yAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
      maxDeviation: 0.3,
      renderer: am5xy.AxisRendererY.new(root, {
        strokeOpacity: 0.1
      })
    }));
    
    
    // Create series
    // https://www.amcharts.com/docs/v5/charts/xy-chart/series/
    var series = chart.series.push(am5xy.ColumnSeries.new(root, {
      name: "Series 1",
      xAxis: xAxis,
      yAxis: yAxis,
      valueYField: "value",
      sequencedInterpolation: true,
      categoryXField: "country",
      tooltip: am5.Tooltip.new(root, {
        labelText: "{valueY}"
      })
    }));

    // Create custom legend
    chart.events.on("ready", function(event) {
        Series.dataItems.each(function(row, i) {
            var percent = Math.round(row.values.value.percent * 100) / 100;
            var value = row.value;
            legend.innerHTML += '<div class="legend-item" id="legend-item-' + i +
                '" onclick="toggleSlice(' + i + ');" onmouseover="hoverSlice(' + i +
                ');" onmouseout="blurSlice(' + i + ');" style="color: ' + color +
                ';"><div class="legend-marker" style="background: ' + row.dataContext.color + '"></div>' + row
                .category + '<div class="legend-value">' + value + ' | ' + percent + '%</div></div>';
        });
    });
    
    series.columns.template.setAll({ cornerRadiusTL: 5, cornerRadiusTR: 5, strokeOpacity: 0 });
    series.columns.template.adapters.add("fill", function(fill, target) {
      return chart.get("colors").getIndex(series.columns.indexOf(target));
    });
    
    series.columns.template.adapters.add("stroke", function(stroke, target) {
      return chart.get("colors").getIndex(series.columns.indexOf(target));
    });
    
    
    // Set data
    var data = [{
      country: " diterima",
      value: {{ $diterima }}
    }, {
      country: "masih menunggu",
      value: {{ $pending }}
    }, {
      country: "ditolak",
      value: {{ $ditolak }}
    }];

    function toggleSlice(item) {
        var slice = Series.dataItems.getIndex(item);
        if (slice.visible) {
            slice.hide();
        } else {
            slice.show();
        }
    }

    function hoverSlice(item) {
        var slice = Series.slices.getIndex(item);
        slice.isHover = true;
    }

    function blurSlice(item) {
        var slice = Series.slices.getIndex(item);
        slice.isHover = false;
    }

    xAxis.data.setAll(data);
    series.data.setAll(data);
    
    
    // Make stuff animate on load
    // https://www.amcharts.com/docs/v5/concepts/animations/
    series.appear(1000);
    chart.appear(1000, 100);
    
    }); // end am5.ready()
    </script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>
        