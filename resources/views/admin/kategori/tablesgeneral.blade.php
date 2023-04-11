@extends('admin.layout.main')


@section('container')
    <main id="main" class="main">

      <div class="pagetitle">
        <h1>{{ $title }}</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Halaman utama</a></li>
            <li class="breadcrumb-item active">Kategori</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->
  
      <section class="section">
        <div class="row">
          <div class="col-lg-6  w-100">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Voucher baju dalam proses</h5>
  
                <!-- Default Table -->
                <table class="table table-borderless datatable">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Voucher</th>
                      <th scope="col">Nama voucher</th>
                      <th scope="col">Keterangan</th>
                      <th scope="col">Status</th>
                      <th scope="col">Mulai tanggal</th>
                      <th scope="col">Berakhir tanggal</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <th scope="row"><img src=" {{ asset('admin/img/icon2/p.jpeg') }}" width="60%" height="60%" alt=""></th>
                      <td>Kemeja</td>
                      <td>Buruan serbu Voucher 30% dari Uniqlo, Buruan kepoin segera.</td>
                      <td><span class="badge text-bg-warning">masih diproses</span></td>
                      <td>12-01-2022</td>
                      <td>01-02-2022</td>
                    </tr>
                  </tbody>
                </table>
                <!-- End Default Table Example -->
              </div>
            </div>
  
          </div>
        </div>

        <div class="row">

          <div class="col-lg-6  w-100">
            <div class="card">
              <div class="card-body"> 
                <h5 class="card-title">Kumpulan Voucher Baju</h5>
  
                <!-- Default Table -->
                <table class="table table-borderless datatable">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Voucher</th>
                      <th scope="col">Nama voucher</th>
                      <th scope="col">keterangan</th>
                      <th scope="col">tanggal mulai</th>
                      <th scope="col">tanggal berakhir</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <th scope="row"><img src=" {{ asset('admin/img/icon2/o.jpg') }}" width="30%" height="30%" alt=""></th>
                      <td> Kemeja Katun </td>
                      <td>yuk dapatkan voucher 30% dari Uniqlo spesial Ramadhan, Buruan sebelum tenggat.</td>
                      <td>30-04-2022</td>
                      <td>06-05-2022</td>
                    </tr>
                  </tbody>
                </table>
                <!-- End Default Table Example -->
              </div>
            </div>
  
          </div>
        </div>
      </section>
  
    </main><!-- End #main -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

@endsection