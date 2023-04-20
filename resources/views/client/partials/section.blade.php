   <!--====== Start Download Section ======-->
   <section class="download-app">
    <div class="download-wrapper-one pt-115">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="app-img wow fadeInLeft">
                        <img src=" {{ asset('images/app-1.png') }}" alt="App Image">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="download-content-box download-content-box-one">
                        <div class="section-title section-title-left mb-25 wow fadeInUp">
                            <h2 class="" style="">BAGAIMANA GETVOUCHER BEKERJA?</h2>
                        </div>
                        <div>
                            {{-- <p style="line-height:10%">A. Cari diskon atau cashback berdasarkan toko atau kategori </p>
                            <p style="line-height:10%">B. Klik dan cari diskon sesuai kebutuhan kamu </p>
                            <p style="line-height:10%">C. Segera gunakan voucher tersebut </p> --}}
                            <img src="{{ asset('img/bg2.png') }}" alt="" style="width: 700px; object-fit: contain">

                        </div>
                        <div class="counter-area pt-120">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-ms-12">
                                    <div class="counter-item counter-item-one wow fadeInUp">
                                        <div class="info">
                                            <h4>TOTAL <br> VOUCHERRRRRRRRRRRRR</h4>
                                            <h3><span class="count">{{ $total_voucher->count() }}</span> +</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-ms-12">
                                    <div class="counter-item counter-item-one wow fadeInUp">
                                        <div class="info">
                                            <h4>VOUCHER YANG DIGUNAKAN</h4>
                                            <h3><span class="count">{{ $voucher_digunakan }}</span> +</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-ms-12">
                                    <div class="counter-item counter-item-one wow fadeInUp">
                                        <div class="info">
                                            <h4>JUMLAH USER AKTIF</h4>
                                            <h3><span class="count">{{ $user_aktif->count() }}</span> +</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ====== End Download Section ====== -->
