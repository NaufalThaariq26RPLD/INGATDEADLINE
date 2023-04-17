@extends('client.layout.main')


@section('container')
<!--====== Start Preloader ======-->
<div class="preloader">
    <div class="loader">
        <img src=" {{ asset('images/loader.png') }}" alt="loader">
    </div>
</div>
<!--====== End Preloader ======-->
<!-- HEADER -->
<br>
<div class="container pt-50">
    <div class="section-title text-center mb-25 wow fadeInUp">
      @php
      DB:: table('vouchers')
      ->where('id', $data->id)
      ->increment('views');
      @endphp
      <span class="sub-title">KODE VOUCHER</span>
      <h2>{{ $data->tokos->nama_toko }}</h2>
  </div>
  <div class="card mb-5 mt-5" style="max-width: 2000px;">
      <div class="row ">
        <div class="col-md-4">
          <img src="{{ asset('gambarvoucher/'.$data->gambar) }}" class="img-fluid rounded-start" style="margin-top:50px;" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <a href="/products"  class="btn btn-outline-danger" style="float: right;">KEMBALI</a>
            <br/>
            <h5 class="card-title text-dark">{{ $data->nama_voucher }}</h5>
            <span class="badge bg-warning text-dark">Masuk Tanggal {{ \Carbon\Carbon::parse($data->created_at)->format('d F')  }}</span>
            <span class="badge bg-warning text-dark">Kadaluwarsa Tanggal {{ \Carbon\Carbon::parse($data->masa_kadaluarsa)->format('d F')  }}</span>
            <p class="card-text">{{ $data->deskripsi }}</p><br/>
            <div class="">
              <div class="d-flex justify-content-between">
                @php
                App\Models\Voucher::where('id',$data->id)->update ([ 'terlaris' => $data->terlaris + 1 ]);
                @endphp
              <div class="d-flex">
                  <input type="text" value="{{ $data->kode }}" class="form-control-sm mb-2" id="code_value" style="height: 45px; margin-right: 10px;" readonly>
                  <button type="button" class="btn btn-danger"  style="margin-left:-3px ; height: 45px;" id="salin_btn" >Salin Kode</button>
                </div>
                  <div>
                    <a href="{{ $data->link }}" class="btn btn-outline-warning"  style="display: inline-block; ">PERGI KE TOKO</a>
                  </div>

              </div>
                </div>
                <hr>
{{-- 
                @php
                  $syarat = explode('|', $data->syarat);
                @endphp --}}
            <div class="col-md-8">
              <div class="card-body">
                <p class="card-title">Syarat dan Ketentuan :</p>
                <li>{{ $data->syarat }}</li>
{{-- 
                @foreach ($syarat as $sarat)
                  <li>{{ $sarat }}</li>
                @endforeach --}}
              </div>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>

    <!--====== Start Testimonial Section ======-->
    <section class="team-area pt-115 pb-85">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center mb-50 wow fadeInUp">
                        <span class="sub-title">REKOMENDASI</span>
                        <h3>Voucher Produk {{ $data->tokos->nama_toko }} Lainnya</h3>
                    </div>
                </div>
            </div>
            <div class="place-slider-one wow fadeInDown" >


                @foreach ($data2 as $data2)
                    
                <div class="card border-0 shadow place-item place-item-one" style="margin-bottom: 30px;">
                    
                    <div class="card-body p-5 p-lg-3 shadow"  style=" height: 330px;">
                      <div class="row gy-7">
                
                    <img class="card-img-top" src="{{ asset('gambarvoucher/'.$data2->gambar) }}"  alt="Card image cap" style="height: 250px; object-fit: cover;">
                    <div class="card-body">
                      <center><a href="/kode/{{ $data2->id }}">{{ $data2->nama_voucher }}</a></center>
                    </div>
                    </div>
                    </div>
                    </div>
                    

                @endforeach
                    
                   
            </div>
         </div>
     </section>



@endsection