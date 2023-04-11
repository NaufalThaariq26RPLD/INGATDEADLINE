@include('partial.sidebar-navbar')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Toko</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
          <li class="breadcrumb-item active">Data Toko</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">

            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">
                <div class="card-body">
                  <h5 class="card-title">Data Toko</h5>
                  <a class="btn btn-primary mb-2" href="/tambahtoko" type="button">Tambah Data +</a>
                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Toko</th>
                        <th scope="col">Logo Toko</th>
                        <th scope="col">Link Website Toko</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                        @php
                            $no=0;
                        @endphp
                        @foreach ($toko as $table)
                        <tr>
                            <th scope="row"><a href="#">{{ ++$no }}</a></th>
                            <td>{{ $table->nama_toko }}</td>
                            <td><div class="image-container"><img class="image" src="{{ asset('logotoko/'.$table->logo) }}" style="width:100px; object-fit: cover"></div></td>
                            <td>{{ $table->link_website }}</td>
                            <td><a href="/edittoko/{{ $table->id }}" type="button" class="btn btn-success" ><i class="bi bi-pencil"></i> Edit Data</a><br><a href="/hapustoko/{{ $table->id }}" type="button" class="btn btn-danger mt-2"><i class="bi bi-x-lg"></i> Hapus Data</a></td>

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

</body>

</html>
