@extends('client.layout.main')


@section('container')
@include('client.partials.hero')
@include('client.partials.category')
@if (request('search'))
      <!--====== Start Listing Section ======-->
  <section class="listing-grid-area pt-115" id="d">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center mb-75 wow fadeInUp" style="margin-top: 40px">
                    @if($searchs->count() > 0)
                    <h2 style="text-transform: uppercase">"{{ request('search') }}" YANG KAMU CARI</h2>

                    @else
                    <img src="{{ asset('img/search-icon1.png') }}" alt="" style="width:300px; object-fit: contain; margin-bottom: 20px;">

                        <h2 style="text-transform: uppercase; font-family: 'Helvetica', 'serif';">Uupssss...!! "{{ request('search') }}" Yang Kamu Cari Tidak Ada</h2>
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($searchs as $search)

            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="listing-item listing-grid-one mb-45 wow fadeInUp" dta-wow-delay="10ms">
                    <div class="listing-thumbnail">
                        <img src=" {{ asset('gambarvoucher/'.$search->gambar) }}" alt="Listing Image" style="width: 100% ; height: 500px; object-fit: cover">
                        <div class="thumbnail-meta d-flex justify-content-between align-items-center">
                            <div class="meta-icon-title d-flex align-items-center">
                                <div class="icon">
                                    <i class="fa-solid fa-store"></i>
                                </div>
                                <div class="title">
                                    <h6>{{ $search->tokos->nama_toko }}</h6>
                                </div>
                            </div>
                            </div>
                    </div>
                    <div class="listing-content">
                        <h3 class="title">{{ $search->nama_voucher }}</h3>
                        <span class="text-justify mb-3" style="  display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 4; overflow: hidden;">{{ $search->deskripsi }}</span>
                        <span class="text-justify mb-3" style="  display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 4; overflow: hidden;color:red;">Tanggal Kadaluarsa:{{ \Carbon\Carbon::parse($search->masa_kadaluarsa)->isoFormat('MMM Do YYYY')}}</span>
                        <div class="listing-meta">

                            <center> <a href="/kode/{{ $search->id }}"
                                class="btn btn-outline-warning btn-block" style="display: block">Lihat Voucher</a></center>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            {{ $searchs->links('vendor.pagination.bootstrap-4') }}



        </div>
    </div>
</section>

<!--====== End Place Section ======-->
@endif



@include('client.partials.listing')
@include('client.partials.section')
@include('client.partials.client')

@endsection
