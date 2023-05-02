@include('partial.admin')

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
              <form action="/insertdata" method="POST" enctype="multipart/form-data">
              @csrf
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Gambar Voucher</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" id="gambar" name="gambar" accept="image/*" >
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Nama Voucher</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_voucher" required placeholder="Nama Voucher" value="{{ old('nama_voucher') }}">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Kode</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="kode" required placeholder="Kode" value="{{ old('kode') }}">
                  </div>
                </div>

                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Deskripsi</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="deskripsi" id="deskripsi" required placeholder="Deskripsi" value="{{ old('deskripsi') }}">
                      <input type="hidden" id="status" name="status" value="Menunggu">
                      <input type="hidden" name="toko" id="toko" value="{{ Auth::user()->tokos->id }}">

                    </div>
                  </div>
                  <div class="row mb-3">
                  <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                      <div class="col-sm-10">
                        <select value="" required id="kategori" name="kategori" class="form-select">
                    @foreach ($kategori as $kategoris)
                    <option value="{{ $kategoris->id }}"@if (old('kategori') == $kategoris->id)
                        selected
                    @endif>{{ $kategoris->Kategori }}</option>
                    @endforeach


                    </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Masa Kadaluarsa</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" name="masa_kadaluarsa" id="masa_kadaluarsa" required value="{{ old('masa_kadaluarsa') }}">
                    </div>
                  </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Syarat & Ketentuan</label>
                    <div class="col-sm-10">
                      <textarea name="syarat" id="syarat" cols="30" rows="5" class="form-control">{{ old('syarat') }}</textarea>
                    </div>
                    <p><center>JIKA SYARAT DAN KETERANGAN INGIN SEPERTI LIST HARAP GUNAKANAN "," </center></p>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Kuota</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" name="kuota" id="kuota" required placeholder="Kuota" value="{{ old('kuota') }}">
                    </div>
                  </div>
                <div class="row mb-3">
                  <div class="col-sm-10">
                    <button  type="submit" class="btn btn-primary">Simpan Data</button>
                    <a href="/datavoucher" type="submit" class="btn btn-danger">Kembali</a>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>
          @if ($errors->has('nama_voucher'))
                <div class="alert alert-danger" role="alert">
                    <i class="bi bi-x-lg"></i> {{ $errors->first('nama_voucher') }}
                   </div>
                @endif
                @if ($errors->has('deskripsi'))
                <div class="alert alert-danger" role="alert">
                    <i class="bi bi-x-lg"></i> {{ $errors->first('deskripsi') }}
                   </div>
                @endif
                @if ($errors->has('kategori'))
                <div class="alert alert-danger" role="alert">
                    <i class="bi bi-x-lg"></i> {{ $errors->first('kategori') }}
                   </div>
                @endif
                @if ($errors->has('kuota'))
                <div class="alert alert-danger" role="alert">
                    <i class="bi bi-x-lg"></i> {{ $errors->first('kuota') }}
                   </div>
                @endif
                @if ($errors->has('gambar'))
                <div class="alert alert-danger" role="alert">
                    <i class="bi bi-x-lg"></i> {{ $errors->first('gambar') }}
                   </div>
                @endif
                @if ($errors->has('kode'))
                <div class="alert alert-danger" role="alert">
                    <i class="bi bi-x-lg"></i> {{ $errors->first('kode') }}
                   </div>
                @endif
                @if ($errors->has('syarat'))
                <div class="alert alert-danger" role="alert">
                    <i class="bi bi-x-lg"></i> {{ $errors->first('syarat') }}
                   </div>
                @endif
                @if ($errors->has('masa_kadaluarsa'))
                <div class="alert alert-danger" role="alert">
                    <i class="bi bi-x-lg"></i> {{ $errors->first('masa_kadaluarsa') }}
                   </div>
                @endif



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
