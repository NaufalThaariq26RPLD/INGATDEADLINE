@include('partial.admin')

    <main id="main" class="main">

      <div class="pagetitle">
        <h1>Data Voucher Ditolak</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Halaman utama</a></li>
            <li class="breadcrumb-item active">Voucher</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->

      <section class="section">
        <div class="row">
          <div class="col-lg-6  w-100">
            <div class="card shadow mb-4">
              <div class="card-body">
              
                <h5 class="card-title">Data Voucher Ditolak</h5>
                <form action="/kategoritoko" class="d-flex gap-3">
                <div class="d-flex" style="justify-content: space-between">
                            <div class="search-form">
                                <div class="form_group">
                                    <select class="form-select" style="width: 150px" name="search"
                                        aria-label="Default select example">
                                        <option data-dsplay="Category" value="">Kategori</option>
                                        @foreach ($kategori as $kategori)
                                            <option value="{{ $kategori->id }}"
                                                {{ request('search') === $kategori->id ? 'selected' : '' }}>
                                                {{ $kategori->Kategori }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                </div>

                               
                                <button type="submit" style="width: 40%" class="btn btn-primary">Cari</button>
                            </form>
</div>

            <div class="card-body">
                <div class="table-responsive text-center">
                    <table class="table table-bordered" id="dataTable" width="100%"
                        cellspacing="0">
                        <table class="table table-borderless datatable">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Gambar Voucher</th>
                                    <th scope="col">Nama Voucher</th>
                                    <th scope="col">Keterangan</th>
                                    <th scope="col">Kategori</th>
                                    <th scope="col">Stok</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 0;
                                @endphp

                                @foreach ($data as $index => $row)
                                    <tr>
                                        <th scope="col">{{ ++$no }}</th>
                                        <td>
                                            <div class="image-container"><img class="image"
                                                    src="{{ asset('gambarvoucher/' . $row->gambar) }}" style="width: 100px; object-fit: cover">
                                            </div>
                                        </td>
                                        <td>{{ $row->nama_voucher }}</td>
                                        <td style="max-width: 150px;">{{ $row->deskripsi }}</td>
                                        <td>{{ $row->kategoris->Kategori }}</td>
                                        <td>{{ $row->kuota }}</td>
                                        <td><span
                                                class="badge text-bg-danger">{{ $row->status }}</span>
                                        </td>
                                        <td>
                                            <a href="/tampildata/{{ $row->id }}"
                                                class="btn btn-info"><i
                                                    class="bi bi-pencil-square"></i> Edit</a> |
                                            <a href="/delete/{{ $row->id }}"
                                                class="btn btn-danger delete"
                                                data-id="{{ $row->id }}"><i
                                                    class="bi bi-trash3-fill"></i> Hapus</a><br><button type="button" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $row->id }}">
                                                        <i class="bi bi-pip"></i> Lihat Alasan Penolakan
                                                      </button>
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="exampleModal{{ $row->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                            <textarea cols="30" rows="5" readonly disabled>{{ $row->keterangan }}</textarea>
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
                    </table>
                </div>
            </div>
              </div>
          </div>
      </div>
          </div>
        </div>

      </section>

    </main><!-- End #main -->

    <!-- <main id="main" class="main">

<div class="pagetitle">
  <h1>Voucher dikonfirmasi</h1>
</div>

<section class="section">
  <div class="row">
    <div class="col-lg-6  w-100">

      <div class="card">
        <div class="card-body">
            <h5 class="card-title">Voucher terlaris</h5>
            <table class="table table-borderless datatable">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Kategori</th>
                  <th scope="col">Jumlah voucher</th>
                  <th scope="col">Total voucher yang digunakan</th>
                </tr>
              </thead>
              <tbody>
               {{-- @php
               $no = 0;
               @endphp

               @foreach ($data as $row)
               <tr>
                <th scope="col">{{ ++$no }}</th>
                <td>{{ $row->kategori }}</td>
                <td>{{ $row->jumlah_voucher }}</td>
                <td>{{ $row->voucher_digunakan }}</td>
               </tr>
               @endforeach --}}
              </tbody>
            </table>
          </div>
      </div>
    </div>
  </div>

</section>

</main> -->


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
    $('.delete').click( function(){
        var vaoucherid = $(this).attr('data-id');
        swal({
  title: "Anda Yakin Ingin Menghapus Ini?",
  text: "Once deleted, you will not be able to recover this imaginary file!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    window.location = "/delete/"+vaoucherid+""
    swal("Poof! Your imaginary file has been deleted!", {
      icon: "success",
    });
  } else {
    swal("Your imaginary file is safe!");
  }
});
});
  </script>
  <script>
    @if (Session::has('success'))
    toastr.success("{{ Session::get('success') }}")
    @endif
  </script>

</body>

</html>
