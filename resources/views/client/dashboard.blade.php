@extends('client.layout.main')


@section('container')
@include('client.partials.hero')
@include('client.partials.category')
@if ($search !== null)
      <!--====== Start Listing Section ======-->
  <section class="listing-grid-area pt-115 pb-75">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center mb-75 wow fadeInUp">
                    <h2>SENG MBOK GOLEKI</h2>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach ($search as $search)
                
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="listing-item listing-grid-one mb-45 wow fadeInUp" dta-wow-delay="10ms">
                    <div class="listing-thumbnail">
                        <img src=" {{ asset('admin/img/icon2/'.$search->gambar) }}" alt="Listing Image">
                        <div class="thumbnail-meta d-flex justify-content-between align-items-center">
                            <div class="meta-icon-title d-flex align-items-center">
                                <div class="icon">
                                    <i class="fa-solid fa-store"></i>
                                </div>
                                <div class="title">
                                    <h6>SHOPEE</h6>
                                </div>
                            </div>
                            <span class="status st-open "><a href="https://shopee.co.id/?gclid=Cj0KCQiAxbefBhDfARIsAL4XLRoZyXSdV310ghlCY9mmjT-NG3rDlgJ8D_ehupU2hKUsIbDlePlCjBYaAhcLEALw_wcB" target="_blank" >Buka</a></sp>                                </div>
                    </div>
                    <div class="listing-content">
                        <h3 class="title"><a href="listing-details-1.html">{{ $search->nama_voucher }}</a></h3>
                        <div class="ratings">
                            <ul class="ratings ratings-three">
                                <li class="star"><i class="flaticon-star-1"></i></li>
                                <li class="star"><i class="flaticon-star-1"></i></li>
                                <li class="star"><i class="flaticon-star-1"></i></li>
                                <li class="star"><i class="flaticon-star-1"></i></li>
                                <li class="star"><i class="flaticon-star-1"></i></li>
                                <li><span><a href="#">(02 Reviews)</a></span></li>
                            </ul>
                        </div>
                        <span class="text-justify mb-3" style="  display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 4; overflow: hidden;">{{ $search->keterangan }}</span>
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