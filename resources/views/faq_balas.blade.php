@include('partial.sidebar-navbar')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>FAQ</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
          <li class="breadcrumb-item active">FAQ</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">

            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">
                <div class="card-body">
                  <h5 class="card-title">FAQ</h5>
                  <div>
                    <form action="/faqupdate/{{ $data->id }}" method="post">
                      @csrf
                      <input type="hidden" name="status" id="status" value="Dikonfirmasi">
                      <div class="form-group">
                        <label for="question">Pertanyaan</label>
                        <textarea class="form-control" cols="30" rows="4">{{ $data->pertanyaan }}</textarea>
                      </div>
                      <div class="form-group" style="margin-top: 5px; margin-bottom: 10px">
                        <label for="Answer">Answer</label>
                        <textarea class="form-control" name="answer" id="answer" cols="30" rows="4"></textarea>
                      </div>
                      @if ($errors->has('answer'))
                      <div class="alert alert-danger" role="alert">
                          <i class="bi bi-x-lg"></i> {{ $errors->first('answer') }}
                         </div>
                      @endif
                      <button type="submit" class="btn btn-primary">Submit</button>
                      <a href="/faqs" type="button" class="btn btn-danger">Kembali</a>
                    </form>
                  </div>

                </div>

              </div>
            </div><!--End Recent Sales*-->


          <!-- End Left side columns -->


      </div>
    </section>

  </main><!-- End #main -->







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
