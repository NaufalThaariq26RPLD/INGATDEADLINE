@include('partial.sidebar-navbar')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Voucher</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
          <li class="breadcrumb-item active">Data Voucher</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">

            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">
                <div class="card-body">
                  <h5 class="card-title">Data Voucher Diterima</h5>
                  <table class="table table-borderless datatable">
                    <thead>
                      <tr></tr>
                        <th><input style="font-size: 20px;clear:" type="checkbox" name="" id="select_all_ids" class="form-check-input"></th>
                        <th scope="col">No</th>
                        <th scope="col">Nama Voucher</th>
                        <th scope="col">Deskripsi Voucher</th>
                        <th scope="col">Kode</th>
                        <th scope="col">Gambar Voucher</th>
                        <th scope="col">Toko</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Masa berlaku</th>

                        <th scope="col">Status</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                        @php
                            $no=0;
                            $no1=0;
                        @endphp
                        @foreach ($voucher as $table)
                        @php
                        $toko = App\Models\Toko::where('id', $table->toko)->first();
                        $kategori = App\Models\Kategori::where('id', $table->kategori)->first();
                        @endphp


                        <tr>
                            <th><input style="font-size: 20px" type="checkbox" name="ids" id="checkbox" class="form-check-input checkbox_ids" value="{{ $table->id }}"></th>
                            <th scope="row">{{ ++$no }}</th>
                            <td>{{ $table->nama_voucher }}</td>
                            <td >{{ $table->deskripsi }}</td>
                            <td>{{ $table->kode }}</td>
                            <td><div class="image-container"><img class="image" src="{{ asset('gambarvoucher/'.$table->gambar) }}" style="width: 100px; object-fit: cover"></div></td>
                            <td>@if($toko !== null)
                                {{ $toko->nama_toko }}</td>

                                @endif</td>
                            <td>{{ $kategori->Kategori }}</td>
                            <td>{{ $table->masa_kadaluarsa }}</td>
                            <td><span class="badge rounded-pill text-bg-success">{{{ $table->status }}}</span></td>
                            <td><a href="/deletevoucher/{{ $table->id }}" type="button" class="btn btn-danger mt-2"><i class="bi bi-x-lg"></i> Hapus Data</a></td>
                          </tr>
                        @endforeach

                    </tbody>
                  </table>

                </div>

              </div>
            </div><!--End Recent Sales*-->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">
                <div class="card-body">
                  <h5 class="card-title">Data Voucher Ditolak</h5>
                  <table class="table table-borderless datatable">
                    <thead>
                      <tr></tr>
                        <th><input style="font-size: 20px;clear:" type="checkbox" name="" id="select_all_ids" class="form-check-input"></th>
                        <th scope="col">No</th>
                        <th scope="col" >Nama Voucher</th>
                        <th scope="col">Deskripsi Voucher</th>
                        <th scope="col">Kode</th>
                        <th scope="col">Gambar Voucher</th>
                        <th scope="col">Toko</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Masa berlaku</th>
                        <th scope="col">Status</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($data2 as $table2)
                        @php
                        $toko2 = App\Models\Toko::where('id', $table2->toko)->first();
                        $kategori2 = App\Models\Kategori::where('id', $table2->kategori)->first();
                      @endphp
                        <tr id="voucher{{ $table2->id }}">
                            <th><input style="font-size: 20px" type="checkbox" name="ids" id="checkbox" class="form-check-input checkbox_ids" value="{{ $table2->id }}"></th>
                            <th scope="row">{{ ++$no1 }}</th>
                            <td>{{ $table2->nama_voucher }}</td>
                            <td >{{ $table2->deskripsi }}</td>
                            <td>{{ $table2->kode }}</td>
                            <td><div class="image-container "><img class="image" src="{{ asset('gambarvoucher/'.$table2->gambar) }}" style="width: 100px; object-fit: cover"></div></td>
                            <td>{{ $toko2->nama_toko }}</td>
                            <td>{{ $kategori2->Kategori }}</td>
                            <td>{{ $table2->masa_kadaluarsa }}</td>

                            <td><span class="badge rounded-pill text-bg-danger">{{ $table2->status }}</span></td>
                            <td><a href="/deletevoucher/{{ $table2->id }}" type="button" class="btn btn-danger mt-2"><i class="bi bi-x-lg"></i> Hapus Data</a><br><button type="button" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $table2->id }}">
                                <i class="bi bi-pip"></i> Lihat Alasan Penolakan
                              </button></td>

                          </tr>
                          <div class="modal fade" id="exampleModal{{ $table2->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h1 class="modal-title fs-5" id="exampleModalLabel">Alasan Penolakan</h1>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <textarea cols="30" rows="5" readonly disabled>{{ $table2->keterangan }}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>

                                </form>
                                        </div>
                                    </div>
                                </div>
                        </div>
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
