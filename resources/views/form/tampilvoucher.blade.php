@include('partial.sidebar-navbar')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Tambah Data voucher</h1>

    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">


          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Masukkan Tambah Data Dibawah Sini</h5>

              <!-- General Form Elements -->
              <form action="/updatevoucher/{{ $data->id }}" method="post" enctype="multipart/form-data">
                @csrf
                
                <div class="row mb-3">
                  <label for="gambar" class="col-sm-2 col-form-label">Gambar Voucher</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" id="gambar" name="gambar">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="nama_voucher" class="col-sm-2 col-form-label">Nama voucher</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_voucher" id="nama_voucher">
                  </div>
                </div>
                <div class="row mb-3">
                    <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="deskripsi" id="deskripsi">
                    </div>
                  </div>
                <div class="row mb-3">
                    <label for="deskripsi" class="col-sm-2 col-form-label">Kode</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="deskripsi" id="deskripsi">
                    </div>
                  </div>


                <div class="row mb-3">

                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                    <a href="/data_voucher" type="submit" class="btn btn-danger">Kembali</a>
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
