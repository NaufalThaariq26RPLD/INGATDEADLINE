<!--====== Start Listing Section ======-->
<section class="listing-grid-area pt-115 pb-75">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center mb-75 wow fadeInUp">
                    <span class="sub-title">VOUCHER TERLARIS</span>
                    <h2>REKOMENDASI BUAT KAMU</h2>
                </div>
            </div>
        </div>
        <div class="row">

            @foreach ($latest as $latests)
                @php
                    $toko = App\Models\Toko::where('nama_toko',$latests->toko)->first();
                @endphp
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="listing-item listing-grid-one mb-45 wow fadeInUp" dta-wow-delay="10ms">
                    <div class="listing-thumbnail">
                        <img src=" {{ asset('gambarvoucher/'.$latests->gambar) }}" alt="Listing Image" style="width: 100% ; height: 500px; object-fit: cover">
                        <span class="featured-btn">Terlaris</span>
                        <div class="thumbnail-meta d-flex justify-content-between align-items-center">
                            <div class="meta-icon-title d-flex align-items-center">
                                <div class="icon">
                                    <i class="fa-solid fa-store"></i>
                                </div>
                                <div class="title">
                                    <h6>{{ $latests->tokos->nama_toko }}</h6>
                                </div>
                            </div>
                            @if ($toko !== null)                                
                            <span class="status st-open "><a href="/products?toko={{ $toko->id }}" class="link-dark" style="text-decoration: none">Buka</a></span>
                            @endif

                        </div>
                    </div>
                    <div class="listing-content">
                        <h3 class="title">{{ $latests->nama_voucher }}</h3>
                        <span class="text-justify mb-3" style="  display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 4; overflow: hidden;">{{ $latests->deskripsi }}</span>
                        <div class="listing-meta">
                            <center> <a href="/kode/{{ $latests->id }}"
                                class="btn btn-outline-warning btn-block" style="display: block">LIHAT</a></center>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            {{ $latest->links('vendor.pagination.bootstrap-4') }}

        </div>
    </div>
</section>

<!--====== End Place Section ======-->