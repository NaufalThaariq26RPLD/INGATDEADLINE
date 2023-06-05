@include('partial.admin')


<main id="main" class="main">



    <div class="pagetitle">
        <h1>Kategori</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Halaman utama</a></li>
                <li class="breadcrumb-item active">Kategori</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-6  w-100">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex" style="justify-content: space-between">
                            <h5 class="card-title">Data Voucher {{ request('search') == null ? $tittle : '' }}Kategori
                               </h5>
                        </div>


                        <div class="d-flex" style="justify-content: space-between">

                            <div class="d-flex">
                                <select name="" id="" style="padding: 6px; margin-right: 4px;">
                                    <option value="">5</option>
                                    <option value="">10</option>
                                    <option value="">20</option>
                                </select>

                            </div>

                            <form action="/kategoritoko" class="d-flex gap-3">
                            <div class="search-form">
                                <div class="form_group">
                                    <select class="form-select" style="width: 150px" name="search"
                                        aria-label="Default select example">
                                        <option data-dsplay="Category" value="">Kategori</option>
                                        @foreach ($kategori as $kategori)
                                            <option value="{{ $kategori->id }}"
                                                {{ request('search') === $kategori->id ? 'selected' : '' }}>
                                                {{ $kategori->Kategori }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                </div>

                                <div class="search-form">
                                    <div class="form_group">
                                        <select class="form-select" style="width: 150px" name="status" aria-label="Default select example">
                                            <option data-dsplay="Category" value="">Status</option>
                                                <option value="Dikonfirmasi">
                                                    Dikonfirmasi</option>
                                                <option value="Menunggu" >
                                                    Menunggu</option>
                                                <option value="Ditolak">
                                                    Ditolak</option>
                                        </select>
                                    </div>                       
                                </div>
                                <button type="submit" style="width: 40%" class="btn btn-primary">Cari</button>
                            </form>

                        </div>
                        <!-- Default Table -->
                        <table class="table table-borderless" id="datatable">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Gambar Voucher</th>
                                    <th scope="col">Nama voucher</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col">toko</th>
                                    <th scope="col">Kode</th>
                                    <th scope="col">Kategori</th>
                                    <th  scope="col">Status</th>
                                    <th scope="col">Masa Kadaluarsa</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 0;
                                @endphp
                                @foreach ($data as $row)
                                    <tr>
                                        <th scope="row">{{ ++$no }}</th>
                                        <td scope="row"><div class="image-container"><img class="image" src="{{ asset('gambarvoucher/'.$row->gambar) }}" style="width:100px; object-fit: cover"></div></td>
                                        <td>{{ $row->nama_voucher }}</td>
                                        <td>{{ $row->deskripsi }}</td>
                                        <td>{{ $row->tokos->nama_toko }}</td>
                                        <td>{{ $row->kode }}</td>
                                        <td>{{ $row->kategoris->Kategori }}</td>
                                        <td><span class=" badge @if ($row->status == "Dikonfirmasi")
                                            text-bg-success
                                        @endif
                                        @if ($row->status == "Menunggu")
                                            text-bg-warning
                                        @endif
                                        @if ($row->status == "Ditolak")
                                            text-bg-danger
                                        @endif">{{ $row->status }}</span></td>
                                        <td>{{ $row->masa_kadaluarsa }}</td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                        <!-- End Default Table Example -->
                    </div>
                </div>

            </div>
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