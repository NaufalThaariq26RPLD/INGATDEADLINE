@include('partial.admin')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Edit Tambah Data voucher</h1>

    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Edit Tambah Data Dibawah Sini</h5>

                    <!-- General Form Elements -->
                    <form action="/updatedata/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="gambar" class="col-sm-2 col-form-label">Gambar Voucher</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" id="gambar" name="gambar">
                                <div class="image-container mt-2"><img class="image"
                                        src="{{ asset('gambarvoucher/' . $data->gambar) }}"
                                        style="width: 100px; object-fit: cover"></div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="nama_voucher" class="col-sm-2 col-form-label">Nama voucher</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama_voucher" id="nama_voucher"
                                    value="{{ $data->nama_voucher }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Diskon</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="diskon" required placeholder="diskon" value="{{ $data->diskon }}">
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Link Toko</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="link" required placeholder="link" value="{{ $data->link }}">
                            </div>
                          </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Deskripsi</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="deskripsi" id="deskripsi"
                                    value="{{ $data->deskripsi }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                            <div class="col-sm-10">

                                <select required id="kategori" name="kategori" class="form-select">
                                    @foreach ($kategori as $kategoriss)
                                        <option value="{{ $kategoriss->id }}"
                                           @if ($data->kategori == $kategoriss->id)
                                            selected
                                           @endif>
                                            {{ $kategoriss->Kategori }}</option>
                                    @endforeach


                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Masa Kadaluarsa</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" name="masa_kadaluarsa" id="masa_kadaluarsa"
                                    required value="{{ $data->masa_kadaluarsa }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Syarat & Ketentuan</label>
                            <div class="col-sm-10">
                                <textarea name="syarat" id="syarat" cols="30" rows="5" class="form-control">{{ $data->syarat }}</textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Kuota</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="kuota" id="kuota" required
                                    placeholder="Kuota" value="{{ $data->kuota }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Simpan Data</button>
                                <a href="/panding" type="submit" class="btn btn-danger">Kembali</a>
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
<script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/chart.js/chart.umd.js') }}"></script>
<script src="{{ asset('assets/vendor/echarts/echarts.min.js') }}"></script>
<script src="{{ asset('assets/vendor/quill/quill.min.js') }}"></script>
<script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
<script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
