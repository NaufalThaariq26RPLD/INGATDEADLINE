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
                  <h5 class="card-title">FAQ Belum Dibalas</h5>

                @foreach ($data as $data)

                    <div class="alert alert-info" role="alert" style="display: flex; justify-content: space-between; position: relative; gap: 0px 10px" >
                      <div >
                      <h1 style="font-size: 12px; font-weight: bold">From : {{ $data->username }}</h1>
                      <h1 style="font-size: 12px; font-weight: bold">Email : {{ $data->email }}</h1>
                      {{ $data->pertanyaan }}
                    </div>

                      <a href="/faqtampil/{{ $data->id }}" class="alert-link" style="font-weight:bold; color: black; margin-left: auto; display: inline-block; margin-top: auto; margin-bottom: auto; width: 10%; float: right">Balas
                        <svg xmlns="http://www.w3.org/2000/svg" style="width: 10px" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/></svg> </a>
                    </div>

                @endforeach


                </div>

              </div>
            </div><!--End Recent Sales*-->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">
                <div class="card-body">
                  <h5 class="card-title">FAQ Dibalas</h5>

                @foreach ($data2 as $datas)

                    <div class="alert alert-info" role="alert" style="display: flex; justify-content: space-between; position: relative; gap: 0px 10px">
                      <div >
                      <h1 style="font-size: 12px; font-weight: bold">From : {{ $datas->username }}</h1>
                      <h1 style="font-size: 12px; font-weight: bold">Email : {{ $datas->email }}</h1>
                      <h1 style="font-size: 12px; font-weight: bold">Pertanyaan : {{ $datas->pertanyaan }}</h1>
                      <h1 style="font-size: 12px; font-weight: bold">Balasan : {{ $datas->answer }}</h1>
                    </div>

                    </div>

                @endforeach


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
