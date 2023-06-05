@include('partial.sidebar-navbar')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Tambah Data Kategori</h1>

    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        @if ($errors->has('Kategori'))
        <div class="alert alert-danger" role="alert">
            <i class="bi bi-x-lg"></i> {{ $errors->first('kategori') }}

           </div>
        @endif

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Masukkan Data Dibawah Sini</h5>

              <!-- General Form Elements -->
              <form action="/insertkategori" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Kategori</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="kategori" id="kategori" placeholder="Masukkan Kategori">
                  </div>
                </div>


                <div class="row mb-3">

                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                    <a href="/kategori" type="submit" class="btn btn-danger">Kembali</a>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>



      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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
