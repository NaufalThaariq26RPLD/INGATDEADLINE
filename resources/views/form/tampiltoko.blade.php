@include('partial.sidebar-navbar')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Update Data Toko</h1>

    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">


            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Masukkan Data Dibawah Sini</h5>
                    <!-- General Form Elements -->
                    <form action="/updatetoko/{{ $data->id }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Nama Toko</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama_toko" id="nama_toko"
                                    placeholder="Nama Toko" value="{{ $data->nama_toko }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputNumber" class="col-sm-2 col-form-label">Logo Toko</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" id="formFile" name="logo" id="logo"
                                    placeholder="Logo Toko">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Link Website Toko</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="link_website" id="link-website"
                                    placeholder="Link Website Toko" value="{{ $data->link_website }}">
                            </div>
                        </div>
                        @if ($errors->has('nama_toko'))
                            <div class="alert alert-danger" role="alert">
                                <i class="bi bi-x-lg"></i> {{ $errors->first('nama_toko') }}
                            </div>
                        @endif
                        @if ($errors->has('logo'))
                            <div class="alert alert-danger" role="alert">
                                <i class="bi bi-x-lg"></i> {{ $errors->first('logo') }}
                            </div>
                        @endif
                        @if ($errors->has('link_website'))
                            <div class="alert alert-danger" role="alert">
                                <i class="bi bi-x-lg"></i> {{ $errors->first('link_website') }}
                            </div>
                        @endif


                        <div class="row mb-3">

                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Simpan Data</button>
                                <a href="/data_toko" type="submit" class="btn btn-danger">Kembali</a>
                            </div>
                        </div>

                    </form><!-- End General Form Elements -->

                </div>
            </div>



        </div>
    </section>

</main><!-- End #main -->

<!-- ======= Footer ======= -->


<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="../assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../assets/vendor/chart.js/chart.umd.js"></script>
<script src="../assets/vendor/echarts/echarts.min.js"></script>
<script src="../assets/vendor/quill/quill.min.js"></script>
<script src="../assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="../assets/vendor/tinymce/tinymce.min.js"></script>
<script src="../assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="../assets/js/main.js"></script>

</body>

</html>
