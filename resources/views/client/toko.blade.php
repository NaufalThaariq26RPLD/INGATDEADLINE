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
                <div class="col-lg-8">
                    <div class="page-title">
                        <h1 class="title">Toko</h1>
                        <ul class="breadcrumbs-link">
                            <li><a href="/dashboard" class="link-dark">Home</a></li>
                            <li class="active">Toko</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== End Hero Section ======-->   
  <!--====== Start Listing Section ======-->
  <section class="listing-grid-area pt-120 pb-90">
    <div class="" style="padding-left: 20px; padding-right: 20px; justify-content: center;">
        <div class="row">
            <div class="col-lg-4">
                <div class="sidebar-widget-area">
                    <div class="widget search-listing-widget mb-30 wow fadeInUp">
                        <h4 class="widget-title">Filter Cari</h4>
                        <form action="/toko">
                            <div class="search-form">
                                <div class="form_group">
                                    <input type="search" class="form_control" placeholder="Cari Disini" name="search" value="{{ request('search') }}">
                                    <i class="ti-search"></i>
                                </div>
                                <div class="form_group">
                                    <select class="wide" name="kategori">
                                        <option data-dsplay="Category" value="">Kategori</option>
                                        @foreach ($kategori as $kategoris)
                                            
                                        <option value="{{ $kategoris->id }}" {{ (request('kategori') == $kategoris->id )? 'selected' : '' }}>{{ $kategoris->Kategori }}</option>
                                        @endforeach

                                    </select>
                                </div>
                                {{-- <div class="form_group">
                                    <select class="wide" name="toko">
                                        <option data-dsplay="Category">Toko</option>
                                        @foreach ($filter_toko as $toko)
                                            
                                        <option value="{{ $toko->id }}">{{ $toko->nama_toko }}</option>
                                        @endforeach
                                        
                                    </select>
                                </div> --}}
                                
                            </div>
                            <div class="form_group">
<<<<<<< HEAD
                                <button type="submit" class="main-btn icon-btn">Cari disini</button>
=======
                                <a href="/products" class="main-btn icon-btn">Search Now</a>
>>>>>>> 75b9bedc9d3a91f630ac7608dd2dddf8fd02577b
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>

            <div class="col-lg-8">
                <div class="listing-search-filter mb-40">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="filter-left d-flex align-items-center">
                   
                            </div>
                        </div>
                      
                    </div>
                </div>
                <div class="listing-grid-wrapper">
                    <div class="row">
                        @if (request('search'))


                            @if($data->count() <  1)
                                <h1 style="text-transform: uppercase; text-align: center">{{ request('search') }} YANG KAMU CARI BELOM DITEMUKAN</h1>
                            @endif
                            
                        @endif
                        @foreach ($data as $datas)
                            

                        <div class="col-md-4 col-sm-12">
                            <div class="listing-item listing-grid-item-two mb-30 wow fadeInUp">
                                <div class="listing-thumbnail">
                                    <img src="{{ asset('logotoko/'.$datas->logo) }}" alt="Client Image" style="width: 100%; height: 300px; object-fit: cover">
                                    <span class="featured-btn">Pakaian</span>
                                   
                                </div>
                                <div class="listing-content">
                                    <h3 class="title">{{ $datas->nama_toko }}</a></h3>
                                    <p>Platform Belanja Pakaian Online</p>
                                    <div class="listing-meta">
                                        <ul>
                                        <form action="/products">
                                            <button name="toko" type="submit" class="btn btn-outline-warning" value="{{ $datas->id }}">Lihat</button>
                                        </form>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach




                    </div>

                    {{ $data->links('vendor.pagination.bootstrap-4') }}

                </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== End Listing Section ======-->

@endsection