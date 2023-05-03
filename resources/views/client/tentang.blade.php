@extends('client.layout.main')

@section('container')
      <!--====== Start Preloader ======-->
      <div class="preloader" >
        <div class="loader">
            <img src=" {{ asset('images/loader.png') }}" alt="loader">
        </div>
    </div>

    <!--====== Start Hero Section ======-->
    <section class="hero-area">
        <div class="breadcrumbs-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="page-title">
                            <h1 class="title">Tentang Kami</h1>
                            <ul class="breadcrumbs-link">
                                <li><a href="/dashboard" class="link-dark">Beranda</a></li>
                                <li class="active">Tentang Kami</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End Hero Section ======-->
    <!--====== Start Features Section ======-->
    <section class="features-area">
        <div class="features-wrapper-three pt-110">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-title text-center mb-60 wow fadeInUp">
                            <span class="sub-title">KENAPA HARUS MENGGUNAKAN</span>
                            <h2>GETVOUCHER</h2>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="features-item features-item-two text-center mb-40 wow fadeInUp" style="height: 350px;" data-wow-delay="10ms">
                            <div class="icon">
                                <img src=" {{ asset('images/icon/icon1.png') }}" alt="">
                            </div>
                            <div class="content">
                                <h3 class="title">Penawaran</h3>
                                <p>Di GETVOUCHER terdapat beragam penawaran menarik yang dapat anda dapatkan disini </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="features-item features-item-two text-center mb-40 wow fadeInDown" style="height: 350px;" data-wow-delay="20ms">
                            <div class="icon">
                                <img src=" {{ asset('images/icon/icon2.png') }}" alt="">
                            </div>
                            <div class="content">
                                <h3 class="title">Beragam Voucher</h3>
                                <p>Disini terdapat beragam voucher yang tersedia dari berbagai toko dari Mancanegara</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="features-item features-item-two text-center mb-40 wow fadeInUp" style="height: 350px;" data-wow-delay="30ms">
                            <div class="icon">
                                <img src=" {{ asset('images/icon/icon3.png') }}" alt="">
                            </div>
                            <div class="content">
                                <h3 class="title">Hemat</h3>
                                <p>Adanya GETVOUCHER anda bisa berhemat dalam pengeluaran biaya belanja</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="features-item features-item-two text-center mb-40 wow fadeInDown" style="height: 350px;" data-wow-delay="40ms">
                            <div class="icon">
                                <img src="{{ asset('images/icon/icon4.png') }}" alt="">
                            </div>
                            <div class="content">
                                <h3 class="title">Bekerja Sama</h3>
                                <p>GETVOUCHER telah bekerja sama dengan berbagai toko dari Mancanegara</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--====== End Features Section ======-->
    <!--====== Start Features Section ======-->
    <section class="features-area"  style="padding-top: 10px">
        <div class="features-wrapper-four  ">
            <div class="container">
                <div class="row">
                    {{-- <div class="col-lg-6">
                        <div class="features-img wow fadeInLeft">
                            <img src=" {{ asset('images/icon/GETVOUCHER.png') }}" alt="Features Image">
                        </div>
                    </div>   --}}
                    {{-- <div class="col-lg-6">
                        <div class="features-content-box features-content-box-one">
                            <div class="section-title section-title-left mb-30 wow fadeInUp">
                                <span class="sub-title">CARA MENJADI ANGGOTA    </span>
                                <h2>GETVOUCHER</h2>
                            </div>
                            <ul class="features-list-one">
                                <li class="list-item wow fadeInUp" data-wow-delay="10ms">
                                    <div class="icon">
                                        <img src=" {{ asset('images/icon/one.png') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <h3 class="title">Daftar menjadi anggota</h3>
                                        <p>Klik LOGIN setelah masuk ke GETVOUCHER dan lengkapi data yang diminta.</p>
                                    </div>
                                </li>
                                <li class="list-item wow fadeInUp" data-wow-delay="20ms">
                                    <div class="icon">
                                        <img src=" {{ asset('images/icon/two.png') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <h3 class="title">Verifikasi akun GETVOUCHER</h3>
                                        <p>Lakukan verifikasi akun dengan cara melengkapi data diri di GETVOUCHER.</p>
                                    </div>
                                </li>
                                <li class="list-item wow fadeInUp" data-wow-delay="30ms">
                                    <div class="icon">
                                        <img src=" {{ asset('images/icon/three.png') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <h3 class="title">Tambah saldo GETVOUCHER</h3>
                                        <p>Tentukan metode pembayaran dan nominal , kemudian bayar sesuai petunjuk.</p>
                                    </div>
                                </li>
                                <li class="list-item wow fadeInUp" data-wow-delay="30ms">
                                    <div class="icon">
                                        <img src=" {{ asset('images/icon/four.png') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <h3 class="title">Siap untuk digunakan</h3>
                                        <p>Beli voucher digital seperti voucher game dan lainnya untuk pelanggan anda dan nikmati keuntungannya</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div> --}}
                    <img src="{{ asset('img/bg7.png') }}" alt="" style="width: 80%; object-fit: contain;  border-radius: 50px; margin-inline: auto; ">

                </div>
            </div>
        </div>
    </section>
    <!--====== End Features Section ======-->
    <!--====== Start Testimonial Section ======-->
    <!--====== Start Testimonial Section ======-->
    <section class="team-area" style="padding-top: 10px">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center mb-50 wow fadeInUp">
                        <span class="sub-title">Ulasan Pengguna</span>
                        <h2>GETVOUCHER</h2>
                    </div>
                </div>
            </div>
            <div class="place-slider-one wow fadeInDown" >
                <div class="card border-0 shadow place-item place-item-one" style="margin-bottom: 30px;">
                    
                    <div class="card-body p-5 p-lg-3 shadow"  style=" height: 400px;">
                      <div class="row gy-7">
                
                    <img class="card-img-top" src=" {{ asset('images/listing/jin.jpg') }}"  alt="Card image cap" style="height: 180px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">Calista Dwi</h5>
                        <ul class="ratings ratings-five">
                            <li><span class="av-rate">4.5</span></li>
                            <li class="star"><i class="flaticon-star-1"></i></li>
                            <li class="star"><i class="flaticon-star-1"></i></li>
                            <li class="star"><i class="flaticon-star-1"></i></li>
                            <li class="star"><i class="flaticon-star-1"></i></li>
                            <li class="star"><i class="flaticon-star-1"></i></li>
                        </ul>
                    <p class="card-text">Setelah saya menggunakan voucher dari GETVOUCHER, saya bisa menabung dan berhemat.</p>
                    
                </div>
                    </div>
                    </div>
                    </div>
                    
                    <div class="card border-0 shadow place-item place-item-one">
                    <div class="card-body p-5 p-lg-3 shadow"  style=" height: 400px;" >
                        <div class="row gy-7">
                        
                            <img class="card-img-top" src=" {{ asset('images/listing/y.jpg') }}"   alt="Card image cap" style="height: 180px; object-fit: cover;"> 
                            <div class="card-body">
                                <h5 class="card-title">Dwi Oktaviani</h5>
                                <ul class="ratings ratings-four">
                                    <li><span class="av-rate">4.5</span></li>
                                    <li class="star"><i class="flaticon-star-1"></i></li>
                                    <li class="star"><i class="flaticon-star-1"></i></li>
                                    <li class="star"><i class="flaticon-star-1"></i></li>
                                    <li class="star"><i class="flaticon-star-1"></i></li>
                                    <li class="star"><i class="flaticon-star-1"></i></li>
                                </ul>
                            <p class="card-text">nyesel banget saya tidak menggunakan GETVOUCHER dari dulu, untuk kalian buruan download GETVOUCHER.</p>
                            </div>
                    </div>
                    </div>
                    </div>
                        
                    <div class="card border-0 shadow place-item place-item-one">
                    <div class="card-body p-5 p-lg-3 shadow"  style=" height: 400px;" >
                        <div class="row gy-7">
                       
                            <img class="card-img-top" src=" {{ asset('images/listing/hiya.jpg') }}"   alt="Card image cap" style="height: 180px; object-fit: cover;"> 
                            <div class="card-body">
                                <h5 class="card-title">Callista Handayani</h5>
                                <ul class="ratings ratings-three">
                                    <li><span class="av-rate">4.5</span></li>
                                    <li class="star"><i class="flaticon-star-1"></i></li>
                                    <li class="star"><i class="flaticon-star-1"></i></li>
                                    <li class="star"><i class="flaticon-star-1"></i></li>
                                    <li class="star"><i class="flaticon-star-1"></i></li>
                                    <li class="star"><i class="flaticon-star-1"></i></li>
                                </ul>
                            <p class="card-text">Dengan menggunakan voucher GETVOUCHER, sya tidak takut belanja banyak.</p>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="card border-0 shadow place-item place-item-one">
                        <div class="card-body p-5 p-lg-3 shadow"  style=" height: 400px;" >
                          <div class="row gy-7">
                    
                        <img class="card-img-top" src=" {{ asset('images/listing/ju.jpg') }}"  alt="Card image cap" style="height: 180px; object-fit: cover;"> 
                        <div class="card-body">
                            <h5 class="card-title">Hyung Jungkook</h5>
                            <ul class="ratings ratings-five">
                                <li><span class="av-rate">4.5</span></li>
                                <li class="star"><i class="flaticon-star-1"></i></li>
                                <li class="star"><i class="flaticon-star-1"></i></li>
                                <li class="star"><i class="flaticon-star-1"></i></li>
                                <li class="star"><i class="flaticon-star-1"></i></li>
                                <li class="star"><i class="flaticon-star-1"></i></li>
                            </ul>
                        <p class="card-text">saya senang mendapatkan diskon dari GETVOUCHER, untuk kalian buruan serbu keberuntungan anda.</p>
                        </div>
                    </div>
                        </div>
                        </div>

                        <div class="card border-0 shadow place-item place-item-one" style="margin-bottom: 30px;">
                    
                            <div class="card-body p-5 p-lg-3 shadow"  style=" height: 400px;">
                              <div class="row gy-7">
                        
                            <img class="card-img-top" src=" {{ asset('images/listing/jin.jpg') }}"  alt="Card image cap" style="height: 180px; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="card-title">Calista Dwi</h5>
                                <ul class="ratings ratings-five">
                                    <li><span class="av-rate">4.5</span></li>
                                    <li class="star"><i class="flaticon-star-1"></i></li>
                                    <li class="star"><i class="flaticon-star-1"></i></li>
                                    <li class="star"><i class="flaticon-star-1"></i></li>
                                    <li class="star"><i class="flaticon-star-1"></i></li>
                                    <li class="star"><i class="flaticon-star-1"></i></li>
                                </ul>
                            <p class="card-text">Setelah saya menggunakan voucher dari GETVOUCHER, saya bisa menabung dan berhemat.</p>
                            
                        </div>
                            </div>
                            </div>
                            </div>
                            
                            <div class="card border-0 shadow place-item place-item-one">
                            <div class="card-body p-5 p-lg-3 shadow"  style=" height: 400px;" >
                                <div class="row gy-7">
                                
                                    <img class="card-img-top" src=" {{ asset('images/listing/y.jpg') }}"   alt="Card image cap" style="height: 180px; object-fit: cover;"> 
                                    <div class="card-body">
                                        <h5 class="card-title">Dwi Oktaviani</h5>
                                        <ul class="ratings ratings-four">
                                            <li><span class="av-rate">4.5</span></li>
                                            <li class="star"><i class="flaticon-star-1"></i></li>
                                            <li class="star"><i class="flaticon-star-1"></i></li>
                                            <li class="star"><i class="flaticon-star-1"></i></li>
                                            <li class="star"><i class="flaticon-star-1"></i></li>
                                            <li class="star"><i class="flaticon-star-1"></i></li>
                                        </ul>
                                    <p class="card-text">nyesel banget saya tidak menggunakan GETVOUCHER dari dulu, untuk kalian buruan download GETVOUCHER.</p>
                                    </div>
                            </div>
                            </div>
                            </div>
                                
                            <div class="card border-0 shadow place-item place-item-one">
                            <div class="card-body p-5 p-lg-3 shadow"  style=" height: 400px;" >
                                <div class="row gy-7">
                               
                                    <img class="card-img-top" src=" {{ asset('images/listing/hiya.jpg') }}"   alt="Card image cap" style="height: 180px; object-fit: cover;"> 
                                    <div class="card-body">
                                        <h5 class="card-title">Callista Handayani</h5>
                                        <ul class="ratings ratings-three">
                                            <li><span class="av-rate">4.5</span></li>
                                            <li class="star"><i class="flaticon-star-1"></i></li>
                                            <li class="star"><i class="flaticon-star-1"></i></li>
                                            <li class="star"><i class="flaticon-star-1"></i></li>
                                            <li class="star"><i class="flaticon-star-1"></i></li>
                                            <li class="star"><i class="flaticon-star-1"></i></li>
                                        </ul>
                                    <p class="card-text">Dengan menggunakan voucher GETVOUCHER, sya tidak takut belanja banyak.</p>
                                    </div>
                                </div>
                                </div>
                            </div>
    
                            <div class="card border-0 shadow place-item place-item-one">
                                <div class="card-body p-5 p-lg-3 shadow"  style=" height: 400px;" >
                                  <div class="row gy-7">
                            
                                <img class="card-img-top" src=" {{ asset('images/listing/ju.jpg') }}"  alt="Card image cap" style="height: 180px; object-fit: cover;"> 
                                <div class="card-body">
                                    <h5 class="card-title">Hyung Jungkook</h5>
                                    <ul class="ratings ratings-five">
                                        <li><span class="av-rate">4.5</span></li>
                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                        <li class="star"><i class="flaticon-star-1"></i></li>
                                    </ul>
                                <p class="card-text">saya senang mendapatkan diskon dari GETVOUCHER, untuk kalian buruan serbu keberuntungan anda.</p>
                                </div>
                            </div>
                                </div>
                                </div>
            </div>
         </div>
     </section>

    <!--====== Start Team Section ======-->
    <section class="team-area  pb-85"  style="padding-top: 10px">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center mb-30 wow fadeInUp">
                        <span class="sub-title">GOSIP.COM</span>
                        <h2>TEAM</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="team-item team-item-one mb-30 wow fadeInUp">
                        <div class="team-img">
                            <img src="{{ asset('images/icon/tor.jpg') }}" height="100%" width="100%" alt="Team Image">
                        </div>
                        <div class="team-info text-center">
                            <h3 class="title">NAUFAL THAARIQ P.K. </h3>
                            <span class="position">KETUA</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="team-item team-item-one mb-30 wow fadeInDown" data-wow-delay="20ms">
                        <div class="team-img">
                            <img src=" {{ asset('images/icon/vi.jpg') }}" height="100%" width="140%" alt="Team Image">

                        </div>
                        <div class="team-info text-center">
                            <h3 class="title">M. CHRISTIANO O.B.</h3>
                            <span class="position">ANGGOTA</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="team-item team-item-one mb-30 wow fadeInDown" data-wow-delay="20ms">
                        <div class="team-img">
                            <img src=" {{ asset('images/icon/ti.jpg') }}" height="90%" width="99%" alt="Team Image">
                        </div>
                        <div class="team-info text-center">
                            <h3 class="title">TITAN PASYAHRANI H.</h3>
                            <span class="position">ANGGOTA</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="team-item team-item-one mb-30 wow fadeInUp">
                        <div class="team-img">
                            <img src=" {{ asset('images/icon/yu.jpg') }}" height="100%" width="100%" alt="Team Image">
                        </div>
                        <div class="team-info text-center">
                            <h3 class="title">RAHAYU DWI P.</h3>
                            <span class="position">ANGGOTA</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End Team Section ======-->
@endsection