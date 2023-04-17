@extends('client.layout.main')

@section('container')
    <!--====== Start Preloader ======-->
    <div class="preloader">
        <div class="loader">
            <img src=" {{ asset('images/loader.png') }}" alt="loader">
        </div>
    </div>
    <!--====== End Preloader ======-->

    <!--====== Start Hero Section ======-->
    <section class="hero-area">
        <div class="breadcrumbs-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-title">
                            <h1 class="title">SEMUA PRODUK </h1>
                            <ul class="breadcrumbs-link">
                                <li><a href="/dashboard" class="link-dark">Home</a></li>
                                <li class="active">Produk</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><br>
    <!--====== End Hero Section ======-->
    <!--====== Start Products Section ======-->
    <section class="products-area pt-50 pb-50">
        <div class="container">

            <div class="row height d-flex justify-content-center align-items-center">

                <div class="col-md-8">

                    <form action="/products" class="search mb-5">
                        <i class="fa fa-search"></i>
                        <input type="text" name="search" class="form-control" placeholder="Cari Voucher Apa?"
                            value="{{ request('search') }}">
                        <button type="submit" class="btn btn-warning text-light">Cari</button>
                    </form>

                </div>

            </div>

            <div class="products-filter mb-30">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-5">
                        <div class="sort-dropdown d-flex align-items-center">
                            <div class="show-text">

                            </div>

                        </div>
                    </div>
                    <div class="row">

                        @foreach ($data as $datas)
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                @php
                                $hitung = $datas->views + 1;    
                                App\Models\Toko::where('id',$datas->id)->update ([ 'views' => $hitung ]);
                                @endphp
                                <div class="listing-item listing-grid-one mb-45 wow fadeInUp" dta-wow-delay="20ms"
                                    style="height: 685px; overflow: hidden;">
                                    <div class="listing-thumbnail">
                                        <img src="{{ asset('gambarvoucher/' . $datas->gambar) }}" alt="Listing Image"
                                            style="width: 374px; height: 374px; object-fit: cover">

                                        <div class="thumbnail-meta d-flex justify-content-between align-items-center">
                                            <div class="meta-icon-title d-flex align-items-center">
                                                <div class="icon">
                                                    <img src="{{ asset('images/uniqlo.jpeg') }}" alt="">
                                                </div>
                                                <div class="title">
                                                    <h6>{{ $datas->tokos->nama_toko }}</h6>
                                                </div>
                                            </div>
                                            <span class="status st-close">DISKON 25%</span>
                                        </div>
                                    </div>
                                    <div class="listing-content">
                                        <h3 class="title">
                                            {{ $datas->nama_voucher }}</h3>
                                        <span class="badge bg-danger">Kadaluwarsa Tanggal
                                            {{ \Carbon\Carbon::parse($datas->masa_kadaluarsa)->format('d F') }}</span>
                                        <span class="price"
                                            style="  display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 3; overflow: hidden;">{{ $datas->deskripsi }}</span><br>
                                        <center> <a href="/kode/{{ $datas->id }}"
                                                class="btn btn-outline-warning">LIHAT</a></center>

                                    </div>
                                </div>
                            </div>
                        @endforeach

                        {{ $data->links('vendor.pagination.bootstrap-4') }}


                    </div>


                </div>


            </div>
    </section>

    <!--====== End Listing Section ======-->

    <!--====== End Products Section ======-->
@endsection
