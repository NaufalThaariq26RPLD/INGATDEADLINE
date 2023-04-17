@extends('client.layout.main')


@section('container')
@include('client.partials.hero')
@include('client.partials.category')
@if (request('search'))
      <!--====== Start Listing Section ======-->
  <section class="listing-grid-area pt-115 pb-75" id="d">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center mb-75 wow fadeInUp" style="margin-top: 40px">
                    @if($search->count() > 0)
                    <h2 style="text-transform: uppercase">{{ request('search') }} YANG KAMU CARI</h2>
                    
                    @else
                        <h2 style="text-transform: uppercase">{{ request('search') }} TIDAK ADA</h2>
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($search as $search)
                
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
                            <span class="status st-open "><a href="https://shopee.co.id/?gclid=Cj0KCQiAxbefBhDfARIsAL4XLRoZyXSdV310ghlCY9mmjT-NG3rDlgJ8D_ehupU2hKUsIbDlePlCjBYaAhcLEALw_wcB" target="_blank" >Buka</a></sp>                                </div>
                    </div>
                    <div class="listing-content">
                        <h3 class="title">{{ $search->nama_voucher }}</h3>
                        <span class="text-justify mb-3" style="  display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 4; overflow: hidden;">{{ $search->deskripsi }}</span>
                        <div class="listing-meta">
                            <ul>
                                <li><span>GETVOUCHER</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach




        </div>
    </div>
</section>

<!--====== End Place Section ======-->    
@endif



@include('client.partials.listing')
@include('client.partials.section')
@include('client.partials.client')

@endsection