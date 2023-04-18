@include('partial.sidebar-navbar')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />

<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Data User</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
          <li class="breadcrumb-item active">Data User</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">

            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">
                <div class="card-body">
                  <h5 class="card-title">Data User</h5>

                  <table class="table table-borderless datatable" id="myTable">
                    <thead>
                      <tr></tr>
                        <th scope="col">No</th>
                        <th scope="col">Email</th>
                        <th scope="col">Username</th>


                      </tr>
                    </thead>
                    <tbody>
                        @php
                            $no=0;
                        @endphp

                        @foreach ($data as $table)
                        <tr>
                            <th scope="row"><a href="#">{{ ++$no }}</a></th>
                            <td><a href="#" class="text-primary">{{ $table->email }}</a></td>
                            <td>{{ $table->username }}</td>

                          </tr>
                        @endforeach
                    </tbody>
                  </table>

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
  <script>
    let table = new DataTable('#myTable');
  </script>
</body>

</html>
