@include('partial.admin')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Data Voucher Kategori {{ $title }}</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Halaman utama</a></li>
                <li class="breadcrumb-item active">Kategori</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-6  w-100">
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Data Voucher Kategori {{ $title }}</h5>
                        <div class="row">

                            <div class="card-body">
                                <div class="table-responsive text-center">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <table class="table table-borderless datatable">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Gambar Voucher</th>
                                                    <th scope="col">Nama Voucher</th>
                                                    <th scope="col">Keterangan</th>
                                                    <th scope="col">Kode</th>
                                                    <th scope="col">Kategori</th>
                                                    <th scope="col">Stok</th>
                                                    <th scope="col">Status</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $no = 0;
                                                @endphp

                                                @foreach ($data as $index => $row)
                                                    <tr>
                                                        <th scope="col">{{ ++$no }}</th>
                                                        <td>
                                                            <div class="image-container"><img class="image"
                                                                    src="{{ asset('storage/' . $row->gambar) }}">
                                                            </div>
                                                        </td>
                                                        <td>{{ $row->nama_voucher }}</td>
                                                        <td style="max-width: 150px;">{{ $row->deskripsi }}</td>
                                                        <td>{{ $row->kode }}</td>
                                                        <td>{{ $row->kategoris->Kategori }}</td>
                                                        <td>{{ $row->kuota }}</td>
                                                        <td>@if ($row->status == "Menunggu")
                                                            <span
                                                                class="badge text-bg-warning">{{ $row->status }}</span>
                                                        @endif
                                                        @if ($row->status == "Ditolak")
                                                            <span
                                                                class="badge text-bg-danger">{{ $row->status }}</span>
                                                        @endif
                                                        @if ($row->status == "Dikonfirmasi")
                                                            <span
                                                                class="badge text-bg-success">{{ $row->status }}</span>
                                                        @endif
                                                        </td>
                                                        
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
<script>
    $('.delete').click(function() {
        var vaoucherid = $(this).attr('data-id');
        swal({
                title: "Anda Yakin Ingin Menghapus Ini?",
                text: "Once deleted, you will not be able to recover this imaginary file!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    window.location = "/delete/" + vaoucherid + ""
                    swal("Poof! Your imaginary file has been deleted!", {
                        icon: "success",
                    });
                } else {
                    swal("Your imaginary file is safe!");
                }
            });
    });
</script>
<script>
    @if (Session::has('success'))
        toastr.success("{{ Session::get('success') }}")
    @endif
</script>

</body>

</html>
