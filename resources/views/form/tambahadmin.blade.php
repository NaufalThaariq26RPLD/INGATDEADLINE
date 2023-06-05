@include('partial.sidebar-navbar')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Tambah Data Admin</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
          <li class="breadcrumb-item">Data Admin</li>
          <li class="breadcrumb-item active">Tambah Data Admin</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">

        @if ($errors->has('username'))
        <div class="alert alert-danger" role="alert">
            <i class="bi bi-x-lg"></i> {{ $errors->first('username') }}
           </div>
        @endif
        @if ($errors->has('password'))
        <div class="alert alert-danger" role="alert">
            <i class="bi bi-x-lg"></i> {{ $errors->first('password') }}
           </div>
        @endif
        @if ($errors->has('email'))
        <div class="alert alert-danger" role="alert">
            <i class="bi bi-x-lg"></i> {{ $errors->first('email') }}
           </div>
        @endif
        @if ($errors->has('toko'))
        <div class="alert alert-danger" role="alert">
            <i class="bi bi-x-lg"></i> {{ $errors->first('toko') }}
           </div>
        @endif
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Masukkan Data Admin Dibawah Sini</h5>

              <!-- General Form Elements -->
              <form action="/insertadmin" method="post" enctype="multipart/form-data" autocomplete="off">
                @csrf
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Username</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="username" id="username" placeholder="Masukkan Username" value="{{ old('username') }}" autofocus  autocomplete="new-username">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan Email" value="{{ old('email') }}" autocomplete="new-email">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan Password" autocomplete="new-password">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="toko" class="col-sm-2 col-form-label">Toko</label>
                  <div class="col-sm-10">
                    <select class="form-select" id="toko" name="toko" required>
                        <option selected value="">Toko</option>
                        @foreach ($toko as $tokos)
                        <option value="{{ $tokos->id }}" {{ old('toko') == $tokos->id ? 'selected' : '' }}>{{ $tokos->nama_toko }} </option>
                        @endforeach


                      </select>
                  </div>
                </div>



                <div class="row mb-3">

                  <div class="col-sm-10">

                    <button type="submit" class="btn btn-primary">Submit Data</button>
                    <a href="/table_admin" class="btn btn-danger">Kembali</a>

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
