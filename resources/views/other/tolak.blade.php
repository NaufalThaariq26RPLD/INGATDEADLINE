@include('partial.sidebar-navbar')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Validasi Data Voucher</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
          <li class="breadcrumb-item active">Validasi Data Voucher</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">

            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">
                <div class="card-body">
                  <h5 class="card-title">Validasi Voucher</h5>
                  <form action="/updatetolak/{{ $data->id }}" method="post" >
                    @csrf
                    <input type="hidden" name="status" id="status" value="Ditolak">
                    <label for="keterangan" class="mb-2">Alasan Penolakan</label>
                    <textarea name="keterangan" id="keterangan"  class="form-control"></textarea>
                    <button type="submit" class="btn btn-primary mt-2">Submit</button>
                  </form>

                </div>

              </div>
            </div><!--End Recent Sales*-->


          <!-- End Left side columns -->


      </div>
    </section>

  </main><!-- End #main -->



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
