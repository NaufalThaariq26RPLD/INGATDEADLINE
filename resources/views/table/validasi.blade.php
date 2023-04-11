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
                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Voucher</th>
                        <th scope="col">Deskripsi Voucher</th>
                        <th scope="col">Kode</th>
                        <th scope="col">Gambar Voucher</th>
                        <th scope="col">Toko</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Masa Berlaku</th>
                        <th scope="col">Status</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                        @php
                            $no=0;
                        @endphp
                        @foreach ($voucher as $table)
                        <tr>
                            <th scope="row">{{ ++$no }}</th>
                            <td>{{ $table->nama_voucher }}</td>
                            <td style="max-width:100px ;">{{ $table->deskripsi }}</td>
                            <td>{{ $table->kode }}</td>
                            <td><div class="image-container"><img class="image" src="{{ asset('gambarvoucher/'.$table->gambar) }}" style="width: 100px; object-fit: cover"></div></td>
                            <td>{{ $table->tokos->nama_toko }}</td>
                            <td>{{ $table->kategoris->Kategori }}</td>
                            <td>{{ $table->masa_kadaluarsa }}</td>
                            <td><span class="badge rounded-pill text-bg-warning">{{ $table->status }}</span></td>
                            <td><a href="/konfirmasi/{{ $table->id }}/Dikonfirmasi" type="button" class="btn btn-success mt-2"><i class="bi bi-check-lg"></i> Konfirmasi Voucher</a>
                                <button type="button" class="btn btn-danger mt-2" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $table->id }}">
                                    <i class="bi bi-x-lg"></i> Tolak Voucher
                                  </button></td>
                          </tr>
                          <div class="modal fade" id="exampleModal{{ $table->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h1 class="modal-title fs-5" id="exampleModalLabel">Masukkan Alasan Penolakan</h1>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="/updatetolak/{{ $table->id }}" method="post">
                                        @csrf
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <input type="hidden" name="status" id="status" value="Ditolak">
                                                <label for="" class="fw-bold">Alasan Penolakan</label>
                                                <textarea name="keterangan" id="keterangan" cols="30" rows="5"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-primary">Submit</button>
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

            <!-- Modal -->

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
